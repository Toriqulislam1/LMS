@extends('web.master')
@section('content')


  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{asset('frontend')}}/images/bg/bg3.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white text-center">Shop</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('shop')}}">Shop</a></li>
                <li class="active text-gray-silver">Page</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="">
      <div class="container">
        <div class="section-content">
          <div class="row multi-row-clearfix">
            <div class="col-md-12">
              <div class="products">
                @foreach ($shops as $shop)
                <div class="col-sm-6 col-md-4 col-lg-4 mb-30">
                  <div class="product">
                    <span class="tag-sale">Sale!</span>
                    <div class="product-thumb">
                      <img alt="" src="{{ $shop->getFirstMediaUrl('thumbnail_shop') }}" class="img-responsive img-fullwidth">
                      <div class="overlay">
                        <div class="btn-add-to-cart-wrapper">
                          {{-- <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">Add To Cart</a> --}}
                        </div>
                        <div class="btn-product-view-details">
                          <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="{{ route('shop-details', ['id' => $shop->id]) }}">View detail</a>
                        </div>
                      </div>
                    </div>
                    <div class="product-details text-center">
                      <a href="#"><h5 class="product-title">{{ $shop->name }}</h5></a>
                      {{-- <div class="star-rating" title="Rated 3.50 out of 5"><span style="width: 67%;"></span></div> --}}
                      <div class="price"><del><span class="amount">{{ $shop->price }}</span></del><ins><span class="amount">{{ ($shop->price - $shop->discount_price) }}</span></ins></div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
          {{-- <div class="row">
            <div class="col-md-12">
              <nav>
                <ul class="pagination">
                  <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a> </li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">...</a></li>
                  <li> <a href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span> </a> </li>
                </ul>
              </nav>
            </div>
          </div> --}}
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
@endsection
