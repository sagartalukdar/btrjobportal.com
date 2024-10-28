<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>BTR Job Portal- Job Portal for Employment Seeker and Recruiter</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="../images/btr-logo.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="font/flaticon.css">
	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
	<!-- Custom CSS -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="custom.css">
</head>

<body>
    <div id="preloader" class="preloader">
        <div class='inner'>
            <div class='line1'></div>
            <div class='line2'></div>
            <div class='line3'></div>
        </div>
    </div>
     <style type="text/css">
    	/* Define a CSS class for the input field with the GIF icon */
.with-icon {
    background-image: url('img/user.gif'); /* Replace with the path to your GIF */
    background-size: 40px 40px; /* Adjust the size of the GIF as needed */
    background-repeat: no-repeat;
    background-position: 10px center; /* Adjust the positioning as needed */
    padding-left: 50px; /* Adjust padding to make room for the icon */
}
.with-icon2 {
    background-image: url('img/password.gif'); /* Replace with the path to your GIF */
    background-size: 40px 40px; /* Adjust the size of the GIF as needed */
    background-repeat: no-repeat;
    background-position: 10px center; /* Adjust the positioning as needed */
    padding-left: 50px; /* Adjust padding to make room for the icon */
}
.with-icon3 {
    background-image: url('img/email.gif'); /* Replace with the path to your GIF */
    background-size: 40px 40px; /* Adjust the size of the GIF as needed */
    background-repeat: no-repeat;
    background-position: 10px center; /* Adjust the positioning as needed */
    padding-left: 50px; /* Adjust padding to make room for the icon */
}
.with-icon4 {
    background-image: url('img/phone.gif'); /* Replace with the path to your GIF */
    background-size: 40px 40px; /* Adjust the size of the GIF as needed */
    background-repeat: no-repeat;
    background-position: 10px center; /* Adjust the positioning as needed */
    padding-left: 50px; /* Adjust padding to make room for the icon */
}
.with-icon1 {
    background-image: url('img/profile.gif'); /* Replace with the path to your GIF */
    background-size: 40px 40px; /* Adjust the size of the GIF as needed */
    background-repeat: no-repeat;
    background-position: 10px center; /* Adjust the positioning as needed */
    padding-left: 50px; /* Adjust padding to make room for the icon */
}
.down-greater-than{
	position: absolute;
  z-index: 1;
  right: 12px;
  top: 50%;
  color: #9f9f9f;
  font-size: 14px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
.down-greater-than {
    font-family: Arial, sans-serif; /* Use a font that supports Unicode characters */
}

    </style>
	<section class="fxt-template-animation fxt-template-layout10">
		<div class="container-fluid">
			<div class="row">
				
				<div class="col-md-3 col-12 order-md-1 fxt-bg-color">
					<div class="fxt-content">
						<div class="fxt-header">
						<a href="login-10.html" class="fxt-logo"><img src="../images/btr-logo.png" alt="Logo" style="max-width: 130px"></a>
						
					</div>
						<div class="fxt-form">
							<h2>Login/Signup</h2>
							<p style="color: red">( Registration form )</p>
							<form method="POST" id="myform" action="" >
								<div class="form-group">
								    <div class="fxt-transformY-50 fxt-transition-delay-3">
								    	<select name="userType" id="userType" class="form-control with-icon1" required="required">
								    		<!-- <option value="" hidden>Sign in as a </option> -->
								    		<option value="" selected disabled>Register as a </option>   
								    		<!-- <option value="ADMIN">ADMIN</option> -->
								    		<option value="APPLICANT">Job Seeker </option>
								    		<!-- <option value="COUNSELLOR">Counsellor </option> -->
								    		<option value="COMPANY">Company/Employer </option>
								    	</select>
								       <span class="down-greater-than">&#x25BC;</span>

								    </div>
								</div>
								<!-- <div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-3">
										<input type="text" class="form-control with-icon" id="name" name="name" placeholder="Name" >
									</div>
								</div> -->
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-3">
										<input type="email" id="email" class="form-control with-icon3" name="email" placeholder="Email Address" >
										<span id="email-error" class="error-message"></span>
										<button type="button" id="email-btn" style="margin-top: 10px" name="submit" class="verify_email">Verify email </button>
									</div>


                                    <div id="otp-form" class="col-md-12 col-12 order-md-2" style="    margin-top: 10px; ">

                                        <form action="" method="post" >
                                            <div class="col-md-6 col-12" style="margin: 10px 0; display: inline-block;">
                                                <input type="text" id="otp" class="form-control with-icon3" name="otp" placeholder="Enter OTP" >
                                           </div> 

                                           <div class="col-md-6 col-12" style="margin: 10px;">
                                                <button type="submit" name="otp-submit" id="otp-submit" class="verify_email">Enter</button>
                                            </div>

                                        </form>

                                    </div>

								</div>

                             <div class="hide-input">

                                    <div class="form-group">
                                        <div class="fxt-transformY-50 fxt-transition-delay-3">
                                            <input type="phone" id="phone" class="form-control with-icon4" name="phone" placeholder="Phone Number" >
                                            <span id="phone-error" class="error-message"></span>
                                            
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="fxt-transformY-50 fxt-transition-delay-4">
                                            <input id="password" type="password" class="form-control with-icon2" name="password" placeholder="********" >
                                            <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                        </div>
                                    </div>

                             </div>
                             
								<!-- <div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-3">
										<div class="fxt-checkbox-area">
											<div class="checkbox">
												<input id="checkbox1" type="checkbox">
												<label for="checkbox1" style="color: #0d6efd;">Keep me logged in</label>
											</div>
										</div>
									</div>
								</div> -->
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-5">
										<div class="text-center">
											<button type="" id="register" class="fxt-btn-fill">Sign up </button>
											<button type="" id="register2" class="fxt-btn-fill">Sign up </button>
											 <p id="formErrorMessage" style="color:red"></p>
										</div>
										<p>Already have an account?<a style="color: #0d6efd;" href="login.php"> Login Here</a></p>
										
									</div>
								</div>
							</form>
						</div>
						
					</div>
				</div>
				<div class="col-md-9 col-12 order-md-2 fxt-bg-img" data-bg-image="">
					<!-- slider -->
					<div class="slider">
					    <div class="slide slider1">
					    	<div class="row">
	                          
	                        <div class="col-4">
	                         <h1 class="head animate__animated animate__backInRight animate__delay-0s">Welcome! to BTR job portal</h1>
	                         <p class="animate__animated animate__zoomIn animate__delay-0.5s">portal for job seeker and job provider</p>
	                       </div>
	                       <div class="col-8">
	                           <a href="#" class="fxt-logo"><img class="animate__animated animate__fadeInDown animate__delay-0.5s" src="img/img7.jpg" alt="Logo"></a>
	                        </div>
							</div>
					    </div>
	                   <div class="slide slider2">
	                       <div class="row">
	                          <div class="col-6">

	                           <a href="#" class="fxt-logo"><img class="animate__animated animate__fadeInDown animate__delay-0.5s" src="img/work.gif" alt="Logo"></a>
	                        </div>
	                        <div class="col-6">
	                        	<img src="img/shape/shp1.png">

	                         <h1 class="head animate__animated animate__backInUp animate__delay-0s">Job Related</h1>
	                         <p class="animate__animated animate__zoomIn animate__delay-0.5s">portal for job seeker and job provider</p>
	                       </div>
	                    </div>

	                    </div>
	                    <div class="slide slider3">
	                    	<div class="row">
	                          <div class="col-6">
	                           <a href="#" class="fxt-logo"><img class="animate__animated animate__fadeInDown animate__delay-0.5s" src="img/img3.png" alt="Logo"></a>
	                           
	                          </div>
	                           <div class="col-6">
	                         <h1 class="head animate__animated animate__backInRight animate__delay-0s">All kinds of JOB</h1>
	                         <p class="animate__animated animate__zoomIn animate__delay-0.5s">Skill basis jobs</p>
	                         <ul>
	                         	<li><i class='fa  fa-check' style='color: green'></i> Electrician</li>
	                         	<li><i class='fa  fa-check' style='color: green'></i> Computer Operator</li>
	                         	<li><i class='fa  fa-check' style='color: green'></i> Technician</li>
	                         	<li><i class='fa  fa-check' style='color: green'></i> Fitter</li>
	                         </ul>
	                          
	                          </div>
	                      </div>
	                   
	                    </div>
	                </div>

					<!-- slider ends -->
					
					
				</div>
			</div>
		</div>
	</section>
	<style type="text/css">
	
		.slider .slide {
		    display: none;
		}

		.slider .slider1 {
		    display: block;
		}
        #email-btn , .hide-input, #otp-form,#register{
            display: none;
        }


	</style>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    // Function to rotate the slides with "fade out up" effect
    function rotateSlides() {
        var currentSlide = $('.slider .slide:visible');
        var nextSlide = currentSlide.next('.slide');
        
        if (nextSlide.length === 0) {
            nextSlide = $('.slider .slide:first');
        }
        
        // Apply "fade out up" effect
        currentSlide.animate({
            opacity: 0,  // Fading out
            marginTop: '-150px'  // Moving up by 20 pixels
        }, 500, function () {
            currentSlide.hide();  // Hide the current slide after the animation
            nextSlide.css({ opacity: 0, marginTop: '20px' }); // Prepare the next slide
            nextSlide.show();  // Show the next slide
            // Apply "fade in down" effect to the next slide
            nextSlide.animate({
                opacity: 1,  // Fading in
                marginTop: '0'  // Moving down to the normal position
            }, 500);
        });
    }

    // Rotate the slides every 5 seconds (adjust the time interval as needed)
    setInterval(rotateSlides, 5000);
});

