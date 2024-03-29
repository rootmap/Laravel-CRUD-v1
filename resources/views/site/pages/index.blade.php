@extends('site.layout.master')
@section('title','Home')
@section('body')
  <body class="cms-index-index cms-home-page">
@endsection
@section('content')
<!-- Slideshow  -->
  <div class="main-slider" id="home">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12 banner-left hidden-xs"><img src="{{ url('site_theme/images/banner-left.jpg')}}" alt="banner"></div>
        <div class="col-sm-9 col-md-9 col-lg-9 col-xs-12 jtv-slideshow">
          <div id="jtv-slideshow">
            <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
              <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                <ul>
                  <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb=''><img src="{{ url('site_theme/images/slide-1.jpg') }}" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                    <div class="caption-inner left">
                      <div class='tp-caption LargeTitle sft  tp-resizeme' data-x='50'  data-y='110'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>Smooth, Rich & Loud Audio</div>
                      <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='50'  data-y='160'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>headphone</div>
                      <div class='tp-caption' data-x='72'  data-y='230'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>World's Most advanced Wireless earbuds.</div>
                      <div class='tp-caption sfb  tp-resizeme ' data-x='72'  data-y='280'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">EXPLORE NOW</a> </div>
                    </div>
                  </li>
                  <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb=''><img src="{{ url('site_theme/images/slide-3.jpg')}}" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                    <div class="caption-inner">
                      <div class='tp-caption LargeTitle sft  tp-resizeme' data-x='250'  data-y='110'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>Template for your business</div>
                      <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='200'  data-y='160'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap; color:#fff; text-shadow:none;'>Easy to modify</div>
                      <div class='tp-caption' data-x='310'  data-y='230'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap; color:#f8f8f8;'>Perfect website solution for your</div>
                      <div class='tp-caption sfb  tp-resizeme ' data-x='370'  data-y='280'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Get Started</a> </div>
                    </div>
                  </li>
                  <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb=''><img src="{{ url('site_theme/images/slide-2.jpg')}}" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                    <div class="caption-inner left">
                      <div class='tp-caption LargeTitle sft  tp-resizeme' data-x='350'  data-y='100'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>It’s Time To Look</div>
                      <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='350'  data-y='140'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>The New</div>
                      <div class='tp-caption ExtraLargeTitle sft  tp-resizeme' data-x='350'  data-y='185'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>Standard</div>
                      <div class='tp-caption' data-x='375'  data-y='245'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>The New Standard. under favorable smartwatches</div>
                      <div class='tp-caption sfb  tp-resizeme ' data-x='375'  data-y='290'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Start Buying </a> </div>
                    </div>
                  </li>
                </ul>
                <div class="tp-bannertimer"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- service section -->
  <div class="jtv-service-area">
    <div class="container">
      <div class="row">
        <div class="col col-md-3 col-sm-6 col-xs-12">
          <div class="block-wrapper ship">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-paper-plane"></i></div>
              <div class="service-wrapper">
                <h3>World-Wide Shipping</h3>
                <p>On order over $99</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-md-3 col-sm-6 col-xs-12 ">
          <div class="block-wrapper return">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-rotate-right"></i></div>
              <div class="service-wrapper">
                <h3>100% secure payments</h3>
                <p>Credit/ Debit Card/ Banking </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-md-3 col-sm-6 col-xs-12">
          <div class="block-wrapper support">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-umbrella"></i></div>
              <div class="service-wrapper">
                <h3>Support 24/7</h3>
                <p>Call us: ( +123 ) 456 789</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-md-3 col-sm-6 col-xs-12">
          <div class="block-wrapper user">
            <div class="text-des">
              <div class="icon-wrapper"><i class="fa fa-tags"></i></div>
              <div class="service-wrapper">
                <h3>Member Discount</h3>
                <p>25% on order over $199</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- All products-->
  
  <div class="container">
    <div class="home-tab">
      <div class="tab-title text-left">
        <h2>Best selling</h2>
        <ul class="nav home-nav-tabs home-product-tabs">
          <li class="active"><a href="#computer" data-toggle="tab" aria-expanded="false">Computer</a></li>
          <li><a href="#smartphone" data-toggle="tab" aria-expanded="false">Smartphone</a></li>
          <li><a href="#watches" data-toggle="tab" aria-expanded="false">Watches</a></li>
          <li><a href="#photo" data-toggle="tab" aria-expanded="false">Photo & Camera</a></li>
        </ul>
      </div>
      <div id="productTabContent" class="tab-content">
        <div class="tab-pane active in" id="computer">
          <div class="featured-pro">
            <div class="slider-items-products">
              <div id="computer-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-new-label new-left">New</div>
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="{{ url('site_theme/images/product-11.jpg')}}" alt="HTML template"> <img class="hover-img" src="{{ url('site_theme/images/product-12.jpg')}}" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.php"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="{{ url('site_theme/images/product-13.jpg')}}" alt="HTML template"> <img class="hover-img" src="{{ url('site_theme/images/product-14.jpg')}}" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.php"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box">
                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                              </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="{{ url('site_theme/images/product-15.jpg')}}" alt="HTML template"> <img class="hover-img" src="{{ url('site_theme/images/product-16.jpg')}}" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.php"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box">
                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                              </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="icon-sale-label sale-left">Sale</div>
                      <div class="icon-new-label new-right">New</div>
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="{{ url('site_theme/images/product-17.jpg')}}" alt="HTML template"> <img class="hover-img" src="{{ url('site_theme/images/product-18.jpg')}}" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.php"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-new-label new-left">New</div>
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="{{ url('site_theme/images/product-19.jpg')}}" alt="HTML template"> <img class="hover-img" src="{{ url('site_theme/images/product-20.jpg')}}" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.php"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box">
                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                              </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="{{ url('site_theme/images/product-2.jpg')}}" alt="HTML template"> <img class="hover-img" src="{{ url('site_theme/images/product-12.jpg')}}" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.php"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="smartphone">
          <div class="top-sellers-pro">
            <div class="slider-items-products">
              <div id="smartphone-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 ">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-sale-label sale-left">Sale</div>
                        <div class="icon-new-label new-right">New</div>
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="{{ url('site_theme/images/product-4.jpg')}}" alt="HTML template"> <img class="hover-img" src="{{ url('site_theme/images/product-14.jpg')}}" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.php"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-sale-label sale-left">Sale</div>
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="{{ url('site_theme/images/product-6.jpg')}}" alt="HTML template"> <img class="hover-img" src="{{ url('site_theme/images/product-16.jpg')}}" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.php"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box">
                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                              </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="{{ url('site_theme/images/product-8.jpg')}}" alt="HTML template"> <img class="hover-img" src="{{ url('site_theme/images/product-18.jpg')}}" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.php"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box">
                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                              </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="{{ url('site_theme/images/product-10.jpg')}}" alt="HTML template"> <img class="hover-img" src="{{ url('site_theme/images/product-20.jpg')}}" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.php"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="{{ url('site_theme/images/product-12.jpg')}}" alt="HTML template"> <img class="hover-img" src="{{ url('site_theme/images/product-10.jpg')}}" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.php"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box">
                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                              </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="{{ url('site_theme/images/product-14.jpg')}}" alt="HTML template"> <img class="hover-img" src="{{ url('site_theme/images/product-4.jpg')}}" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.php"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="watches">
          <div class="top-sellers-pro">
            <div class="slider-items-products">
              <div id="watches-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 ">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-sale-label sale-left">Sale</div>
                        <div class="icon-new-label new-right">New</div>
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="{{ url('site_theme/images/product-16.jpg')}}" alt="HTML template"> <img class="hover-img" src="{{ url('site_theme/images/product-3.jpg')}}" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.php"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="{{ url('site_theme/images/product-18.jpg')}}" alt="HTML template"> <img class="hover-img" src="{{ url('site_theme/images/product-19.jpg')}}" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.php"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="{{ url('site_theme/images/product-6.jpg')}}" alt="HTML template"> <img class="hover-img" src="{{ url('site_theme/images/product-5.jpg')}}" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.php"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box">
                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                              </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="{{ url('site_theme/images/product-8.jpg')}}" alt="HTML template"> <img class="hover-img" src="{{ url('site_theme/images/product-6.jpg')}}" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.php"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="photo">
          <div class="top-sellers-pro">
            <div class="slider-items-products">
              <div id="photo-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 ">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-sale-label sale-left">Sale</div>
                        <div class="icon-new-label new-right">New</div>
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="{{ url('site_theme/images/product-3.jpg')}}" alt="HTML template"> <img class="hover-img" src="{{ url('site_theme/images/product-16.jpg')}}" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.php"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="{{ url('site_theme/images/product-12.jpg')}}" alt="HTML template"> <img class="hover-img" src="{{ url('site_theme/images/product-4.jpg')}}" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.php"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="{{ url('site_theme/images/product-2.jpg')}}" alt="HTML template"> <img class="hover-img" src="{{ url('site_theme/images/product-3.jpg')}}" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.php"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box">
                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                              </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="{{ url('site_theme/images/product-5.jpg')}}" alt="HTML template"> <img class="hover-img" src="{{ url('site_theme/images/product-6.jpg')}}" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.php"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="inner-box">
    <div class="container">
      <div class="row"> 
        <!-- Banner -->
        <div class="col-md-3 top-banner hidden-sm">
          <div class="jtv-banner3">
            <div class="jtv-banner3-inner"><a href="#"><img src="{{ url('site_theme/images/sub1.jpg')}}" alt="HTML template"></a>
              <div class="hover_content">
                <div class="hover_data">
                  <div class="title"> Big Sale </div>
                  <div class="desc-text">Up to 55% off</div>
                  <span>Camera, Laptop & Mobile</span>
                  <p><a href="#" class="shop-now">Get it now!</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Best Sale -->
        <div class="col-sm-12 col-md-9 jtv-best-sale special-pro">
          <div class="jtv-best-sale-list">
            <div class="wpb_wrapper">
              <div class="best-title text-left">
                <h2>Special Offers</h2>
              </div>
            </div>
            <div class="slider-items-products">
              <div id="jtv-best-sale-slider" class="product-flexslider">
                <div class="slider-items">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-new-label new-left">New</div>
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="{{ url('site_theme/images/product-1.jpg')}}" alt="HTML template"> <img class="hover-img" src="{{ url('site_theme/images/product-2.jpg')}}" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.php"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="{{ url('site_theme/images/product-3.jpg')}}" alt="HTML template"> <img class="hover-img" src="{{ url('site_theme/images/product-4.jpg')}}" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.php"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box">
                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                              </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="{{ url('site_theme/images/product-5.jpg')}}" alt="HTML template"> <img class="hover-img" src="{{ url('site_theme/images/product-6.jpg')}}" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.php"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box">
                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                              </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="icon-sale-label sale-left">Sale</div>
                      <div class="icon-new-label new-right">New</div>
                      <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="{{ url('site_theme/images/product-9.jpg')}}" alt="HTML template"> <img class="hover-img" src="{{ url('site_theme/images/product-8.jpg')}}" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.php"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-new-label new-left">New</div>
                        <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                          <figure> <img class="first-img" src="{{ url('site_theme/images/product-15.jpg')}}" alt="HTML template"> <img class="hover-img" src="{{ url('site_theme/images/product-10.jpg')}}" alt="HTML template"></figure>
                          </a> </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                            <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            <div class="mt-button quick-view"><a href="quick_view.php"> <i class="fa fa-search"></i> </a> </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box">
                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                              </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="daily-deal-section"> 
        <!-- daily deal section-->
        <div class="col-md-7 daily-deal">
          <h3 class="deal-title">Deal of the day</h3>
          <div class="title-divider"><span></span></div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel massa eget ante tincidunt vestibulum. Aenean vel metus magna. Mauris nec. Nunc congue ac libero ut lacinia. In ultrices
            elementum ipsum, in tempus enim accumsan.. </p>
          <div class="hot-offer-text">Summer Sale <span>2017</span></div>
          <div class="box-timer"> <span class="des-hot-deal">Hurry up! Special offer</span>
            <div class="time" data-countdown="countdown" data-date="09-30-2019-10-20-50"></div>
           <a href="#" class="link">Shopping Now</a> </div>
        </div>
        <div class="col-md-5 hot-pr-img-area">
          <div id="daily-deal-slider" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4 ">
              <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                <figure> <img class="first-img" src="{{ url('site_theme/images/product-25.jpg')}}" alt="HTML template"></figure>
                </a> </div>
              <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                <figure> <img class="first-img" src="{{ url('site_theme/images/product-22.jpg')}}" alt="HTML template"> </figure>
                </a> </div>
              <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                <figure> <img class="first-img" src="{{ url('site_theme/images/product-26.jpg')}}" alt="HTML template"> </figure>
                </a> </div>
              <div class="pr-img-area"> <a title="Product title here" href="single_product.php">
                <figure> <img class="first-img" src="{{ url('site_theme/images/product-27.jpg')}}" alt="HTML template"> </figure>
                </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="banner-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <figure><a href="#" target="_self" class="image-wrapper"><img src="{{ url('site_theme/images/banner-laptop.jpg')}}" alt="banner laptop"></a></figure>
        </div>
        <div class="col-sm-6">
          <figure><a href="#" target="_self" class="image-wrapper"><img src="{{ url('site_theme/images/banner-mob.jpg')}}" alt="banner moblie"></a></figure>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Blog -->
  <section class="blog-post-wrapper">
    <div class="container">
      <div class="best-title text-left">
        <h2>The Latest News</h2>
      </div>
      <div class="slider-items-products">
        <div id="latest-news-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6">
            <div class="item">
              <div class="blog-box"><a href="blog_single_post.php"> <img class="primary-img" src="{{ url('site_theme/images/blog-img1.jpg')}}" alt="HTML template"></a>
                <div class="blog-btm-desc">
                  <div class="blog-top-desc">
                    <div class="blog-date"> 28 Jan 2017 </div>
                    <h5><a href="blog_single_post.php">Lorem ipsum dolor sit</a></h5>
                    <div class="jtv-entry-meta"> <i class="fa fa-user-o"></i> <strong>Admin</strong><a href="#"><i class="fa fa-commenting-o"></i> <strong>15 Comments</strong></a></div>
                  </div>
                  <p>Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, Mauris fermentum dictum.</p>
                  <a class="read-more" href="blog_single_post.php"> Read More</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-box"><a href="blog_single_post.php"> <img class="primary-img" src="{{ url('site_theme/images/blog-img2.jpg')}}" alt="HTML template"></a>
                <div class="blog-btm-desc">
                  <div class="blog-top-desc">
                    <div class="blog-date"> 18 Feb 2017 </div>
                    <h5><a href="blog_single_post.php">Sed do eiusmod sit amet</a></h5>
                    <div class="jtv-entry-meta"><i class="fa fa-user-o"></i> <strong>Admin</strong><a href="#"><i class="fa fa-commenting-o"></i> <strong>50 Comments</strong></a></div>
                  </div>
                  <p> Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                  <a class="read-more" href="blog_single_post.php"> Read More</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-box"><a href="blog_single_post.php"> <img class="primary-img" src="{{ url('site_theme/images/blog-img3.jpg')}}" alt="HTML template"></a>
                <div class="blog-btm-desc">
                  <div class="blog-top-desc">
                    <div class="blog-date"> 5 Mar 2017 </div>
                    <h5><a href="blog_single_post.php">Integer scelerisque diam</a></h5>
                    <div class="jtv-entry-meta"><i class="fa fa-user-o"></i> <strong>Admin</strong><a href="#"><i class="fa fa-commenting-o"></i> <strong>25 Comments</strong></a></div>
                  </div>
                  <p> Doloremque nam. Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis.  Aenean auctor wisi et urna.</p>
                  <a class="read-more" href="blog_single_post.php"> Read More</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-box"><a href="blog_single_post.php"> <img class="primary-img" src="{{ url('site_theme/images/blog-img4.jpg')}}" alt="HTML template"></a>
                <div class="blog-btm-desc">
                  <div class="blog-top-desc">
                    <div class="blog-date"> 5 May 2017 </div>
                    <h5><a href="blog_single_post.php">Integer scelerisque diam</a></h5>
                    <div class="jtv-entry-meta"><i class="fa fa-user-o"></i> <strong>Admin</strong><a href="#"><i class="fa fa-commenting-o"></i> <strong>05 Comments</strong></a></div>
                  </div>
                  <p>Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis.  Aenean auctor wisi et urna. Aliquam erat volutpat. </p>
                  <a class="read-more" href="blog_single_post.php"> Read More</a> </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-box"><a href="blog_single_post.php"> <img class="primary-img" src="{{ url('site_theme/images/blog-img5.jpg')}}" alt="HTML template"></a>
                <div class="blog-btm-desc">
                  <div class="blog-top-desc">
                    <div class="blog-date"> 06 Aug 2017 </div>
                    <h5><a href="blog_single_post.php">Duis ac turpis aliquam leo</a></h5>
                    <div class="jtv-entry-meta"><i class="fa fa-user-o"></i> <strong>Admin</strong><a href="#"><i class="fa fa-commenting-o"></i> <strong>25 Comments</strong></a></div>
                  </div>
                  <p>Ut sit amet turpis. In est arcu, sollicitudin eu, vehicula venenatis.  Aenean auctor wisi et urna. Aliquam erat volutpat.</p>
                  <a class="read-more" href="blog_single_post.php"> Read More</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="featured-products">
    <div class="container">
      <div class="row"> 
        
        <!-- Best Sale -->
        <div class="col-sm-12 col-md-4 jtv-best-sale">
          <div class="jtv-best-sale-list">
            <div class="wpb_wrapper">
              <div class="best-title text-left">
                <h2>Top Rate</h2>
              </div>
            </div>
            <div class="slider-items-products">
              <div id="toprate-products-slider" class="product-flexslider">
                <div class="slider-items">
                  <ul class="products-grid">
                    <li class="item">
                      <div class="item-inner">
                        <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.php"> <img alt="HTML template" src="{{ url('site_theme/images/product-16.jpg')}}"> </a> </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                            </div>
                            <div class="pr-button-hover">
                              <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                              <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="item">
                      <div class="item-inner">
                        <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.php"> <img alt="HTML template" src="{{ url('site_theme/images/product-19.jpg')}}"> </a> </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$99.99</span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                            </div>
                            <div class="pr-button-hover">
                              <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                              <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="products-grid">
                    <li class="item">
                      <div class="item-inner">
                        <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.php"> <img alt="HTML template" src="{{ url('site_theme/images/product-14.jpg')}}"> </a> </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                            </div>
                            <div class="pr-button-hover">
                              <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                              <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="item">
                      <div class="item-inner">
                        <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.php"> <img alt="HTML template" src="{{ url('site_theme/images/product-12.jpg')}}"> </a> </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$99.99</span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                            </div>
                            <div class="pr-button-hover">
                              <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                              <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="products-grid">
                    <li class="item">
                      <div class="item-inner">
                        <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.php"> <img alt="HTML template" src="{{ url('site_theme/images/product-12.jpg')}}"> </a> </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                            </div>
                            <div class="pr-button-hover">
                              <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                              <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="item">
                      <div class="item-inner">
                        <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.php"> <img alt="HTML template" src="{{ url('site_theme/images/product-6.jpg')}}"> </a> </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box">
                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                              </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                            </div>
                            <div class="pr-button-hover">
                              <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                              <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Banner -->
        <div class="col-md-4 top-banner hidden-sm">
          <div class="jtv-banner3">
            <div class="jtv-banner3-inner"><a href="#"><img src="{{ url('site_theme/images/sub1a.jpg')}}" alt="HTML template"></a>
              <div class="hover_content">
                <div class="hover_data bottom">
                  <div class="desc-text">Top Brands at discount prices </div>
                  <div class="title">Electronisc Sale</div>
                  <span>Smartphone & Cell phone</span>
                  <p><a href="#" class="shop-now">Get it now!</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 jtv-best-sale">
          <div class="jtv-best-sale-list">
            <div class="wpb_wrapper">
              <div class="best-title text-left">
                <h2>New products</h2>
              </div>
            </div>
            <div class="slider-items-products">
              <div id="new-products-slider" class="product-flexslider">
                <div class="slider-items">
                  <ul class="products-grid">
                    <li class="item">
                      <div class="item-inner">
                        <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.php"> <img alt="HTML template" src="{{ url('site_theme/images/product-9.jpg')}}"> </a> </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                            </div>
                            <div class="pr-button-hover">
                              <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                              <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="item">
                      <div class="item-inner">
                        <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.php"> <img alt="HTML template" src="{{ url('site_theme/images/product-2.jpg')}}"> </a> </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box">
                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                              </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                            </div>
                            <div class="pr-button-hover">
                              <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                              <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="products-grid">
                    <li class="item">
                      <div class="item-inner">
                        <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.php"> <img alt="HTML template" src="{{ url('site_theme/images/product-18.jpg')}}"> </a> </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                            </div>
                            <div class="pr-button-hover">
                              <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                              <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="item">
                      <div class="item-inner">
                        <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.php"> <img alt="HTML template" src="{{ url('site_theme/images/product-11.jpg')}}"> </a> </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box">
                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                              </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                            </div>
                            <div class="pr-button-hover">
                              <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                              <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="products-grid">
                    <li class="item">
                      <div class="item-inner">
                        <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.php"> <img alt="HTML template" src="{{ url('site_theme/images/product-6.jpg')}}"> </a> </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                            </div>
                            <div class="pr-button-hover">
                              <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                              <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="item">
                      <div class="item-inner">
                        <div class="item-img"> <a class="product-image" title="Retis lapen casen" href="product_detail.php"> <img alt="HTML template" src="{{ url('site_theme/images/product-9.jpg')}}"> </a> </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Product title here" href="single_product.php">Product title here </a> </div>
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box">
                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                              </div>
                            </div>
                            <div class="pro-action">
                              <button type="button" class="add-to-cart"><i class="fa fa-shopping-cart"></i></button>
                            </div>
                            <div class="pr-button-hover">
                              <div class="mt-button add_to_wishlist"><a href="wishlist.php"> <i class="fa fa-heart-o"></i> </a> </div>
                              <div class="mt-button add_to_compare"><a href="compare.php"> <i class="fa fa-link"></i> </a> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- our clients Slider -->
  
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-xs-12">
        <div class="our-clients">
          <div class="slider-items-products">
            <div id="our-clients-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col6">
                <div class="item"><a href="#"><img src="{{ url('site_theme/images/brand1.png')}}" alt="Image"></a> </div>
                <div class="item"><a href="#"><img src="{{ url('site_theme/images/brand2.png')}}" alt="Image"></a> </div>
                <div class="item"><a href="#"><img src="{{ url('site_theme/images/brand3.png')}}" alt="Image"></a> </div>
                <div class="item"><a href="#"><img src="{{ url('site_theme/images/brand4.png')}}" alt="Image"></a> </div>
                <div class="item"><a href="#"><img src="{{ url('site_theme/images/brand5.png')}}" alt="Image"></a> </div>
                <div class="item"><a href="#"><img src="{{ url('site_theme/images/brand6.png')}}" alt="Image"></a> </div>
                <div class="item"><a href="#"><img src="{{ url('site_theme/images/brand7.png')}}" alt="Image"></a> </div>
                <div class="item"><a href="#"><img src="{{ url('site_theme/images/brand8.png')}}" alt="Image"></a> </div>
                <div class="item"><a href="#"><img src="{{ url('site_theme/images/brand9.png')}}" alt="Image"></a> </div>
                <div class="item"><a href="#"><img src="{{ url('site_theme/images/brand10.png')}}" alt="Image"></a> </div>
                <div class="item"><a href="#"><img src="{{ url('site_theme/images/brand11.png')}}" alt="Image"></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- BANNER-AREA-START -->
  <section class="banner-area">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-lg-6 col-md-6">
              <div class="banner-block"><a href="#"> <img src="{{ url('site_theme/images/banner-sunglasses.jpg')}}" alt="banner sunglasses"> </a>
                <div class="text-des-container">
                  <div class="text-des">
                    <h2>Galaxy Note 5</h2>
                    <p>Fall Phone 25% off Colorful designs!</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-6 col-md-6">
              <div class="banner-block"><a href="#"> <img src="{{ url('site_theme/images/banner-kids.jpg')}}" alt="banner kids"> </a>
                <div class="text-des-container">
                  <div class="text-des">
                    <h2>Music & Sound</h2>
                    <p>For the littlest people</p>
                  </div>
                </div>
              </div>
              <div class="banner-block"><a href="#"> <img src="{{ url('site_theme/images/banner-women.jpg')}}" alt="banner women"> </a>
                <div class="text-des-container">
                  <div class="text-des">
                    <h2>Best Quality Music</h2>
                    <p>Modern Headphones designs shop!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-lg-4 col-md-4">
          <div class="banner-block"><a href="#"> <img src="{{ url('site_theme/images/banner-arrival.jpg')}}" alt="banner arrival"> </a>
            <div class="text-des-container">
              <div class="text-des">
                <h2>special collection</h2>
                <p>Sale upto 50% off on selected items</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="footer-newsletter">
  @include('site.extra.footer_newsletter')
    
  </div>
