<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">
  <title>Hospital Management</title>
  <link href="https://fonts.googleapis.com/css?family=Molengo" rel="stylesheet">
  <link href="dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <link href="css/non-responsive.css" rel="stylesheet">
  <link href="css/pws_style.css" rel="stylesheet">
  <link href="css/pws_profile.css" rel="stylesheet">
  <link href="css/sidebar.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/datepicker.css"/>
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <script src="assets/js/ie-emulation-modes-warning.js"></script>


</head>
<body>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-default navbar-fixed-top">




   <!-- Sidebar Holder -->
   <div id="sidebar">
    <div id="dismiss">
      <i class="glyphicon glyphicon-arrow-left"></i>
    </div>

    <div class="sidebar-header">
      <h3>Project name</h3>
    </div>

    <ul class="list-unstyled components">

      <li class="active">
        <a href="#" > <i class="fa fa-search" aria-hidden="true"></i>&nbsp;&nbsp;
          Book an appoinment</a>
        </li>
        <li>
          <a href="#"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;&nbsp;
            View medical records </a>
          </li>
          <li>
            <a href="#"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;&nbsp;
              Settings </a>
            </li>

          </ul>

          <ul class="list-unstyled CTAs">
            <li><a href="#" class="article">Download Our App</a></li>
          </ul>

          <ul class="list-unstyled components_2" style="font-size: 12px;">
            <li>
              <a href="#" > &nbsp;&nbsp;
                Safety Of your Data</a>
              </li>
              <li>
                <a href="#">&nbsp;&nbsp;
                  Help </a>
                </li>
                <li>
                  <a href="#">&nbsp;&nbsp;
                    Contact us </a>
                  </li>
                  <li>
                    <a href="#">&nbsp;&nbsp;
                      Terms of service </a>
                    </li>

                  </ul>
                </div>













                <div class="container">
                  <div class="navbar-header">
                    <a class="navbar-brand" id="sidebarCollapse" href="#"><img src="img/icon-menu.png" class="menu-icon"></a>
                    <a class="navbar-brand" href="#">Project name</a>
                  </div>
                  <div id="navbar">
                  <!--  <div class="pws-form-field-nav">
                    <form class="form-inline"  >
                      <div class="form-group" style="margin-top: 10px;">
                        <div class="left-inner-addon pws-addon-nav" >
                         <i class="fa fa-list-alt" style="color:#858586" aria-hidden="true"></i>
                         <input type="text"  placeholder="Select Speciality"  class="pws-cat-field" id="catgroy" >
                       </div>
                     </div>
                     <div class="form-group " style="margin-top: 10px;">
                      <div class="left-inner-addon" style="padding-left: 10px;">
                       <i class="fa fa-calendar" style="color:#858586" aria-hidden="true"></i>
                       <input type="text"  placeholder="Pick Date" class="pws-date-field" id="datepicker" >
                     </div>
                   </div>
                   <input type="button" class="pws-find-btn" value="SEARCH" >
                 </form>
               </div> -->
               <ul class="nav navbar-nav navbar-right" style="margin-top: 70px;">
                <li> <button type="button" class="btn btn-default btn-signin">Sign In / Sign Up</button> </li>
              </ul>
            </div>
          </div>

        </nav>
        <br>




        <div class="container">
          <div class="col-xs-10">
            <div class="table-wrapper">
              <div class="table-title">
                <div class="row">
                  <div class="col-xs-4">
                    <h5>Appoinment <b>History</b></h5>
                  </div>

                </div>
              </div>

              <table id="example" class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Booking Info</th>
                    <th></th> 
                    <th>Time / Day</th>           

                    <th>Fee</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td><a href="#"><img src="img/drname.jpg" width="40" height="40" class="avatar" alt="Avatar"> Michael Holz</a></td>
                    <td><!-- <span class="status text-success">&bull;</span> --><span class="status_text">Implanting</span></td>
                    <td><span class="pws-date-tab">10:30 AM on Jun 15, 2017</span></td>                        

                    <td><i class="fa fa-inr" ></i>&nbsp;<span class="pws-price">350</span></td>
                    <td><a href="#" class="view" title="View Details" >Retake</a></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td><a href="#"><img src="img/drname.jpg" width="40" height="40" class="avatar" alt="Avatar"> Paula Wilson</a></td>
                    <td><span class="status_text">Implanting</span></td>         
                    <td><span class="pws-date-tab">10:30 AM on Jun 15, 2017</span></td>

                    <td><i class="fa fa-inr" ></i>&nbsp;<span class="pws-price">350</span></td>
                    <td><a href="#" class="view" title="View Details" >Retake</a></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td><a href="#"><img src="img/drname.jpg" width="40" height="40" class="avatar" alt="Avatar"> Antonio Moreno</a></td>
                    <td><span class="status_text">Implanting</span></td>
                    <td><span class="pws-date-tab">10:30 AM on Jun 15, 2017</span></td>

                    <td><i class="fa fa-inr" ></i>&nbsp;<span class="pws-price">350</span></td>
                    <td><a href="#" class="view" title="View Details" >Retake</a></td>                        
                  </tr>
                  <tr>
                    <td>4</td>
                    <td><a href="#"><img src="img/drname.jpg" width="40" height="40" class="avatar" alt="Avatar"> Mary Saveley</a></td>
                    <td><span class="status_cancel">Cancelled</span></td>
                    <td><span class="pws-date-tab">10:30 AM on Jun 15, 2017</span></td>           

                    <td><i class="fa fa-inr" ></i>&nbsp;<span class="pws-price">-</span></td>
                    <td><a href="#" class="view" title="View Details" >Retake</a></td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td><a href="#"><img src="img/drname.jpg" width="40" height="40" class="avatar" alt="Avatar"> Martin Sommer</a></td>
                    <td><span class="status_cancel">Cancelled</span></td>
                    <td><span class="pws-date-tab"> 10:30 AM on Aug 04, 2017</span></td>

                    <td><i class="fa fa-inr" ></i>&nbsp;<span class="pws-price">-</span></td>
                    <td><a href="#" class="view" title="View Details" >Retake</a></td>
                  </tr>
                </tbody>
              </table>
              <div class="clearfix">

              </div>
         <!--  <div class="row">
            <section class="content">
              <div class="col-xs-9 ">
                <div class="panel panel-default">
                  <div class="panel-body">

                    <div class="table-container">
                      <table class="table pws-table">
                        <thead class="text-muted">
                          <tr class="text-muted">
                          <th ></th>
                           <th >Time / Day</th>
                            <th >Booking Info</th>
                           
                             <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr data-status="pagado">
                            <td>
                             1
                            </td>
                            <td>
                            <div class="media pws_date_tab text-muted">
                               2:00 PM 14/08/2018
                            </div>
                           
                            </td>
                            <td>
                              <div class="media">
                                <a href="#" class="pull-left">
                                  <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                                </a>
                                <div class="media-body">
                               
                                  <h4 class="title">
                                    Dr.Thomas Issac
                              
                                  </h4>
                                  <p class="summary text-muted"><span style="color: #36cca7;">Service:</span>Implanting &nbsp;&nbsp;&nbsp; <span style="color: #36cca7;"">Fee:</span><i class="fa fa-inr" aria-hidden="true"></i>
