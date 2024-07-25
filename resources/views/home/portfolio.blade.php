@extends('home.layouts.master')

@section('meta_description')
    @if ($app->getLocale() == 'ar')
        <meta name="description" content="{{ $PortfolioHeading->seo_descr_ar }}">
    @else
        <meta name="description" content="{{ $PortfolioHeading->seo_descr }}">
    @endif
@endsection

@section('key')
    @if ($app->getLocale() == 'ar')
        @php

            $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $PortfolioHeading->seo_descr_ar);
            $words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
        @endphp
    @else
        @php

            $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $PortfolioHeading->seo_descr);
            $words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
        @endphp
    @endif
    <meta name="key" content="@foreach ($words as $word){{ trim($word) }}, @endforeach">
@endsection

@section('og_twitter')
    @if ($app->getLocale() == 'ar')
        <meta property="og:title" content="{{ $PortfolioHeading->seo_title_ar }}">
        <meta property="og:description" content="{{ $PortfolioHeading->seo_descr_ar }}">
        <meta property="og:site_name" content="{{ $PortfolioHeading->seo_title_ar }}">
        <meta name="twitter:title" content="{{ $PortfolioHeading->seo_title_ar }}">
        <meta name="twitter:description" content="{{ $PortfolioHeading->seo_descr_ar }}">
    @else
        <meta property="og:title" content="{{ $PortfolioHeading->seo_title }}">
        <meta property="og:description" content="{{ $PortfolioHeading->seo_descr }}">
        <meta property="og:site_name" content="{{ $PortfolioHeading->seo_title }}">
        <meta name="twitter:title" content="{{ $PortfolioHeading->seo_title }}">
        <meta name="twitter:description" content="{{ $PortfolioHeading->seo_descr }}">
    @endif
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="assets/uploads/settings/logo/{{ $setting->favicon }}">
    <meta name="twitter:image" content="assets/uploads/settings/logo/{{ $setting->favicon }}">
@endsection

@section('title')
    @if ($app->getLocale() == 'ar')
        {{ $PortfolioHeading->seo_title_ar }}
    @else
        {{ $PortfolioHeading->seo_title }}
    @endif
@endsection

@section('css')
@endsection
@section('content')
    <section class=" tajawal_black page-title"
        style="background-image: url({{ asset('assets/uploads/settings/banner/' . $setting->banner) }});">
        <div class=" tajawal_black auto-container">
            <div class=" tajawal_black title-outer">
                <h1 class=" tajawal_black title">
                    @if ($app->getLocale() == 'ar')
                        {{ $PortfolioHeading->title_ar }}
                    @else
                        {{ $PortfolioHeading->title }}
                    @endif
                </h1>
                <ul class=" tajawal_black page-breadcrumb">
                    <li><a href="{{ route('home') }}">{{ trans('web_trans.home') }}</a></li>
                    <li>
                        @if ($app->getLocale() == 'ar')
                            {{ $PortfolioHeading->title_ar }}
                        @else
                            {{ $PortfolioHeading->title }}
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class=" tajawal_black projects-section">
        <div class=" tajawal_black auto-container">
            <div class=" tajawal_black ">
                <div class=" tajawal_black row">
                    @foreach ($Portfolios as $Portfolio)
                        <div class=" tajawal_black  project-block col-lg-4 col-md-6 col-sm-12">
                            <div class=" tajawal_black inner-box">
                                <div class=" tajawal_black image-box">
                                    <figure class=" tajawal_black image">
                                        @if ($app->getLocale() == 'ar')
                                            <a href="{{ route('siteCustomPortfolio', ['slug' => $Portfolio->slug_ar]) }}"><img
                                                    src="{{ asset('assets/uploads/portfolios/photos/' . $Portfolio->photo) }}"
                                                    alt="Creative Canvas Hub"></a>
                                        @else
                                            <a href="{{ route('siteCustomPortfolio', ['slug' => $Portfolio->slug]) }}"><img
                                                    src="{{ asset('assets/uploads/portfolios/photos/' . $Portfolio->photo) }}"
                                                    alt="Creative Canvas Hub"></a>
                                        @endif
                                    </figure>
                                </div>
                                <div class=" tajawal_black content-box">
                                    @if ($app->getLocale() == 'ar')
                                        <a href="{{ route('siteCustomPortfolio', ['slug' => $Portfolio->slug_ar]) }}"
                                            class=" tajawal_black icon"><i class="fa  fa-long-arrow-alt-right "></i></a>
                                        <h4 class=" tajawal_black title"><a
                                                href="{{ route('siteCustomPortfolio', ['slug' => $Portfolio->slug_ar]) }}"
                                                title="{{ $Portfolio->name_ar }}">

                                                {{ $Portfolio->name_ar }}


                                            </a></h4>
                                    @else
                                        <a href="{{ route('siteCustomPortfolio', ['slug' => $Portfolio->slug]) }}"
                                            class=" tajawal_black icon"><i class="fa  fa-long-arrow-alt-right "></i></a>
                                        <h4 class=" tajawal_black title"><a
                                                href="{{ route('siteCustomPortfolio', ['slug' => $Portfolio->slug]) }}"
                                                title="{{ $Portfolio->name }}">

                                                {{ $Portfolio->name }}
                                            </a>
                                        </h4>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
@endsection
