
application/x-httpd-php home.blade.php ( HTML document, UTF-8 Unicode text, with very long lines )
@extends('front-end.layouts.app')
@section('title', 'SBCEL - Home')
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

<!--Start Hero-->
<section class="hero-section hero-bg-bg1 bg-gradient dark-bg1">
   <div class="text-block">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 v-center">
               <div class="header-heading">
                  <h1 class="wow fadeInUp" data-wow-delay=".2s" style="text-align: center;">Empowering Growth with Technology, Talent & Digital Expertise</h1>
                  <p class="wow fadeInUp" data-wow-delay=".4s" style="text-align: center;">Empowering Businesses with AI, Technology & Digital ExcellenceBuilding intelligent software, delivering strategic consultancy, providing skilled manpower, and creating impactful digital presence — all under one roof.</p>
<div class="btn-wrapper" style="display: flex;justify-content: center;">
    <a href="#" class="btn-main bg-btn lnk wow fadeInUp" data-wow-delay=".6s">
        Explore Services <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span>
    </a>
</div>               </div>
            </div>
            <div class="col-lg-6 v-center">
               <div class="single-image wow fadeIn" data-wow-delay=".5s" style="margin-right: 46px;">
                  <img src="{{ asset('public/assets/images/hero/570x570.jpg') }}" alt="web development" class="img-fluid" />
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--End Hero-->
<!--Start About-->
<section class="about-agency pad-tb">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 v-center">
            <div class="image-block">
               <img src="{{ asset('public/assets/images/about/about-image.png') }}" alt="about" class="img-fluid no-shadow" />
            </div>
         </div>
         <div class="col-lg-6">
            <div class="common-heading text-l">
               <span>SBC Group at a Glance </span>
               <h2>About Us</h2>
               <p>Incorporated in 2011, SBC Exports Limited is a diversified group with majority business interests in IT and e-governance under the umbrella of SBC Group (www.sbcel.in).  
               </p>
               <p>As one of the few companies in this sector listed on NSE and BSE, SBCEL delivers end-to-end solutions across multiple domains, including:</p>			

			   <ul class="service-point-2 mt20 list-ul ul-check">					<li style="padding: 0 0px 12px 26px;">Software Development</li>					<li style="padding: 0 0px 12px 26px;">Information Technology</li>					<li style="padding: 0 0px 12px 26px;">Management Consultancy</li>					<li style="padding: 0 0px 12px 26px;">IT Consulting and e-Governance</li>					<li style="padding: 0 0px 12px 26px;">Project Rollout & Implementation</li>					<li style="padding: 0 0px 12px 26px;">HR: Assessment & Placement</li>					<li style="padding: 0 0px 12px 26px;">Social Media and Digital Presence</li>					<li style="padding: 0 0px 12px 26px;">Manpower Staffing & Outsourcing</li>				  </ul>
               
            </div>
         </div>
      </div>
   </div>
