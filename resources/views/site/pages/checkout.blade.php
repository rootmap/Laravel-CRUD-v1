@extends('site.layout.master')
@section('title','Checkout')
@section('body')
  <body class="checkout_page">
@endsection
@section('content')
@include('site.extra.breadcrumb')
<!-- Main Container -->
  <section class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <div class="col-main col-sm-9 col-xs-12">
<div class="page-title">
              <h2>Checkout</h2>
            </div>
          <div class="page-content checkout-page">
            
            <h4 class="checkout-sep">1. Checkout Method</h4>
            <div class="box-border">
              <div class="row">
                <div class="col-sm-6">
                  <h5>Checkout as a Guest or Register</h5>
                  <p>Register with us for future convenience:</p>
                  <ul>
                    <li>
                      <label>
                        <input type="radio" name="radio1">
                        Checkout as Guest</label>
                    </li>
                    <li>
                      <label>
                        <input type="radio" name="radio1">
                        Register</label>
                    </li>
                  </ul>
                  <br>
                  <h4>Register and save time!</h4>
                  <p>Register with us for future convenience:</p>
                  <p><i class="fa fa-check-circle text-primary"></i> Fast and easy check out</p>
                  <p><i class="fa fa-check-circle text-primary"></i> Easy access to your order history and status</p>
                  <button class="button"><i class="fa fa-angle-double-right"></i>&nbsp; <span>Continue</span></button>
                </div>
                <div class="col-sm-6">
                  <h5>Login</h5>
                  <p>Already registered? Please log in below:</p>
                  <label>Email address</label>
                  <input type="text" class="form-control input">
                  <label>Password</label>
                  <input type="password" class="form-control input">
                  <p><a href="#">Forgot your password?</a></p>
                  <button class="button"><i class="icon-login"></i>&nbsp; <span>Login</span></button>
                </div>
              </div>
            </div>
            <h4 class="checkout-sep">2. Billing Infomations</h4>
            <div class="box-border" style="display:none;">
              <ul>
                <li class="row">
                  <div class="col-sm-6">
                    <label for="first_name" class="required">First Name</label>
                    <input type="text" class="input form-control" name="First Name" id="first_name">
                  </div>
                  <!--/ [col] -->
                  <div class="col-sm-6">
                    <label for="last_name" class="required">Last Name</label>
                    <input type="text" name="Last Name" class="input form-control" id="last_name">
                  </div>
                  <!--/ [col] --> 
                </li>
                <!--/ .row -->
                <li class="row">
                  <div class="col-sm-6">
                    <label for="company_name">Company Name</label>
                    <input type="text" name="Company Name" class="input form-control" id="company_name">
                  </div>
                  <!--/ [col] -->
                  <div class="col-sm-6">
                    <label for="email_address" class="required">Email Address</label>
                    <input type="text" class="input form-control" name="Email Address" id="email_address">
                  </div>
                  <!--/ [col] --> 
                </li>
                <!--/ .row -->
                <li class="row">
                  <div class="col-xs-12">
                    <label for="address" class="required">Address</label>
                    <input type="text" class="input form-control" name="Address" id="address">
                  </div>
                  <!--/ [col] --> 
                  
                </li>
                <!-- / .row -->
                
                <li class="row">
                  <div class="col-sm-6">
                    <label for="city" class="required">City</label>
                    <input class="input form-control" type="text" name="City" id="city">
                  </div>
                  <!--/ [col] -->
                  
                  <div class="col-sm-6">
                    <label class="required">State/Province</label>
                    <select class="input form-control">
                      <option value="Alabama">Alabama</option>
                      <option value="Illinois">Illinois</option>
                      <option value="Kansas">Kansas</option>
                    </select>
                  </div>
                  <!--/ [col] --> 
                </li>
                <!--/ .row -->
                
                <li class="row">
                  <div class="col-sm-6">
                    <label for="postal_code" class="required">Zip/Postal Code</label>
                    <input class="input form-control" type="text" id="postal_code">
                  </div>
                  <!--/ [col] -->
                  
                  <div  class="col-sm-6">
                    <label class="required">Country</label>
                    <select class="input form-control">
                      <option value="USA">USA</option>
                      <option value="Australia">Australia</option>
                      <option value="Austria">Austria</option>
                      <option value="Argentina">Argentina</option>
                      <option value="Canada">Canada</option>
                    </select>
                  </div>
                  <!--/ [col] --> 
                </li>
                <!--/ .row -->
                <li class="row">
                  <div class="col-sm-6">
                    <label for="telephone" class="required">Telephone</label>
                    <input class="input form-control" type="text" id="telephone">
                  </div>
                  <!--/ [col] -->
                  
                  <div class="col-sm-6">
                    <label for="fax">Fax</label>
                    <input class="input form-control" type="text" id="fax">
                  </div>
                  <!--/ [col] --> 
                  
                </li>
                <!--/ .row -->
                
                <li class="row">
                  <div class="col-sm-6">
                    <label for="password" class="required">Password</label>
                    <input class="input form-control" type="password" id="password">
                  </div>
                  <!--/ [col] -->
                  
                  <div class="col-sm-6">
                    <label for="confirm" class="required">Confirm Password</label>
                    <input class="input form-control" type="password" id="confirm">
                  </div>
                  <!--/ [col] --> 
                </li>
                <!--/ .row -->
                <li>
                  <button class="button"><i class="fa fa-angle-double-right"></i>&nbsp; <span>Continue</span></button>
                </li>
              </ul>
            </div>
            <h4 class="checkout-sep">3. Shipping Information</h4>
            <div class="box-border" style="display:none;">
              <ul>
                <li class="row">
                  <div class="col-sm-6">
                    <label for="first_name_1" class="required">First Name</label>
                    <input class="input form-control" type="text" id="first_name_1">
                  </div>
                  <!--/ [col] -->
                  
                  <div class="col-sm-6">
                    <label for="last_name_1" class="required">Last Name</label>
                    <input class="input form-control" type="text" id="last_name_1">
                  </div>
                  <!--/ [col] --> 
                  
                </li>
                <!--/ .row -->
                
                <li class="row">
                  <div class="col-sm-6">
                    <label for="company_name_1">Company Name</label>
                    <input class="input form-control" type="text" id="company_name_1">
                  </div>
                  <!--/ [col] -->
                  
                  <div class="col-sm-6">
                    <label for="email_address_1" class="required">Email Address</label>
                    <input class="input form-control" type="text" id="email_address_1">
                  </div>
                  <!--/ [col] --> 
                  
                </li>
                <!--/ .row -->
                
                <li class="row">
                  <div class="col-xs-12">
                    <label for="address_1" class="required">Address</label>
                    <input class="input form-control" type="text" id="address_1">
                  </div>
                  <!--/ [col] --> 
                  
                </li>
                <!--/ .row -->
                
                <li class="row">
                  <div class="col-sm-6">
                    <label for="city_1" class="required">City</label>
                    <input class="input form-control" type="text" id="city_1">
                  </div>
                  <!--/ [col] -->
                  
                  <div class="col-sm-6">
                    <label class="required">State/Province</label>
                    <div class="custom_select">
                      <select class="input form-control">
                        <option value="Alabama">Alabama</option>
                        <option value="Illinois">Illinois</option>
                        <option value="Kansas">Kansas</option>
                      </select>
                    </div>
                  </div>
                  <!--/ [col] --> 
                  
                </li>
                <!--/ .row -->
                
                <li class="row">
                  <div class="col-sm-6">
                    <label for="postal_code_1" class="required">Zip/Postal Code</label>
                    <input class="input form-control" type="text" id="postal_code_1">
                  </div>
                  <!--/ [col] -->
                  
                  <div class="col-sm-6">
                    <label class="required">Country</label>
                    <div class="custom_select">
                      <select class="input form-control">
                        <option value="USA">USA</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Canada">Canada</option>
                      </select>
                    </div>
                  </div>
                  <!--/ [col] --> 
                  
                </li>
                <!--/ .row -->
                
                <li class="row">
                  <div class="col-sm-6">
                    <label for="telephone_1" class="required">Telephone</label>
                    <input class="input form-control" type="text" id="telephone_1">
                  </div>
                  <!--/ [col] -->
                  
                  <div class="col-sm-6">
                    <label for="fax_1">Fax</label>
                    <input class="input form-control" type="text" id="fax_1">
                  </div>
                  <!--/ [col] --> 
                  
                </li>
                <!--/ .row -->
                
              </ul>
              <button class="button"><i class="fa fa-angle-double-right"></i>&nbsp; <span>Continue</span></button>
            </div>
            <h4 class="checkout-sep">4. Shipping Method</h4>
            <div class="box-border" style="display:none;">
              <ul class="shipping_method">
                <li>
                  <p class="subcaption bold">Free Shipping</p>
                  <label for="radio_button_3">
                    <input type="radio" checked name="radio_3" id="radio_button_3">
                    Free $0</label>
                </li>
                <li>
                  <p class="subcaption bold">Free Shipping</p>
                  <label for="radio_button_4">
                    <input type="radio" name="radio_3" id="radio_button_4">
                    Standard Shipping $5.00</label>
                </li>
              </ul>
              <button class="button"><i class="fa fa-angle-double-right"></i>&nbsp; <span>Continue</span></button>
            </div>
            <h4 class="checkout-sep">5. Payment Information</h4>
            <div class="box-border" style="display:none;">
              <ul>
                <li>
                  <label for="radio_button_5">
                    <input type="radio" checked name="radio_4" id="radio_button_5">
                    Check / Money order</label>
                </li>
                <li>
                  <label for="radio_button_6">
                    <input type="radio" name="radio_4" id="radio_button_6">
                    Credit card (saved)</label>
                </li>
              </ul>
              <button class="button"><i class="fa fa-angle-double-right"></i>&nbsp; <span>Continue</span></button>
            </div>
            <h4 class="checkout-sep last">6. Order Review</h4>
            <div class="box-border" style="display:none;">
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
                      <th class="action"><i class="fa fa-trash-o"></i></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="cart_product"><a href="#"><img src="images/product-2.jpg" alt="Product"></a></td>
                      <td class="cart_description"><p class="product-name"><a href="#">Frederique Constant </a></p>
                        <small><a href="#">Color : Beige</a></small><br>
                        <small><a href="#">Size : S</a></small></td>
                      <td class="cart_avail"><span class="label label-success">In stock</span></td>
                      <td class="price"><span>$60.99 </span></td>
                      <td class="qty"><input class="form-control input-sm" type="text" value="1"></td>
                      <td class="price"><span>$60.99 </span></td>
                      <td class="action"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                    </tr>
                    <tr>
                      <td class="cart_product"><a href="#"><img src="images/product-1.jpg" alt="Product"></a></td>
                      <td class="cart_description"><p class="product-name"><a href="#">Frederique Constant </a></p>
                        <small><a href="#">Color : Beige</a></small><br>
                        <small><a href="#">Size : S</a></small></td>
                      <td class="cart_avail"><span class="label label-success">In stock</span></td>
                      <td class="price"><span>$99.19 </span></td>
                      <td class="qty"><input class="form-control input-sm" type="text" value="1"></td>
                      <td class="price"><span>$99.19 </span></td>
                      <td class="action"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="2" rowspan="2"></td>
                      <td colspan="3">Total products (tax incl.)</td>
                      <td colspan="2">$160.88 </td>
                    </tr>
                    <tr>
                      <td colspan="3"><strong>Total</strong></td>
                      <td colspan="2"><strong>$160.88 </strong></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <button class="button pull-right"><span>Place Order</span></button>
            </div>
          </div>
        </div>
        <aside class="right sidebar col-sm-3 col-xs-12">
          <div class="sidebar-checkout block">
            <div class="sidebar-bar-title">
              <h3>Your Checkout</h3>
            </div>
            <div class="block-content">
              <dl>
                <dt class="complete"> Billing Address <span class="separator">|</span><a href="#">Change</a> </dt>
                <dd class="complete">
                  <address>
                  Deo Jone<br>
                  Company Name<br>
                  7064 Lorem <br>
                  Ipsum <br>
                  Vestibulum 0 666/13<br>
                  United States<br>
                  T: 12345678 <br>
                  F: 987654
                  </address>
                </dd>
                <dt class="complete"> Shipping Address <span class="separator">|</span><a href="#">Change</a> </dt>
                <dd class="complete">
                  <address>
                  Deo Jone<br>
                  Company Name<br>
                  7064 Lorem <br>
                  Ipsum <br>
                  Vestibulum 0 666/13<br>
                  United States<br>
                  T: 12345678 <br>
                  F: 987654
                  </address>
                </dd>
                <dt class="complete"> Shipping Method <span class="separator">|</span><a href="#">Change</a> </dt>
                <dd class="complete"> Flat Rate - Fixed <br>
                  <span class="price">$15.00</span> </dd>
                <dt> Payment Method </dt>
              </dl>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </section>
  <!-- Main Container End --> 
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