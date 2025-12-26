
text/x-generic career.blade.php ( HTML document, UTF-8 Unicode text )
@extends('front-end.layouts.app')
@section('title', 'SBCEL - Career')
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
                        <li><a href="#">Career</a></li>
                     </ul>
                  </div>
                  <div class="bread-title wow fadeInUp" data-wow-delay=".5s">
                     <h2>Job Openings</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--End Breadcrumb Area-->
<!--Start About-->
<section class="about-agencys pad-tb block-1 dark-bg3">
   <div class="container">
      <div class="row justify-content-between">
         <div class="col-lg-6">
            <div class="common-heading text-l">
               <h2 class="mb20">Empowering Careers. Inspiring Growth</h2>
               <p>At SBC Exports Limited, we believe great companies are built by great people. We’re always looking for passionate, talented, and ambitious professionals who want to create meaningful impact through technology, innovation, and customer excellence.</p>
               <p>Whether you’re a developer, designer, strategist, project manager, or customer support expert—your journey with us will be filled with learning, growth, and opportunities to lead.</p>
            </div>
         </div>
         <div class="col-lg-5">
            <div class="image-block mb0 m-mt30">
               <img src="{{ asset('public/assets/images/about/office-4.jpg') }}" alt="about" class="img-fluid"/>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8">
            <div class="common-heading ptag">
               <h2>Current Openings</h2>
            </div>
         </div>
      </div>
      <div class="row justify-content-center">
         <div class="col-lg-10">
            <div class="career-card-div">
               <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingGraphic">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-graphic" aria-expanded="true" aria-controls="collapseGraphic">
                        Graphic Designer - 1 Posts
                        </button>
                     </h2>
                     <div id="collapse-graphic" class="accordion-collapse collapse show" aria-labelledby="headingGraphic" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <div class="data-reqs">
                              <h5 class="pt20 pb20">Overview</h5>
                              <p>
                                 We are seeking a creative and detail-oriented Graphic Designer responsible for developing
                                 visual concepts, brand assets, social media creatives, marketing materials, and website graphics.
                                 The ideal candidate should have a strong design sense, the ability to understand brand guidelines,
                                 and deliver visually appealing designs across digital and print media.
                              </p>
                              <h5 class="pt20 pb20">Required Experience</h5>
                              <p>
                                 1–3 years of professional experience in graphic designing with a strong portfolio of social media creatives,
                                 branding, posters, brochures, and web graphics. Experience working with marketing or creative teams
                                 will be an added advantage.
                              </p>
                              <h4 class="pb20 pt20">Skills Required:</h4>
                              <ul class="list-ul ul-check">
                                 <li>Proficiency in Adobe Photoshop, Illustrator, and InDesign</li>
                                 <li>Good knowledge of Figma/Adobe XD (basic UI design is a plus)</li>
                                 <li>Strong sense of typography, color theory, and visual hierarchy</li>
                                 <li>Ability to create social media posts, banners, brochures, and marketing assets</li>
                                 <li>Experience in creating brand identities and promotional creatives</li>
                                 <li>Understanding of print layout, bleed, and exporting print-ready files</li>
                                 <li>Creative thinking and ability to produce original design concepts</li>
                                 <li>Ability to handle multiple projects with deadlines</li>
                                 <li>Good communication and collaboration skills</li>
                                 <li>Knowledge of Canva or quick-design tools (added advantage)</li>
                              </ul>
                              <a href="#" class="btn-main bg-btn3 lnk mt20" data-bs-toggle="modal" data-bs-target="#modalform">
                              Apply Now
                              <i class="fas fa-chevron-right fa-icon"></i>
                              <span class="circle"></span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-item">
                     <h2 class="accordion-header" id="headingFrontend">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-frontend" aria-expanded="true" aria-controls="collapseFrontend">
                        Front-End Developer - 1 Posts
                        </button>
                     </h2>
                     <div id="collapse-frontend" class="accordion-collapse collapse" aria-labelledby="headingFrontend" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                           <div class="data-reqs">
                              <h5 class="pt20 pb20">Overview</h5>
                              <p>
                                 We are looking for a skilled Front-End Developer who can build modern, responsive,
                                 high-performance web interfaces using HTML, CSS, JavaScript, React, and Angular.
                                 The ideal candidate should have expertise in UI development, component-driven design,
                                 performance optimization, and seamless integration with backend APIs.
                              </p>
                              <h5 class="pt20 pb20">Required Experience</h5>
                              <p>
                                 2–5 years of experience in front-end development with a strong command over
                                 JavaScript frameworks like React and Angular. Must have hands-on experience in
                                 converting UI/UX designs into pixel-perfect, responsive web pages.
                              </p>
                              <h4 class="pb20 pt20">Skills Required:</h4>
                              <ul class="list-ul ul-check">
                                 <li>Strong expertise in HTML5, CSS3, and modern JavaScript (ES6+)</li>
                                 <li>Hands-on experience with React.js (Hooks, State Management, Components)</li>
                                 <li>Strong knowledge of Angular (Components, Services, Routing, RxJS)</li>
                                 <li>Ability to build responsive, mobile-friendly layouts using CSS frameworks</li>
                                 <li>Experience with REST APIs & integration of frontend with backend</li>
                                 <li>Good understanding of Git, version control & deployment workflows</li>
                                 <li>Strong debugging, browser dev tools, and performance optimization skills</li>
                                 <li>Hands-on experience with UI libraries like Material UI / Bootstrap / Tailwind</li>
                                 <li>Knowledge of Webpack, NPM, Babel, Vite or other build tools</li>
                                 <li>Understanding of UI/UX fundamentals and ability to work with design teams</li>
                                 <li>Experience with Cross-browser compatibility and W3C standards</li>
                                 <li>Good communication and ability to work in an Agile environment</li>
                              </ul>
                              <a href="#" class="btn-main bg-btn3 lnk mt20" data-bs-toggle="modal" data-bs-target="#modalform">
                              Apply Now
                              <i class="fas fa-chevron-right fa-icon"></i>
                              <span class="circle"></span>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--End Enquire Form-->
