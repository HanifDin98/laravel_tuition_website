<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pusat Tuisyen Terbang Tinggi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/img/favicon-2.png" rel="icon">
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
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
		  <li><a class="nav-link scrollto " href="#package">Package</a></li>
      {{-- <li><a class="nav-link scrollto " href="/package">Package</a></li> --}}
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    <ul class="navbar-nav">
      @auth
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          &nbsp&nbsp&nbsp Hi {{ auth()->user()->name }}  
            {{-- auth() is a function then go to the user table then find name field// mane datang user tu tf --}}
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/dashHome">My Dashboard <i class="bi bi-layout-text-window-reverse"></i></a></li>
          
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
          {{-- <a href="/login" class="get-started-btn scrollto back">Login</a> --}}
      
      @endauth
    </ul>
     
    
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">

          @foreach($hero as $item)
          <h1>{{ $item->Title }}</h1>
            <h2>{{ $item->description_1 }}</h2>
            <h2> {{ $item->description_2 }}</h2>
          @endforeach
          
          <a href="#package" class="btn-get-started scrollto">Get Started</a>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="/img/clients/client1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/img/clients/client2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/img/clients/client3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/img/clients/client4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/img/clients/client5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/img/clients/client6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/img/clients/client7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/img/clients/client8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">
        {{-- @foreach ($postsx2 as $subject)
        @if($subject->type =='Teras')         
        <p>{{ $subject->title }}</p><br>        
        @endif
        @endforeach --}}


        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch">
            <div class="content">
              <h3>
             
                @foreach($abouts as $about)
                {{$about->title}}
               @endforeach

              </h3>
              <p>
                @foreach($abouts as $about)
                {{$about->discription}}
               @endforeach
              </p>
              <a href="#" class="about-btn"><span>About us</span> <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4> Mission</h4>
                  <p>
                    @foreach($abouts as $about)
                    {{$about->mission}}
                   @endforeach
                  </p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Vission</h4>
                  <p>
                    @foreach($abouts as $about)
                    {{$about->vission}}
                   @endforeach

                  </p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <div class="section-title">
        <h2>Why Choose Us</h2>
      </div>
    <!-- ======= Tabs Section ======= -->
    <section id="tabs" class="tabs">
        
      <div class="container" data-aos="fade-up">

      
        <ul class="nav nav-tabs row d-flex">
          @foreach ($choose as $item)
           <li class="nav-item col-3">
            <a class="nav-link  " data-bs-toggle="tab" data-bs-target="#tab-{{ $item->id }}">
              <i class="ri-gps-line"></i>
              <h4 class="d-none d-lg-block">{{ $item->point }}</h4>
            </a>
           </li>
          @endforeach
  
        </ul>

        <div class="tab-content">
          @foreach ($choose as $item)
          <div class="tab-pane " id="tab-{{ $item->id }}">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                <h3> {{ $item->point }}</h3>
                <p class="fst-italic">
                  
                </p>

              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('uploads/chooses/'.$item->point_image) }}" alt="" class="img-fluid width="20%" height="10%"">
              </div>
            </div>
          </div>
         @endforeach
      



        </div>

      </div>
    </section><!-- End Tabs Section -->

   

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> --}}
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              {{-- <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li> --}}
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          @foreach ($portfolio as $item)
              

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('uploads/portfolios/'.$item->portfolio_image) }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{ $item->title }}</h4>
                <p>{{ $item->description }}</p>

              </div>
            </div>
          </div>

          @endforeach


        </div>

      </div>
    </section><!-- End Portfolio Section -->



          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="package" class="pricing section-bg">
      <div class="container" data-aos="fade-up">
        

          <div class="section-title">
            <h2>Package</h2>
  
              <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">Core</th>
                    <th scope="col">Elective</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      @foreach ($postsx2 as $subject)
                      @if($subject->type =='Teras')         
                      <p>{{ $subject->title }}</p><br>        
                      @endif
                      @endforeach
                    </td>
                    <td>
                      @foreach ($postsx2 as $subject)
                      @if($subject->type =='Sains')         
                      <p>{{ $subject->title }}</p><br>        
                      @endif
                      @endforeach
                    </td>
                  </tr>
         
                </tbody>
              </table>
              <p>Choose Any package that available and register</p>
            </div>
  

            <div class="row">

              @foreach ($postsx as $item)
              <div class="col-lg-4 col-md-6">
                <div class="box" data-aos="fade-up" data-aos-delay="100">
                  <h3> {{  $item->title }} </h3>
                  <h4><sup>RM</sup>{{  $item->price }}<span> / month</span></h4>
                  <ul>
                    <li>{{  $item->description }}</li>
                  </ul>
                  <div class="btn-wrap">
                    <a href="{{ url('/registerz/'.$item->id) }}" class="btn-buy">Register Now</a>
                    {{-- {{ url('/subjects/'.$subject->id) }} --}}
                  </div>
                </div>
              </div>  
              @endforeach

             
    

    
            </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->

    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <ul class="faq-list accordion" data-aos="fade-up">
          @foreach ($questions as $question)
          <li>
            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq{{ $question->id }}">{{ $question->Question }} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq{{ $question->id }}" class="collapse" data-bs-parent=".faq-list">
              <p>
                {{ $question->Answer }}
              </p>
            </div>
          </li>
          @endforeach
  
        </ul>



    

      </div>
      
 
    </section>


    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Teachers</h2>
          <p>We bring you the best teachers in the country, directly to you.</p>
        </div>
        <div class="row">
          @foreach ($teachers as $teacher)
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="{{ asset('uploads/teachers/'.$teacher->profile_image) }}" class="img-fluid" alt="">
  
              </div>
              <div class="member-info">
                <h4>{{ $teacher->name }}</h4>
                <span>{{ $teacher->subject_teach }} Teacher</span>
              </div>
            </div>
          </div>
          @endforeach
         
          



        </div>


      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>No. 1,Jenderam Hilir,Jalan Kajang-Dengkil 31</p>
                  <p>43800 Dengkil,</p>
                  <p>Selangor Darul Ehsan</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+03-8760 9000</p>
                </div>
              </div>
            </div>

          

         

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
       
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>UNICAM</span></strong>. All Rights Reserved
        </div>
 
      </div>
      <div class="social-links text-center text-md-end pt-3 pt-md-0">
        <a href="https://twitter.com/unicamofficial?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/UniCAM.Official/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/pusattuisyen.terbangtinggi/" class="instagram"><i class="bx bxl-instagram"></i></a>

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