</script>


	</script>
	<!-- jquery-->
	<script src="js/jquery.min.js"></script>
	<!-- Bootstrap js -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Imagesloaded js -->
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<!-- Validator js -->
	<script src="js/validator.min.js"></script>
	<!-- Custom Js -->
	<script src="js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<!-- Sweet Alert -->
    <script src="../plugins/sweetalert/sweetalert2.min.js"></script>
    <script src="../plugins/sweetalert/sweetalert2-init.js"></script>
    <script src="../plugins/nicescroll/jquery.nicescroll.min.js"></script>

	<script type="text/javascript">
			$(document).ready(function() {
			    $('#myform').submit(function(event) {
			        event.preventDefault(); // Prevent form submission

			        // Perform form validation if needed

			        // Example: Get form data
			        var formData = $(this).serialize();
			        console.log(formData);

			        // Example: Perform AJAX form submission
			        /*
			        $.ajax({
			            url: 'your_server_endpoint',
			            type: 'POST',
			            data: formData,
			            success: function(response) {
			                // Handle success response
			            },
			            error: function(xhr, status, error) {
			                // Handle error response
			            }
			        });
			        */
			    });
			});
	</script>
	<script type="text/javascript">
		document.addEventListener("DOMContentLoaded", function() {
			var form = document.getElementById("myform");
			if (form) {
			    form.reset();
		    }
		});

	</script>
	
		<script>