<div class="popup-modals">
   <div class="modal" id="modalform">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <div class="common-heading">
                  <h4 class="mt0 mb0">Apply Now</h4>
               </div>
               <button type="button" class="closes" data-bs-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body pt4h0 pb60" style="padding: 10px;">
               <div class="form-block fdgn2">
                  <form class="pt-3" autocomplete="off" id="adminpackageForm"  enctype="multipart/form-data">
                     {{ csrf_field() }}
                     <div class="fieldsets row">
                        <div class="col-md-6 form-group">
                           <input id="form_name" type="text" name="name" placeholder="Enter your name *" required>
                        </div>
                        <div class="col-md-6 form-group">
                           <input id="form_email" type="email" name="email" placeholder="Enter your email *" required>
                        </div>
                     </div>
                     <div class="fieldsets row">
                        <div class="col-md-6 form-group">
                           <input id="form_phone" type="text" name="phone" placeholder="Enter your Phone No *" required>
                        </div>
                        <div class="col-md-6 form-group">
                           <select id="form_need" name="need" required>
                              <option value="">Select Post</option>
                              <option value="Graphic Designer">Graphic Designer</option>
                              <option value="Front-End Developer">Front-End Developer</option>
                           </select>
                        </div>
                     </div>
                     <div class="fieldsets form-group">
                        <textarea id="form_message" name="message" placeholder="Message *" rows="4" required></textarea>
                     </div>
                     <div class="fieldsets- row">
                        <div class="col-md-12 form-group">
                           <div class="custom-file">
                              <input type="file" class="form-control"  data-required="true" name="resume" id="resume" placeholder="resume">
                           </div>
                           <p><small>Upload only PDF, DOC, DOCX (Single File)</small></p>
                        </div>
                     </div>
                     <div class="fieldsets mt20">
                        <button type="submit" id="packagesubmit" class="lnk btn-main bg-btn">Submit Application<span class="circle"></span></button>
                     </div>
                  </form>
                  <div id="loaderOverlay">
                     <div class="loader"></div>
                  </div>
                  <!-- Page blur and loader -->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--Start Footer-->
@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   $(document).ready(function () {
       $('#adminpackageForm').on('submit', function (e) {
           e.preventDefault(); // Prevent default form submit
   
           var form = this;
           var formData = new FormData(form);
           var submitBtn = $('#packagesubmit');
   
           // Disable button and show loading
           submitBtn.prop('disabled', true).text('Submitting...');
           $('#errorMsg').text('');
           $('#loginContainer').addClass('blur'); // optional blur effect
           $('#loaderOverlay').show(); // show loader overlay
   
           $.ajax({
               url: "{{ route('career.submit') }}", // Laravel route
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
