@extends('layouts.userapp')

@section('Title', 'Hospital Management')

@section('body')

@include('layouts.header')

<div class="container-full-bg" style="background-image:url('img/bg.jpg'); height: 550px;">
  <div class="container">
    <div class="pws-find-book"><h3><strong>Find And Book </strong></h3></div>
    <div class="pws-form-field">
      <form class="form-inline"  >
        <div class="form-group" style="margin-top: 10px;">
          <div class="left-inner-addon pws-addon" >
           <i class="fa fa-list-alt" style="color:#858586" aria-hidden="true"></i>
           <input type="text"  placeholder="Search doctors, speciality, etc."  class="pws-cat-field" id="category" >
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
  </div> 
</div>



 <div class="container">
  <div class="row" style="margin-top: 10px;">
    <div class="row">
      <div class="col-xs-9">
        <h4 style="color:#515353;font-family: 'Molengo', sans-serif;">Today Available Doctor's <span style="color: #7b7d7d"> ></span> </h4>
      </div>
      <div class="col-xs-3">
        <!-- Controls -->
        <div class="controls pull-right hidden-xs">
          <a class="left fa fa-chevron-left pws-arrw-btn" href="#carousel-pws-dr"
          data-slide="prev"></a><a class="right fa fa-chevron-right pws-arrw-btn" href="#carousel-pws-dr"
          data-slide="next"></a>
        </div>
      </div>
    </div>
    <div id="carousel-pws-dr" class="carousel slide hidden-xs" data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <div class="row">
            <div class="col-xs-3">
              <div class="col-item">
                <div class="photo">
                  <img src="img/drname.jpg" class="img-responsive" alt="a" />
                </div>
                <div class="info">
                  <div class="row">
                    <div class="cat col-xs-12" ">
                      <h4>Dr.Ashraful Haque</h4>
                      <h6 style="color:#515353;">MBBS,MD (Gen Med), DM  (Cardiology)</h6>
                    </div> 
                  </div>

                  <div class="separator clear-left">
                    <p class="btn-add" >
                      <i class="fa fa-bolt" aria-hidden="true"></i><a href="#" class="hidden-sm">Book Now</a></p>
                    </div>
                    <div class="clearfix">
                    </div>
                  </div>
                </div>
              </div>




              <div class="col-xs-3">
                <div class="col-item">
                  <div class="photo">
                    <img src="img/drname.jpg" class="img-responsive" alt="a" />
                  </div>
                  <div class="info">
                    <div class="row">
                      <div class="cat col-xs-12">
                        <h4>Dr.Ashraful Haque</h4>
                        <h6 style="color:#515353;">MBBS,MD (Gen Med), DM  (Cardiology)</h6>
                      </div> 
                    </div>
                    <div class="separator clear-left">
                      <p class="btn-add">
                        <i class="fa fa-bolt" aria-hidden="true"></i><a href="#" class="hidden-sm">Book Now</a></p>
                      </div>
                      <div class="clearfix">
                      </div>
                    </div>
                  </div>
                </div>


                <div class="col-xs-3">
                  <div class="col-item">
                    <div class="photo">
                      <img src="img/drname.jpg" class="img-responsive" alt="a" />
                    </div>
                    <div class="info">
                      <div class="row">
                        <div class="cat col-xs-12">
                          <h4>Dr.Ashraful Haque</h4>
                          <h6 style="color:#515353;">MBBS,MD (Gen Med), DM  (Cardiology)</h6>
                        </div> 
                      </div>
                      <div class="separator clear-left">
                        <p class="btn-add">
                          <i class="fa fa-bolt" aria-hidden="true"></i><a href="#" class="hidden-sm">Book Now</a></p>
                        </div>
                        <div class="clearfix">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-xs-3">
                    <div class="col-item">
                      <div class="photo">
                        <img src="img/drname.jpg" class="img-responsive" alt="a" />
                      </div>
                      <div class="info">
                        <div class="row">
                          <div class="cat col-xs-12">
                            <h4>Dr.Ashraful Haque</h4>
                            <h6 style="color:#515353;">MBBS,MD (Gen Med), DM  (Cardiology)</h6>
                          </div> 
                        </div>
                        <div class="separator clear-left">
                          <p class="btn-add">
                            <i class="fa fa-bolt" aria-hidden="true"></i><a href="#" class="hidden-sm">Book Now</a></p>
                          </div>
                          <div class="clearfix">
                          </div>
                        </div>
                      </div>
                    </div> 
                  </div>
                </div>


                <div class="item">
                  <div class="row">
                    <div class="col-xs-3">
                      <div class="col-item">
                        <div class="photo">
                          <img src="img/drname.jpg" class="img-responsive" alt="a" />
                        </div>
                        <div class="info">
                          <div class="row">
                            <div class="cat col-xs-12">
                              <h4>Dr.Ashraful Haque</h4>
                              <h6 style="color:#515353;">MBBS,MD (Gen Med), DM  (Cardiology)</h6>
                            </div> 
                          </div>
                          <div class="separator clear-left">
                            <p class="btn-add">
                              <i class="fa fa-bolt" aria-hidden="true"></i><a href="#" class="hidden-sm">Book Now</a></p>
                            </div>
                            <div class="clearfix">
                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="col-xs-3">
                        <div class="col-item">
                          <div class="photo">
                            <img src="img/drname.jpg" class="img-responsive" alt="a" />
                          </div>
                          <div class="info">
                            <div class="row">
                              <div class="cat col-xs-12">
                                <h4>Dr.Ashraful Haque</h4>
                                <h6 style="color:#515353;">MBBS,MD (Gen Med), DM  (Cardiology)</h6>
                              </div> 
                            </div>
                            <div class="separator clear-left">
                              <p class="btn-add">
                                <i class="fa fa-bolt" aria-hidden="true"></i><a href="#" class="hidden-sm">Book Now</a></p>
                              </div>
                              <div class="clearfix">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-xs-3">
                          <div class="col-item">
                            <div class="photo">
                              <img src="img/drname.jpg" class="img-responsive" alt="a" />
                            </div>
                            <div class="info">
                              <div class="row">
                                <div class="cat col-xs-12">
                                  <h4>Dr.Ashraful Haque</h4>
                                  <h6 style="color:#515353;">MBBS,MD (Gen Med), DM  (Cardiology)</h6>
                                </div> 
                              </div>
                              <div class="separator clear-left">
                                <p class="btn-add">
                                  <i class="fa fa-bolt" aria-hidden="true"></i><a href="#" class="hidden-sm">Book Now</a></p>
                                </div>
                                <div class="clearfix">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-xs-3">
                            <div class="col-item">
                              <div class="photo">
                                <img src="img/drname.jpg" class="img-responsive" alt="a" />
                              </div>
                              <div class="info">
                                <div class="row">
                                  <div class="cat col-xs-12">
                                    <h4>Dr.Ashraful Haque</h4>
                                    <h6 style="color:#515353;">MBBS,MD (Gen Med), DM  (Cardiology)</h6>
                                  </div> 
                                </div>
                                <div class="separator clear-left">
                                  <p class="btn-add">
                                    <i class="fa fa-bolt" aria-hidden="true"></i><a href="#" class="hidden-sm">Book Now</a></p>
                                  </div>
                                  <div class="clearfix">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <br>
                <hr style="color: #7b7d7d;">
                <br>

        <div class="container">
          <div class="row" style="margin-top: 10px;">
            <div class="row">
              <div class="col-xs-9">
                <h4 style="color:#515353;font-family: 'Molengo', sans-serif;">Hospital Specialized For <span style="color: #7b7d7d"> ></span> </h4>
              </div>
              <div class="col-xs-3">
                <!-- Controls -->
                <div class="controls pull-right hidden-xs">
                  <a class="left fa fa-chevron-left btn pws-arrw-btn" href="#carousel-pws"
                  data-slide="prev"></a><a class="right fa fa-chevron-right btn pws-arrw-btn" href="#carousel-pws"
                  data-slide="next"></a>
                </div>
              </div>
            </div>
            <div id="carousel-pws" class="carousel slide hidden-xs" data-ride="carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <div class="row">
                  <div class="col-xs-3">
                    <div class="col-item">
                      <div class="photo">
                        <img src="img/Dental.jpg" class="img-responsive" alt="a" />
                      </div>
                      <div class="info">
                        <div class="row">
                          <div class="cat col-xs-12" ">
                            <h4>Dental</h4>
                          </div> 
                        </div>
                        <div class="separator clear-left">
                          <p class="btn-bk">
                            <i class="fa fa-bolt" aria-hidden="true"></i><a href="#" class="hidden-sm">Book Now</a></p>
                            <p class="btn-details">
                              <i class="fa fa-list"></i><a href="#">More details</a></p>
                            </div>
                            <div class="clearfix">
                            </div>
                          </div>
                        </div>
                      </div>




          <div class="col-xs-3">
            <div class="col-item">
              <div class="photo">
                <img src="img/eye-test-3.jpg" class="img-responsive" alt="a" />
              </div>
              <div class="info">
                <div class="row">
                  <div class="cat col-xs-12">
                    <h4>Eye Care</h4>
                  </div> 
                </div>
                <div class="separator clear-left">
                  <p class="btn-bk">
                    <i class="fa fa-bolt" aria-hidden="true"></i><a href="#" class="hidden-sm">Book Now</a></p>
                    <p class="btn-details">
                      <i class="fa fa-list"></i><a href="#">More details</a></p>
                    </div>
                    <div class="clearfix">
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-xs-3">
                <div class="col-item">
                  <div class="photo">
                    <img src="img/heart.jpg" class="img-responsive" alt="a" />
                  </div>
                  <div class="info">
                    <div class="row">
                      <div class="cat col-xs-12">
                        <h4>Cardiology</h4>
                      </div> 
                    </div>
                    <div class="separator clear-left">
                      <p class="btn-bk">
                        <i class="fa fa-bolt" aria-hidden="true"></i><a href="#" class="hidden-sm">Book Now</a></p>
                        <p class="btn-details">
                          <i class="fa fa-list"></i><a href="#">More details</a></p>
                        </div>
                        <div class="clearfix">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-xs-3">
                    <div class="col-item">
                      <div class="photo">
                        <img src="img/otology.jpg" class="img-responsive" alt="a" />
                      </div>
                      <div class="info">
                        <div class="row">
                          <div class="cat col-xs-12">
                            <h4>Ear-Nose-Throat (ENT)</h4>
                          </div> 
                        </div>
                        <div class="separator clear-left">
                          <p class="btn-bk">
                            <i class="fa fa-bolt" aria-hidden="true"></i><a href="#" class="hidden-sm">Book Now</a></p>
                            <p class="btn-details">
                              <i class="fa fa-list"></i><a href="#">More details</a></p>
                            </div>
                            <div class="clearfix">
                            </div>
                          </div>
                        </div>
                      </div> 
                    </div>
                  </div>


      <div class="item">
        <div class="row">
          <div class="col-xs-3">
            <div class="col-item">
              <div class="photo">
                <img src="img/otology.jpg" class="img-responsive" alt="a" />
              </div>
              <div class="info">
                <div class="row">
                  <div class="cat col-xs-12">
                    <h4>Dental</h4>
                  </div> 
                </div>
                <div class="separator clear-left">
                  <p class="btn-bk">
                    <i class="fa fa-bolt" aria-hidden="true"></i><a href="#" class="hidden-sm">Book Now</a></p>
                    <p class="btn-details">
                      <i class="fa fa-list"></i><a href="#">More details</a></p>
                    </div>
                    <div class="clearfix">
                    </div>
                  </div>
                </div>
              </div>


      <div class="col-xs-3">
        <div class="col-item">
          <div class="photo">
            <img src="img/otology.jpg" class="img-responsive" alt="a" />
          </div>
          <div class="info">
            <div class="row">
              <div class="cat co-xs-12">
                <h4>Dental</h4>
              </div> 
            </div>
            <div class="separator clear-left">
              <p class="btn-bk">
                <i class="fa fa-bolt" aria-hidden="true"></i><a href="#" class="hidden-sm">Book Now</a></p>
                <p class="btn-details">
                  <i class="fa fa-list"></i><a href="#">More details</a></p>
                </div>
                <div class="clearfix">
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-3">
            <div class="col-item">
              <div class="photo">
                <img src="img/otology.jpg" class="img-responsive" alt="a" />
              </div>
              <div class="info">
                <div class="row">
                  <div class="cat col-xs-12">
                    <h4>Dental</h4>
                  </div> 
                </div>
                <div class="separator clear-left">
                  <p class="btn-bk">
                    <i class="fa fa-bolt" aria-hidden="true"></i><a href="#" class="hidden-sm">Book Now</a></p>
                    <p class="btn-details">
                      <i class="fa fa-list"></i><a href="#">More details</a></p>
                    </div>
                    <div class="clearfix">
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xs-3">
                <div class="col-item">
                  <div class="photo">
                    <img src="img/otology.jpg" class="img-responsive" alt="a" />
                  </div>
                  <div class="info">
                    <div class="row">
                      <div class="cat col-xs-12">
                        <h4>Dental</h4>
                      </div> 
                    </div>
                    <div class="separator clear-left">
                      <p class="btn-bk">
                        <i class="fa fa-bolt" aria-hidden="true"></i><a href="#" class="hidden-sm">Book Now</a></p>
                        <p class="btn-details">
                          <i class="fa fa-list"></i><a href="#">More details</a></p>
                        </div>
                        <div class="clearfix">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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






       <!-- Login / Register Modal-->
       <div class="modal fade login-register-form" role="dialog">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">
                <img src="img/close.png" width="30" height="30"> 
              </button>
              <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" id="login-tab" href="#login-form"> Login</a></li>
                <li><a data-toggle="tab" href="#registration-form" id="reg-tab"> Register </a></li>
              </ul>
            </div>
            <br>
            <div class="modal-body">
              <div class="tab-content">
                <div id="login-form" class="tab-pane fade in active">
                  <form action="{{ route('user.auth') }}" method="POST">

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
                    <input type="checkbox" id="otp_check">
                    <span class="checkmark"></span>
                  </label>
                  <br>

                  <button type="button"   class="btn btn-default pws-login-btn" id="pws-login">Login</button>
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
                  <button type="button"   class="btn btn-default pws-login-btn">Login</button>
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
                    <div class="col-md-4 " style="padding-left: 0;">
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




        <!-- Login / Register Modal-->
     <!--  <div class="modal fade login-register-otp" role="dialog">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">
                <img src="img/close.png" width="30" height="30"> 
              </button>
              <ul class="nav nav-tabs">
                <li><a data-toggle="tab" href="#registration-form"> Register </a></li>
              </ul>
            </div>
            <br>
            <div class="modal-body">
              <div class="tab-content">
                <div id="login-otp" class="tab-pane fade in active">
                  <form action="/">
                    <div class="form-group">
                      <label for="passwordInput" class="pws-login-label">We have send you an OTP on</label>
                      <h5 style="color: #8a8e8d">+91 9824654544</h5>
                    </div>
                    <div class="form-group">
                      <label for="numberInput" class="pws-login-label">OTP</label>
                      <input type="text" class="form-control pws-mobileinput-otp" id="otpnumberInput" aria-describedby="otpinput" placeholder="Please enter 6 digit OTP here to varify">
                    </div>
                    <h6 class="pull-left ">Still not recieved OTP? <a href="#" class="pws-terms"> Get via call </a> </h6>
                    <button type="submit"   class="btn btn-default pws-login-btn">Login</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    -->
