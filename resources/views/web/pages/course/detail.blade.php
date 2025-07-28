@extends('web.master')
@section('content')

  <!-- Start main-content -->
  <div class="main-content bg-lighter">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white text-center">Course Details</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li class="active text-gray-silver"><a href="{{ route('home') }}">Home</a></li>
                <li class="active text-gray-silver"><a href="{{ route('course') }}">Courses</a></li>
                <li class="active text-gray-silver">Course Detail</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Blog -->
    <section>
      <div class="container mt-30 mb-0 pt-30 pb-30">
        <div class="row">
          <div class="col-md-8 blog-pull-right">
            <div class="single-service">
              <img src="{{ $course->getFirstMediaUrl('feature_course') }}" alt="">
              <h3 class="text-theme-colored">{{ $course->title }}</h3>
              <h5><em>{{ $course->sub_title }}</em></h5>
              <p>{{ $course->short_description }}</p>
              <p>{{ $course->description }}</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

</div>

@endsection

