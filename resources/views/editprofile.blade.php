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
                   <div class="pws-form-field-nav">
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
           <div class="col-xs-12">
             <div class="col-xs-9">








               <div class="pws-card-tab">
                 <div class="row">
                  <div class="col-xs-12">
                    <div class="pws-card-body">
                      <div class="col-md-4 ">
                        <div style="padding-left: 30px; "> <h5>Mr. Kamal Odedra</h5></div>
                      </div>
                      <div class="col-md-4" style="border-right: 1px solid #ccc;border-left: 1px solid #ccc;" >
                       <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                        aria-valuemin="0" aria-valuemax="100" style="width:40%;">
                        40%  Profile Complete 
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="pws-pending-sec"><span><i class="fa fa-info-circle" aria-hidden="true"></i></span>1 Pending Section</div>

                  </div>



                </div>       
              </div>
            </div>
          </div>











          <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'Personal')" id="defaultOpen">Personal Details</button>
            <button class="tablinks" onclick="openCity(event, 'Contact')">Contact details</button>
            <button class="tablinks" onclick="openCity(event, 'Settings')">Settings</button>
          </div>

          <div id="Personal" class="tabcontent">
            <br>
            <div style="padding-left: 30px;"> <h5>Personal Details *</h5></div>
            <form action="/">
              <div class="form-row" >
                <div class="col-xs-12" >
                  <div class="col-xs-3 " >
                   <label class="pws-login-label" for="">Salutation</label>
                   <select class="custom-select pws-mobileinput" style="padding: 7px; width: 100%; outline: none;">
                    <option selected>Mr</option>
                    <option value="1">Mrs</option>
                    <option value="2">Ms</option>

                  </select>
                </div>
                <div class="col-xs-8  " style="padding-right: 0;">
                  <label class="pws-login-label" for="">Name *</label>
                  <input type="text" class="form-control pws-mobileinput" id="mobile_input_reg" placeholder="Name"  required>

                </div>
              </div>
            </div>

            <div class="form-row" >
              <div class="col-xs-12" >
                <div class="col-xs-3 " >
                 <label class="pws-login-label" for="">Gender</label>
                 <select class="custom-select pws-mobileinput" style="padding: 7px; width: 100%; outline: none;">
                  <option selected>Male</option>
                  <option value="1">Female</option>

                </select>
              </div>
              <div class="col-xs-3  " style="padding-right: 0;">
                <label class="pws-login-label" for="">Blood Group *</label>
                <select class="custom-select pws-mobileinput" style="padding: 7px;width: 100%; outline: none;">
                  <option selected>A+</option>
                  <option value="1">B+)</option>
                  <option value="2">O+</option>
                  <option value="3">A-</option>
                </select>

              </div>
              <div class="col-xs-5  " style="padding-right: 0;">
                <label class="pws-login-label" for="">Age *</label>
                <input type="text" class="form-control pws-mobileinput" id="mobile_input_reg" placeholder="Age"  required>

              </div>

            </div>
          </div>


          <div class="form-group" style="margin-left: 30px;margin-right: 60px;">
            <label for="numberInput" class="pws-login-label">Address</label>
            <textarea rows="4" placeholder="Address" id="numberInput_reg"  class="form-control pws-mobileinput" ></textarea> 
          </div>


          <br>


          <button type="button" data-toggle="modal" data-target=".login-register-otp" id="pws_sendotp"   class="btn btn-default pws-update-btn pull-right">Update Changes</button>

        </form>

      </div>

      <div id="Contact" class="tabcontent">
        <br>
        <div style="padding-left: 30px;"> <h5>Contact Details *</h5></div>
        <form action="/">
          <div class="form-row" >
            <div class="col-xs-12" >
              <div class="col-xs-3 " >
               <label class="pws-login-label" for="">Code</label>
               <select class="custom-select pws-mobileinput" style="padding: 7px; width: 100%; outline: none;">
                <option selected>IND(+91)</option>
                <option value="1">IND(+91)</option>
                <option value="2">IND(+91)</option>

              </select>
            </div>
            <div class="col-xs-8  " style="padding-right: 0;">
              <label class="pws-login-label" for="">Mobile Number *</label>
              <input type="text" readonly="" class="form-control pws-mobileinput" id="mobile_input_reg" placeholder="Mobile Number"  required>

            </div>
          </div>
        </div>

        <div class="form-group" style="margin-left: 30px;margin-right: 60px">
          <label for="numberInput" class="pws-login-label">Email ID</label>
          <input type="text" class="form-control pws-mobileinput" id="numberInput_reg" aria-describedby="emailHelp" placeholder="Email ID">
        </div>




        <br>


        <button type="button" data-toggle="modal" data-target=".login-register-otp" id="pws_sendotp"   class="btn btn-default pws-update-btn pull-right">Update Changes</button>

      </form>

    </div>

    <div id="Settings" class="tabcontent">
      <h3>Settings</h3>
      <p>Settings.</p>
    </div>











  </div>

  <div class="col-xs-3" style="margin-top: 20px;">
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
     <div class="col-xs-6">

       <img src="img/home_mobile_app_img.png" class="pws-mobille-app-ad">

     </div>
     <div class="col-xs-6 pws-text-sec">

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
      <div class="row">
        <div class=" col-xs-2">
          <h3> About Company </h3>
          <ul>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
          </ul>
        </div>
        <div class="  col-xs-2 ">
          <h3> Speciality </h3>
          <ul>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
          </ul>
        </div>
        <div class="  col-xs-2 ">
          <h3> Lorem Ipsum </h3>
          <ul>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
          </ul>
        </div>
        <div class=" col-xs-2 ">
          <h3> Lorem Ipsum </h3>
          <ul>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
            <li> <a href="#"> Lorem Ipsum </a> </li>
          </ul>
        </div>
        <div class="  col-xs-4  ">
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
</body>
</html>
