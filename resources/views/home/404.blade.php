<html>

<head>
    <title>404</title>
    <link rel="shortcut icon" href="{{ asset('assets/uploads/settings/logo/' . $setting->favicon) }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/dist-front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist-front/css/style.css') }}">

</head>

<body>
    <div class=" tajawal_black page-wrapper">
        <section class=" tajawal_black ">
            <div class=" tajawal_black auto-container pt-30 pb-30">
                <div class=" tajawal_black row">
                    <div class=" tajawal_black col-xl-12">
                        <div class=" tajawal_black error-page__inner">
                            <div class=" tajawal_black error-page__title-box">
                                <div>
                                    <img style=""
                                        src="{{ asset('assets/uploads/settings/404/' . $setting->page404) }}"
                                        alt="404 Image">
                                </div>
                                <h3 class=" tajawal_black error-page__sub-title">{{ trans('web_trans.page_not_found') }}</h3>
                            </div>
                            <p class=" tajawal_black error-page__text">
                                {{ trans('web_trans.404_msg') }}
                            </p>
                            <a href="{{route('home')}}"
                                class=" tajawal_black theme-btn btn-style-one shop-now"><span
                                    class=" tajawal_black btn-title">{{ trans('web_trans.back_home') }}</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