1500</p>
                                </div>
                              </div>
                            </td>
                            <td><a href="#" class="pws_retake_btn">RETAKE</a></td>
                          </tr>
  <tr data-status="pagado">
                            <td>
                             2
                            </td>
                            <td>
                            <div class="media pws_date_tab text-muted">
                                2:00 PM 14/08/2018
                            </div>
                       
                            </td>
                            <td>
                              <div class="media">
                                <a href="#" class="pull-left">
                                  <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                                </a>
                                <div class="media-body">
                               
                                  <h4 class="title">
                                    Dr.Thomas Issac
                              
                                  </h4>
                                  <p class="summary text-muted"><span style="color: #36cca7;">Service:</span>Implanting &nbsp;&nbsp;&nbsp; <span style="color: #36cca7;"">Fee:</span><i class="fa fa-inr" aria-hidden="true"></i>
1500</p>
                                </div>
                              </div>
                            </td>
                            <td><a href="#" class="pws_retake_btn">RETAKE</a></td>
                          </tr>
                            <tr data-status="pagado">
                            <td>
                             3
                            </td>
                            <td>
                            <div class="media pws_date_tab text-muted">
                                 2:00 PM 14/08/2018
                            </div>
                            
                            </td>
                            <td>
                              <div class="media">
                                <a href="#" class="pull-left">
                                  <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                                </a>
                                <div class="media-body">
                                
                                  <h4 class="title">
                                    Dr.Thomas Issac
                             
                                  </h4>
                                  <p class="summary text-muted"><span style="color: #36cca7;">Service:</span>Implanting &nbsp;&nbsp;&nbsp; <span style="color: #36cca7;"">Fee:</span><i class="fa fa-inr" aria-hidden="true"></i>
1500</p>
                                </div>
                              </div>
                            </td>
                            <td><a href="#" class="pws_retake_btn">RETAKE</a></td>
                          </tr>
                            <tr data-status="pagado">
                            <td>
                             4
                            </td>
                            <td>
                            <div class="media pws_date_tab text-muted">
                                2:00 PM 14/08/2018
                            </div>
                             
                            </td>
                            <td>
                              <div class="media">
                                <a href="#" class="pull-left">
                                  <img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
                                </a>
                                <div class="media-body">
                               
                                  <h4 class="title">
                                    Dr.Thomas Issac
                                    </h4>
                                  <p class="summary text-muted"><span style="color: #36cca7;">Service:</span>Implanting &nbsp;&nbsp;&nbsp; <span style="color: #36cca7;"">Fee:</span><i class="fa fa-inr" aria-hidden="true"></i>
