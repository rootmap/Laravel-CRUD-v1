@extends('site.layout.master')
@section('title','Shopping cart')
@section('body')
  <body class="shopping_cart_page">
@endsection
@section('content')
{{-- @include('site.extra.breadcrumb') --}}
  <!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="col-main">
        <div class="cart">
          
          <div class="page-content page-order"><div class="page-title">
            <h2>Shopping Cart</h2>
          </div>
            
            
            <div class="order-detail-content">
              <div class="table-responsive">
                <table class="table table-bordered cart_summary">
                  <thead>
                    <tr>
                      <th class="cart_product">Product</th>
                      <th>Description</th>
                      <th>Avail.</th>
                      <th>Unit price</th>
                      <th>Qty</th>
                      <th>Total</th>
                      <th  class="action"><i class="fa fa-trash-o"></i></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="cart_product"><a href="#"><img src="{{url('site_theme/images/product-1.jpg')}}" alt="Product"></a></td>
                      <td class="cart_description"><p class="product-name"><a href="#">Ipsums Dolors Untra </a></p>
                        <small><a href="#">Color : Red</a></small>
                        <small><a href="#">Size : M</a></small></td>
                      <td class="availability in-stock"><span class="label">In stock</span></td>
                      <td class="price"><span>$49.88</span></td>
                      <td class="qty"><input class="form-control input-sm" type="text" value="1"></td>
                      <td class="price"><span>$49.88</span></td>
                      <td class="action"><a href="#"><i class="icon-close"></i></a></td>
                    </tr>
                    <tr>
                      <td class="cart_product"><a href="#"><img src="{{url('site_theme/images/product-2.jpg')}}" alt="Product"></a></td>
                      <td class="cart_description"><p class="product-name"><a href="#">Ipsums Dolors Untra </a></p>
                        <small><a href="#">Color : Green</a></small>
                        <small><a href="#">Size : XL</a></small></td>
                      <td class="availability out-of-stock"><span class="label">No stock</span></td>
                      <td class="price"><span>$00.00</span></td>
                      <td class="qty"><input class="form-control input-sm" type="text" value="0"></td>
                      <td class="price"><span>00.00</span></td>
                      <td class="action"><a href="#"><i class="icon-close"></i></a></td>
                    </tr>
                    <tr>
                      <td class="cart_product"><a href="#"><img src="{{url('site_theme/images/product-3.jpg')}}" alt="Product"></a></td>
                      <td class="cart_description"><p class="product-name"><a href="#">Ipsums Dolors Untra </a></p>
                        <small><a href="#">Color : Blue</a></small>
                        <small><a href="#">Size : S</a></small></td>
                      <td class="availability in-stock"><span class="label">In stock</span></td>
                      <td class="price"><span>$99.00</span></td>
                      <td class="qty"><input class="form-control input-sm" type="text" value="2"></td>
                      <td class="price"><span>$188.00</span></td>
                      <td class="action"><a href="#"><i class="icon-close"></i></a></td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="2" rowspan="2"></td>
                      <td colspan="3">Total products (tax incl.)</td>
                      <td colspan="2">$237.88 </td>
                    </tr>
                    <tr>
                      <td colspan="3"><strong>Total</strong></td>
                      <td colspan="2"><strong>$237.88 </strong></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class="cart_navigation"> <a class="continue-btn" href="#"><i class="fa fa-arrow-left"> </i>&nbsp; Continue shopping</a> <a class="checkout-btn" href="#"><i class="fa fa-check"></i> Proceed to checkout</a> </div>
            </div>
          </div>
        </div>
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