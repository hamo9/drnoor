<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medicio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="_token" content="{{csrf_token()}}" />
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/hstyle.css" rel="stylesheet">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  <script>
    $(document).ready(function () {

         $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
      $(window).scroll(function () {
        var scroll_top = $(this).scrollTop();

        if (scroll_top > 10 && scroll_top < 100) {
          jQuery.ajax({
            url: "{{ url('about') }}",
            type: 'GET',
            success: function (data) {
              if ($("#about_load").html() == '') {
                $("#about_load").html(data);
              }

            }
          });

          jQuery.ajax({
            url: "{{ url('bookNow') }}",
            type: 'GET',
            success: function (data) {
              if ($("#booknow_load").html() == '') {
                $("#booknow_load").html(data);
              }
            }
          });

        }


        if (scroll_top > 800 && scroll_top < 1000) {
          jQuery.ajax({
            url: "{{ url('mapOne') }}",
            type: 'GET',
            success: function (data) {
              if ($("#map1_load").html()  == '') {
                $("#map1_load").html(data);
              }
            }
          });

          jQuery.ajax({
            url: "{{ url('mapTow') }}",
            type: 'GET',
            success: function (data) {
              if ($("#map2_load").html()  == '') {
                $("#map2_load").html(data);
              }
            }


          });

        }

        if (scroll_top > 1000 && scroll_top < 1100) {
          jQuery.ajax({
            url: "{{ url('ourservices') }}",
            type: 'GET',
            success: function (data) {
              if ($("#services_load").html() == '') {
                $("#services_load").html(data);
              }
            }
          });

        }


        if (scroll_top > 1200 && scroll_top < 13000) {
          jQuery.ajax({
            url: "{{ url('doctors') }}",
            type: 'GET',
            success: function (data) {
              if ($("#doctors_load").html() == '') {
                $("#doctors_load").html(data);
              }

            }
          });

          jQuery.ajax({
            url: "{{ url('review') }}",
            type: 'GET',
            success: function (data) {
              if ($("#review_load").html()  == '') {
                $("#review_load").html(data);
              }
            }
          });


        }


        if (scroll_top > 3000) {

          jQuery.ajax({
            url: "{{ url('contactUs') }}",
            type: 'GET',
            success: function (data) {
                if ($("#contact_load").html() == '') {
                    $("#contact_load").html(data);
                }

            }
          });



          jQuery.ajax({
            url: "{{ url('branches') }}",
            type: 'GET',
            success: function (data) {
                if ($("#branches_load").html() == '') {
                    $("#branches_load").html(data);
                }

            }
          });

          jQuery.ajax({
            url: "{{ url('formBooking') }}",
            type: 'GET',
            success: function (data) {
                if ($("#appointment_load").html() == '') {
                    $("#appointment_load").html(data);
                }

            }
          });





        }

      });
    });
  </script>

</head>


<body id="body">

  <!-- start icon social -->

  <div class="box_icon_social row">

    <a href="tel:+201004911155" class="google-plus col-12" data-bs-toggle="modal" data-bs-target="#choose_phone"><i class="bx bxs-phone shadow"></i></a>

    <a href="https://web.facebook.com/CareDentalCenter.cdc/?_rdc=1&_rdr" class="twitter col-12"><i
        class="bx bxl-facebook shadow facebook"></i></a>

    <a href="https://wa.me/01020036341" class="twitter col-12"><i class="bx bxl-whatsapp shadow whatsapp"></i></a>

    <a href="https://web.facebook.com/messages/t/103747054448618" class="instagram col-12"><i
        class="bx bxl-messenger shadow"></i></a>

  </div>


