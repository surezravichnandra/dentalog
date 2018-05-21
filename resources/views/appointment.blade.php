
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

								<div class="container">
									<div class="row">
										<div class="col-xs-12">
											<div class="pws-container-app">
												<div class="col-xs-6">
													<div class=" card pws-card-top">
														<div class="pws-card-app">
															<div class="pull-left"><span><i class="fa fa-calendar-o" ></i></span> &nbsp;On <b>10th June ,2018</b></div>
															<div class="pull-right"><span><i class="fa fa-clock-o" "></i></span> &nbsp;At <b>12:30 PM</b></div>
															<br><br>
															<a href="#" class="linkachor" data-toggle="modal" data-target=".login-register-form" ><b>Change Date & Time</b></a>
															<hr>
															<div class="row">
																<div class="col-xs-2">
																	<div class="pws-card-image-app pull-left ">
																		<img src="img/drname.jpg" width="60" height="60"><br>
																		<!--  <a href="#" class="btn-add">View Profile</a> -->
																	</div>
																</div>
																<div class="col-xs-10">
																	<h5><b>Dr. Kamal Odedra</b></h5>
																	<h6 style="color: #8a8e8d">BDS, MDS - Conservative Dentistry - Dentist</h6>

																</div>
															</div>
															<hr>
															<div class="row">
																<div class="col-xs-9">
																	<div class="tile_div">
																		<a href="#" class="active-slotes">1</a>
																		<a href="#" class="active-slotes">2</a>
																		<a href="#" class="active-slotes">3</a>
																		<a href="#" class="active-slotes">4</a>
																		<a href="#" class="slotes">5</a>
																		<a href="#" class="slotes">6</a>
																		<a href="#" class="slotes">8</a>
																		<a href="#" class="slotes">9</a>
																		<a href="#" class="slotes">10</a>
																		<div class="clear"><br></div>
																		<a href="#" class="slotes">11</a>
																		<a href="#" class="slotes">12</a>
																		<a href="#" class="slotes">13</a>
																		<a href="#" class="slotes">14</a>
																		<a href="#" class="slotes">15</a>
																		<a href="#" class="slotes">16</a>
																		<a href="#" class="slotes">18</a>
																		<a href="#" class="slotes">19</a>
																		<a href="#" class="slotes">20</a>
																	</div>
																</div>
																<div class="col-xs-3">
																	<span class="pws-token"><h6>Your Token</h6></span>
																	<div class="pws-token-no"><h4>05</h4></div>


																</div>

															</div>


														</div>


													</div>



											      <div style="margin-top: 20px;font-weight: 600;font-size: 15px;padding-left: 10px;"><a href="#" class="linkachor">Go back to my result</a></div>
												</div>


												<div class="col-xs-6" >
													<h3><b>Confirm Appointment</b></h3>

													<form>
														<label class="radio-inline">
															<input type="radio"  checked name="opradio" id="selfradio">Self
														</label>
														<label class="radio-inline">
															<input type="radio" name="opradio" id="familyradio">For Family
														</label>

													</form>






													<form action="/" id="family-form" style="display: none;margin-top: 20px;"> 
														<div class="col-xs-12" >
															<div class="form-group">
																<label for="NameInput" class="pws-login-label">Full Name</label>
																<input type="text" class="form-control pws-mobileinput" id="NameInput" aria-describedby="emailHelp" placeholder="Full Name">
															</div>



															
															<div class="row">
																<div class="col-md-4 " >
																	<label class="pws-login-label" for="">Gender</label>
																	<select class="custom-select pws-mobileinput" style="padding: 7px; width: 100%; outline: none;">
																		<option selected>Male</option>
																		<option value="1">Female</option>

																	</select>
																</div>
																<div class="col-md-4 " >
																	<label class="pws-login-label" for="">Blood Group *</label>
																	<select class="custom-select pws-mobileinput" style="padding: 7px;width: 100%; outline: none;">
																		<option selected>A+</option>
																		<option value="1">B+)</option>
																		<option value="2">O+</option>
																		<option value="3">A-</option>
																	</select>

																</div>
																
																<div class="col-xs-3  " style="padding-right: 0;">
																	<label class="pws-login-label" for="">Age *</label>
																	<input type="text" class="form-control pws-mobileinput" id="mobile_input_reg" placeholder="Age"  required>

																</div>
															</div>



															
															<div class="form-group">
																<label for="numberInput" class="pws-login-label">MobileNumber / Email ID</label>
																<input type="text" class="form-control pws-mobileinput" id="numberInput" aria-describedby="emailHelp" placeholder="MobileNumber / Email ID">
															</div>


															<br>

															<button type="button"   class="btn btn-default pws-login-btn" id="pws_login">Done</button>

														</div>

													</form>
													<form action="/" id="self-form" style="margin-top: 20px;">
														

														<button type="button"   class="btn btn-default pws-login-btn" id="pws_login">Proceed &nbsp;<i class="fa fa-arrow-right" ></i></button>


												</form>

													</div>

											</div>



										</div>
									</div>
								</div>



							<!-- Change date and time-->
							<!-- <div class="modal fade login-register-form" role="dialog">
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">
												<img src="img/close.png" width="30" height="30"> 
											</button>

										</div>
										<br>
										<div class="modal-body" >
											
												<div id="login-form" class="tab-pane fade in active">
													<form action="/">

														<div class="form-group " style="margin-top: 10px;">
															<div class="left-inner-addon" style="padding-left: 10px;">
																<i class="fa fa-calendar" style="color:#858586" aria-hidden="true"></i>
																<input type="text"  placeholder="Pick Date" class="pws-date-field" id="datepicker" >
															</div>
														</div>
														<ul class="pws-slotes">
															<li><a  class="pws-slot-btn"  href="#">10:30 am to 12:30 pm </a></li>
															<li><a class="pws-slot-btn" id="active" href="#">10:30 am to 12:30 pm</a></li>
															<li><a class="pws-slot-btn" href="#">10:30 am to 12:30 pm</a></li>
															<li><a class="pws-slot-btn" href="#">10:30 am to 12:30 pm</a></li>
														</ul>



														<button type="button"   class="btn btn-default pws-login-btn" id="pws-login">Login</button>
													</form>
												

											</div>
										</div>
									</div>
								</div>
							</div> -->







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


								$(document).ready(function(){
									$("#selfradio").click(function(){
										document.getElementById("self-form").style.display = 'block';
										document.getElementById("family-form").style.display = 'none';

									});

									$("#familyradio").click(function(){
										document.getElementById("family-form").style.display = 'block';
										document.getElementById("self-form").style.display = 'none';

									});
								});
							</script>

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

@endsection