$(document).ready(function () {
    $('#userType').on('change', function () {
        var userType = $(this).val();
        console.log(userType);

        $('#email').val(''); 
        $('#email').attr('placeholder','Enter email'); 
        $('#phone').val(''); 
    });

   
    $('#email').on('blur', function () {
        var email = $(this).val();
        var userType = $('#userType').val(); 
        console.log(userType);
        $.ajax({
            url: 'xhr/validate-email.php', 
            type: 'POST',
            data: { email: email, userType: userType }, 
            success: function (response) {
                if (response === 'invalid') {
                    $('#email-btn').hide();
                    $('#email-error').text('Invalid Email address').css('color', 'red');
                    $("#register").prop("disabled", true);
                } else if (response === 'exists') {
                    $('#email-btn').hide();
                    $('#email-error').text('Email already exists').css('color', 'red');
                    $("#register").prop("disabled", true);
                } else if(response==='valid'){
                    $('#email-btn').show();
                    $('#register').hide();
                    // $('#otp-form').show();
                    // $('.hide-input').show();
                     
                    $('#email-error').text('').css('color', ''); 
                    $("#register").prop("disabled", false);
                }
            }
        });
    });


    
   
   

    $('#phone').on('blur', function () {
        var phone = $(this).val();
        var userType = $('#userType').val(); 
        $.ajax({
            url: 'xhr/validate-phone.php', 
            type: 'POST',
            data: { phone: phone, userType: userType }, 
            success: function (response) {
                if (response === 'invalid') {
                    $('#phone-error').text('Invalid Phone Number').css('color', 'red');
                    $("#register").prop("disabled", true);
                } else if (response === 'exists') {
                    $('#phone-error').text('Phone Number already exists').css('color', 'red');
                    $("#register").prop("disabled", true);
                } else {
                    $('#phone-error').text('').css('color', ''); 
                    $("#register").prop("disabled", false);
                }
            }
        });
    });
});
</script>
	<script>