1500</p>
                                </div>
                              </div>
                            </td>
                            <td><a href="#" class="pws_retake_btn">RETAKE</a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

              </div>
           
                   <div class="col-xs-3" style="margin-top: 20px;">
                <div class="pws-com-name"><h4>Hospital Name</h4></div>
                <div class="pws-com-app"><h3>Get Free Our App</h3></div>
                <input type="text" class="pws-app-link" id="app-link" name="" placeholder="Enter your mobile Number"><br>
                <input type="button" name="" value="Send App Link" class="pws-app-link-btn">


            </div>


              </div>
            </section>

          </div> -->
        </div>
      </div>
      <div class="col-xs-2" style="margin-top: 20px;">
        <div class="pws-com-name"><h4>Hospital Name</h4></div>
        <div class="pws-com-app"><h3>Get Free Our App</h3></div>
        <input type="text" class="pws-app-link" id="app-link" name="" placeholder="Enter your mobile Number"><br>
        <input type="button" name="" value="Send App Link" class="pws-app-link-btn">


      </div>
    </div>

































      <!--   <div class="container">
          <div class="row">
           <div class="col-xs-12">
             <center> 
             <div style="border-bottom:  1px solid rgba(216,216,216,0.5); width:900px;  ">
             <ul class="nav nav-tabs " style="width:180px; border-bottom: 0">
                <li class="active"><a data-toggle="tab" id="login-tab" href="#login-form"> Login</a></li>
                <li><a data-toggle="tab" href="#registration-form"> Register </a></li>
              </ul>
              </div>
            </center>
            <div class="col-xs-6">
            <div style="margin-top: 100px; margin-left: 100px;">
           <img src="img/loginpage.png">
           </div>

            </div>

            <div class="col-xs-6" style="margin-top: 100px; height: 500px;">

             <div class="modal-content">
            
              <br>
              <div class="modal-body">
                <div class="tab-content">
                  <div id="login-form" class="tab-pane fade in active">
                    <form action="/">

                      <div class="form-group">
                        <label for="numberInput" class="pws-login-label">MobileNumber / Email ID</label>
                        <input type="text" class="form-control pws-mobileinput" id="numberInput" aria-describedby="emailHelp" placeholder="MobileNumber / Email ID">
                      </div>
                      <div class="form-group">
                        <label for="passwordInput" class="pws-login-label">Password</label>
                        <input type="password" class="form-control pws-mobileinput" id="passwordInput" placeholder="Password">
                      </div>
                      <label class="container_pws">Remember me
                        <input type="checkbox" checked="checked">
                        <span class="checkmark"></span>
                      </label>
                      <div class="pull-right pws-fget-pass" >
                       <a href="#">Forget Password ?</a>
                     </div>


                     <label class="container_pws">Login with OTP instead of password
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                    <br>

                    <button type="submit"   class="btn btn-default pws-login-btn">Login</button>
                  </form>
                </div>


                <div id="login-otp" class="tab-pane fade in " style="display: none;">
                  <form action="/">
                    <div class="form-group">
                      <label for="passwordInput" class="pws-login-label">We have send you an OTP on</label>
                      <h4 style="color: #8a8e8d">+91 9824654544</h4>
                    </div>
                    <div class="form-group">
                      <label for="numberInput" class="pws-login-label">OTP</label>
                      <input type="text" class="form-control pws-mobileinput-otp" id="otpnumberInput" aria-describedby="otpinput" placeholder="Please enter 6 digit OTP here to varify">
                    </div>
                    <h6 class="pull-left ">Still not recieved OTP? <a href="#" class="pws-terms"> Get via call </a> </h6>
                    <button type="submit"   class="btn btn-default pws-login-btn">Login</button>
                  </form>
                </div>

                <div id="registration-form" class="tab-pane fade">
                 <form action="/">

                  <div class="form-group">
                    <label for="numberInput" class="pws-login-label">Full Name</label>
                    <input type="text" class="form-control pws-mobileinput" id="numberInput_reg" aria-describedby="emailHelp" placeholder="Full Name">
                  </div>

                  <div class="form-row" >
                    <div class="col-xs-12" style="padding-left: 0;padding-right: 0;">
                      <div class="col-xs-4 " style="padding-left: 0;">
                        <label class="pws-login-label" for="validationCustom01">Code</label>

                        <select class="custom-select pws-mobileinput" style="padding: 7px; outline: none;">
                          <option selected>IND(+91)</option>
                          <option value="1">IND(+91)</option>
                          <option value="2">IND(+91)</option>
                          <option value="3">IND(+91)</option>
                        </select>
                      </div>
                      <div class="col-xs-8  " style="padding-right: 0;">
                        <label class="pws-login-label" for="">Mobile Number</label>
                        <input type="text" class="form-control pws-mobileinput" id="mobile_input_reg" placeholder="Mobile Number"  required>

                      </div>
                    </div>
                  </div>





                  <div class="form-group">
                    <label for="passwordInput" class="pws-login-label">Password</label>
                    <input type="password" class="form-control pws-mobileinput" id="passwordInput_reg" placeholder="Password">
                  </div>

                  <br>


                  <button type="button" data-toggle="modal" data-target=".login-register-otp" id="pws_sendotp"   class="btn btn-default pws-login-btn">Send OTP</button>
                  <h6 class="pull-right pws-btm-space">By signup,I agree to <a href="#" class="pws-terms">terms</a> </h6>
                  <br><br> <br><br>
                </form>
              </div>

            </div>
          </div>
        </div>



      </div>
    </div>
  </div>
