@extends('site.layout.master')
@section('title','Wishlist')
@section('body')
  <body class="orders_list_page">
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
              <h2>Orders List</h2>
            </div>
            <div class="orders-list table-responsive"> 
              <!--orders list table-->
              <table class="table table-bordered cart_summary table-striped">
                <thead>
                  <tr> 
                    <!--titles for td-->
                    <th>Order Number</th>
                    <th>Order Date</th>
                    <th>Order Status</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr> 
                    <!--order number-->
                    <td data-title="Order Number"><a href="order_details.php" class="order-number">#12345</a></td>
                    <!--order date-->
                    <td data-title="Order Date">2017-02-13</td>
                    <!--order status-->
                    <td data-title="Order Status">Confirmed by Famous</td>
                    <!--quanity-->
                    <td data-title="Total"><span class="order-total">$79.00</span></td>
                  </tr>
                  <tr> 
                    <!--order number-->
                    <td data-title="Order Number"><a href="order_details.php" class="order-number">#67895</a></td>
                    <!--order date-->
                    <td data-title="Order Date">2017-03-25</td>
                    <!--order status-->
                    <td data-title="Order Status">Confirmed by Famous</td>
                    <!--quanity-->
                    <td data-title="Total"><span class="order-total">$99.00</span></td>
                  </tr>
                  <tr> 
                    <!--order number-->
                    <td data-title="Order Number"><a href="order_details.php" class="order-number">#54321</a></td>
                    <!--order date-->
                    <td data-title="Order Date">2017-04-10</td>
                    <!--order status-->
                    <td data-title="Order Status">Confirmed by Famous</td>
                    <!--quanity-->
                    <td data-title="Total"><span class="order-total">$89.00</span></td>
                  </tr>
                  <tr> 
                    <!--order number-->
                    <td data-title="Order Number"><a href="order_details.php" class="order-number">#12345</a></td>
                    <!--order date-->
                    <td data-title="Order Date">2017-02-13</td>
                    <!--order status-->
                    <td data-title="Order Status">Confirmed by Famous</td>
                    <!--quanity-->
                    <td data-title="Total"><span class="order-total">$79.00</span></td>
                  </tr>
                  <tr> 
                    <!--order number-->
                    <td data-title="Order Number"><a href="order_details.php" class="order-number">#67895</a></td>
                    <!--order date-->
                    <td data-title="Order Date">2017-03-25</td>
                    <!--order status-->
                    <td data-title="Order Status">Confirmed by Famous</td>
                    <!--quanity-->
                    <td data-title="Total"><span class="order-total">$99.00</span></td>
                  </tr>
                  <tr> 
                    <!--order number-->
                    <td data-title="Order Number"><a href="order_details.php" class="order-number">#54321</a></td>
                    <!--order date-->
                    <td data-title="Order Date">2017-04-10</td>
                    <!--order status-->
                    <td data-title="Order Status">Confirmed by Famous</td>
                    <!--quanity-->
                    <td data-title="Total"><span class="order-total">$89.00</span></td>
                  </tr>
                  <tr> 
                    <!--order number-->
                    <td data-title="Order Number"><a href="order_details.php" class="order-number">#12345</a></td>
                    <!--order date-->
                    <td data-title="Order Date">2017-02-13</td>
                    <!--order status-->
                    <td data-title="Order Status">Confirmed by Famous</td>
                    <!--quanity-->
                    <td data-title="Total"><span class="order-total">$79.00</span></td>
                  </tr>
                  <tr> 
                    <!--order number-->
                    <td data-title="Order Number"><a href="order_details.php" class="order-number">#67895</a></td>
                    <!--order date-->
                    <td data-title="Order Date">2017-03-25</td>
                    <!--order status-->
                    <td data-title="Order Status">Confirmed by Famous</td>
                    <!--quanity-->
                    <td data-title="Total"><span class="order-total">$99.00</span></td>
                  </tr>
                  <tr> 
                    <!--order number-->
                    <td data-title="Order Number"><a href="order_details.php" class="order-number">#54321</a></td>
                    <!--order date-->
                    <td data-title="Order Date">2017-04-10</td>
                    <!--order status-->
                    <td data-title="Order Status">Confirmed by Famous</td>
                    <!--quanity-->
                    <td data-title="Total"><span class="order-total">$89.00</span></td>
                  </tr>
                  <tr> 
                    <!--order number-->
                    <td data-title="Order Number"><a href="order_details.php" class="order-number">#12345</a></td>
                    <!--order date-->
                    <td data-title="Order Date">2017-02-13</td>
                    <!--order status-->
                    <td data-title="Order Status">Confirmed by Famous</td>
                    <!--quanity-->
                    <td data-title="Total"><span class="order-total">$79.00</span></td>
                  </tr>
                  <tr> 
                    <!--order number-->
                    <td data-title="Order Number"><a href="order_details.php" class="order-number">#67895</a></td>
                    <!--order date-->
                    <td data-title="Order Date">2017-03-25</td>
                    <!--order status-->
                    <td data-title="Order Status">Confirmed by Famous</td>
                    <!--quanity-->
                    <td data-title="Total"><span class="order-total">$99.00</span></td>
                  </tr>
                  <tr> 
                    <!--order number-->
                    <td data-title="Order Number"><a href="order_details.php" class="order-number">#54321</a></td>
                    <!--order date-->
                    <td data-title="Order Date">2017-04-10</td>
                    <!--order status-->
                    <td data-title="Order Status">Confirmed by Famous</td>
                    <!--quanity-->
                    <td data-title="Total"><span class="order-total">$89.00</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
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