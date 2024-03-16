{{--  <!-- ======= Footer ======= -->  --}}
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-contact">
                    <img src="{{ asset('assets\img\logo\nepverlogo.png') }}" class="logocoutomecolor fotter-logo-size"
                        alt="napver logo" />
                    @foreach ($address as $item)
                        <p>
                            {{ $item->address }} <br />
                            <strong>Phone: </strong>{{ $item->phone }}<br />
                            <strong>Email: </strong>{{ $item->email }}<br />
                        </p>
                    @endforeach
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="/">Web Design</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="/">Web Development</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="/">Mobile Apps Development</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="/">SEO</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="/">Video Editing</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright-wrap d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>NAPVER</span></strong>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i>
                    <a href="https://www.facebook.com/napver.bd" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="https://www.instagram.com/napver.bd" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/napver/?viewAsMember=true" class="linkedin"><i
                            class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </div>
</footer>
{{--  <!-- End Footer -->  --}}

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>

{{--  <!-- Vendor JS Files -->  --}}
<script src="script.js" type="module"></script>
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

{{--  <!-- Template Main JS File -->  --}}
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