@endsection

@section('js')
<!-- Slider Js --> 
<script src="{{ url('site_theme/js/revolution-slider.js')}}"></script> 
<script>
    jQuery(document).ready(function(){
        jQuery('#rev_slider_4').show().revolution({
            dottedOverlay: 'none',
            delay: 5000,
            startwidth: 865,
            startheight: 450,

            hideThumbs: 200,
            thumbWidth: 200,
            thumbHeight: 50,
            thumbAmount: 2,

            navigationType: 'thumb',
            navigationArrows: 'solo',
            navigationStyle: 'round',

            touchenabled: 'on',
            onHoverStop: 'on',
            
            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,
        
            spinner: 'spinner0',
            keyboardNavigation: 'off',

            navigationHAlign: 'center',
            navigationVAlign: 'bottom',
            navigationHOffset: 0,
            navigationVOffset: 20,

            soloArrowLeftHalign: 'left',
            soloArrowLeftValign: 'center',
            soloArrowLeftHOffset: 20,
            soloArrowLeftVOffset: 0,

            soloArrowRightHalign: 'right',
            soloArrowRightValign: 'center',
            soloArrowRightHOffset: 20,
            soloArrowRightVOffset: 0,

            shadow: 0,
            fullWidth: 'on',
            fullScreen: 'off',

            stopLoop: 'off',
            stopAfterLoops: -1,
            stopAtSlide: -1,

            shuffle: 'off',

            autoHeight: 'off',
            forceFullWidth: 'on',
            fullScreenAlignForce: 'off',
            minFullScreenHeight: 0,
            hideNavDelayOnMobile: 1500,
        
            hideThumbsOnMobile: 'off',
            hideBulletsOnMobile: 'off',
            hideArrowsOnMobile: 'off',
            hideThumbsUnderResolution: 0,
				

            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            startWithSlide: 0,
            fullScreenOffsetContainer: ''
        });
    });
    </script>
@endsection