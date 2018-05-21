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
                   <div class="pws-form-field-nav">
                    <form class="form-inline"  >
                      <div class="form-group" style="margin-top: 10px;">
                        <div class="left-inner-addon pws-addon-nav" >
                         <i class="fa fa-list-alt" style="color:#858586" aria-hidden="true"></i>
                         <input type="text"  placeholder="Search doctors, speciality, etc."  class="pws-cat-field" id="catgroy" >
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
               </div>
               <ul class="nav navbar-nav navbar-right">
                <li> <button type="button" class="btn btn-default btn-signin">Sign In / Sign Up</button> </li>
              </ul>
            </div>
          </div>
          <div class="pws-subnav">

          </div>
        </nav>
        <br>
        <div class="container">
          <div class="row">
           <div class="col-md-12">
             <div class="col-md-9">
              <div class="container card pws-card-top ">
                <div class="pws-card ">
                 <div class="row">
                  <div class="col-md-12">
                    <div class="pws-card-body">
                      <div class="col-md-2">
                        <div class="pws-card-image pull-left ">
                          <img src="img/drname.jpg" width="129" height="129"><br>
                          <!--  <a href="#" class="btn-add">View Profile</a> -->
                        </div>
                      </div>
                      <div class="col-md-10">
                        <div class="pws-dr-name">
                         <h4>Dr. Kamal Odedra</h4>
                         <div class="col-md-12">
                           <div class="col-md-8">
                             <h6>BDS, PhD - Endodontics, MDS - Conservative Dentistry & Endodontics
                               <br>8 years experience<br>
                               Dentist</h6>
                             </div>
                             <div class="col-md-4">
                              <center>
                                <span class="pws-rating"><i class="fa fa-star" aria-hidden="true"></i>&nbsp; 4.2/5</span><br>
                                <span class="pws-available"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp; Available Today</span></center>


                              </div>
                            </div>
                            <br>
                            <ul class="pws-slotes">
                              <li><a  class="pws-slot-btn"  href="#">10:30 am to 12:30 pm </a></li>
                              <li><a class="pws-slot-btn" id="active" href="#">10:30 am to 12:30 pm</a></li>
                              <li><a class="pws-slot-btn" href="#">10:30 am to 12:30 pm</a></li>
                              <li><a class="pws-slot-btn" href="#">10:30 am to 12:30 pm</a></li>
                            </ul>
                           <button class="pws-btn-book pull-right"> <i class="fa fa-bolt" aria-hidden="true"></i>&nbsp;Book Appoinmnet</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                 <div class="pws-card ">
                 <div class="row">
                  <div class="col-md-12">
                    <div class="pws-card-body">
                      <div class="col-md-2">
                        <div class="pws-card-image pull-left ">
                          <img src="img/drname.jpg" width="129" height="129"><br>
                          <!--  <a href="#" class="btn-add">View Profile</a> -->
                        </div>
                      </div>
                      <div class="col-md-10">
                        <div class="pws-dr-name">
                         <h4>Dr. Kamal Odedra</h4>
                         <div class="col-md-12">
                           <div class="col-md-8">
                             <h6>BDS, PhD - Endodontics, MDS - Conservative Dentistry & Endodontics
                               <br>8 years experience<br>
                               Dentist</h6>
                             </div>
                             <div class="col-md-4">
                              <center>
                                <span class="pws-rating"><i class="fa fa-star" aria-hidden="true"></i>&nbsp; 4.2/5</span><br>
                                <span class="pws-available"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp; Available Today</span></center>


                              </div>
                            </div>
                            <br>
                            <ul class="pws-slotes">
                              <li><a  class="pws-slot-btn"  href="#">10:30 am to 12:30 pm </a></li>
                              <li><a class="pws-slot-btn" id="active" href="#">10:30 am to 12:30 pm</a></li>
                              <li><a class="pws-slot-btn" href="#">10:30 am to 12:30 pm</a></li>
                              <li><a class="pws-slot-btn" href="#">10:30 am to 12:30 pm</a></li>
                            </ul>
                            <button class="pws-btn-book pull-right"> <i class="fa fa-bolt" aria-hidden="true"></i>&nbsp;Book Appoinmnet</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                  <div class="pws-card ">
                 <div class="row">
                  <div class="col-md-12">
                    <div class="pws-card-body">
                      <div class="col-md-2">
                        <div class="pws-card-image pull-left ">
                          <img src="img/drname.jpg" width="129" height="129"><br>
                          <!--  <a href="#" class="btn-add">View Profile</a> -->
                        </div>
                      </div>
                      <div class="col-md-10">
                        <div class="pws-dr-name">
                         <h4>Dr. Kamal Odedra</h4>
                         <div class="col-md-12">
                           <div class="col-md-8">
                             <h6>BDS, PhD - Endodontics, MDS - Conservative Dentistry & Endodontics
                               <br>8 years experience<br>
                               Dentist</h6>
                             </div>
                             <div class="col-md-4">
                              <center>
                                <span class="pws-rating"><i class="fa fa-star" aria-hidden="true"></i>&nbsp; 4.2/5</span><br>
                                <span class="pws-available text-danger"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp; Not Available Today</span></center>


                              </div>
                            </div>
                            <br>
                            <ul class="pws-slotes">
                              <li><a  class="pws-slot-btn"  href="#">10:30 am to 12:30 pm </a></li>
                              <li><a class="pws-slot-btn" id="active" href="#">10:30 am to 12:30 pm</a></li>
                              <li><a class="pws-slot-btn" href="#">10:30 am to 12:30 pm</a></li>
                              <li><a class="pws-slot-btn" href="#">10:30 am to 12:30 pm</a></li>
                            </ul>
                           <button class="pws-btn-book pull-right"> <i class="fa fa-bolt" aria-hidden="true"></i>&nbsp;Book Appoinmnet</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                 <div class="pws-card ">
                 <div class="row">
                  <div class="col-md-12">
                    <div class="pws-card-body">
                      <div class="col-md-2">
                        <div class="pws-card-image pull-left ">
                          <img src="img/drname.jpg" width="129" height="129"><br>
                          <!--  <a href="#" class="btn-add">View Profile</a> -->
                        </div>
                      </div>
                      <div class="col-md-10">
                        <div class="pws-dr-name">
                         <h4>Dr. Kamal Odedra</h4>
                         <div class="col-md-12">
                           <div class="col-md-8">
                             <h6>BDS, PhD - Endodontics, MDS - Conservative Dentistry & Endodontics
                               <br>8 years experience<br>
                               Dentist</h6>
                             </div>
                             <div class="col-md-4">
                              <center>
                                <span class="pws-rating"><i class="fa fa-star" aria-hidden="true"></i>&nbsp; 4.2/5</span><br>
                                <span class="pws-available"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp; Available Today</span></center>


                              </div>
                            </div>
                            <br>
                            <ul class="pws-slotes">
                              <li><a  class="pws-slot-btn"  href="#">10:30 am to 12:30 pm </a></li>
                              <li><a class="pws-slot-btn" id="active" href="#">10:30 am to 12:30 pm</a></li>
                              <li><a class="pws-slot-btn" href="#">10:30 am to 12:30 pm</a></li>
                              <li><a class="pws-slot-btn" href="#">10:30 am to 12:30 pm</a></li>
                            </ul>
                            <button class="pws-btn-book pull-right"> <i class="fa fa-bolt" aria-hidden="true"></i>&nbsp;Book Appoinmnet</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

             
            </div>
            <div class="col-md-3" style="margin-top: 20px;">
                <div class="pws-com-name"><h4>Hospital Name</h4></div>
                <div class="pws-com-app"><h3>Get Free Our App</h3></div>
                <input type="text" class="pws-app-link" id="app-link" name="" placeholder="Enter your mobile Number"><br>
                <input type="button" name="" value="Send App Link" class="pws-app-link-btn">







            </div>
          </div>
        </div>
      </div>









                                              <section>
                                               <div id="grad1" class="pws-app-section">
                                                 <div class="container">
                                                   <div class="col-md-6">

                                                     <img src="img/home_mobile_app_img.png" class="pws-mobille-app-ad">

                                                   </div>
                                                   <div class="col-md-6 pws-text-sec">

                                                     <h1>Download our App for free</h1>
                                                     <h3>Book an appoinment in just a heart beat !</h3><br>
                                                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                                                     <br>

                                                     <a href="#" class="pws-btn-download"> Download Now</a>
                                                   </div>


                                                 </div>

                                               </div>
                                             </section>




                                             <footer>
                                              <div class="footer" id="footer">
                                                <div class="container">
                                                <div class="col-md-12">

                                                  <div class="row">

                                                    <div class=" col-md-2  ">
                                                      <h3> About Company </h3>
                                                      <ul>
                                                        <li> <a href="#"> Lorem Ipsum </a> </li>
                                                        <li> <a href="#"> Lorem Ipsum </a> </li>
                                                        <li> <a href="#"> Lorem Ipsum </a> </li>
                                                        <li> <a href="#"> Lorem Ipsum </a> </li>
                                                      </ul>
                                                    </div>
                                                    <div class="  col-md-2 ">
                                                      <h3> Speciality </h3>
                                                      <ul>
                                                        <li> <a href="#"> Lorem Ipsum </a> </li>
                                                        <li> <a href="#"> Lorem Ipsum </a> </li>
                                                        <li> <a href="#"> Lorem Ipsum </a> </li>
                                                        <li> <a href="#"> Lorem Ipsum </a> </li>
                                                      </ul>
                                                    </div>
                                                    <div class=" col-md-2  ">
                                                      <h3> Lorem Ipsum </h3>
                                                      <ul>
                                                        <li> <a href="#"> Lorem Ipsum </a> </li>
                                                        <li> <a href="#"> Lorem Ipsum </a> </li>
                                                        <li> <a href="#"> Lorem Ipsum </a> </li>
                                                        <li> <a href="#"> Lorem Ipsum </a> </li>
                                                      </ul>
                                                    </div>
                                                    <div class="  col-md-2 ">
                                                      <h3> Lorem Ipsum </h3>
                                                      <ul>
                                                        <li> <a href="#"> Lorem Ipsum </a> </li>
                                                        <li> <a href="#"> Lorem Ipsum </a> </li>
                                                        <li> <a href="#"> Lorem Ipsum </a> </li>
                                                        <li> <a href="#"> Lorem Ipsum </a> </li>
                                                      </ul>
                                                    </div>
                                                    <div class="  col-md-3  ">
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
                                    </body>
                                    </html>
