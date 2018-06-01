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
               <h4>Viw Treatment Bill</h4>
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
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-info">
              <div class="card-header pws-table-list" style="margin-bottom: 10px;">
               <h3 class="card-title">Viw Treatment Bill</h3>
              </div>                         
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                     <th style="text-align: center;">#</th>
                     <th style="text-align: center;">Date</th>
                     <th style="text-align: center;">Bill Number</th>
                     <th style="text-align: center;">Name</th>
                     <th style="text-align: center;"> Amount</th>
                     <th style="text-align: center;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $sl=1;?>
                  @foreach ($treatment_details as $treatment_detail)
                  <tr>
                    <td style="text-align: center;">{{ $sl++ }}</td>
                    <td style="text-align: center;">{{$treatment_detail->created_at->format('d-m-Y')}}</td>
                    <td style="text-align: center;">{{$treatment_detail->bill_number}}</td>
                    <td style="text-align: center;">{{ $treatment_detail->patient_detail->name }}</td>
                    <td style="text-align: center;">{{ $treatment_detail->payment->total_amount }}</td>
                    <td style="text-align: center;">
                    <a class="print" title="View" data-toggle="tooltip" href="{{ URL::to('/') }}/admin/treatmentInvoice/{{encrypt($treatment_detail->bill_number) }}"><i class="fa fa-print"></i></a>
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
@endsection


