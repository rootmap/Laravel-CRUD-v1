@extends('site.layout.master')
@section('title','My Account')
@section('body')
  <body class="myaccount_page">
@endsection
@section('content')
@include('site.extra.breadcrumb')
<!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="page-content">
        <div class="account-login">
          <div class="box-authentication">
            <h4>Login</h4>
            <p class="before-login-text">Welcome back! Sign in to your account</p>
            <label for="emmail_login">Email address<span class="required">*</span></label>
            <input id="emmail_login" type="text" class="form-control">
            <label for="password_login">Password<span class="required">*</span></label>
            <input id="password_login" type="password" class="form-control">
            <p class="forgot-pass"><a href="#">Lost your password?</a></p>
            <button class="button"><i class="icon-lock icons"></i>&nbsp; <span>Login</span></button>
            <label class="inline" for="rememberme">
              <input type="checkbox" value="forever" id="rememberme" name="rememberme">
              Remember me </label>
          </div>
          <div class="box-authentication">
            <h4>Register</h4>
            <p>Create your very own account</p>
            <label for="emmail_register">Email address<span class="required">*</span></label>
            <input id="emmail_register" type="text" class="form-control">
            <button class="button"><i class="icon-user icons"></i>&nbsp; <span>Register</span></button>
            <div class="register-benefits">
              <h5>Sign up today and you will be able to :</h5>
              <ul>
                <li>Speed your way through checkout</li>
                <li>Track your orders easily</li>
                <li>Keep a record of all your purchases</li>
              </ul>
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