<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ShopMax &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
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
                    <li><a href="{{ url('views/after_register') }}">Home</a></li>
                    <li><a href="{{ url('views/shop') }}">Shop</a></li>
                    <li><a href="{{ url('views/catalog') }}">Catalogue</a>
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
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="#" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>
            <a href="cart.html" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <a href="shop.html">Shop</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Gray Shoe</strong></div>
        </div>
      </div>
    </div>  
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="item-entry">
              <a href="#" class="product-item md-height bg-gray d-block">
                <img src="{{ asset('after_register/images/jacket.png') }}" alt="Image" class="img-fluid">
              </a>
              
            </div>

          </div>
          <div class="col-md-6">
            <h2 class="text-black">Denim Jacket</h2>
            <p>Denim jackets have been around since the early 1900s. They were initially designed to keep workers warm during cold weather. Today, they are still worn by men and women alike. They are a popular item among both men and women. They are versatile, comfortable, and durable. You can wear them in many situations, including casual and formal occasions.</p>
            <p><strong class="text-primary h4">Rp 750.000</strong></p>
            <div class="mb-1 d-flex">
              <label for="option-sm" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-sm" name="shop-sizes"></span> <span class="d-inline-block text-black">M</span>
              </label>
              <label for="option-md" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-md" name="shop-sizes"></span> <span class="d-inline-block text-black">L</span>
              </label>
              <label for="option-lg" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-lg" name="shop-sizes"></span> <span class="d-inline-block text-black">XL</span>
              </label>
              <label for="option-xl" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-xl" name="shop-sizes"></span> <span class="d-inline-block text-black"> XXL</span>
              </label>
            </div>
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
              <div class="input-group-prepend">
                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
              </div>
              <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
              <div class="input-group-append">
                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
              </div>
            </div>

            </div>
            <p><a href="#" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Add To Cart</a></p>

          </div>
        </div>
      </div>
    </div>
        {{-- JaCKET --}}
    <div class="site-section block-3 site-blocks-2">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Denim Jacket</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3">
            <div class="nonloop-block-3 owl-carousel">
              <div class="item">
                <div class="item-entry">
                  <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="{{ asset('after_register/images/denim_1.png') }}" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#">Denim Jacket Women</a></h2>
                  <strong class="item-price"><del>Rp 900.000</del> Rp750.000</strong>
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
                    <img src="{{ asset('after_register/images/denim_2.png') }}" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#">Denim Jacket Men</a></h2>
                  <strong class="item-price"><del>Rp 900.000</del> Rp750.000</strong>

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
                    <img src="{{ asset('after_register/images/denim_3.png') }}" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#">Denim Jacket Men</a></h2>
                  <strong class="item-price"><del>Rp 900.000</del> Rp750.000</strong>

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
                    <img src="{{ asset('after_register/images/jacket3.png') }}" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#">Denim Jacket Men</a></h2>
                  <strong class="item-price"><del>Rp 900.000</del> Rp750.000</strong>
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
      </div>
    </div>
        {{-- SEPATU --}}
    <div class="site-section block-3 site-blocks-2">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-7 site-section-heading text-center pt-4">
              <h2>Sepatu Air Jordan</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 block-3">
              <div class="nonloop-block-3 owl-carousel">
                <div class="item">
                  <div class="item-entry">
                    <a href="#" class="product-item md-height bg-gray d-block">
                      <img src="{{ asset('after_register/images/sepatu.png') }}" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="item-title"><a href="#">Air Jordan A</a></h2>
                    <strong class="item-price">Rp 3.000.000</strong>
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
                      <img src="{{ asset('after_register/images/sepatu-1.png') }}" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="item-title"><a href="#">Air Jordan B</a></h2>
                    <strong class="item-price">Rp 3.000.000</strong>
  
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
                      <img src="{{ asset('after_register/images/sepatu-2.png') }}" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="item-title"><a href="#">Air Jordan C</a></h2>
                    <strong class="item-price">Rp 3.000.000</strong>
  
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
                      <img src="{{ asset('after_register/images/sepatu-3.png') }}" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="item-title"><a href="#">Air Jordan D</a></h2>
                    <strong class="item-price">Rp 3.000.000</strong>
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
  
      {{-- TAS --}}
      <div class="site-section block-3 site-blocks-2">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-7 site-section-heading text-center pt-4">
              <h2>Tas Hermes</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 block-3">
              <div class="nonloop-block-3 owl-carousel">
                <div class="item">
                  <div class="item-entry">
                    <a href="#" class="product-item md-height bg-gray d-block">
                      <img src="{{ asset('after_register/images/tas2.png') }}" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="item-title"><a href="#"></a>Togo Bag Hermes</h2>
                    <strong class="item-price"><del>Rp 75.000.000</del> Rp 50.000.000</strong>
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
                      <img src="{{ asset('after_register/images/tas3.png') }}" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="item-title"><a href="#">Yellow Sling Bag Hermes</a></h2>
                    <strong class="item-price">Rp 35.000.000</strong>
  
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
                      <img src="{{ asset('after_register/images/tas4.png') }}" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="item-title"><a href="#"> Hermes Casual</a></h2>
                    <strong class="item-price">Rp 40.000.000</strong>
  
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
                      <img src="{{ asset('after_register/images/tas.png') }}" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="item-title"><a href="#">Tas Hermes</a></h2>
                    <strong class="item-price">Rp 40.000.000</strong>
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
    {{-- T-shirt --}}
      <div class="site-section block-3 site-blocks-2">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-7 site-section-heading text-center pt-4">
              <h2>T-Shirt</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 block-3">
              <div class="nonloop-block-3 owl-carousel">
                <div class="item">
                  <div class="item-entry">
                    <a href="#" class="product-item md-height bg-gray d-block">
                      <img src="{{ asset('after_register/images/uniqlo.png') }}" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="item-title"><a href="#"></a>White</h2>
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
                      <img src="{{ asset('after_register/images/uniqlo3.png') }}" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="item-title"><a href="#">Coral</a></h2>
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
                      <img src="{{ asset('after_register/images/uniqlo2.png') }}" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="item-title"><a href="#">White Women</a></h2>
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
                      <img src="{{ asset('after_register/images/uniqlo4.png') }}" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="item-title"><a href="#"></a>Black</h2>
                    <strong class="item-price">Rp 300.0000</strong>
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
      <footer class="site-footer custom-border-top">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Promo</h3>
            <a href="#" class="block-6">
              <img src="{{ asset('after_register/images/sepatu.png') }}" alt="Image placeholder" class="img-fluid rounded mb-4">
              <h3 class="font-weight-light  mb-0">Finding Your Perfect Shirts This Summer</h3>
              <p>Promo from  July 15 &mdash; 25, 2019</p>
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