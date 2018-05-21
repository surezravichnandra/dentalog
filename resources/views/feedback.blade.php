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
          <!-- <div class="pws-subnav">

          </div> -->
        </nav>
        <br>
        <div class="container">
          <div class="row">
           <div class="col-xs-12">
             <div class="col-xs-9">


              <div class="container card pws-card-top">

                <div class="pws-card-profile">
                 <div class="row">
                  <div class="col-xs-12">
                    <form>
                      <h4>How was your appointment experience  with <b> Dr. Kamal Odedra </b>? </h4>



                      <div class="form-group">
                        <label for="numberInput" class="pws-login-label"><span class="pws-feedback-qn">Q1.</span>&nbsp;Would you like to recommend the doctor?<span class="text-danger">*</span></label><br>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons" style="margin-left: 30px;">
                          <label class="btn btn-default active">
                            <input name="options" id="likeup" autocomplete="off" checked="" type="radio"><i class="fa fa-thumbs-o-up" "></i>&nbsp;
                            YES
                          </label>
                          <label class="btn btn-default">
                            <input name="options" id="likedown" autocomplete="off" type="radio"><i class="fa fa-thumbs-o-down" "></i>&nbsp; NO
                          </label>
                        </div>


                      </div>

                      <div class="form-group">
                        <label for="numberInput" class="pws-login-label"><span class="pws-feedback-qn">Q2.</span>&nbsp;For which health problem/treatment did you visit?<span class="text-danger">*</span> </label>
                        <input type="text" class="form-control pws-mobileinput " style="width: 350px;margin-left: 30px;" id="feedback" aria-describedby="emailHelp" placeholder="eg. Stomach Ache,body pain">


                      </div>


                      <span class="pws-feedback-qn">Q3.</span>&nbsp;For which health problem/treatment did you visit?<span class="text-danger">*</span><br>
                      <div style="margin-left: 30px;">
                        <div class="form-check">
                          <label class="pws-login-label" >
                            <input class="form-check-input" value="" checked="" type="checkbox">
                            Doctor Friendliness
                          </label>
                        </div>
                        <div class="form-check">
                          <label  class="pws-login-label">
                            <input class="form-check-input" value="" checked="" type="checkbox">
                            Explanation of health issue
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="pws-login-label" >
                            <input class="form-check-input" value="" checked="" type="checkbox">
                            Treatment Satisfaction
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="pws-login-label" >
                            <input class="form-check-input" value="" checked="" type="checkbox">
                            Value of Money
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="pws-login-label" >
                            <input class="form-check-input" value="" checked="" type="checkbox">
                            Wait Time
                          </label>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="numberInput" class="pws-login-label"><span class="pws-feedback-qn">Q4.</span>&nbsp;Tell us about your experience with the Doctor </label>
                        <textarea class="form-control pws-mobileinput"  style="width: 350px; margin-left: 30px;" rows="4" ></textarea>
                      </div>
                      <div class="form-group">
                        <label for="numberInput" class="pws-login-label"><span class="pws-feedback-qn">Q5.</span>&nbsp;Rate Doctor?<span class="text-danger">*</span></label>
                        <div class="star-rating">
                          <span class="fa fa-star-o" data-rating="1"></span>
                          <span class="fa fa-star-o" data-rating="2"></span>
                          <span class="fa fa-star-o" data-rating="3"></span>
                          <span class="fa fa-star-o" data-rating="4"></span>
                          <span class="fa fa-star-o" data-rating="5"></span>
                          <input type="hidden" name="whatever1" class="rating-value" value="2.56">
                        </div>
                      </div>

                      <button type="button" class="btn pws-btn-appointment pull-right" >Submit feedback</button>
                    </form>

                  </div>
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
          <div class=" col-xs-2 6">
            <h3> About Company </h3>
            <ul>
              <li> <a href="#"> Lorem Ipsum </a> </li>
              <li> <a href="#"> Lorem Ipsum </a> </li>
              <li> <a href="#"> Lorem Ipsum </a> </li>
              <li> <a href="#"> Lorem Ipsum </a> </li>
            </ul>
          </div>
          <div class="col-xs-2 ">
            <h3> Speciality </h3>
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
          <div class=" col-xs-2 ">
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




    var $star_rating = $('.star-rating .fa');

    var SetRatingStar = function() {
      return $star_rating.each(function() {
        if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
          return $(this).removeClass('fa-star-o').addClass('fa-star');
        } else {
          return $(this).removeClass('fa-star').addClass('fa-star-o');
        }
      });
    };

    $star_rating.on('click', function() {
      $star_rating.siblings('input.rating-value').val($(this).data('rating'));
      return SetRatingStar();
    });

    SetRatingStar();
    $(document).ready(function() {

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
