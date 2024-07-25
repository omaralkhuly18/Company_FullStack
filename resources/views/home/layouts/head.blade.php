<!-- Title -->
<title> @yield('title') </title>

<link rel="stylesheet" href="{{ asset('assets/dist-front/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('assets/dist-front/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/dist-front/css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('assets/dist-front/css/fontawesome.css') }}">
<!-- <link rel="stylesheet" href="{{ asset('assets/dist-front/css/font_awesome.css') }}"> -->
<link rel="stylesheet" href="{{ asset('assets/dist-front/css/jquery.fancybox.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/dist-front/css/linear.css') }}">
<link rel="stylesheet" href="{{ asset('assets/dist-front/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/dist-front/css/owl.theme.default.min') }}">
<link rel="stylesheet" href="{{ asset('assets/dist-front/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/dist-front/css/swiper.css') }}">
<link rel="stylesheet" href="{{ asset('assets/dist-front/css/tm-bs-mp.css') }}">
<link rel="stylesheet" href="{{ asset('assets/dist-front/css/tm-utility-classes.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

@if (App::getLocale() === 'ar' || (isset($setting) && $setting->layout_direction == 'RTL'))
    <link rel="stylesheet" href="{{ asset('assets/dist-front/css/rtl.css') }}">
@endif
@if ($setting->preloader == 1)
    <style>
        .preloader:after {
            background-image: url("{{ asset('assets/uploads/settings/logo/' . $setting->favicon) }}"); 
        }

        .dark-layout .preloader:after {
            background-image: url("{{ asset('assets/uploads/settings/logo/' . $setting->logo) }}");
        }
    </style>
@endif
@if ($setting->cookie_status == 1)
    <style>
        #cookie-banner {
            position: fixed;
            bottom: 0;
            right: 0;
            width: 30%;
            padding: 20px;
            text-align: center;
            z-index: 9999;
            transition: transform 1s ease-in-out;
            transform: translateY(100%);
        }

        #cookie-banner.show {
            transform: translateY(0);
        }

        #cookie-banner.hide {
            transform: translateY(100%);
        }
    </style>
@endif
<style>
    :root {
        --theme-color1: {{ $setting->theme_color }};
    }
</style>
<!-- Included css -->
@yield('css')
