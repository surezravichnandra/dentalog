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
          <h4>SERVICE</h4>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Service</li>
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
              <h3 class="card-title">Add Service</h3>
            </div>

            @if (trim($__env->yieldContent('edit_id')))
            <form  method="post" action="{{URL::to('/') }}/admin/addServices/@yield('edit_id')">
             @else
            <form role="form" method="post" action="{{URL::to('/') }}/admin/addServices">
              @endif
              {{csrf_field()}}
              @section('edit')
              @show

              <div class="card-body">
                <div class="form-group">
                  <label for="InputService">Service Type</label>
                  <input type="text" class="form-control" id="service" name="service" placeholder="Service" value="@yield('service')" required="">
                </div>

                <div class="form-group">
                  <label for="InputAmount">Amount</label>
                  <input type="text" class="form-control" id="cost" name="cost" placeholder="Amount" value="@yield('cost')" required="">
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
              <h3 class="card-title">Service List</h3>
            </div>
            <table id="example1" class="table table-bordered table-striped" style="text-align: center;">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Service Type</th>
                  <th>Amount</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $sl=1;?>
                @foreach ($service as $services)
                  <tr id="tr_{{$services->id}}">
                    <td>{{ $sl++ }}</td>
                    <td>{{ $services->services }}</td>
                    <td><i class="fa fa-inr"></i>&nbsp;{{ $services->cost }}</td>
                    <td> 
                      <a class="edit" title="Edit" data-toggle="tooltip" href="{{ URL::to('/') }}/admin/addServices/{{ encrypt($services->id) }}/edit"><i class="fa fa-pencil" ></i></a>
                      <a class="delete"  id="confirm" class="btn btn-xs btn-danger"  data-toggle="modal" data-target="#confirmDelete" data-title="Delete Service" data-message="Are you sure you want to delete this Service ?" data-id="{{$services->id}}"><i class="fa fa-trash" ></i></a>
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
    $('#confirmDelete').find('.modal-footer #confirm').on('click', function(){
      var id = $("#modal-id").text();
      
      $.ajax({
        url: "{{ url('/') }}/admin/addServices/"+id,
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
