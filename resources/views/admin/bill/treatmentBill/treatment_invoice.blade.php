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
            <h1>Treatment Invoice</h1>
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
    @foreach($datas as $data)
    @endforeach
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="invoice p-3 mb-3">
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fa fa-globe"></i> Hospital Management.
                    <small class="float-right">Date: {{ $carbon->format('d/m/Y') }}<br><b>Invoice # : {{ $data->bill_number }}</b></small>
                  </h4>
                </div>
              </div>
              <div class="row invoice-info">
                <div class="col-sm-2 invoice-col"></div>
                <div class="col-sm-4 invoice-col">
                  <address>
                    <strong> Dr.{{ $data->patient_detail->booking->doctor->name }} {{ $data->patient_detail->booking->doctor->degree }}.</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    Phone: (804) 123-5432<br>
                    Email: info@gmail.com
                  </address>
                </div>
                <div class="col-sm-4 invoice-col">
                  Patient Details:
                  <address>
                    <strong>{{ $data->patient_detail->name }}</strong><br>
                    {{ $data->patient_detail->address }}<br>
                    {{ $data->patient_detail->mobile }}<br>
                    {{ $data->patient_detail->email }}
                  </address>
                </div>
              </div>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Sl</th>
                      <th>Service</th>
                      <th>Discount Amount</th>
                      <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $sl=1; $discount_amount=0; @endphp

                    @foreach($datas as $data)
                      <tr>
                        <td>{{ $sl++ }}</td>
                        <td>{{ $data->service->services }}</td>
                        <td>{{ $data->discount_amount }}</td>
                        <td>{{ $data->total_amount }}</td>
                        @php $discount_amount += $data->discount_amount ;@endphp
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <p class="lead">Payment Methods:</p>
                  <img src="../../dist/img/credit/visa.png" alt="Visa">
                  <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
                  <img src="../../dist/img/credit/american-express.png" alt="American Express">
                  <img src="../../dist/img/credit/paypal2.png" alt="Paypal">
                </div>
                <div class="col-6">
                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th>Saving Amount:</th>
                        <td>₹ {{ $discount_amount }}</td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td>{{ $data->payment->total_amount }}</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              <div class="row no-print">
                <div class="col-12">
                  <a  class="btn btn-default" onclick="billprint();"><i class="fa fa-print"></i> Print</a>
                  <a class="btn btn-primary float-right" style="margin-right: 5px;" href="{{ url('/') }}/admin/treatmentpdfview/{{ $data->bill_number }}">
                    <i class="fa fa-download" ></i> Generate PDF
                  </a>
                </div>
              </div>
            </div>
            <p id="footer">Customer copy</p>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
@section('jquery')
<script type="text/javascript">
  function billprint(){

    window.print();
    setTimeout(function(){
     document.getElementById('footer').innerHTML = "Original copy"; window.print();window.close();
      window.location.href = "{{URL::to('/')}}/admin/treatmentBill"
      }, 1000);
  }
    
    </script>
@endsection