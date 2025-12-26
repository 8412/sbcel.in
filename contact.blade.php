@extends('front-end.layouts.app')
@section('title', 'SBCEL - Contact us')
@section('styles')
<style>
   .form-group {
   margin-top: 7px;
   }
   #loaderOverlay {
   position: fixed;
   top: 0;
   left: 0;
   right: 0;
   bottom: 0;
   background: rgba(255, 255, 255, 0.7);
   z-index: 9999;
   display: none;
   }
   .loader {
   position: absolute;
   top: 50%;
   left: 50%;
   border: 6px solid #f3f3f3;
   border-top: 6px solid #3498db;
   border-radius: 50%;
   width: 60px;
   height: 60px;
   animation: spin 1s linear infinite;
   transform: translate(-50%, -50%);
   }
   @keyframes spin {
   0% { transform: translate(-50%, -50%) rotate(0deg); }
   100% { transform: translate(-50%, -50%) rotate(360deg); }
   }
   .blur {
   filter: blur(3px);
   }
</style>
@endsection
@section('content')
 <!--Breadcrumb Area-->
		<section class="breadcrumb-area banner-6">
			<div class="text-block">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 v-center">
							<div class="bread-inner">
								<div class="bread-menu wow fadeInUp" data-wow-delay=".2s">
									<ul>
										<li><a href="{{ route('home') }}">Home</a></li>
										<li><a href="#">Contact</a></li>
									</ul>
								</div>
								<div class="bread-title wow fadeInUp" data-wow-delay=".5s">
									<h2>Contact us</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--End Breadcrumb Area-->

		<!--Start Enquire Form-->
		<section class="contact-page pad-tb">
			<div class="container">
				<div class="row justify-content-center">


					<div class="col-lg-5 contact2dv">

						<div class="info-wrapr">
							<h3 class="mb-4">Contact us</h3>
							<div class="dbox d-flex align-items-start">
								<div class="icon d-flex align-items-center justify-content-center">
									<i class="fas fa-map-marker"></i>
								</div>
								<div class="text pl-4">
									<p><span>Address:</span>204, Second Floor, Ansal Chamber-II, 6, Bhikaji Cama Place New Delhi – 110066</p>
								</div>
							</div>
							<div class="dbox d-flex align-items-start">
								<div class="icon d-flex align-items-center justify-content-center">
									<i class="fas fa-phone-alt"></i>
								</div>
								<div class="text pl-4">
									<p><span>Phone:</span> <a href="tel:+91 011-4352 3695">+91 011-4352 3695</a></p>
								</div>
							</div>
							<div class="dbox d-flex align-items-start">
								<div class="icon d-flex align-items-center justify-content-center">
									<i class="fas fa-envelope"></i>
								</div>
								<div class="text pl-4">
									<p><span>Email:</span> <a href="mailto:info@sbcel.com">info@sbcel.com</a></p>
								</div>
							</div>
							<div class="dbox d-flex align-items-start">
								<div class="icon d-flex align-items-center justify-content-center">
									<i class="fa fa-globe"></i>
								</div>
								<div class="text pl-4">
									<p><span>Website</span> <a href="#">www.sbcel.in</a></p>
								</div>
							</div>
						</div>

					</div>


					<div class="col-lg-7 m-mt30 pr30 pl30">
						<div class="common-heading text-l">							
							<h2 class="mt0 mb0">Get in touch</h2>
							<p class="mb60 mt10">We will catch you as early as we receive the message</p>
						</div>
						<div class="form-block">
							 <form class="pt-3" autocomplete="off" id="hometouchForm"  enctype="multipart/form-data">
								{{ csrf_field() }}
								<div class="row">
									<div class="form-group col-sm-6">
										<input type="text"  id="name" name="name" placeholder="Enter name" required data-error="Please fill Out">
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group col-sm-6">
										<input type="email"  id="email" name="email" placeholder="Enter email" required>
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-sm-6">
										<input type="text" id="mobile" name="mobile" placeholder="Enter mobile" required data-error="Please fill Out">
										<div class="help-block with-errors"></div>
									</div>
									
									<div class="form-group col-sm-6">
										<input type="text" id="Subject" name="Subject" placeholder="Enter Subject" required data-error="Please fill Out">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="form-group">
									<textarea id="message"  name="message" rows="5" placeholder="Enter your message" required></textarea>
									<div class="help-block with-errors"></div>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck" name="example1" checked="checked">
									<label class="custom-control-label" for="customCheck">I agree to the <a href="javascript:void(0)">Terms &amp; Conditions</a> of Business Name.</label>
								</div>
								<button type="submit" id="hometouchFormsubmit" class="btn lnk btn-main bg-btn">Submit</button>
								
								<div class="clearfix"></div>
								<p class="trm"><i class="fas fa-lock"></i>We hate spam, and we respect your privacy.</p>
							</form>
						</div>
					</div>



				</div>
			</div>
		</section>
		<!--End Enquire Form-->


		<!--Start Location
		<div class="contact-location">
			<div class="container-fluid">
				
				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="map-div">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113874.29338087817!2d75.72051791246247!3d26.885346595411875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1611838825763!5m2!1sen!2sin" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>
					</div>
				</div>


			</div>
		</div>
		End Location-->

   
@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   $(document).ready(function () {
       $('#hometouchForm').on('submit', function (e) {
           e.preventDefault(); // Prevent default form submit
   
           var form = this;
           var formData = new FormData(form);
           var submitBtn = $('#hometouchFormsubmit');
   
           // Disable button and show loading
           submitBtn.prop('disabled', true).text('Submitting...');
           $('#errorMsg').text('');
           $('#loginContainer').addClass('blur'); // optional blur effect
           $('#loaderOverlay').show(); // show loader overlay
   
           $.ajax({
               url: "{{ route('touch.submit') }}", // Laravel route
               type: "POST",
               data: formData,
               contentType: false,
               processData: false,
               dataType: 'json',
               success: function (response) {
                   submitBtn.prop('disabled', false).text('Submit');
                   $('#loginContainer').removeClass('blur');
                   $('#loaderOverlay').hide();
                   if (response.status === 'success') {
                       alert(response.message);
                   } else {
   					alert(response.message);  // Show success message
   					location.reload(); // this reloads the same page
                   }
               },
               error: function (xhr) {
                   submitBtn.prop('disabled', false).text('Submit');
                   $('#loginContainer').removeClass('blur');
                   $('#loaderOverlay').hide();
   
                   let errors = xhr.responseJSON.errors;
                   if (errors) {
                       let errorMessages = '';
                       $.each(errors, function (key, val) {
                           errorMessages += val[0] + "\n";
                       });
                       alert(errorMessages);
                   } else {
                       alert("Something went wrong. Try again.");
                   }
               }
           });
       });
   });
</script>
@endsection
