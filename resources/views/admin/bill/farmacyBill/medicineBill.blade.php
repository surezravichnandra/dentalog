@extends('admin.layouts.adminapp')
@section('Title', 'Hospital Management')
@section('body')
@include('admin.layouts.header')
@include('admin.layouts.sidebar')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Medicines Bill</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Invoice</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-3">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add Medicines</h3>
            </div>
            <form role="form" id="Medicinesinventory">
              {{ csrf_field() }}
              <div class="card-body" id="main_service">
                <div class="form-group">
                  <label for="InputPatient">Patient ID</label>
                  <input type="hidden" name="bill_number" id="bill_number" value="{{ $billnumber }}">
                  <input type="hidden" name="b_id" id="b_id" >
                  <input type="text" class="form-control" id="patientId" name="patientId"  placeholder="Patient ID">
                </div>
                <div class="form-group">
                  <label>Medicines</label>
                  <select class="form-control" style="width: 100%;" name='medicines' id="medicines" onchange="checkAmount();">
                    <option  value="">Select </option>
                    @foreach($stock as $stocks)
                    <option  value="{{ $stocks->id }}">{{ $stocks->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label >Quantity</label>
                  <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity" onkeyup="checkAmount();">
                </div>
                <div class="form-group">
                  <label >Discount(%)</label>
                  <input type="text" class="form-control" id="discount" name="discount" placeholder="Discount" onkeyup="checkAmount();">
                </div>
                <div class="form-group">
                  <label >GST(%)</label>
                  <input type="text" class="form-control" id="gst" name="gst" placeholder="GST" readonly="">
                </div>
                <div class="form-group">
                  <label >Cost</label>
                  <input type="text" class="form-control" id="cost" name="cost" placeholder="Cost" readonly="">
                </div>
                <div class="form-group">
                  <label >Total</label>
                  <input type="text" class="form-control" id="total" name="total" placeholder="Total" readonly="">
                </div>
              </div>
              <div class="card-footer">
                <button type="button" class="btn btn-primary" onclick="form_submit();">Add</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-9">
          <div class="invoice p-3 mb-3">
            <div class="row">
              <div class="col-12">
                <h4>
                  <small>Ref.By : <span id="ref_by"></span></small>
                  <small class="float-right">Date:{{ $carbon->format('d/m/Y') }}</small>
                </h4>
              </div>
            </div>
            <div class="row invoice-info">
              <div class="col-sm-3 invoice-col">

                <b>Invoice # : {{ $billnumber }}</b> <br>
                <b>Patient ID : </b><span id ="patient_id"></span>
              </div> 
              <div class="col-sm-4 invoice-info">
                <address>
                  <b>PatientName : </b><span id ="patientName"></span><br>
                  <b>Address : </b><span id="address"></span><br>
                </address>
              </div>
              <div class="col-sm-4 invoice-col">
                 <b>Mobile # : </b><span id="mobile_no"></span><br>
                <b> Email : </b><span id="email"></span>
              </div>
            </div>
            <div id="result">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
@section('jquery')
  <script>
    var _token ="{{ csrf_token() }}";
   // $('.select2').select2()

   //fetch Patiend Details
      $("#patientId").keyup(function(){
        $.ajax({
          url: "{{ url('/') }}/admin/medicineBill/create",
          type: 'GET',
          data: {patient_details:$("#patientId").val()},
          datatype: 'json',
          success: function(data) {
            $('#patient_id').html(data.patient_code);
            $('#b_id').val(data.b_id);
            $('#ref_by').html(data.doctor_name);
            $('#patientName').html(data.name);
            $('#address').html(data.address);
            $('#mobile_no').html(data.mobile);
            $('#email').html(data.email);
          }
        })
      });

      //add (+) total amount
      function checkAmount()
      {
 
        var quantity = $("#quantity").val();
        var discount = $("#discount").val();
        $.ajax({
          url: "{{ url('/') }}/admin/medicineBill/create",
          type: 'GET',
          data: { medicine_id:$("#medicines").val()},
          datatype: 'json',
          success: function(data) {
            if(quantity>data.qty){
              alert("Only Available for " + data.qty + " Quantity");
              $("#quantity").val(0)
              $("#total").val(0);
            }
            else
            {
              var total_quantity = parseFloat(quantity  * data.price);
              var discount_amount =  parseFloat(((total_quantity * discount)/100));
              var total = parseFloat(total_quantity) - parseFloat(discount_amount);
              $("#cost").val(data.price);
              $("#gst").val(data.tax);
              $("#total").val(Math.round(total));
            }
          }
        });
      }

      //form Submit
      function form_submit(){
        var p_id = $("#patientId").val();
        var m_id = $("#medicines").val();
        var quantity = $("#quantity").val();
        var discount = $("#discount").val();
        
        if(p_id=="" || p_id==0 || p_id == null ){
          alert("Enter Patient Code");
        }
        else if(m_id=="" || m_id==0 || m_id == null ){
          alert("Select Medicine Name");
        }
        else if(quantity=="" || quantity==0 || quantity == null ){
          alert("Enter Quantity");
        }
        else if(discount=="" || quantity == null ){
          alert("Enter Discount ");
        }
        else{
          $.ajax({
            url: "{{ url('/') }}/admin/medicineBill",
            type: 'POST',
            data: $("#Medicinesinventory").serialize(),
            datatype: 'json',
            success: function(data) {
              // $('#result').html(data);
              $('#main_service').find('input:text').slice(1, 6).val(0);
              $('#medicines').prop('selectedIndex',0);
              services_ajax();
            }
          });
        }
      }
      //Payment Services Ajax Details
      function services_ajax(){

        $.ajax({
           url:"{{ url('/') }}/admin/medicineBill/create",
          type: 'GET',
          data: {services_ajax:$("#patientId").val(),bill_number:$("#bill_number").val()},
          success: function(data) {
            $('#result').html(data);
            
          }
        });
      }

      function destroy(id) 
      {
        $.ajax({
          url: "{{ url('/') }}/admin/medicineBill/"+id,
          type: "post",
          data: { _method: 'delete',_token},
          success: function (data) {
            services_ajax();
          },
        });
      }


          //payment details added
      function update_value(){
        var link= $('#link').val();
        var b_id = $("#b_id").val();
        var bill_number = $("#bill_number").val();
        var patient_code=$('#patient_code').val();
         $.ajax({
            url: "{{ url('/') }}/admin/medicineBill/"+patient_code,
            type: 'post',
            data: { _method: 'PUT',_token,b_id:$("#b_id").val(),bill_number:bill_number,total_amount:$('#total_amount').val()},
            datatype: 'json',
            success: function(data) {
              window.location.href= "{{ url('/') }}/admin/medicineInvoice/"+data;
              // window.open(link+ "/" + bill_number,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=800,height=1000');
              // setTimeout(function(){ location.reload(); }, 1000);
            }
          });
        }
</script>
@endsection