@endsection

@section('jquery')

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
  <script>
  var category = [
  'Dentist', 'Dermatologist', 'Gynecologist/Obstetrician', 'Gynecologist/Obstetrician','Cardiologist','Psychiatrist','Gastroenterologist','Ear-Nose-Throat (ENT)','Neurologist','Urologist','Physiotherapist','Orthodontist'
  ];

  // $('#category').autocomplete({
  // source:[category]
  // });

$( "#category" ).autocomplete({
    source : category,
    minLength: 3,
    select: function(event, ui) {
      $('#category').val(ui.item.value);
    }

  const pickerCheckIn = datepicker('#datepicker');

  // Update the current year in copyright


  </script>

  <script>
  $(document).ready(function(){
  $("#pws_sendotp").click(function(){
  document.getElementById("login-otp").style.display = 'block';
  document.getElementById("registration-form").style.display = 'none';
  $("#login-tab").hide();


  });
  });



//OTP function  to get form

function otp_varify(){
 document.getElementById("login-otp").style.display = 'block';
 document.getElementById("login-form").style.display = 'none';
 $("#reg-tab").hide();
}




$('#otp_check').change(function(){
 $("#passwordInput").prop("disabled", $(this).is(':checked'));
});



//check whether checkbox is checked or not

$(document).ready(function() {
  $("#pws-login").click(function() {
    if($("#otp_check").is(':checked'))
           otp_varify();
            //alert('checked');
            else
          //call login function
        alert('unchecked');
      });
});


$('.carousel').carousel({
  interval: false
}); 
</script>
@endsection