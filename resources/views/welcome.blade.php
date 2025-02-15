<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        {{-- shop-max --}}
        
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="{{ asset('after_register/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('after_register/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('after_register/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('after_register/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('after_register/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('after_register/css/owl.theme.default.min.css') }}">


    <link rel="stylesheet" href="{{ asset('after_register/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('after_register/css/style.css') }}">

        <!-- Styles -->
        {{-- <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style> --}}
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

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
                          <a href="index.html" class="js-logo-clone">ShopMax</a>
                        </div>
                      </div>
                      <div class="main-nav d-none d-lg-block">
                        <nav class="site-navigation text-right text-md-center" role="navigation">
                          <ul class="site-menu js-clone-nav d-none d-lg-block">
                            <li class="">
                              <a href="#">Home</a>
                              <li><a href="#">Shop</a></li>
                             <li><a href="#">About</a></li>
                             <li><a href="#">Catalogue</a></li>
                             <li><a href="#">Contact</a></li>
                                  </ul>
                                </li>
                              </ul>
                            </li>
                            
                           
                          
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
            
                <div class="site-blocks-cover" data-aos="fade">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6 ml-auto order-md-2 align-self-start">
                        <div class="site-block-cover-content">
                        <h2 class="sub-title">#New Summer Collection 2021</h2>
                        <h1>Arrivals Sales</h1>
                        <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>
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
                          <a href="#" class="product-category">T-Shirt Uniqlo <span>25 items</span></a>
                          <img src="{{ asset('after_register/images/Uniqlo.png') }}" alt="Image" class="img-fluid">
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="product-item sm-height bg-gray mb-4">
                          <a href="#" class="product-category">Jacket <span>25 items</span></a>
                          <img src="{{ asset('after_register/images/jacket.png') }}" alt="Image" class="img-fluid">
                        </div>
            
                        <div class="product-item sm-height bg-gray">
                          <a href="#" class="product-category">Tas <span>25 items</span></a>
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
                        <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>
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