$(document).ready(function(){
    // Initially hide the email button
    // $('#email-btn').hide();



    $('#email-btn').on('click', function (){
        var email = $("#email").val();
        var formData = new FormData();
        formData.append('email', email);

        $.ajax({
            url: "xhr/email-otp.php",
            type: "POST",
            data: formData,
            dataType: "json",
            processData: false,
            contentType: false,
            success: function (response) {
                if (response.successMessage) {
                    // showSuccessMessage ();
                    swal("Success!", response.successMessage);
                    $('#email-btn').hide();
                $('#otp-form').show();
               $('#loading').hide();
               startCountdown();
                    // setTimeout(function () {
                    //     window.location.reload();
                    // }, 3000);

                } else if (response.errorMessage) {
                    swal("Error!", response.errorMessage, "error");
                    $("#add-user-dummy").css("display", "none");
                    $("#add-user").css("display", "inline-block");
                }

            },
            error: function (error) {
                swal("Error!", "Something went wrong", "error");

            },
            error: function(xhr, status, error) {
                // Handle error here
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'An error occurred while sending the email.'
                });

                $('#email-btn').hide();
                    $('#otp-form').show();
            }
        });
    });


    $('#otp-submit').on('click', function (){
        var email = $("#email").val();
        var otp = $("#otp").val();
        var formData = new FormData();
        formData.append('email', email);
        formData.append('otp', otp);

        $.ajax({
            url: "xhr/verify-otp.php",
            type: "POST",
            data: formData,
            dataType: "json",
            processData: false,
            contentType: false,
            success: function(response) {
                // Parse JSON response
                // var jsonResponse = JSON.parse(response);
                
                // Check if the mail was sent successfully
                if (response.status === 'success') {
                    // Success response
                    
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                       html: `${response.message}`
                    });

                   // $('#email-btn').hide();
                    $('#otp-form').hide();
                    $('#register2').hide();
                    $('#register').show();
                    $('.hide-input').show();
                    $('#email').hide();
                } else if(response.status === 'error')  {
                    // Error response
                  
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                       html: `${response.message}`
                    });
                }
            },
            error: function(xhr, status, error) {
                // Handle error here
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'An error occurred.'
                });

            }
        });
    });
    


});

</script>


<script>
        $(function () {
            $('#register').on('click', function () {
                // Retrieve form values
                // var name = $("#name").val();
                var email = $("#email").val();
                var phone = $("#phone").val();
                var password = $("#password").val();
                var userType = $("#userType").val();
                

                // Creating a FormData object for file upload
                var formData = new FormData();
                // formData.append('name', name);
                formData.append('email', email);
                formData.append('phone', phone);
                formData.append('password', password);
                formData.append('userType', userType);
                

                // Validating form fields
                if (email === "" || email === null || password === "" || password === null || phone === "" || phone === null ||  userType === "" || userType === null) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Registration Error',
                        text: 'Fill all the details to continue...'
                    });
                    return false;
                }

                
                $("#register").prop("disabled", true);

                // Making an AJAX request to the server
                $.ajax({
                    type: "POST",
                    processData: false,
                    contentType: false,
                    cache: false,
                    dataType: "json",
                    url: "xhr/registration.php",
                    mimeType: 'multipart/form-data',
                    data: formData,
                    success: function (response) {
                        // Handle the response from the server
                        if (response.status === 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Registration successful',
                                showConfirmButton: true,
                                timer: 2000
                            }).then(function () {
                                window.location.href = '../btrjob-admin/index.php';
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Registration failed',
                                html: `<span style="color: red;">${response.message}</span>`
                            });
                        }
                    },
                    error: function () {
                        Swal.fire({
                            icon: 'error',
                            title: 'Request failed',
                            text: 'Something went wrong'
                        });
                    },
                    complete: function () {
                        // Re-enable the button after request completion
                        $("#add-student").prop("disabled", false);
                    }
                });
            });
        });
    </script>

</body>

</html>