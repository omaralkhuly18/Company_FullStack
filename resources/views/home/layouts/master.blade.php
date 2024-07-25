<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="copyright"
        content="@if ($app->getLocale() == 'ar') {{ $setting->footer_copyright_ar }}@else{{ $setting->footer_copyright }} @endif">
    <meta name="revisit-after" content="7 days">
    <meta name="rating" content="General">
    <meta name="language" content="ar">
    <meta name="language" content="en">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="">
    <meta name="twitter:card" content="summary_large_image">
    @yield('meta_description')
    @yield('key')
    @yield('og_twitter')
    @include('home.layouts.head')

    <link rel="shortcut icon" href="{{ asset('assets/uploads/settings/logo/' . $setting->favicon) }}"
        type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/uploads/settings/logo/' . $setting->favicon) }}" type="image/x-icon">
    @if ($setting->google_status == 1)
        <script type="text/javascript" async src="https://www.google-analytics.com/analytics.js"></script>
        <script type="text/javascript" async
            src="https://www.googletagmanager.com/gtag/js?id=G-YV2YZ6LC3D&amp;l=dataLayer&amp;cx=c"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ $setting->google_code }}"></script>
    @endif
    @if ($setting->google_recabtcha_status == 1)
        <script src="https://www.google.com/recaptcha/api.js?render={{ $setting->google_recabtcha }}"></script>
    @endif
</head>

<body id="page-top" class=" tajawal_black ">
    <div class=" tajawal_black page-wrapper">
        @if ($setting->preloader == 1)
            <div class=" tajawal_black dark-layout">
                <div class=" tajawal_black preloader"></div>
            </div>
        @endif

        @include('home.layouts.header')

        @yield('content')

        @include('home.layouts.footer')


    </div>
    <div 
    class="tajawal_black scroll-to-top scroll-to-target" data-target="html">
    <!-- <span class=" tajawal_black fa fa-angle-up"></span> -->
    <img class="arrow" src="{{asset('assets/uploads/icons/arrow.png')}}" alt="arrow">
    </div>
    @include('home.layouts.scripts')
    
    @if ($setting->cookie_status == 1)
        <div id="cookie-banner" class=" tajawal_black show" style="background-color: {{ $setting->cookie_bg_color }};">
            <p style="color: {{ $setting->cookie_text_color }}">{{ $setting->cookie_message }}</p>
            <button id="cookie-accept-btn"
                style="color: {{ $setting->cookie_btn_text_color }}; background-color: {{ $setting->cookie_btn_bg_color }}; border: none; padding: 10px 20px; cursor: pointer; border-radius: 4px;">
                {{ $setting->cookie_btn_text }}
            </button>
        </div>
    @endif
</body>

</html>
