<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{ asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{ asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
  </head>
  <body>

    <div class="KW_progressContainer">
      <div class="KW_progressBar">

      </div>
    </div>
    <div class="page">
    <nav id="colorlib-main-nav" role="navigation">
      <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
      <div class="js-fullheight colorlib-table">
        <div class="img" style="background-image: url( {{ url('images/dung.jpg')}} );"></div>
        <div class="colorlib-table-cell js-fullheight">
          <div class="row no-gutters">
            <div class="col-md-12 text-center">
              <h1 class="mb-4"><a href="{{ url('index') }}" class="logo">Nursano Gandung Praseto</a></h1>
              <ul>
                <li class="active"><a href="{{ url('index') }}"><span><small>01</small>Home</span></a></li>
                <li><a href="{{ url('about') }}"><span><small>02</small>Resume</span></a></li>
                <li><a href="{{ url('services') }}"><span><small>03</small>Services</span></a></li>
                <li><a href="{{ url('portfolio') }}"><span><small>04</small>Portfolio</span></a></li>
                <li><a href="{{ url('blog') }}"><span><small>05</small>Blog</span></a></li>
                <li><a href="{{ url('contact') }}"><span><small>06</small>Contact</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    
    <div id="colorlib-page">
      <header>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="colorlib-navbar-brand">
                <a class="colorlib-logo" href="{{ url('index') }}"><span class="logo-img" style="background-image: url( {{ url('images/dung2.jpg')}} );"></span>Nursano Gandung Praseto</a>
              </div>
              <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
            </div>
          </div>
        </div>
      </header>
    
      <section class="home-slider owl-carousel js-fullheight">
        <div class="slider-item js-fullheight">
          <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text align-items-center text-center justify-content-center" data-scrollax-parent="true">
              <div class="col-md-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <p><a href="#" class="scroll">Hello! I'm</a></p>
                <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Gandung</h1>
              </div>
            </div>
          </div>
        </div>

        <div class="slider-item js-fullheight">
          <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text align-items-center text-center justify-content-center" data-scrollax-parent="true">
              <div class="col-md-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <p><a href="#" class="scroll">I'm from Indonesia</a></p>
                <h1 class="mb-3" data-scrollax="properties: {translateY: '30%', opacity: 1.6}">A Web Developer</h1>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END slider -->

      <section class="ftco-section about-section">
        <div class="container">
          <div class="row d-flex" data-scrollax-parent="true">
            <div class="col-md-4 author-img" style="background-image: url( {{ url('images/dungTegal.jpg')}} );" data-scrollax=" properties: { translateY: '-70%'}"></div>
            <div class="col-md-2"></div>
            <div class="col-md-6 wrap ftco-animate">
              <div class="about-desc">
                <h1 class="bold-text">About</h1>
                <div class="p-5">
                  <h2 class="mb-5">Hi! I'm Gandung</h2>
                  <p><a href="#">Checkout my resume</a></p>
                  <ul class="ftco-footer-social list-unstyled mt-4">
                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
                  <h5>Contact me here!</h5>
                  <p>Email: <a href="#">nursanogandung@yahoo.co.id</a></p>
                  <p>Phone: <a href="#">(+62)-831-7060-9165</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="ftco-section">
        <div class="container">
          <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
              <span>What i do</span>
              <h2>My services</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services p-3 py-4 d-block text-center">
                <div class="icon mb-3"><span class="icon-layers"></span></div>
                <div class="media-body">
                  <h3 class="heading">Wab Developer</h3>
                  <h3 class="heading">Mobile App Developer</h3>
                  <h3 class="heading">Web Design</h3>
                </div>
              </div>      
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services p-3 py-4 d-block text-center">
                <div class="icon mb-3"><span class="icon-gears"></span></div>
                <div class="media-body">
                  <h3 class="heading">Product Strategy</h3>
                  <h3 class="heading">Design Sprints</h3>
                  <h3 class="heading">Project Strategy</h3>
                  <h3 class="heading">Network</h3>
                </div>
              </div>      
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services p-3 py-4 d-block text-center">
                <div class="icon mb-3"><span class="icon-code"></span></div>
                <div class="media-body">
                  <h3 class="heading">HTML/CSS</h3>
                  <h3 class="heading">Java</h3>
                  <h3 class="heading">MySQL/SQLite</h3>
                  <h3 class="heading">User Testing</h3>
                </div>
              </div>    
            </div>
          </div>
        </div>
      </section>

      <section class="ftco-section">
        <div class="container">
          <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
              <span>Portfolio</span>
              <h2>Checkout a few of my works</h2>
            </div>
          </div>
          <div class="row no-gutters">
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
            <a href="portfolio-single.html" class="image d-flex justify-content-center align-items-center" style="background-image: url( {{ url('images/work-1.jpg')}} ); " data-scrollax=" properties: { translateY: '-30%'}">
              <div class="icon d-flex text-center justify-content-center align-items-center">
                <span class="icon-search"></span>
              </div>
            </a>
            <div class="text">
              <h4 class="subheading">Illustration</h4>
              <h2 class="heading"><a href="portfolio-single.html">Even the all-powerful Pointing has no control</a></h2>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text.</p>
              <p><a href="#">View Project</a></p>
            </div>
          </div>
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
            <a href="portfolio-single.html" class="image order-2 d-flex justify-content-center align-items-center" style="background-image: url('images/work-2.jpg'); " data-scrollax=" properties: { translateY: '-30%'}">
              <div class="icon d-flex text-center justify-content-center align-items-center">
                <span class="icon-search"></span>
              </div>
            </a>
            <div class="text order-1">
              <h4 class="subheading">Application</h4>
              <h2 class="heading"><a href="portfoli-singleo.html">Even the all-powerful Pointing has no control</a></h2>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text.</p>
              <p><a href="#">View Project</a></p>
            </div>
          </div>
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
            <a href="portfolio-single.html" class="image d-flex justify-content-center align-items-center" style="background-image: url( {{ url('images/work-3.jpg')}} ); " data-scrollax=" properties: { translateY: '-30%'}">
              <div class="icon d-flex text-center justify-content-center align-items-center">
                <span class="icon-search"></span>
              </div>
            </a>
            <div class="text">
              <h4 class="subheading">Web Design</h4>
              <h2 class="heading"><a href="portfolio-single.html">Even the all-powerful Pointing has no control</a></h2>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text.</p>
              <p><a href="#">View Project</a></p>
            </div>
          </div>
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
            <a href="portfolio-single.html" class="image order-2 d-flex justify-content-center align-items-center" style="background-image: url( url('images/work-4.jpg')}} ); " data-scrollax=" properties: { translateY: '-30%'}">
              <div class="icon d-flex text-center justify-content-center align-items-center">
                <span class="icon-search"></span>
              </div>
            </a>
            <div class="text order-1">
              <h4 class="subheading">Application</h4>
              <h2 class="heading"><a href="portfoli-singleo.html">Even the all-powerful Pointing has no control</a></h2>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text.</p>
              <p><a href="#">View Project</a></p>
            </div>
          </div>
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
            <a href="portfolio-single.html" class="image d-flex justify-content-center align-items-center" style="background-image: url( {{ url('images/work-5.jpg')}} ); " data-scrollax=" properties: { translateY: '-30%'}">
              <div class="icon d-flex text-center justify-content-center align-items-center">
                <span class="icon-search"></span>
              </div>
            </a>
            <div class="text">
              <h4 class="subheading">Animation</h4>
              <h2 class="heading"><a href="portfoli-singleo.html">Even the all-powerful Pointing has no control</a></h2>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text.</p>
              <p><a href="#">View Project</a></p>
            </div>
          </div>
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
            <a href="portfolio-single.html" class="image order-2 d-flex justify-content-center align-items-center" style="background-image: url( {{ url('images/work-6.jpg')}} ); " data-scrollax=" properties: { translateY: '-30%'}">
              <div class="icon d-flex text-center justify-content-center align-items-center">
                <span class="icon-search"></span>
              </div>
            </a>
            <div class="text order-1">
              <h4 class="subheading">Branding</h4>
              <h2 class="heading"><a href="portfoli-singleo.html">Even the all-powerful Pointing has no control</a></h2>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text.</p>
              <p><a href="#">View Project</a></p>
            </div>
          </div>
        </div>
        </div>
      </section>

      <section class="ftco-section ftco-counter" id="section-counter">
        <div class="container">
          <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
              <span>Portfolio</span>
              <h2>I love to share my achievements</h2>
            </div>
          </div>
          <div class="row d-flex justify-content-start">
            <div class="col-md-5 col-sm-5 counter-wrap ftco-animate">
              <div class="block-18">
                <div class="text">
                  <span class="ftco-label">Clients</span>
                  <strong class="number" data-number="420">0</strong>
                </div>
              </div>
            </div>
          </div>
          <div class="row d-flex justify-content-center">
            <div class="col-md-5 col-sm-5 counter-wrap ftco-animate">
              <div class="block-18">
                <div class="text">
                  <span class="ftco-label">Project done</span>
                  <strong class="number" data-number="890">0</strong>
                </div>
              </div>
            </div>
          </div>
          <div class="row d-flex justify-content-end">
            <div class="col-md-5 counter-wrap ftco-animate">
              <div class="block-18">
                <div class="text">
                  <span class="ftco-label">Cups of coffee</span>
                  <strong class="number" data-number="1000">0</strong>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-5 text-center">
              <div class="ftco-footer-widget mb-5">
                <ul class="ftco-footer-social list-unstyled">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
              <div class="ftco-footer-widget">
                <h2 class="mb-3">Contact Me</h2>
                <p class="h3 email"><a href="#">nursanogandung@yahoo.co.id</a></p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">

              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true" style="color: red;"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
          </div>
        </div>
      </footer>

      <!-- loader -->
      <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

      </div>

    </div>


    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('js/scrollax.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('js/jquery.timepicker.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{asset('js/google-map.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    
  </body>
</html>