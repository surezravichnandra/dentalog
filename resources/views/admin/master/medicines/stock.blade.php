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
               <h4>ADD MEDICINE</h4>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">General Form</li>
               </ol>
            </div>
         </div>
      </div>
   </section>
   @if ($message = Session::get('success'))
     <div class="alert alert-block alert-light light-success">
       <button type="button" class="close" data-dismiss="alert">×</button> 
       <strong>{{ $message }}</strong>
     </div>
     @php
       Session::forget('success');
     @endphp
   @endif
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-3">
               <div class="card card-primary">
                  <div class="card-header">
                     <h3 class="card-title">Enter Medicine Details</h3>
                  </div>
                  @if (trim($__env->yieldContent('edit_id')))
                  <form  method="post" action="{{URL::to('/') }}/admin/addStock/@yield('edit_id')">
                     @else
                  <form role="form" method="post" action="{{URL::to('/') }}/admin/addStock">
                     @endif
                     {{csrf_field()}}
                     @section('edit')
                     @show
                     <div class="card-body">
                        <div class="form-group">
                           <label >Name</label>
                           <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="@yield('name')" required="">
                        </div>
                        <div class="form-group">
                           <label>Medicine Category</label>
                           <input type="text" class="form-control" id="category" name="category" placeholder="Medicine Category" value="@yield('category')">
                        </div>
                        <div class="form-group">
                           <label>Description</label>
                           <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="@yield('description')">
                        </div>
                        <div class="form-group">
                           <label>Quantity</label>
                           <input type="text" class="form-control" id="qty" name="qty" placeholder="Quantity" value="@yield('qty')" required="">
                        </div>
                        <div class="form-group">
                           <label>Price</label>
                           <input type="text" class="form-control" id="price" name="price" placeholder="Price" value="@yield('price')" required="">
                        </div>
                        <div class="form-group">
                           <label>GST</label>
                           <input type="text" class="form-control" id="gst" name="gst" placeholder="GST" value="@yield('gst')" required="">
                        </div>
                        <div class="form-group">
                           <label>Total</label>
                           <input type="text" class="form-control" id="total" name ="total" placeholder="Total" readonly="" value="@yield('total')">
                        </div>
                        <div class="form-group">
                           <label>Purchased Date</label>
                           <input type="date" class="form-control" id="purchased_date" name ="purchased_date" placeholder="Purchased Date" value="@yield('purchased_date')">
                        </div>
                        <div class="form-group">
                           <label>Expiry Date</label>
                           <input type="date" class="form-control" id="expiry_date" name ="expiry_date" placeholder="Expiry Date" value="@yield('expiry_date')" required="">
                        </div>
                     </div>
                     <div class="card-footer">
                         @if (trim($__env->yieldContent('edit_id')))
                        <input type="submit" class="btn btn-primary" value="Update" >
                        @else
                        <input type="submit" class="btn btn-primary" value="Add" >
                        @endif
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-md-9">
               <div class="card card-info">
                  <div class="card-header pws-table-list" style="margin-bottom: 10px;">
                     <h3 class="card-title">Medicine List</h3>
                  </div>
                  <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                           <th>#</th>
                           <th>Name</th>
                           <th>Quantity</th>
                           <th>Category</th>
                           <th>Description</th>
                           <th>gst</th>
                           <th>Amount</th>
                           <th>Expiry Date</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php $sl=1;?>
                        @foreach ($stock as $stocks)
                        <tr>
                           <td>{{ $sl++ }}</td>
                           <td>{{ $stocks->name }}</td>
                           <td>{{ $stocks->qty }}</td>
                           <td>{{ $stocks->category }}</td>
                           <td>{{ $stocks->description }}</td>
                           <td>{{ $stocks->tax }}</td>
                           <td>{{ $stocks->total }}</td>
                           <td>{{ $stocks->expiry_date }}</td>
                           <td> 
                              <a class="edit" title="Edit" data-toggle="tooltip" href="{{ URL::to('/') }}/admin/addStock/{{ encrypt($stocks->id) }}/edit"><i class="fa fa-pencil" ></i></a>

                              <a class="delete"  id="confirm" class="btn btn-xs btn-danger"  data-toggle="modal" data-target="#confirmDelete" data-title="Delete Stock" data-message="Are you sure you want to delete this Stock ?" data-id="{{$stocks->id}}"><i class="fa fa-trash" ></i></a>
                           </td>
                        </tr>
                        @endforeach 
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
@endsection
@section('jquery')
   <script>
     $(function () {
     
       $('#example1').DataTable();
     });
   </script>
   <script type="text/javascript">
      $('#purchased_date').bootstrapMaterialDatePicker({
           time: false,
         });
      
        $('#expiry_date').bootstrapMaterialDatePicker({
           time: false,
         });
   </script>
   <script type="text/javascript">
      $('#gst,#price').keyup(function(e)
      {
    
        var price = $("#price").val();
        var gst = $("#gst").val();
        var total = parseFloat(price) + parseFloat(((price * gst)/100));
        $("#total").val(total);

      });
      $('#confirmDelete').find('.modal-footer #confirm').on('click', function(){
      var id = $("#modal-id").text();
      
      $.ajax({
        url: "{{ url('/') }}/admin/addStock/"+id,
        type: "post",
        data: { _method: 'delete',_token:"{{ csrf_token()}}"},
        success: function (data) {
          //alert(data)

          location.reload();
        },
      });
    });
   </script>
@endsection

