<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kelly Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly - v2.1.1
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo"><a href="index.html">CRUD</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Create</a></li>
          <li><a href="#">Update</a></li>
          <li><a href="#">Delete</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      @if (Route::has('login'))
      <div class="hidden fixed top-0 right-0 px-6  sm:block">
          @auth
              <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
          @else
              <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

              @if (Route::has('register'))
                  <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
              @endif
          @endauth
      </div>
      @endif

    </div>

  </header><!-- End Header -->
  <main>
    <div class="container">
        <br>

        <h4>Product | Update</h4>
        
        <br>
        
        <form id="contactForm" name="sentMessage" novalidate>

            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                  <label>Product ID</label>
                  <input class="form-control" id="productID" type="text" placeholder="Product ID" required data-validation-required-message="Please enter product ID." />
                  <p class="help-block text-danger"></p>
              </div>
            </div>

            <hr>

            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Category</label>
                <select class="form-control" name="category_id" required>
                  <option>Please select one</option>
                  <option value="Food">Drink</option>
                  <option value="Drink">Food</option>
                </select>
              </div>
            </div>

            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>Name</label>
                    <input class="form-control" id="name" type="text" placeholder="Product Name" required data-validation-required-message="Please enter product name." />
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>Unit Price</label>
                    <input class="form-control" id="price" type="text" placeholder="Price" required data-validation-required-message="Please enter product price." />
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>Quantity In Stock</label>
                    <input class="form-control" id="qty" type="text" placeholder="Quantity" required data-validation-required-message="Please enter quantity." />
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <br />
            <div id="success"></div>
            <button class="btn btn-primary" id="sendMessageButton" type="submit">Create</button>
        </form>
    </div>
  </main>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>