@extends('home.layouts.master')

@section('meta_description')
    @if ($app->getLocale() == 'ar')
        <meta name="description" content="{{ $testimonialHeader->seo_descr_ar }}">
    @else
        <meta name="description" content="{{ $testimonialHeader->seo_descr }}">
    @endif
@endsection

@section('key')
    @if ($app->getLocale() == 'ar')
        @php

            $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $testimonialHeader->seo_descr_ar);
            $words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
        @endphp
    @else
        @php

            $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $testimonialHeader->seo_descr);
            $words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
        @endphp
    @endif
    <meta name="key" content="@foreach ($words as $word){{ trim($word) }}, @endforeach">
@endsection

@section('og_twitter')
    @if ($app->getLocale() == 'ar')
        <meta property="og:title" content="{{ $testimonialHeader->seo_title_ar }}">
        <meta property="og:description" content="{{ $testimonialHeader->seo_descr_ar }}">
        <meta property="og:site_name" content="{{ $testimonialHeader->seo_title_ar }}">
        <meta name="twitter:title" content="{{ $testimonialHeader->seo_title_ar }}">
        <meta name="twitter:description" content="{{ $testimonialHeader->seo_descr_ar }}">
    @else
        <meta property="og:title" content="{{ $testimonialHeader->seo_title }}">
        <meta property="og:description" content="{{ $testimonialHeader->seo_descr }}">
        <meta property="og:site_name" content="{{ $testimonialHeader->seo_title }}">
        <meta name="twitter:title" content="{{ $testimonialHeader->seo_title }}">
        <meta name="twitter:description" content="{{ $testimonialHeader->seo_descr }}">
    @endif
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="assets/uploads/settings/logo/{{ $setting->favicon }}">
    <meta name="twitter:image" content="assets/uploads/settings/logo/{{ $setting->favicon }}">
@endsection


@section('title')
    @if ($app->getLocale() == 'ar')
        {{ $testimonialHeader->seo_title_ar }}
    @else
        {{ $testimonialHeader->seo_title }}
    @endif
@endsection

@section('css')
    <!-- <link href="https://demo.phpscriptpoint.com/desix/dist-front/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://demo.phpscriptpoint.com/desix/dist-front/css/style.css" rel="stylesheet"> -->
    <style>
        .testimonial_style{
            background-image: url("{{ asset('assets/uploads/settings/banner/' . $setting->banner) }}");
        }
    </style>
@endsection
@section('content')
    <section class="testimonial_style tajawal_black page-title">
        <div class=" tajawal_black auto-container">
            <div class=" tajawal_black title-outer">
                <h1 class=" tajawal_black title">
                    @if ($app->getLocale() == 'ar')
                        {{ $testimonialHeader->title_ar }}
                    @else
                        {{ $testimonialHeader->title }}
                    @endif
                </h1>
                <ul class=" tajawal_black page-breadcrumb">
                    <li>
                        
                        <a href="{{ route('home') }}">
                        {{ trans('web_trans.home') }}
                    </a>
                </li>
                    <li>
                        @if ($app->getLocale() == 'ar')
                            {{ $testimonialHeader->title_ar }}
                        @else
                            {{ $testimonialHeader->title }}
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class=" tajawal_black pt-120 pb-120"style="direction: ltr;">
        <div class=" tajawal_black auto-container">
            <div class=" tajawal_black row">
                <div class=" tajawal_black testimonial-column col-xl-12 col-lg-12">
                    <div class=" tajawal_black inner-column">
                        <div class=" tajawal_black testimonial-carousel-one owl-carousel default-navs">
                            @foreach ($Testimonials as $Testimonial)
                                <div class=" tajawal_black testimonial-block">
                                    <div class=" tajawal_black inner-box">
                                        <div class=" tajawal_black content-box">
                                            <div class=" tajawal_black text">
                                                <p>
                                                    @if ($app->getLocale() == 'ar')
                                                        {{ $Testimonial->comment_ar }}
                                                    @else
                                                        {{ $Testimonial->comment }}
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                        <div class=" tajawal_black info-box">
                                            <div class=" tajawal_black rating">
                                                @for ($i = 0; $i < $Testimonial->rating; $i++)
                                                    <i class="fas fa-star"></i>
                                                @endfor
                                            </div>
                                            <figure class=" tajawal_black thumb"><img
                                                    src="{{ asset('assets/uploads/testimonials/' . $Testimonial->photo) }}"
                                                    alt=""></figure>
                                            @if ($app->getLocale() == 'ar')
                                                <h5 class=" tajawal_black name">{{ $Testimonial->name_ar }}</h5>
                                                <span class=" tajawal_black designation">{{ $Testimonial->designation_ar }}</span>
                                            @else
                                                <h5 class=" tajawal_black name">{{ $Testimonial->name }}</h5>
                                                <span class=" tajawal_black designation">{{ $Testimonial->designation }}</span>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
@endsection
