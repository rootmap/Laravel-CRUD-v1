@extends('site.layout.master')
@section('title','Wishlist')
@section('body')
  <body class="wishlist_page">
@endsection
@section('content')
@include('site.extra.breadcrumb')
<!-- Main Container -->
  <section class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <div class="col-main col-sm-9 col-xs-12">
          <div class="my-account">
            <div class="page-title">
              <h2>My Wishlist</h2>
            </div>
            <div class="wishlist-item table-responsive">
              <table class="col-md-12">
                <thead>
                  <tr>
                    <th class="th-delate">Remove</th>
                    <th class="th-product">Images</th>
                    <th class="th-details">Product Name</th>
                    <th class="th-price">Unit Price</th>
                    <th class="th-total th-add-to-cart">Add to Cart </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="th-delate"><a href="#">X</a></td>
                    <td class="th-product"><a href="#"><img src="{{url('site_theme/images/product-3.jpg')}}" alt="cart"></a></td>
                    <td class="th-details"><h2><a href="#">Lorem Ipsum is simply</a></h2></td>
                    <td class="th-price">$125.00</td>
                    <th class="td-add-to-cart"><a href="#"> Add to Cart</a></th>
                  </tr>
                  <tr>
                    <td class="th-delate"><a href="#">X</a></td>
                    <td class="th-product"><a href="#"><img src="{{url('site_theme/images/product-13.jpg')}}" alt="cart"></a></td>
                    <td class="th-details"><h2><a href="#">Leo quis molestie</a></h2></td>
                    <td class="th-price">$99.00</td>
                    <th class="td-add-to-cart"><a href="#"> Add to Cart</a></th>
                  </tr>
                  <tr>
                    <td class="th-delate"><a href="#">X</a></td>
                    <td class="th-product"><a href="#"><img src="{{url('site_theme/images/product-2.jpg')}}" alt="cart"></a></td>
                    <td class="th-details"><h2><a href="#">Lorem Ipsum is simply</a></h2></td>
                    <td class="th-price">$179.89</td>
                    <th class="td-add-to-cart"><a href="#"> Add to Cart</a></th>
                  </tr>
                  <tr>
                    <td class="th-delate"><a href="#">X</a></td>
                    <td class="th-product"><a href="#"><img src="{{url('site_theme/images/product-1.jpg')}}" alt="cart"></a></td>
                    <td class="th-details"><h2><a href="#">Leo quis molestie</a></h2></td>
                    <td class="th-price">$199.00</td>
                    <th class="td-add-to-cart"><a href="#"> Add to Cart</a></th>
                  </tr>
                </tbody>
              </table>
             <a href="checkout.php" class="all-cart">Add all to cart</a> </div>
          </div>
        </div>
        <aside class="right sidebar col-sm-3 col-xs-12">
          <div class="sidebar-account block">
            <div class="sidebar-bar-title">
              <h3>My Account</h3>
            </div>
            <div class="block-content">
              <ul>
                <li><a>Account Dashboard</a></li>
                <li><a href="#">Account Information</a></li>
                <li><a href="#">Address Book</a></li>
                <li><a href="#">My Orders</a></li>
                <li><a href="#">Billing Agreements</a></li>
                <li><a href="#">Recurring Profiles</a></li>
                <li><a href="#">My Product Reviews</a></li>
                <li><a href="#">My Tags</a></li>
                <li class="current"><a href="#">My Wishlist</a></li>
                <li><a href="#">My Downloadable</a></li>
                <li class="last"><a href="#">Newsletter Subscriptions</a></li>
              </ul>
            </div>
          </div>
          <div class="compare block">
            <div class="sidebar-bar-title">
              <h3>Compare Products (2)</h3>
            </div>
            <div class="block-content">
              <ol id="compare-items">
                <li class="item"><a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a><a href="#" class="product-name">Vestibulum porta tristique porttitor.</a></li>
                <li class="item"><a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a><a href="#" class="product-name">Lorem ipsum dolor sit amet</a></li>
              </ol>
              <div class="ajax-checkout">
                <button type="submit" title="Submit" class="button button-compare"> <span> Compare</span></button>
                <button type="submit" title="Submit" class="button button-clear"> <span> Clear All</span></button>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </section>
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
                <h3>30 Days Return</h3>
                <p>Moneyback guarantee </p>
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
@endsection
@section('js')

@endsection