</section>
<!--End About-->
<!--Start Service-->
<section class="service-section web-servic pad-tb">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8">
            <div class="common-heading">
               <span>Services We’re Provided</span>
               <h2 class="mb30">Smart, Scalable Design & Development</h2>
            </div>
         </div>
      </div>
      <div class="row upset link-hover shape-num justify-content-center">
         <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.2s">
            <div class="s-block" data-tilt data-tilt-max="5" data-tilt-speed="1000">
               <div class="s-card-icon"><img src="{{ asset('public/assets/images/icons/Software-IT-Services.svg') }}" alt="service" class="img-fluid"/></div>
               <h4>Software & IT Services</h4>
               <p>We build intelligent, cloud-native software using modern engineering and secure DevOps pipelines.</p>
               <a href="{{ route('services.software') }}">View More <i class="fas fa-chevron-right fa-icon"></i></a>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s">
            <div class="s-block" data-tilt data-tilt-max="5" data-tilt-speed="1000">
               <div class="s-card-icon"><img src="{{ asset('public/assets/images/icons/development.jpg') }}" alt="service" class="img-fluid"/></div>
               <h4>Management & Consultancy</h4>
               <p>Empowering organizations with strategic guidance, data-driven decisions, and end-to-end process transformation.</p>
               <a href="{{ route('services.management') }}">View More <i class="fas fa-chevron-right fa-icon"></i></a>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.6s">
            <div class="s-block" data-tilt data-tilt-max="5" data-tilt-speed="1000">
               <div class="s-card-icon"><img src="{{ asset('public/assets/images/icons/app.jpg') }}" alt="service" class="img-fluid"/></div>
               <h4>Staffing & Outsourcing</h4>
               <p>We provide expert staffing, managed outsourcing, and end-to-end workforce transformation services.</p>
               <a href="{{ route('services.staffing') }}">View More <i class="fas fa-chevron-right fa-icon"></i></a>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.8s">
            <div class="s-block mb0" data-tilt data-tilt-max="5" data-tilt-speed="1000">
               <div class="s-card-icon"><img src="{{ asset('public/assets/images/icons/marketing.jpg') }}" alt="service" class="img-fluid"/></div>
               <h4>Digital, Broadcasting & Social Presence</h4>
               <p>Enhancing brand visibility with modern digital media, intelligent broadcasting, and strategic social outreach.</p>
               <a href="{{ route('services.digital') }}">View More <i class="fas fa-chevron-right fa-icon"></i></a>
            </div>
         </div>
      </div>
      <!--<div class="-cta-btn mt70">
         <div class="free-cta-title v-center wow zoomInDown" data-wow-delay=".9s">
            <p>Hire a <span>Dedicated Developer</span></p>
            <a href="#" class="btn-main bg-btn2 lnk">Hire Now<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
         </div>
      </div>-->
   </div>
</section>
<!--End Service-->
<!--Start statistics-->
<div class="statistics-section bg-gradient pad-tb tilt3d">
   <div class="container">
      <div class="row justify-content-center t-ctr">
         <div class="col-lg-4 col-sm-6">
            <div class="statistics">
               <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                  <img src="{{ asset('public/assets/images/icons/startup.svg') }}" alt="years" class="img-fluid" />
               </div>
               <div class="statnumb">
                  <span class="counter">25</span><span>+</span>
                  <p>Years industry</p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-6">
            <div class="statistics">
               <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                  <img src="{{ asset('public/assets/images/icons/team.svg') }}" alt="team" class="img-fluid" />
               </div>
               <div class="statnumb">
                  <span class="counter">25000</span><span>+</span>
                  <p>Employees Onboarded
</p>
               </div>
            </div>
         </div>
      </div>
      <div class="row small t-ctr">
         <div class="col-lg-3 col-sm-6">
            <div class="statistics">
               <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                  <img src="{{ asset('public/assets/images/icons/deal.svg') }}" alt="happy" class="img-fluid" />
               </div>
               <div class="statnumb">
                  <span class="counter">200</span><span>+</span>
                  <p>Satisfied Clients
</p>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6">
            <div class="statistics">
               <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                  <img src="{{ asset('public/assets/images/icons/computers.svg') }}" alt="project" class="img-fluid" />
               </div>
               <div class="statnumb counter-number">
                  <span class="counter">1000</span><span>+</span>
                  <p>Projects Done</p>
               </div>
            </div>
         </div>
        <div class="col-lg-3 col-sm-6">
			<div class="statistics">
			<div data-tilt="" data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
			  <img src="{{ asset('public/assets/images/icons/worker.svg') }}" alt="work" class="img-fluid">
			</div>
			<div class="statnumb">
			  <span class="counter">50</span><span>+</span>
			  <p>Active projects</p>
			</div>
			</div>
			</div>
         <div class="col-lg-3 col-sm-6">
            <div class="statistics mb0">
               <div data-tilt data-tilt-max="20" data-tilt-speed="1000" class="statistics-img">
                  <img src="{{ asset('public/assets/images/icons/customer-service.svg') }}" alt="support" class="img-fluid" />
               </div>
               <div class="statnumb">
                  <span>24/7</span>
                  <p>Support Available</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--End statistics-->
