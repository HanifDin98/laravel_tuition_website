<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pusat Tuisyen Terbang Tinggi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/img/favicon.png" rel="icon">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/vendor/aos/aos.css" rel="stylesheet">
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Presento - v3.7.0
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
	<img src="/img/logo2.png" width="20%" height="10%">
      <h1 class="logo me-auto"><a href="index.html"><span></span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="/">About</a></li>
          <li><a class="nav-link scrollto " href="/">Portfolio</a></li>
		  <li><a class="nav-link scrollto " href="/">Subject</a></li>
      <li><a class="nav-link scrollto active " href="/package">Package</a></li>
          <li><a class="nav-link scrollto" href="/">Team</a></li>
          <li><a class="nav-link scrollto" href="/">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    <ul class="navbar-nav">
      @auth
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Hi {{ auth()->user()->name }}  
            {{-- auth() is a function then go to the user table then find name field// mane datang user tu tf --}}
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/dashboard">My Dashboard <i class="bi bi-layout-text-window-reverse"></i></a></li>
          
          <li><hr class="dropdown-divider" ></li>
          {{-- divider garis diantara --}}

          <form action="/logout" method="post">
            @csrf 
            <button type="submit" class="dropdown-item">
              Logout <i class="bi bi-box-arrow-right"></i>
            </button>

          </form>
          <li><a class="dropdown-item" href="#"></a> </li>
        </ul>
      </li>
          @else
          <a href="/login" class="get-started-btn scrollto back">Login</a>
      
      @endauth
    </ul>
     
    
    </div>
  </header><!-- End Header -->



  <main id="main">

   

<!-- ======= Contact Section ======= -->
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">

    <div class="section-title">
      
  <h2>Contact</h2>
  <h2>Register</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
    </div>

    

      <div>
        {{-- <form action="{{ url('/registerA') }}" method="POST" role="form" class="php-email-form"> --}}
        <form action="{{ url('/registerA') }}" method="POST">  
          @csrf
          <div class="row">
            <div class="col form-group">
      <label>Name</label>
      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col form-group">
      <label>Email</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
    <div class="row">
            <div class="col form-group">
      <label>IC</label>
      <input type="text" name="ic_number" class="form-control" id="ic_number" placeholder="Your IC" required>
            </div>
            <div class="col form-group">
      <label>Phone</label>
      <input type="phone" class="form-control" name="phone_number" id="phone_number" placeholder="Your Phone" required>
            </div>
          </div>
    <div class="row">
            {{-- <div class="col form-group">
      <label>Package</label>
      <select id="inputState" class="form-control">
      <option selected>Choose...</option>
      <option>Package A</option>
      <option>Package B</option>
      <option>Package C</option>
      </select>
            </div> --}}
            <div class="col form-group">
      <label>Gender</label>
      <select id="inputState" name ="gender" class="form-control">
      <option selected>Choose...</option>
      <option>Male</option>
      <option>Female</option>
      </select>
            </div>
          </div>
    <div class="form-group">
            <label>Address</label>
    <textarea class="form-control" name="address" rows="5" placeholder="address" required></textarea>
          </div>
    <div class="row">
            <div class="col form-group">
      <label>Core Subject 1</label>
      <select id="subjects" name="subjects" class="form-control">
          @foreach ($subjects as $subject)
              <option value="{{ $subject->id }}">{{ $subject->title }}</option>
          @endforeach
      </select>
            </div>

            <div class="col form-group">
      <label>Core Subject 2</label>
      <select id="subjects2" name="subjects2" class="form-control">
          @foreach ($subjects as $subject2)
              <option value="{{ $subject2->id }}">{{ $subject2->title }}</option>
          @endforeach
      </select>
            </div>


            <div class="col form-group">
              <label>Elective Subject </label>
              <select id="subjects3" name="subjects3" class="form-control">
                  @foreach ($subjects as $subject3)
                      <option value="{{ $subject3->id }}">{{ $subject3->title }}</option>
                  @endforeach
              </select>
                    </div>
            




          </div>
          <div class="text-center"><button type="submit">Submit</button></div>
        </form>
      </div>

    
  </div>
</section><!-- End Contact Section -->
    

  

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        {{-- <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Presento<span>.</span></h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div> --}}
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>UNICAM</span></strong>. All Rights Reserved
        </div>
        {{-- <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/presento-bootstrap-corporate-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div> --}}
      </div>
      <div class="social-links text-center text-md-end pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/vendor/purecounter/purecounter.js"></script>
  <script src="/vendor/aos/aos.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/Jss/script.js"></script>

</body>

</html>