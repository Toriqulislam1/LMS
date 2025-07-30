@extends('web.master')
@section('content')
<!-- Start main-content -->
<div id="wrapper" class="clearfix">
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-8" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title text-white">Blog</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#">Blog</a></li>
                <li class="active text-white">Blog List</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row multi-row-clearfix">
          <div class="blog-posts">
            @foreach($blogs as $blog)
            <div class="col-md-6">
              <article class="post clearfix mb-30 bg-lighter">
                <div class="entry-header">
                  <div class="post-thumb thumb">
                    <img src="{{ $blog->getFirstMediaUrl('thumbnail_blog') }}" alt="" class="img-responsive img-fullwidth">
                  </div>
                </div>
                <div class="entry-content border-1px p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600">{{ $blog->created_at->format('d') }}</li>
                        <li class="font-12 text-white text-uppercase">{{ $blog->created_at->format('M') }}</li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="blog-single-right-sidebar.html">{{ $blog->title }}</a></h4>
                        {{-- <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span> --}}
                        {{-- <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span> --}}
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">{{ $blog->sub_title }}</p>
                  <a href="{{ route('blog-detail', ['slug' => $blog->slug, 'id' => $blog->id]) }}" class="btn-read-more">Read more</a>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
</div>
<!-- end wrapper -->
@endsection
