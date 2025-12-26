@extends('front-end.layouts.app')
@section('title', 'SBCEL - About Us')
@push('styles')
@endpush
@section('content')
   <!--Breadcrumb Area-->
    <section class="breadcrumb-area text-l banner-1">
      <div class="text-block">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 v-center">
              <div class="bread-inner">
                <div class="bread-menu">
                  <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="#">About Us</a></li>
                  </ul>
                </div>
                <div class="bread-title">
                  <h2>SBC Group at a Glance </h2>
                  <p class="pt20">Incorporated in 2011, SBC Exports Limited is a diversified group with majority business interests in IT and e-governance under the umbrella of SBC Group (www.sbcel.in). </p>
                  <a href="{{ route('contact') }}" class="btn-main bg-btn lnk mt30">Contact Us <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                </div>
              </div>
            </div>
            <div class="col-lg-7 v-center">
              <div class="img-design h-scl-">
                <div class="imgac "> <img src="{{ asset('public/assets/images/banner/office-view-2.jpg') }}" alt="creative agnecy html template" class="ag-dg1 img-fluid h-scl-base"></div>
                <div class="imgac h-scl-base"><img src="{{ asset('public/assets/images/banner/office-view-1.jpg') }}" alt="creative agnecy html template" class="ag-dg2 img-fluid "></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Breadcrumb Area-->
    <!--Start About-->
    <section class="about-agencys pad-tb block-1">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 v-center">
            <div class="image-block upset bg-shape wow fadeIn">
              <img src="{{ asset('public/assets/images/about/collaboration.jpg') }}" alt="about us Niwax" class="img-fluid"/>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="common-heading text-l">
              <p class="pt20"> We are one of the few companies in this sector listed in NSE and BSE. We at SBCEL, provides the services in the area of :</p>
              			   <ul class="service-point-2 mt20 list-ul ul-check">
						   <li style="padding: 0 0px 12px 26px;">Software Development</li>	
						   <li style="padding: 0 0px 12px 26px;">Information Technology</li>	
						   <li style="padding: 0 0px 12px 26px;">Management Consultancy</li>
						   <li style="padding: 0 0px 12px 26px;">IT Consulting and e-Governance</li>
						   <li style="padding: 0 0px 12px 26px;">Project Rollout & Implementation</li>	
						   <li style="padding: 0 0px 12px 26px;">HR: Assessment & Placement</li>		
						   <li style="padding: 0 0px 12px 26px;">Social Media and Digital Presence</li>	
						   <li style="padding: 0 0px 12px 26px;">Manpower Staffing & Outsourcing</li>	
						   </ul>
              <p class="pt20">We provide services to different industries/e-Governance projects to support their IT needs and at the same time we also support them while providing them the trained resources for their specified needs in PAN India.With a turnover of 180+ Crore, a skilled workforce of over 3000 professionals, and 10+ offices nationwide along with an overseas branch in the UAE, we are equipped to manage diverse and mission-critical projects.
</p>

          

            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End About-->

   
@endsection
@push('scripts')
@endpush
