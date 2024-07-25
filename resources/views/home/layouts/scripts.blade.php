<script src="{{ asset('assets/dist-front/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/dist-front/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/dist-front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/dist-front/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('assets/dist-front/js/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/dist-front/js/jquery.countdown.js') }}"></script>
<script src="{{ asset('assets/dist-front/js/bxslider.js') }}"></script>
<script src="{{ asset('assets/dist-front/js/mixitup.js') }}"></script>
<script src="{{ asset('assets/dist-front/js/wow.js') }}"></script>
<script src="{{ asset('assets/dist-front/js/appear.js') }}"></script>
<script src="{{ asset('assets/dist-front/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/dist-front/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/dist-front/js/sweetalert2.min.js') }}"></script>
<script src="{{ asset('assets/dist-front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/dist-front/js/script.js') }}"></script>

@if ($setting->cookie_status == 1)
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var cookieBanner = document.getElementById('cookie-banner');
            var acceptBtn = document.getElementById('cookie-accept-btn');

            if (cookieBanner) {
                setTimeout(function() {
                    cookieBanner.classList.add('show');
                }, 100);

                acceptBtn.addEventListener('click', function() {
                    var expiryDate = new Date();
                    expiryDate.setDate(expiryDate.getDate() + 7);
                    var expiryDateString = expiryDate.toUTCString();

                    document.cookie = "cookie_accepted=true; expires=" + expiryDateString + "; path=/";

                    cookieBanner.classList.remove('show');
                    cookieBanner.classList.add('hide');

                    cookieBanner.addEventListener('transitionend', function() {
                        cookieBanner.style.display = 'none';
                    }, {
                        once: true
                    });
                });

                if (document.cookie.split(';').some((item) => item.trim().startsWith('cookie_accepted='))) {
                    cookieBanner.style.display = 'none'; 
                }
            }
        });
    </script>
@endif
@yield('js')
