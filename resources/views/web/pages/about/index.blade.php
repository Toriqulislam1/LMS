@extends('web.master')
@section('content')

  <!-- Start main-content -->
  <div class="main-content bg-lighter">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{asset('frontend')}}/images/bg/bg6.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white text-center">About</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('about')}}">About</a></li>
                <li class="active text-gray-silver">Page</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: About -->
    <section id="about">
      <div class="container mt-50 pb-70 pt-0">
        <div class="section-content">
          <div class="row mt-10">
            <div class="col-sm-12 col-md-6 mb-sm-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
              <h3 class="text-uppercase mt-15">Welcome To <span class="text-theme-color-2">  LearnPress </span></h3>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Quos dolo rem consequ untur, natus laudantium commodi earum aliquid in ullam.Lorem ipsum.</p>
              <p class="mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.</p>
              <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.</p>
              {{-- <a class="btn btn-colored btn-theme-colored btn-lg text-uppercase font-13 mt-0" href="#">View Details</a>  --}}
            </div>
            <div class="col-sm-12 col-md-6 mt-10 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="video-popup">                
                <a href="https://www.youtube.com/watch?v=pW1uVUg5wXM" data-lightbox-gallery="youtube-video" title="Video">
                  <img alt="" src="{{asset('frontend')}}/images/about/5.jpg" class="img-responsive img-fullwidth mt-10 ml-30 ml-xs-0 ml-sm-0">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->


@endsection