<!-- Modal -->
<div class="modal fade" id="choose_phone" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Location </h5>

      </div>
      <div class="modal-body">
        <p class="lead">
          +2012066555555
          <strong class="float-end">
            <a href="tel:+201004911155">
              <i class="bx bxs-phone shadow fs-3 rounded-pill p-1"></i>
            </a>
          </strong>
        </p>

        <p class="lead">
          +2012066555555
          <strong class="float-end">
            <a href="tel:+201004911155">
              <i class="bx bxs-phone shadow fs-3 rounded-pill p-1"></i>
            </a>
          </strong>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

  <!-- End icon social -->
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> Monday - Saturday, 8AM to 10PM
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Call us now +1 5589 55488 55
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex align-items-center ">

      <div class="float-start box_logo">
        <a href="index.html" class="logo text-center">
          <img src="assets/img/logo.jpeg" alt="" class="img-fluid img_logo" >
        </a>
      </div>


      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto hCostum" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li class="dropdown"><a href="#Our_Services"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Deep Drop Down 2</a></li>
              <li><a href="#">Deep Drop Down 3</a></li>
              <li><a href="#">Deep Drop Down 4</a></li>
              <li><a href="#">Deep Drop Down 5</a></li>
            </ul>
          </li>

          <li><a class="nav-link scrollto" href="#review">reviews</a></li>

          <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>
          <li><a class="nav-link scrollto" href="#gallery">After & before</a></li>

          <li><a class="nav-link scrollto" href="#contact">Contact us</a></li>
          <li><a class="nav-link scrollto" href="#Location">Branches</a></li>
          <li><a class="nav-link scrollto d-md-none" href="#appointment">Book Now</a></li>


          <li class="dropdown"><a href="#"><span>En</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="rtl.html">Ar</a></li>
              <li><a href="index.html">fr</a></li>

            </ul>
          </li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a id="appointment0"  href="#appointment" class="appointment-btn scrollto d-none d-md-block"><span class="">Book Now</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" dir="ltr">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">




        <!-- Slide 1 -->
        <div class="carousel-item active carousel_custom" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="overly_carousel">
            <div class="overly_content">
              <h3>
                <strong>
                  Top Quality .. Best Price
                </strong>
              </h3>
              <h1>Dr Ahmed EL-Omda <span>Dental Clinics</span></h1>
            </div>
          </div>
        </div>


      </div>



    </div>
  </section><!-- End Hero -->

  <div class="container-fluid row mt-5 m-auto p-0">
    <div class="col-lg-9">
      <main id="main">

        <section id="about" class="about">
         <div id="about_load"></div>
        </section>

          <!-- Our Services -->
            <section id="Our_Services">
                <div id="services_load"></div>
            </section>

      </main><!-- End #main -->
    </div>


    <div class="col-lg-3 box_sideBar mt-5 mb-5 d-none d-md-block">

      <div id="booknow_load"></div>

      <div id="map1_load"></div>

      <div id="map2_load"></div>



    </div>


    <div class="col-12 p-0">


        <section id="doctors" class="doctors section-bg">
            <div id="doctors_load"></div>
        </section>

      <section id="review" class="testimonials">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Reviews</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
              consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
              sit in iste officiis commodi quidem hic quas.</p>
          </div>

          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram
                    malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim
                    tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit
                    minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim
                    culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum
                    quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                </div>
              </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </section>




      <!-- ======= Befor & After Section ======= -->
      <section id="gallery" class="gallery">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Gallery</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
              consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
              sit in iste officiis commodi quidem hic quas.</p>
          </div>

          <div class="gallery-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/1.jpg"><img
                    src="assets/img/gallery/1.jpg" class="img-fluid" alt=""></a>
              </div>
              <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/2.jpg"><img
                    src="assets/img/gallery/2.jpg" class="img-fluid" alt=""></a>
              </div>
              <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/3.jpg"><img
                    src="assets/img/gallery/3.jpg" class="img-fluid" alt=""></a>
              </div>
              <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/4.jpg"><img
                    src="assets/img/gallery/4.jpg" class="img-fluid" alt=""></a>
              </div>
              <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/5.jpg"><img
                    src="assets/img/gallery/5.jpg" class="img-fluid" alt=""></a>
              </div>
              <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/6.jpg"><img
                    src="assets/img/gallery/6.jpg" class="img-fluid" alt=""></a>
              </div>
              <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/7.jpg"><img
                    src="assets/img/gallery/7.jpg" class="img-fluid" alt=""></a>
              </div>

              <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/8.jpg"><img
                    src="assets/img/gallery/8.jpg" class="img-fluid" alt=""></a>
              </div>
              <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/9.jpg"><img
                    src="assets/img/gallery/9.jpg" class="img-fluid" alt=""></a>
              </div>
              <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/10.jpg"><img
                    src="assets/img/gallery/10.jpg" class="img-fluid" alt=""></a>
              </div>
              <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/11.jpg"><img
                    src="assets/img/gallery/11.jpg" class="img-fluid" alt=""></a>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </section><!-- End Gallery Section -->


    <section id="contact" class="contact">
        <div id="contact_load"></div>
    </section>

    <section id="Location" class="contact">
        <div id="branches_load"></div>
    </section>

    <section id="appointment" class="appointment section-bg">
        <div id="appointment_load"></div>
    </section>






    </div>

  </div>




  <div class="top_footer">
    <h2>
      The Largest Medical Team In The Arab World
    </h2>
  </div>
  <!-- ======= Footer ======= -->
  <footer id="footer" style="background-image: url('assets/img/slide-2.jpg');">
    <div class="img_bak"></div>
    <div class="footer-top" style="background-color: transparent;">
      <div class="container">
        <div class="row">

          <div class="col-md-4">
            <div class="footer-info">
              <h3>Medicio</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="tel:+201004911155" class="instagram"><i class="bx bxs-phone"></i></a>
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-messenger"></i></a>

              </div>
            </div>
          </div>

          <div class="col-md-4 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#Our_Services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#doctors">doctors</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">contact us</a></li>
            </ul>
          </div>

          <div class="col-md-4 footer-links">
            <!-- <h4>Our Services</h4>
            <p>
              Our centers have the best team of consultants, staff members and specialized doctors in all dental services
            </p> -->
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>


        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Saadon</span></strong>. All Rights Reserved
      </div>

    </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
