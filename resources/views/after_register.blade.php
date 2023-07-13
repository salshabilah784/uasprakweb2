<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ShopMax &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="{{ asset('after_register/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('after_register/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('after_register/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('after_register/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('after_register/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('after_register/css/owl.theme.default.min.css') }}">


    <link rel="stylesheet" href="{{ asset('after_register/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('after_register/css/style.css') }}">
    
  </head>
  <body>
    <div class="site-wrap">
      <div class="site-navbar bg-white py-2">
        <div class="search-wrap">
          <div class="container">
            <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
            <form action="#" method="post">
              <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
            </form>  
          </div>
        </div>
  
        <div class="container">
          <div class="d-flex align-items-center justify-content-between">
            <div class="logo">
              <div class="site-logo">
                <a href="#" class="js-logo-clone">ShopMax</a>
              </div>
            </div>
            <div class="main-nav d-none d-lg-block">
              <nav class="site-navigation text-right text-md-center" role="navigation">
                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li>
                    <a href="{{ url('views/after_register') }}">Home</a>
                  </li>
                  
                  <li><a href="{{ url('views/shop') }}">Shop</a></li>
                  <li><a href="{{ url('views/catalog') }}">Catalogue</a></li>
                  <li><a href="{{ url('views/about') }}">About</a></li>
                  <li class="active">   <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>
                
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf </li> 
                </ul>
              </nav>
            </div>
            <div class="main-nav d-none d-lg-block">    
            </div>
            <div class="icons">
              <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
              <a href="#" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>
              <a href="#" class="icons-btn d-inline-block bag">
                <span class="icon-shopping-bag"></span>
              
              </a>
              <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
            </div>
          </div>
        </div>
      </div>
  
      <div class="site-blocks-cover" data-aos="fade">
        <div class="container">
          <div class="row">
            <div class="col-md-6 ml-auto order-md-2 align-self-start">
              <div class="site-block-cover-content">
              <h2 class="sub-title">#New Summer Collection 2021</h2>
              <h1>Arrivals Sales</h1>
              <p><a href="{{ url('views/shop') }}" class="btn btn-black rounded-0">Shop Now</a></p>
              </div>
            </div>
            <div class="col-md-6 order-1 align-self-end">
              <img src="{{ asset('after_register/images/model_3.png') }}" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
  
      <div class="site-section">
        <div class="container">
          <div class="title-section mb-5">
            <h2 class="text-uppercase"><span class="d-block">Discover</span> The Collections</h2>
          </div>
          <div class="row align-items-stretch">
            <div class="col-lg-8">
              <div class="product-item sm-height full-height bg-gray">
                <a href="{{ url('views/catalog') }}" class="product-category">T-Shirt Uniqlo <span>25 items</span></a>
                <img src="{{ asset('after_register/images/Uniqlo.png') }}" alt="Image" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="product-item sm-height bg-gray mb-4">
                <a href="{{ url('views/catalog') }}" class="product-category">Jacket <span>25 items</span></a>
                <img src="{{ asset('after_register/images/jacket.png') }}" alt="Image" class="img-fluid">
              </div>
  
              <div class="product-item sm-height bg-gray">
                <a href="{{ url('views/catalog') }}" class="product-category">Tas <span>25 items</span></a>
                <img src="{{ asset('after_register/images/tas4.png') }}" alt="Image" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
  
  
      
      <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="title-section mb-5 col-12">
              <h2 class="text-uppercase">Popular Products</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 item-entry mb-4">
              <a href="#" class="product-item md-height bg-gray d-block">
                <img src="{{ asset('after_register/images/uniqlo3.png') }}" alt="Image" class="img-fluid">
              </a>
              <h2 class="item-title"><a href="#">Uniqlo T-shirt</a></h2>
              <strong class="item-price">Rp 300.000</strong>
              <div class="star-rating">
                <span class="icon-star2 text-warning"></span>
                <span class="icon-star2 text-warning"></span>
                <span class="icon-star2 text-warning"></span>
                <span class="icon-star2 text-warning"></span>
                <span class="icon-star2 text-warning"></span>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 item-entry mb-4">
              <a href="#" class="product-item md-height bg-gray d-block">
                <img src="{{ asset('after_register/images/jacket2.png') }}" alt="Image" class="img-fluid">
              </a>
              <h2 class="item-title"><a href="#">Denim Jacket </a></h2>
              <strong class="item-price"><del>Rp 900.000</del> Rp 750.000</strong>
              <div class="star-rating">
                <span class="icon-star2 text-warning"></span>
                <span class="icon-star2 text-warning"></span>
                <span class="icon-star2 text-warning"></span>
                <span class="icon-star2 text-warning"></span>
                <span class="icon-star2 text-warning"></span>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 item-entry mb-4">
              <a href="#" class="product-item md-height bg-gray d-block">
                <img src="{{ asset('after_register/images/levis.png') }}" alt="Image" class="img-fluid">
              </a>
              <h2 class="item-title"><a href="#">Levis pants</a></h2>
              <strong class="item-price">Rp 300.000</strong>
  
              <div class="star-rating">
                <span class="icon-star2 text-warning"></span>
                <span class="icon-star2 text-warning"></span>
                <span class="icon-star2 text-warning"></span>
                <span class="icon-star2 text-warning"></span>
                <span class="icon-star2 text-warning"></span>
              </div>
  
            </div>
            <div class="col-lg-4 col-md-6 item-entry mb-4">
              <a href="#" class="product-item md-height bg-gray d-block">
                <img src="{{ asset('after_register/images/tas2.png') }}" alt="Image" class="img-fluid">
              </a>
              <h2 class="item-title"><a href="#">Togo Bag Hermes</a></h2>
              <strong class="item-price"><del>Rp 75.000.000</del> Rp 50.000.000</strong>
              
              <div class="star-rating">
                <span class="icon-star2 text-warning"></span>
                <span class="icon-star2 text-warning"></span>
                <span class="icon-star2 text-warning"></span>
                <span class="icon-star2 text-warning"></span>
                <span class="icon-star2 text-warning"></span>
              </div>
            </div>

            
  
            <div class="col-lg-4 col-md-6 item-entry mb-4">
              <a href="#" class="product-item md-height bg-gray d-block">
                <img src="{{ asset('after_register/images/sepatu.png') }}" alt="Image" class="img-fluid">
              </a>
              <h2 class="item-title"><a href="#">Air Jordan shoes</a></h2>
              <strong class="item-price">Rp 3.000.000</strong>
              <div class="star-rating">
                <span class="icon-star2 text-warning"></span>
                <span class="icon-star2 text-warning"></span>
                <span class="icon-star2 text-warning"></span>
                <span class="icon-star2 text-warning"></span>
                <span class="icon-star2 text-warning"></span>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 item-entry mb-4">
              <a href="#" class="product-item md-height bg-gray d-block">
                <img src="{{ asset('after_register/images/tas3.png') }}" alt="Image" class="img-fluid">
              </a>
              <h2 class="item-title"><a href="#">Yellow Sling Bag Hermes</a></h2>
              <strong class="item-price">Rp 35.000.000</strong>
              <div class="star-rating">
                <span class="icon-star2 text-warning"></span>
                <span class="icon-star2 text-warning"></span>
                <span class="icon-star2 text-warning"></span>
                <span class="icon-star2 text-warning"></span>
               
              </div>
            </div>
  
          </div>
        </div>
      </div>
  
      <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="title-section text-center mb-5 col-12">
              <h2 class="text-uppercase">Most Rated</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 block-3">
              <div class="nonloop-block-3 owl-carousel">
                <div class="item">
                  <div class="item-entry">
                    <a href="#" class="product-item md-height bg-gray d-block">
                      <img src="{{ asset('after_register/images/levis.png') }}" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="item-title"><a href="#">Levis pants</a></h2>
                    <strong class="item-price">Rp 300.000</strong>
        
                    <div class="star-rating">
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="item-entry">
                    <a href="#" class="product-item md-height bg-gray d-block">
                      <img src="{{ asset('after_register/images/jacket2.png') }}" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="item-title"><a href="#">Denim Jacket </a></h2>
                    <strong class="item-price"><del>Rp 900.000</del> Rp 750.0000</strong>
                    <div class="star-rating">
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="item-entry">
                    <a href="#" class="product-item md-height bg-gray d-block">
                      <img src="{{ asset('after_register/images/tas2.png') }}" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="item-title"><a href="#">Togo Bag Hermes</a></h2>
                    <strong class="item-price"><del>Rp 75.000.000</del> Rp 50.000.000</strong>
                    <div class="star-rating">
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                     
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="item-entry">
                    <a href="#" class="product-item md-height bg-gray d-block">
                      <img src="{{ asset('after_register/images/sepatu.png') }}" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="item-title"><a href="#">Air Jordan shoes</a></h2>
                    <strong class="item-price"> Rp 3.000.000</strong>
                    <div class="star-rating">
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="item-entry">
                    <a href="#" class="product-item md-height bg-gray d-block">
                      <img src="{{ asset('after_register/images/uniqlo3.png') }}" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="item-title"><a href="#">T-Shirt Uniqlo  </a></h2>
                    <strong class="item-price">Rp 300.000</strong>
                    <div class="star-rating">
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                      <span class="icon-star2 text-warning"></span>
                    </div>
                  </div>
                </div>
  
              </div>
            </div>
          </div>
        </div>
      </div>
  
  
      <div class="site-blocks-cover inner-page py-5" data-aos="fade">
        <div class="container">
          <div class="row">
            <div class="col-md-6 ml-auto order-md-2 align-self-start">
              <div class="site-block-cover-content">
              <h2 class="sub-title">#New Summer Collection 2019</h2>
              <h1>New Shoes</h1>
              <p><a href="{{ asset('views/shop') }}" class="btn btn-black rounded-0">Shop Now</a></p>
              </div>
            </div>
            <div class="col-md-6 order-1 align-self-end">
              <img src="{{ asset('after_register/images/jacket3.png') }}" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
  
      <footer class="site-footer custom-border-top">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
              <h3 class="footer-heading mb-4">Promo</h3>
              <a href="#" class="block-6">
                <img src="{{ asset('after_register/images/about_1.jpg') }}" alt="Image placeholder" class="img-fluid rounded mb-4">
                <h3 class="font-weight-light  mb-0">Finding Your Perfect Shirts This Summer</h3>
                <p>Promo from  Mei &mdash; 25, 2023</p>
              </a>
            </div>
            <div class="col-lg-5 ml-auto mb-5 mb-lg-0">
              <div class="row">
                <div class="col-md-12">
                  <h3 class="footer-heading mb-4">Quick Links</h3>
                </div>
                <div class="col-md-6 col-lg-4">
                  <ul class="list-unstyled">
                    <li><a href="#">Sell online</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Shopping cart</a></li>
                    <li><a href="#">Store builder</a></li>
                  </ul>
                </div>
                <div class="col-md-6 col-lg-4">
                  <ul class="list-unstyled">
                    <li><a href="#">Mobile commerce</a></li>
                    <li><a href="#">Dropshipping</a></li>
                    <li><a href="#">Website development</a></li>
                  </ul>
                </div>
                <div class="col-md-6 col-lg-4">
                  <ul class="list-unstyled">
                    <li><a href="#">Point of sale</a></li>
                    <li><a href="#">Hardware</a></li>
                    <li><a href="#">Software</a></li>
                  </ul>
                </div>
              </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
              <div class="block-5 mb-5">
                <h3 class="footer-heading mb-4">Contact Info</h3>
                <ul class="list-unstyled">
                  <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                  <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                  <li class="email">emailaddress@domain.com</li>
                </ul>
              </div>
  
              <div class="block-7">
                <form action="#" method="post">
                  <label for="email_subscribe" class="footer-heading">Subscribe</label>
                  <div class="form-group">
                    <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                    <input type="submit" class="btn btn-sm btn-primary" value="Send">
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
              <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
            
          </div>
        </div>
      </footer>
    </div>
</div>
<script src="{{ asset('after_register/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('after_register/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('after_register/js/popper.min.js') }}"></script>
  <script src="{{ asset('after_register/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('after_register/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('after_register/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{asset('after_register/js/aos.js')  }}"></script>

  <script src="{{ asset('after_register/js/main.js') }}"></script>
  </body>
  </html>
