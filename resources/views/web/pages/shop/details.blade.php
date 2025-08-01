@extends('web.master')
@section('content')
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{asset('frontend/images/bg/bg3.jpg')}}">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white text-center">Product Details</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('shop')}}">Shop</a></li>
                <li class="active text-gray-silver">{{ $shop->name }}</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="product">
              <div class="col-md-5">
                <div class="product-image">
                  <div class="zoom-gallery">
                    <a href="{{ $shop->getFirstMediaUrl('feature_shop') }}" title="Title Here 1"><img src="{{ $shop->getFirstMediaUrl('feature_shop') }}" alt=""></a>
                  </div>
                </div>
              </div>
              <div class="col-md-7">
                <div class="product-summary">
                  <h2 class="product-title">{{ $shop->name }}</h2>
                  <div class="product_review">
                    {{-- <ul class="review_text list-inline">
                      <li>
                        <div title="Rated 4.50 out of 5" class="star-rating"><span style="width: 90%;">4.50</span></div>
                      </li>
                      <li><a href="#"><span>2</span>Reviews</a></li>
                      <li><a href="#">Add reviews</a></li>
                    </ul> --}}
                  </div>
                  <div class="price"> <del><span class="amount">{{ $shop->price }}</span></del> <ins><span class="amount">{{ ($shop->price - $shop->discount_price) }}</span></ins> </div>
                  <div class="short-description">
                    <p>{!! $shop->description !!}</p>
                  </div>
                  {{-- <div class="tags"><strong>SKU:</strong> EA34</div>
                  <div class="category"><strong>Category:</strong> <a href="#">Book</a>, <a href="#">Note Book</a></div>
                  <div class="tags"><strong>Tags:</strong> <a href="#">Bag</a>, <a href="#">Ladies Bag</a></div> --}}
                  {{-- <div class="cart-form-wrapper mt-30">
                    <form enctype="multipart/form-data" method="post" class="cart">
                      <input type="hidden" value="productID" name="add-to-cart">
                      <table class="table variations no-border">
                        <tbody>
                          <tr>
                            <td class="name">Amount</td>
                            <td class="value">
                              <div class="quantity buttons_added">
                                <input type="button" class="minus" value="-">
                                <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                <input type="button" class="plus" value="+">
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <button class="single_add_to_cart_button btn btn-theme-colored" type="submit">Add to cart</button>
                    </form>
                  </div> --}}
                </div>
              </div>
              {{-- <div class="col-md-12">
                <div class="horizontal-tab product-tab">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab">Description</a></li>
                    <li><a href="#tab2" data-toggle="tab">Additional Information</a></li>
                    <li><a href="#tab3" data-toggle="tab">Reviews</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab1">
                      <h3>Product Description</h3>
                      <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus voluptates nisi hic alias libero explicabo reiciendis sint ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae. One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus voluptates nisi hic alias libero explicabo reiciendis sint ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.</p>
                      <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus voluptates nisi hic alias libero explicabo reiciendis sint ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.</p>
                    </div>
                    <div class="tab-pane fade" id="tab2">
                      <table class="table table-striped">
                        <tbody>
                          <tr>
                            <th>Brand</th>
                            <td><p>Envato</p></td>
                          </tr>
                          <tr>
                            <th>Color</th>
                            <td><p>Black</p></td>
                          </tr>
                          <tr>
                            <th>Size</th>
                            <td><p>Large, Medium</p></td>
                          </tr>
                          <tr>
                            <th>Weight</th>
                            <td>27 kg</td>
                          </tr>
                          <tr>
                            <th>Dimensions</th>
                            <td>16 x 22 x 123 cm</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane fade" id="tab3">
                      <div class="reviews">
                        <ol class="commentlist">
                          <li class="comment">
                            <div class="media"> <a href="#" class="media-left"><img class="img-circle" alt="" src="https://placehold.it/75x75" width="75"></a>
                              <div class="media-body">
                                <ul class="review_text list-inline">
                                  <li>
                                    <div title="Rated 5.00 out of 5" class="star-rating"><span style="width: 100%;">5.00</span></div>
                                  </li>
                                  <li>
                                    <h5 class="media-heading meta"><span class="author">Tom Joe</span> – Mar 15, 2015:</h5>
                                  </li>
                                </ul>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat purus tempor sem molestie, sed blandit lacus posuere. Lorem ipsum dolor sit amet.</div>
                            </div>
                          </li>
                          <li class="comment">
                            <div class="media"> <a href="#" class="media-left"><img class="img-circle" alt="" src="https://placehold.it/75x75" width="75"></a>
                              <div class="media-body">
                                <ul class="review_text list-inline">
                                  <li>
                                    <div title="Rated 4.00 out of 5" class="star-rating"><span style="width: 80%;">4.00</span></div>
                                  </li>
                                  <li>
                                    <h5 class="media-heading meta"><span class="author">Mark Doe</span> – Jan 23, 2015:</h5>
                                  </li>
                                </ul>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat purus tempor sem molestie, sed blandit lacus posuere. Lorem ipsum dolor sit amet.</div>
                            </div>
                          </li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
              </div> --}}
            </div>
            {{-- <div class="col-md-12">
              <h3 class="line-bottom">Related Products</h3>
              <div class="row multi-row-clearfix">
                <div class="products related">
                  <div class="col-sm-6 col-md-3 col-lg-3 mb-sm-30">
                    <div class="product">
                      <span class="tag-sale">Sale!</span>
                      <div class="product-thumb">
                        <img alt="" src="images/products/6.png" class="img-responsive img-fullwidth">
                        <div class="overlay">
                          <div class="btn-add-to-cart-wrapper">
                            <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">Add To Cart</a>
                          </div>
                          <div class="btn-product-view-details">
                            <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">View detail</a>
                          </div>
                        </div>
                      </div>
                      <div class="product-details text-center">
                        <a href="#"><h5 class="product-title">Watch</h5></a>
                        <div class="star-rating" title="Rated 3.50 out of 5"><span style="width: 80%;">3.50</span></div>
                        <div class="price"><del><span class="amount">$165.00</span></del><ins><span class="amount">$160.00</span></ins></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-3 col-lg-3 mb-sm-30">
                    <div class="product">
                      <span class="tag-sale">Sale!</span>
                      <div class="product-thumb">
                        <img alt="" src="images/products/7.png" class="img-responsive img-fullwidth">
                        <div class="overlay">
                          <div class="btn-add-to-cart-wrapper">
                            <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">Add To Cart</a>
                          </div>
                          <div class="btn-product-view-details">
                            <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">View detail</a>
                          </div>
                        </div>
                      </div>
                      <div class="product-details text-center">
                        <a href="#"><h5 class="product-title">Color Box</h5></a>
                        <div class="star-rating" title="Rated 3.50 out of 5"><span style="width: 32%;">3.50</span></div>
                        <div class="price"><del><span class="amount">$120.00</span></del><ins><span class="amount">$110.00</span></ins></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-3 col-lg-3 mb-sm-30">
                    <div class="product">
                      <div class="product-thumb">
                        <img alt="" src="images/products/2.png" class="img-responsive img-fullwidth">
                        <div class="overlay">
                          <div class="btn-add-to-cart-wrapper">
                            <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">Add To Cart</a>
                          </div>
                          <div class="btn-product-view-details">
                            <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">View detail</a>
                          </div>
                        </div>
                      </div>
                      <div class="product-details text-center">
                        <a href="#"><h5 class="product-title">Pen</h5></a>
                        <div class="star-rating" title="Rated 3.50 out of 5"><span style="width: 85%;">3.50</span></div>
                        <div class="price"><ins><span class="amount">$240.00</span></ins></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md3 col-lg-3">
                    <div class="product">
                      <div class="product-thumb">
                        <img alt="" src="images/products/9.png" class="img-responsive img-fullwidth">
                        <div class="overlay">
                          <div class="btn-add-to-cart-wrapper">
                            <a class="btn btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">Add To Cart</a>
                          </div>
                          <div class="btn-product-view-details">
                            <a class="btn btn-default btn-theme-colored btn-sm btn-flat pl-20 pr-20 btn-add-to-cart text-uppercase font-weight-700" href="#">View detail</a>
                          </div>
                        </div>
                      </div>
                      <div class="product-details text-center">
                        <a href="#"><h5 class="product-title">Table Lamp</h5></a>
                        <div class="star-rating" title="Rated 3.50 out of 5"><span style="width: 56%;">3.50</span></div>
                        <div class="price"><ins><span class="amount">$480.00</span></ins></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
@endsection
