<div class="header-container">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 col-md-4 col-xs-12"> 
              <!-- Default Welcome Message -->
              <div class="welcome-msg hidden-xs hidden-sm">Default welcome msg! </div>
              <!-- Language &amp; Currency wrapper -->
              <div class="language-currency-wrapper">
                <div class="inner-cl">
                  <div class="block block-language form-language">
                    <div class="lg-cur"><span><img src="{{ url('site_theme/images/flag-default.jpg')}}" alt="French"><span class="lg-fr">French</span><i class="fa fa-angle-down"></i></span></div>
                    <ul>
                      <li><a class="selected" href="#"><img src="{{ url('site_theme/images/flag-english.jpg')}}" alt="english"><span>English</span></a></li>
                      <li><a href="#"><img src="{{ url('site_theme/images/flag-default.jpg')}}" alt="French"><span>French</span></a></li>
                      <li><a href="#"><img src="{{ url('site_theme/images/flag-german.jpg')}}" alt="German"><span>German</span></a></li>
                      <li><a href="#"><img src="{{ url('site_theme/images/flag-brazil.jpg')}}" alt="Brazil"><span>Brazil</span></a></li>
                      <li><a href="#"><img src="{{ url('site_theme/images/flag-chile.jpg')}}" alt="Chile"><span>Chile</span></a></li>
                      <li><a href="#"><img src="{{ url('site_theme/images/flag-spain.jpg')}}" alt="Spain"><span>Spain</span></a></li>
                    </ul>
                  </div>
                  <div class="block block-currency">
                    <div class="item-cur"><span>USD</span><i class="fa fa-angle-down"></i></div>
                    <ul>
                      <li><a href="#"><span class="cur_icon">€</span>EUR</a></li>
                      <li><a href="#"><span class="cur_icon">¥</span>JPY</a></li>
                      <li><a class="selected" href="#"><span class="cur_icon">$</span>USD</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- top links -->
            <div class="headerlinkmenu col-md-8 col-sm-8 col-xs-12"> <span class="phone  hidden-xs hidden-sm">Call Us: +123.456.789</span>
              <ul class="links">
                <li class="hidden-xs"><a title="Help Center" href="#"><span>Help Center</span></a></li>
                <li><a title="Store Locator" href="#"><span>Store Locator</span></a></li>
                <li><a title="Checkout" href="{{ url('checkout') }}"><span>Checkout</span></a></li>
                <li>
                  <div class="dropdown"><a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>My Account</span> <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="{{ url('account') }}">Account</a></li>
                      <li><a href="{{ url('wishlist') }}">Wishlist</a></li>
                      <li><a href="{{ url('orders_list') }}">Order Tracking</a></li>
                      <li><a href="{{ url('about') }}">About us</a></li>
                      <li class="divider"></li>
                      <li><a href="{{ url('account') }}">Log In</a></li>
                      <li><a href="{{ url('register') }}">Register</a></li>
                    </ul>
                  </div>
                </li>
                <li><a title="login" href="{{ url('account') }}"><span>Login</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- header inner -->
      <div class="header-inner">
        <div class="container">
          <div class="row">
            <div class="col-sm-3 col-xs-12 jtv-logo-block"> 
              
              <!-- Header Logo -->
              <div class="logo"><a title="e-commerce" href="{{ url('index') }}"><img alt="Famous" title="Famous logo" src="{{ url('site_theme/images/logo.png')}}"></a> </div>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-6 jtv-top-search"> 
              
              <!-- Search -->
              
              <div class="top-search">
                <div id="search">
                  <form>
                    <div class="input-group">
                      <select class="cate-dropdown hidden-xs hidden-sm" name="category_id">
                        <option>All Categories</option>
                        <option>women</option>
                        <option>&nbsp;&nbsp;&nbsp;Chair </option>
                        <option>&nbsp;&nbsp;&nbsp;Decoration</option>
                        <option>&nbsp;&nbsp;&nbsp;Lamp</option>
                        <option>&nbsp;&nbsp;&nbsp;Handbags </option>
                        <option>&nbsp;&nbsp;&nbsp;Sofas </option>
                        <option>&nbsp;&nbsp;&nbsp;Essential </option>
                        <option>Men</option>
                        <option>Electronics</option>
                        <option>&nbsp;&nbsp;&nbsp;Mobiles </option>
                        <option>&nbsp;&nbsp;&nbsp;Music &amp; Audio </option>
                      </select>
                      <input type="text" class="form-control" placeholder="Enter your search..." name="search">
                      <button class="btn-search" type="button"><i class="fa fa-search"></i></button>
                    </div>
                  </form>
                </div>
              </div>
              
              <!-- End Search --> 
              
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 top-cart">
              <div class="link-wishlist"><a href="#"> <i class="icon-heart icons"></i><span> Wishlist</span></a> </div>
              <!-- top cart -->
              <div class="top-cart-contain">
                <div class="mini-cart">
                  <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"><a href="#">
                    <div class="cart-icon"><i class="icon-basket-loaded icons"></i><span class="cart-total">3</span></div>
                    <div class="shoppingcart-inner hidden-xs"><span class="cart-title">My Cart</span> </div>
                    </a></div>
                  <div>
                    <div class="top-cart-content">
                      <div class="block-subtitle hidden">Recently added items</div>
                      <ul id="cart-sidebar" class="mini-products-list">
                        <li class="item odd"><a href="shopping_cart.php" title="Product title here" class="product-image"><img src="{{ url('site_theme/images/product-9.jpg')}}" alt="html Template" width="65"></a>
                          <div class="product-details"><a href="#" title="Remove This Item" class="remove-cart"><i class="pe-7s-trash"></i></a>
                            <p class="product-name"><a href="shopping_cart.php">Lorem ipsum dolor sit amet Consectetur</a> </p>
                            <strong>1</strong> x <span class="price">$20.00</span> </div>
                        </li>
                        <li class="item even"><a href="shopping_cart.php" title="Product title here" class="product-image"><img src="{{ url('site_theme/images/product-11.jpg')}}" alt="html Template" width="65"></a>
                          <div class="product-details"><a href="#" title="Remove This Item" class="remove-cart"><i class="pe-7s-trash"></i></a>
                            <p class="product-name"><a href="shopping_cart.php">Consectetur utes anet adipisicing elit</a> </p>
                            <strong>1</strong> x <span class="price">$230.00</span> </div>
                        </li>
                        <li class="item last odd"><a href="shopping_cart.php" title="Product title here" class="product-image"><img src="{{ url('site_theme/images/product-10.jpg')}}" alt="html Template" width="65"></a>
                          <div class="product-details"><a href="#" title="Remove This Item" class="remove-cart"><i class="pe-7s-trash"></i></a>
                            <p class="product-name"><a href="shopping_cart.php">Sed do eiusmod tempor incidist</a> </p>
                            <strong>2</strong> x <span class="price">$420.00</span> </div>
                        </li>
                      </ul>
                      <div class="top-subtotal">Subtotal: <span class="price">$520.00</span></div>
                      <div class="actions">
                        <button class="btn-checkout" type="button" onClick="location.href='checkout.php'"><i class="fa fa-check"></i><span>Checkout</span></button>
                        <button class="view-cart" type="button" onClick="location.href='shopping_cart.php'"><i class="fa fa-shopping-cart"></i><span>View Cart</span></button>
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