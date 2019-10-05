@extends('site.layout.master')
@section('title','Register')
@section('body')
  <body class="register_page">
@endsection
@section('content')
@include('site.extra.breadcrumb')
<!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="page-content">
        <div class="account-login">
          <div class="col-md-3 col-sm-2"></div>
          <div class="col-md-6 col-sm-8">
            <div class="single-input p-bottom50 clearfix">
              <form action="my-account.php" method="post">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="check-title">
                      <h4>New Customer</h4>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label>First Name:</label>
                    <div class="input-text">
                      <input type="text" name="name" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label>Last Name:</label>
                    <div class="input-text">
                      <input type="text" name="name" class="form-control">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <label>Address:</label>
                    <div class="input-text">
                      <input type="text" name="address" class="form-control">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <label>City/Town:</label>
                    <div class="input-text">
                      <input type="text" name="city" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label>Email:</label>
                    <div class="input-text">
                      <input type="text" name="email" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label>Phone:</label>
                    <div class="input-text">
                      <input type="text" name="phone" class="form-control">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="billing-checkbox">
                      <input type="checkbox" value="forever" id="rememberme" name="rememberme">
                      Sign up for our newsletter! </div>
                    <div class="submit-text">
                      <button class="button"><i class="fa fa-user"></i>&nbsp; <span>Register</span></button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
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