</div>
-->









<footer>
  <div class="footer" id="footer" style="margin-top: 350px;">
    <div class="container">
      <div class="row">
        <div class="col-xs-2 ">
          <h3> About Company </h3>
          <ul>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
          </ul>
        </div>
        <div class="col-xs-2">
          <h3> Speciality </h3>
          <ul>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
          </ul>
        </div>
        <div class="col-xs-2">
          <h3> Lorem Ipsum </h3>
          <ul>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
          </ul>
        </div>
        <div class="col-xs-2">
          <h3> Lorem Ipsum </h3>
          <ul>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
          </ul>
        </div>
        <div class=" col-xs-3 ">
          <h3> Follow Us </h3>
          <ul>
            <li>
              <div class="input-append newsletter-box text-center">
                <input type="text" class="full text-center" placeholder="Email " style="padding: 7px;">
                <button class="btn  bg-gray" type="button"> Send Mail <i class="fa fa-long-arrow-right"> </i> </button>
              </div>
            </li>
          </ul>
          <ul class="social">
            <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
            <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
            <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>

            <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
          </ul>
        </div>
      </div>
      <!--/.row--> 
    </div>
    <!--/.container--> 
  </div>
  <!--/.footer-->

  <div class="footer-bottom">
    <div class="container">
      <p class="pull-left"> Copyright © Prowess <span class="pws-current-year"></span> . All right reserved. </p>

    </div>
  </div>
  <!--/.footer-bottom--> 
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="dist/js/bootstrap.min.js"></script>
<script src="js/datepicker.min.js"></script>    
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

<script type="text/javascript">
  $(document).ready(function () {
    $("#sidebar").mCustomScrollbar({
      theme: "minimal"
    });

    $('#dismiss, .overlay').on('click', function () {
      $('#sidebar').removeClass('active');
      $('.overlay').fadeOut();
    });

    $('#sidebarCollapse').on('click', function () {
      $('#sidebar').addClass('active');
      $('.overlay').fadeIn();
      $('.collapse.in').toggleClass('in');
      $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
  });
</script>

<link rel="stylesheet" href="js/jquery.autocomplete.css">
<script src="js/jquery.autocomplete.js" type="text/javascript"></script>
<script>
  var catgroy = [
  'Dentist', 'Dermatologist', 'Gynecologist/Obstetrician', 'Gynecologist/Obstetrician','Cardiologist','Psychiatrist','Gastroenterologist','Ear-Nose-Throat (ENT)','Neurologist','Urologist','Physiotherapist','Orthodontist'
  ];

  $('#catgroy').autocomplete({
    source:[catgroy]
  });

  const pickerCheckIn = datepicker('#datepicker');
                                        // Update the current year in copyright
                                        $('.pws-current-year').text(new Date().getFullYear());   

                                      </script>


                                      <script>
                                        function openCity(evt, cityName) {
                                          var i, tabcontent, tablinks;
                                          tabcontent = document.getElementsByClassName("tabcontent");
                                          for (i = 0; i < tabcontent.length; i++) {
                                            tabcontent[i].style.display = "none";
                                          }
                                          tablinks = document.getElementsByClassName("tablinks");
                                          for (i = 0; i < tablinks.length; i++) {
                                            tablinks[i].className = tablinks[i].className.replace(" active", "");
                                          }
                                          document.getElementById(cityName).style.display = "block";
                                          evt.currentTarget.className += " active";
                                        }

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<script>
  $(document).ready(function(){
    $("#pws_sendotp").click(function(){
     document.getElementById("login-otp").style.display = 'block';
     document.getElementById("registration-form").style.display = 'none';
     $("#login-tab").hide();


   });
  });


  $(document).ready(function() {
    $('#example').DataTable();
  } );
</script>
</body>
</html>
