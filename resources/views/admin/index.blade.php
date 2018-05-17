@extends('admin.layouts.adminapp')


    @section('Title', 'Hospital Management')

@section('body')

  @include('admin.layouts.header')

  @include('admin.layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>

              <p>Total Patients</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>53</h3>

              <p>Total Doctors</p>
            </div>
            <div class="icon">
             <i class="fa fa-medkit" ></i>
           </div>
           <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
         </div>
       </div>
       <!-- ./col -->
       <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>44</h3>

            <p>Total Appoinments</p>
          </div>
          <div class="icon">
           <i class="fa fa-bolt" aria-hidden="true"></i>
         </div>
         <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
       </div>
     </div>
     <!-- ./col -->
     <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>65</h3>

          <p>Total Earnings</p>
        </div>
        <div class="icon">
          <i class="fa fa-usd" ></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->
  <!-- Main row -->
  <div class="row">
    <!-- Left col -->
    <section class="col-lg-7 connectedSortable">
      <!-- Custom tabs (Charts with tabs)-->
      <div class="card">
        <div class="card-header d-flex p-0">
          <h3 class="card-title p-3">
            <i class="fa fa-pie-chart mr-1"></i>
            Sales
          </h3>
          <ul class="nav nav-pills ml-auto p-2">
            <li class="nav-item">
              <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
            </li>
          </ul>
        </div><!-- /.card-header -->
        <div class="card-body">
          <div class="tab-content p-0">
            <!-- Morris chart - Sales -->
            <div class="chart tab-pane active" id="revenue-chart"
            style="position: relative; height: 300px;"></div>
            <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
          </div>
        </div><!-- /.card-body -->
      </div>
      <!-- /.card -->

      <!-- TO DO List -->

      <!-- /.card -->
    </section>
    <!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-lg-5 connectedSortable">



      <!-- solid sales graph -->
      <div class="card bg-info-gradient">
        <div class="card-header no-border">
          <h3 class="card-title">
            <i class="fa fa-th mr-1"></i>
            Sales Graph
          </h3>

          <div class="card-tools">
            <button type="button" class="btn bg-info btn-sm" data-widget="collapse">
              <i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn bg-info btn-sm" data-widget="remove">
              <i class="fa fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="chart" id="line-chart" style="height: 250px;"></div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer bg-transparent">
          <div class="row">
            <div class="col-4 text-center">
              <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
              data-fgColor="#39CCCC">

              <div class="text-white">Mail-Orders</div>
            </div>
            <!-- ./col -->
            <div class="col-4 text-center">
              <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
              data-fgColor="#39CCCC">

              <div class="text-white">Online</div>
            </div>
            <!-- ./col -->
            <div class="col-4 text-center">
              <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
              data-fgColor="#39CCCC">

              <div class="text-white">In-Store</div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->

      <!-- Calendar -->

      <!-- /.card -->
    </section>
    <!-- right col -->
  </div>
  <!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
@endsection

@section('jquery')

@endsection
