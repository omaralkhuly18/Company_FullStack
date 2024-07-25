



<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> @yield('title') </title>
<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
<meta name="Author" content="Spruko Technologies Private Limited">
<meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

<!-- font-family -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">

<!-- Favicon -->
<link rel="icon" href="{{asset('dashboard/assets/images/brand-logos/favicon.ico')}}" type="image/x-icon">

<!-- Choices JS -->
<script src="{{asset('dashboard/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

<!-- Bootstrap Css -->
<link id="style" href="{{asset('dashboard/assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" >

 <!-- Main Theme Js -->
 <script src="{{asset('dashboard/assets/js/main.js')}}"></script>

<!-- Style Css -->
<link href="{{asset('dashboard/assets/css/styles.min.css')}}" rel="stylesheet" >

<!-- Icons Css -->
<link href="{{asset('dashboard/assets/css/icons.css')}}" rel="stylesheet" >

<!-- Node Waves Css -->
<link href="{{asset('dashboard/assets/libs/node-waves/waves.min.css')}}" rel="stylesheet" >

<!-- Simplebar Css -->
<link href="{{asset('dashboard/assets/libs/simplebar/simplebar.min.css')}}" rel="stylesheet" >

<!-- Color Picker Css -->
<link rel="stylesheet" href="{{asset('dashboard/assets/libs/flatpickr/flatpickr.min.css')}}">
<link rel="stylesheet" href="{{asset('dashboard/assets/libs/@simonwep/pickr/themes/nano.min.css')}}">

<!-- Choices Css -->
<link rel="stylesheet" href="{{asset('dashboard/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">


<link rel="stylesheet" href="{{asset('dashboard/assets/libs/jsvectormap/css/jsvectormap.min.css')}}">

<link rel="stylesheet" href="{{asset('dashboard/assets/libs/swiper/swiper-bundle.min.css')}}">


<!-- translation style -->
@if(App::getLocale() == 'ar')

    <link rel="stylesheet" href="{{asset('dashboard/assets/css/rtl.css')}}">

@endif


@yield('css')
