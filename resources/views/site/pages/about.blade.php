@extends('site.layout.master')
@section('title','About Us')
@section('body')
  <body class="about_us_page">
@endsection
@section('content')
@include('site.extra.breadcrumb')
  <!-- Main Container -->
  
  <div class="main container">
 
     <div class="about-page">
        <div class="col-xs-12 col-sm-6"> 
          
          <h1>Welcome to <span class="text_color">Famous</span></h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacus metus, convallis ut leo nec, tincidunt eleifend justo. Ut felis orci, hendrerit a pulvinar et, gravida ac lorem. Sed vitae molestie sapien, at sollicitudin tortor.<br>
            <br>
            Duis id volutpat libero, id vestibulum purus.Donec euismod accumsan felis,<a href="#">egestas lobortis velit tempor</a> vitae. Integer eget velit fermentum, dignissim odio non, bibendum velit.</p>
          <ul>
            <li><i class="fa fa-arrow-right"></i>&nbsp;<a href="#">Suspendisse potenti. Morbi mollis tellus ac sapien.</a></li>
            <li><i class="fa fa-arrow-right"></i>&nbsp;<a href="#">Cras id dui. Nam ipsum risus, rutrum vitae, vestibulum eu.</a></li>
            <li><i class="fa fa-arrow-right"></i>&nbsp;<a href="#">Phasellus accumsan cursus velit. Pellentesque egestas.</a></li>
            <li><i class="fa fa-arrow-right"></i>&nbsp;<a href="#">Lorem Ipsum generators on the Internet tend to repeat predefined.</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-6">
          <div class="single-img-add sidebar-add-slider">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
              
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active"> <img src="{{url('site_theme/images/about_us_slide1.jpg')}}" alt="slide1"> </div>
                <div class="item"> <img src="{{url('site_theme/images/about_us_slide2.jpg')}}" alt="slide2"> </div>
                <div class="item"> <img src="{{url('site_theme/images/about_us_slide3.jpg')}}" alt="slide3"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>
  <!-- Section: services -->
  <section id="service" class="text-center"> 
    
   
    
    <div class="container">
     
      <div class="row">
        <div class="col-sm-3 col-md-3">
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <div class="service-box">
              <div class="service-icon"> <i class="icon-diamond icons"></i> </div>
              <div class="service-desc">
                <h4>Web Design</h4>
                <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-md-3">
          <div class="wow fadeInLeft" data-wow-delay="0.2s">
            <div class="service-box">
              <div class="service-icon"> <i class="icon-settings icons"></i> </div>
              <div class="service-desc">
                <h4>Programming</h4>
                <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-md-3">
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <div class="service-box">
              <div class="service-icon"> <i class="icon-camera icons"></i> </div>
              <div class="service-desc">
                <h4>Photography</h4>
                <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-md-3">
          <div class="wow fadeInRight" data-wow-delay="0.2s">
            <div class="service-box">
              <div class="service-icon"> <i class="icon-magnifier-add icons"></i> </div>
              <div class="service-desc">
                <h4>SEO</h4>
                <p>Lorem ipsum dolor sit amet set, consectetur utes anet adipisicing elit, sed do eiusmod tempor incidist.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Section: services --> 
  <div class="our-team"> 

    
   
      
    <div class="container"> <div class="page-header">
        <h2>Our Team</h2>
      </div>
      <div class="row">
        <div class="col-xs-6 col-sm-3 col-md-3">
          <div class="wow bounceInUp" data-wow-delay="0.2s">
            <div class="team">
              <div class="inner">
                <div class="avatar"><img src="{{url('site_theme/images/team-img01.jpg')}}" alt="HTML template" class="img-responsive" /></div>
                <h5>Joana Doe</h5>
                <p class="subtitle">Art-director</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-3">
          <div class="wow bounceInUp" data-wow-delay="0.5s">
            <div class="team">
              <div class="inner">
                <div class="avatar"><img src="{{url('site_theme/images/team-img02.jpg')}}" alt="HTML template" class="img-responsive" /></div>
                <h5>Josefine</h5>
                <p class="subtitle">Team Leader</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-3">
          <div class="wow bounceInUp" data-wow-delay="0.8s">
            <div class="team">
              <div class="inner">
                <div class="avatar"><img src="{{url('site_theme/images/team-img03.jpg')}}" alt="HTML template" class="img-responsive" /></div>
                <h5>Paulo Moreira</h5>
                <p class="subtitle">Senior Web Developer</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-3">
          <div class="wow bounceInUp" data-wow-delay="1s">
            <div class="team">
              <div class="inner">
                <div class="avatar"><img src="{{url('site_theme/images/team-img04.jpg')}}" alt="HTML template" class="img-responsive" /></div>
                <h5>Tom Joana</h5>
                <p class="subtitle">Digital Creative Director</p>
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