<!--why choose-->
      <section class="why-choos-lg pad-tb deep-dark">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="common-heading text-l">
                     <span style="color: #0c76f9;font-size: 30px;">Why Choose Us</span>
                     <h2 class="mb20" style="margin-top: 35px;">Trusted Partner for AI-Enabled Workflows<span class="text-second text-bold"> Affordable Pricing </span> and Global End-to-End Services</h2>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div  data-tilt data-tilt-max="5" data-tilt-speed="1000" class="single-image bg-shape-dez wow fadeIn" data-wow-duration="2s"><img src="{{ asset('public/assets/images/about/about-company.jpg') }}" alt="image" class="img-fluid"></div>
               </div>
			    <div class="row">
				   <div class="col-lg-6">
					  <div class="cta-card mt60 text-center">
						 <h3 class="mb20" style="font-size: 18px;">Let's Start a  <span class="text-second text-bold">New Project</span> Together</h3>
						 <p>Turn your ideas into impactful digital solutions with our expert team and AI-powered workflows. From concept to launch, we provide end-to-end support, transparent communication, and timely delivery—ensuring your project succeeds with confidence.</p>
					  </div>
					</div>
					<div class="col-lg-6">
					  <div class="cta-card mt60 text-center">
						 <h3 class="mb20" style="font-size: 18px;">AI-Driven Workflows & <span class="text-second text-bold">Guaranteed </span> On-Time Delivery</h3>
						 <p>We leverage AI-enhanced processes to streamline every phase of development and support. Our structured workflows, automation tools, and real-time monitoring ensure accuracy, efficiency, and a consistent 99% on-time delivery rate for all client projects.</p>
					  </div>
					</div>
					<div class="col-lg-6">
					  <div class="cta-card mt60 text-center">
						 <h3 class="mb20" style="font-size: 18px;">End-to-End <span class="text-second text-bold"> IT Solutions With Dedicated</span> Project Leadership</h3>
						 <p>From full-stack development to digital transformation services, we manage everything under one roof. Every client receives a dedicated project manager, ensuring clear communication, faster issue resolution, and smooth coordination across design, development, and deployment teams</p>
					  </div>
					</div>
					
					<div class="col-lg-6">
					  <div class="cta-card mt60 text-center">
						 <h3 class="mb20" style="font-size: 18px;">Global Experience <span class="text-second text-bold">With Transparent  </span> & Affordable Pricing</h3>
						 <p>With clients across 18+ countries, we deliver global-standard solutions at cost-effective pricing. Our flexible models are designed to support startups, enterprises, and government projects without compromising quality or performance.</p>
					  </div>
					</div>
					
					
				  </div>
				  <div class="btn-wrapper" style="display: flex;justify-content: center;margin-top: 30px;">
						<a href="#" class="btn-main bg-btn lnk wow fadeInUp" data-wow-delay=".6s">
							Request A Quote  <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span>
						</a>
					</div> 
            </div>
         </div>
      </section>
      <!--End why choose-->

<!--Start Clients-->
<section class="clients-section pad-tb">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8">
            <div class="common-heading">
               <span>Our happy customers</span>
               <h2>Some of our Clients</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="opl">
               <ul>
                  <li class=" wow fadeIn" data-wow-delay=".2s">
                     <div class="clients-logo"><img src="{{ asset('public/assets/images/client/clients-1.png.png') }}" alt="text" class="img-fluid"/></div>
                  </li>
                  <li class=" wow fadeIn" data-wow-delay=".4s">
                     <div class="clients-logo"><img src="{{ asset('public/assets/images/client/clients-2.png.png') }}" alt="text" class="img-fluid"/></div>
                  </li>
                  <li class=" wow fadeIn" data-wow-delay=".6s">
                     <div class="clients-logo"><img src="{{ asset('public/assets/images/client/clients-3.png.png') }}" alt="text" class="img-fluid"/></div>
                  </li>
                  <li class=" wow fadeIn" data-wow-delay=".8s">
                     <div class="clients-logo"><img src="{{ asset('public/assets/images/client/clients-4.png.png') }}" alt="text" class="img-fluid"/></div>
                  </li>
                  <li class=" wow fadeIn" data-wow-delay="1s">
                     <div class="clients-logo"><img src="{{ asset('public/assets/images/client/clients-5.png.png') }}" alt="text" class="img-fluid"/></div>
                  </li>
               </ul> 
			   <ul>
                  <li class=" wow fadeIn" data-wow-delay=".2s">
                     <div class="clients-logo"><img src="{{ asset('public/assets/images/client/clients-6.png.jpg') }}" alt="text" class="img-fluid"/></div>
                  </li>
                  <li class=" wow fadeIn" data-wow-delay=".4s">
                     <div class="clients-logo"><img src="{{ asset('public/assets/images/client/clients-7.png.png') }}" alt="text" class="img-fluid"/></div>
                  </li>
                  <li class=" wow fadeIn" data-wow-delay=".6s">
                     <div class="clients-logo"><img src="{{ asset('public/assets/images/client/clients-8.png.png') }}" alt="text" class="img-fluid"/></div>
                  </li>
                  <li class=" wow fadeIn" data-wow-delay=".8s">
                     <div class="clients-logo"><img src="{{ asset('public/assets/images/client/clients-9.png.png') }}" alt="text" class="img-fluid"/></div>
                  </li>
                  <li class=" wow fadeIn" data-wow-delay="1s">
                     <div class="clients-logo"><img src="{{ asset('public/assets/images/client/clients-10.png.jpg') }}" alt="text" class="img-fluid"/></div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class="-cta-btn mt70">
         <div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.2s">
            <p>We <span>Promise.</span> We <span>Deliver.</span></p>
            <a href="#" class="btn-main bg-btn2 lnk">Let's Work Together<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
         </div>
      </div>
   </div>
