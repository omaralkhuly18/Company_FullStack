@extends('home.layouts.master')
@section('meta_description')
    @if ($app->getLocale() == 'ar')
    <meta name="description" content="{{ $Portfolio->seo_descr_ar }}">
    @else
    <meta name="description" content="{{ $Portfolio->seo_descr }}">
    @endif
@endsection

@section('key')
    @if ($app->getLocale() == 'ar')
        @php

            $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $Portfolio->seo_descr_ar);
            $words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
        @endphp
    @else
        @php

            $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $Portfolio->seo_descr);
            $words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
        @endphp
    @endif
    <meta name="key" content="@foreach ($words as $word){{ trim($word) }}, @endforeach">
@endsection

@section('og_twitter')
    @if ($app->getLocale() == 'ar')
        <meta property="og:title" content="{{ $Portfolio->seo_title_ar }}">
        <meta property="og:description" content="{{ $Portfolio->seo_descr_ar }}">
        <meta property="og:site_name" content="{{ $Portfolio->seo_title_ar }}">
        <meta name="twitter:title" content="{{ $Portfolio->seo_title_ar }}">
        <meta name="twitter:description" content="{{ $Portfolio->seo_descr_ar }}">
    @else
        <meta property="og:title" content="{{ $Portfolio->seo_title }}">
        <meta property="og:description" content="{{ $Portfolio->seo_descr }}">
        <meta property="og:site_name" content="{{ $Portfolio->seo_title }}">
        <meta name="twitter:title" content="{{ $Portfolio->seo_title }}">
        <meta name="twitter:description" content="{{ $Portfolio->seo_descr }}">
    @endif
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="assets/uploads/portfolios/banners/{{ $Portfolio->banner }}">
    <meta name="twitter:image" content="assets/uploads/portfolios/banners/{{ $Portfolio->banner }}">
@endsection

@section('title')
    @if ($app->getLocale() == 'ar')
        {{ $Portfolio->seo_title_ar }}
    @else
        {{ $Portfolio->seo_title }}
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
                        {{ $Portfolio->name_ar }}
                    @else
                        {{ $Portfolio->name }}
                    @endif
                </h1>
                <ul class=" tajawal_black page-breadcrumb">
                    <li><a href="{{ route('home') }}">{{ trans('web_trans.home') }}</a></li>
                    <li>
                        @if ($app->getLocale() == 'ar')
                            {{ $Portfolio->name_ar }}
                        @else
                            {{ $Portfolio->name }}
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class=" tajawal_black project-details">
        <div class=" tajawal_black container">
            <div class=" tajawal_black row">
                <div class=" tajawal_black col-xl-12">
                    <div class=" tajawal_black project-details__top">
                        <div class=" tajawal_black project-details__img">
                            <img src="{{ asset('assets/uploads/portfolios/banners/' . $Portfolio->banner) }}"
                                alt="Evolve Creative Studio">
                        </div>
                    </div>
                </div>
            </div>
            <div class=" tajawal_black row justify-content-center">
                <div class=" tajawal_black col-xl-10">
                    <div class=" tajawal_black project-details__content-right">
                        <div class=" tajawal_black project-details__details-box">
                            <div class=" tajawal_black row">
                                <div class=" tajawal_black col">
                                    <p class=" tajawal_black project-details__client">{{ trans('web_trans.date') }}</p>
                                    <h4 class=" tajawal_black project-details__name">{{ $Portfolio->date }}</h4>
                                </div>
                                <div class=" tajawal_black col">

                                    <p class=" tajawal_black project-details__client">{{ trans('web_trans.client') }}</p>
                                    @if ($app->getLocale() == 'ap')
                                        <h4 class=" tajawal_black project-details__name">{{ $Portfolio->client_ar }}</h4>
                                    @else
                                        <h4 class=" tajawal_black project-details__name">{{ $Portfolio->client }}</h4>
                                    @endif
                                </div>
                                <div class=" tajawal_black col">
                                    <p class=" tajawal_black project-details__client">Website</p>
                                    <h4 class=" tajawal_black project-details__name">{{ $Portfolio->website }}</h4>
                                </div>
                                <div class=" tajawal_black col">
                                    <p class=" tajawal_black project-details__client">{{ trans('web_trans.location') }}</p>
                                    @if ($app->getLocale() == 'ap')
                                        <h4 class=" tajawal_black project-details__name">{{ $Portfolio->location_ar }}</h4>
                                    @else
                                        <h4 class=" tajawal_black project-details__name">{{ $Portfolio->location }}</h4>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" tajawal_black project-details__content">
                <div class=" tajawal_black row">
                    <div class=" tajawal_black col-xl-12">
                        <div class=" tajawal_black project-details__content-left">
                            <h3 class=" tajawal_black mb-4 mt-5">{{ trans('web_trans.about_project') }}</h3>
                            <p>
                            </p>
                            @if ($app->getLocale() == 'ar')
                                {!! html_entity_decode($Portfolio->descr_ar) !!}
                            @else
                                {!! html_entity_decode($Portfolio->descr) !!}
                            @endif
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" tajawal_black row" style="direction: rtl">
                <div class=" tajawal_black col-xl-12">
                    <div class=" tajawal_black project-details__pagination-box">
                        <ul class=" tajawal_black project-details__pagination list-unstyled clearfix">
                            <li class=" tajawal_black previous">
                                @if ($previousProject)
                                    @if ($app->getLocale() == 'ar')
                                        <a href="{{ route('siteCustomPortfolio', $previousProject->slug_ar) }}"
                                            aria-label="Previous">
                                            <div class=" tajawal_black icon">
                                                <i class="lnr lnr-icon-arrow-left"></i>
                                            </div>
                                            <div class=" tajawal_black content">{{ trans('web_trans.previous') }}</div>
                                        </a>
                                    @else
                                        <a href="{{ route('siteCustomPortfolio', $previousProject->slug) }}"
                                            aria-label="Previous">
                                            <div class=" tajawal_black icon">
                                                <i class="lnr lnr-icon-arrow-left"></i>
                                            </div>
                                            <div class=" tajawal_black content">{{ trans('web_trans.previous') }}</div>
                                        </a>
                                    @endif
                                @endif
                            </li>
                            <li class=" tajawal_black next">
                                @if ($nextProject)
                                    @if ($app->getLocale() == 'ar')
                                        <a href="{{ route('siteCustomPortfolio', $nextProject->slug_ar) }}"
                                            aria-label="Next">
                                            <div class=" tajawal_black content">{{ trans('web_trans.next') }}</div>
                                            <div class=" tajawal_black icon">
                                                <i class="lnr lnr-icon-arrow-right"></i>
                                            </div>
                                        </a>
                                    @else
                                        <a href="{{ route('siteCustomPortfolio', $nextProject->slug) }}" aria-label="Next">
                                            <div class=" tajawal_black content">{{ trans('web_trans.next') }}</div>
                                            <div class=" tajawal_black icon">
                                                <i class="lnr lnr-icon-arrow-right"></i>
                                            </div>
                                        </a>
                                    @endif
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
@endsection
