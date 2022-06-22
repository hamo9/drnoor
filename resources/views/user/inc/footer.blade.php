<div class="top_footer">
    <h2>
        {{ __('navbar.Top Quality') }} .. {{ __('navbar.Best Price') }}
    </h2>
</div>
<!-- ======= Footer ======= -->
<footer id="footer" style="background-image: url('assets/user/img/slide/BACKGROUND.jpg');">
    <div class="img_bak"></div>
    <div class="footer-top" style="background-color: transparent;">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="footer-info">
                        <h4 class="footer_adress" style="color: #fff;font-weight: 700;font-size: 22px;">{{ __('sections.branches') }}
                        </h4>
                        <a href="#contact" style="color: #fff">
                            <p>
                                <h3>{{ __('about.branch 1') }}</h3>
                                <strong>{{ __('sections.phone') }}:</strong> +20 1020036341<br>
                                <strong>{{ __('sections.email') }}:</strong> care.dental.cdc@gmail.com<br>
                            </p>
                        </a><br>

                        <a href="#contact" style="color: #fff">
                            <p>
                                <h3>{{ __('about.branch 2') }}</h3>
                                <strong>{{ __('sections.phone') }}:</strong> +20 1007175878<br>
                                <strong>{{ __('sections.email') }}:</strong> swiss.dental.original@gmail.com<br>
                            </p>
                        </a>

                        <div class="social-links mt-3">
                            <a href="tel:+201020036341" class="instagram"><i class="bx bxs-phone"></i></a>
                            <a href="https://web.facebook.com/CareDentalCenter.cdc/?_rdc=1&_rdr" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="https://wa.me/01020036341" class="facebook"><i class="bx bxl-whatsapp"></i></a>
                            <a href="https://web.facebook.com/messages/t/103747054448618" class="instagram"><i class="bx bxl-messenger"></i></a>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 footer-links">
                    <h4>{{ __('sections.links') }}</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right" style="color: #fff"></i> <a href="index.html">{{ __('navbar.home') }}</a></li>
                        <li><i class="bx bx-chevron-right" style="color: #fff"></i> <a href="#about">{{ __('navbar.about us') }}</a></li>
                        <li><i class="bx bx-chevron-right" style="color: #fff"></i> <a href="#Our_Services">{{ __('navbar.Services') }}</a>
                        <li><i class="bx bx-chevron-right" style="color: #fff"></i> <a href="#videos">{{ __('navbar.videos') }}</a>
                        <li><i class="bx bx-chevron-right" style="color: #fff"></i> <a href="#review">{{ __('navbar.reviews') }}</a>
                        </li>
                        <li><i class="bx bx-chevron-right" style="color: #fff"></i> <a href="#doctors">{{ __('navbar.Doctors') }}</a></li>
                        <li><i class="bx bx-chevron-right" style="color: #fff"></i> <a href="#gallery">{{ __('navbar.images') }}</a></li>
                        <li><i class="bx bx-chevron-right" style="color: #fff"></i> <a href="#contact">{{ __('navbar.contact us') }}</a>
                        <li><i class="bx bx-chevron-right" style="color: #fff"></i> <a href="#Location">{{ __('navbar.location') }}</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 footer-links">
                    <h4>{{ __('sections.Services') }}</h4>
                    <ul>
                        @if (isset($categories) && $categories->count() > 0)
                            @foreach ($categories as $category)
                                <li><i class="bx bx-chevron-right" style="color: #fff"></i> <a
                                        href="#{{ $category->id }}">{{ $category->name }}</a></li>
                            @endforeach
                        @endif

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

{{-- <div id="preloader"></div> --}}
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>


<!-- Vendor JS Files -->
<script src="assets/user/vendor/purecounter/purecounter.js"></script>
<script src="assets/user/vendor/aos/aos.js"></script>
<script src="assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/user/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/user/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/user/vendor/php-email-form/validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Template Main JS File -->
<script src="assets/user/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"
integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $('img').lazyload();
    });

    $(document).ready(function(){
        $(".owl-carousel").owlCarousel();

        $('.loop').owlCarousel({
            center: true,
            items:2,
            loop:true,
            margin:10,
            responsive:{
                600:{
                    items:3
                }
            }
        });

    });
</script>



</body>

</html>
