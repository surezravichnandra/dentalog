@extends('admin.layouts.adminapp')


    @section('Title', 'Hospital Management')

@section('body')

  @include('admin.layouts.header')

  @include('admin.layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4>ADD STAFF</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-3">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Enter Staff Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputName">Name</label>
                    <input type="text" class="form-control" id="InputName" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="InputMobile">Mobile Number</label>
                    <input type="text" class="form-control" id="InputMobile" placeholder="Mobile Number">
                  </div>
                  <div class="form-group">
                    <label for="Inputemail">Email ID</label>
                    <input type="email" class="form-control" id="Inputemail" placeholder="Email ID">
                  </div>
                  <!-- radio -->
                  <div class="form-group">
                    <label for="Inputemail">Gender</label> &nbsp;
                    <label>
                      <input type="radio" name="r2" class="minimal-red" checked>&nbsp;Male
                    </label>
                    <label>
                      <input type="radio" name="r2" class="minimal-red">&nbsp;Female
                    </label>

                  </div>

                       <!-- select -->
                  <div class="form-group">
                    <label>Division</label>
                    <select class="form-control">
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="InputPassword">Password</label>
                    <input type="password" class="form-control" id="InputPassword" placeholder="Password">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Add Photos</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose Photo</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                 
                  <!-- textarea -->
                <!--   <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                  </div> -->
                
                <!-- /.card-body -->
                </div>


                <div class="card-footer">
                  <button type="button" class="btn btn-primary">Add</button>
                </div>
              </form>
            </div>
            <!-- /.card -->





          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-9">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header pws-table-list" style="margin-bottom: 10px;">
                <h3 class="card-title">Staff List</h3>
              </div>

                 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email ID</th>
                  <th>Mobile Number</th>
                  <th>Department</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Ashraf Hassim
                  </td>
                  <td>Ashraf@gmail.com</td>
                  <td> +91 9656565858</td>
                  <td>Farmacy</td>
                  <td> <a class="edit" title="Edit" data-toggle="tooltip"><i class="fa fa-pencil" ></i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash" ></i></a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Mujeeb Yasin
                  </td>
                  <td>Mujeeb@gmail.com</td>
                  <td>+91 9656565858</td>
                  <td>Reception</td>
                
                  <td> <a class="edit" title="Edit" data-toggle="tooltip"><i class="fa fa-pencil" ></i>
</a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash" ></i>
</a></td>
                </tr>
              
               
                
                
                </tbody>
                <tfoot>
                
                </tfoot>
              </table>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>



@endsection

@section('jquery')



<script>
  $(function () {
  
    $('#example1').DataTable();
  });
  </script>

@endsection