</section>
<!--End Clients-->
<!--Start work-category-->
<section class="enquire-form pad-tb">
   <div class="container">
      <div class="row light-bgs">
         <div class="col-lg-6">
            <div class="common-heading text-l">
               <span>Contact Now</span>               
               <h2 class="mt0">Have Question? Write a Message</h2>
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
									<label class="custom-control-label" for="customCheck">I agree to the <a href="javascript:void(0)">Terms &amp; Conditions</a> </label>
								</div>
								<button type="submit" id="hometouchFormsubmit" class="btn lnk btn-main bg-btn">Submit</button>
								
								<div class="clearfix"></div>
								<p class="trm"><i class="fas fa-lock"></i>We hate spam, and we respect your privacy.</p>
							</form>
			    <div id="loaderOverlay">
                     <div class="loader"></div>
                  </div>
            </div>
         </div>
         <div class="col-lg-6 v-center">
            <div class="enquire-image">               <img src="{{ asset('public/assets/images/about/hellopic.png') }}" alt="enquire" class="img-fluid" />            </div>
         </div>
      </div>
   </div>
</section>
<!--End  work-category-->

<!--Start Location
<section class="our-office pad-tb">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8">
            <div class="common-heading">
               <span>Our Locations</span>
               <h2>Our office</h2>
            </div>
         </div>
      </div>
      <div class="row justify-content-center upset shape-numm">
         <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".2s">
            <div class="office-card">
               <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                  <img src="{{ asset('public/assets/images/location/newyork.png') }}" alt="New York" class="img-fluid" />
               </div>
               <div class="office-text">
                  <h4>New York</h4>
                  <p>603 FA Forest Avenue, New York, USA 10021</p>
                  <a href="javascript:void(0)" target="blank" class="btn-outline">View on Map <i class="fas fa-chevron-right fa-icon"></i></a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".4s">
            <div class="office-card">
               <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                  <img src="{{ asset('public/assets/images/location/sydeny.png') }}" alt="sydney" class="img-fluid" />
               </div>
               <div class="office-text">
                  <h4>Sydney</h4>
                  <p>2449 Columbia Boulevard, Sydney, 10021</p>
                  <a href="javascript:void(0)" target="blank" class="btn-outline">View on Map <i class="fas fa-chevron-right fa-icon"></i></a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".6s">
            <div class="office-card mb0">
               <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                  <img src="{{ asset('public/assets/images/location/rome.png') }}" alt="rome" class="img-fluid" />
               </div>
               <div class="office-text">
                  <h4>Rome</h4>
                  <p>9988 Piazzetta Scalette Rubiani 99, Rome, 84090</p>
                  <a href="javascript:void(0)" target="blank" class="btn-outline">View on Map <i class="fas fa-chevron-right fa-icon"></i></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
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
