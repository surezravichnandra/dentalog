      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          <img src="{{ URL::asset('admins/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
          <span class="brand-text font-weight-light">HM</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{ URL::asset('admins/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">Prowess</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="./index.html" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
               
              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="calendar.html" class="nav-link">
              <i class="nav-icon fa fa-calendar"></i>
              <p>
                Calendar
             
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="hospital_details.html" class="nav-link">
              <i class=" nav-icon fa fa-hospital-o" ></i>

              <p>
                Hospital Details
                
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user-md"></i>
              <p>
               Doctor's
               <i class="right fa fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
            
            <li class="nav-item">
              <a href="adddoctors.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Add Doctor's</p>
              </a>
            </li>

          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-user-plus"></i>
            <p>
              Staff
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="addstaff.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Add Staff</p>
              </a>
            </li>
            
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-edit"></i>
            <p>
              Service
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ URL::to('admin/addServices') }}" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p> Add/View Services</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview ">
          <a href="timeslotes.html" class="nav-link ">
           <i class="nav-icon fa fa-clock-o" ></i>

            <p>
              Time Slots
           
            </p>
          </a>

        </li>
        <li class="nav-item has-treeview ">
          <a href="#" class="nav-link ">
            <i class="nav-icon fa fa-calendar-o"></i>
            <p>
              Doctor's Time Slots
            
            </p>
          </a>

        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-database"></i>
            <p>
              Medicines
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ URL::to('admin/addStock') }}" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p> Add/View Medicine</p>
              </a>
            </li>
         {{--    <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>List Medicine</p>
              </a>
            </li> --}}

          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-table"></i>
            <p>
              Bill
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ URL::to('admin/treatmentBill') }}" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Treatment Bill</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ URL::to('admin/treatmentBillView') }}" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p> View Treatment Bill</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ URL::to('admin/medicineBill') }}" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Farmacy Bill</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ URL::to('admin/medicineBillView') }}" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p> View Farmacy Bill</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-sliders"></i>
            <p>
             Department
             <i class="fa fa-angle-left right"></i>
           </p>
         </a>
         <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="speciality.html" class="nav-link">
              <i class="fa fa-circle-o nav-icon"></i>
              <p>Add Category</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="speciality.html" class="nav-link">
              <i class="fa fa-circle-o nav-icon"></i>
              <p>List Category</p>
            </a>
          </li>
        </ul>
      </li>


      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fa fa-user"></i>
          <p>
          User
            <i class="fa fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">

        <li class="nav-item">
            <a href="./userlist.html" class="nav-link">
              <i class="fa fa-circle-o nav-icon"></i>
              <p>Users List</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-circle-o nav-icon"></i>
              <p>Patients</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./appoinment.html" class="nav-link">
              <i class="fa fa-circle-o nav-icon"></i>
              <p> Appointments</p>
            </a>
          </li>
          

        </ul>
      </li>



      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fa fa-cog"></i>
          <p>
            Settings
            <i class="fa fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-circle-o nav-icon"></i>
              <p> Customize Software</p>
            </a>
          </li>
       

        </ul>
      </li>
    </ul>

  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
