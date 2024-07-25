@extends('home.layouts.master')

@section('meta_description')
    @if ($app->getLocale() == 'ar')
        <meta name="description" content="{{ $ServiceHeading->seo_descr_ar }}">
    @else
        <meta name="description" content="{{ $ServiceHeading->seo_descr }}">
    @endif
@endsection

@section('key')
    @if ($app->getLocale() == 'ar')
        @php

            $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $ServiceHeading->seo_descr_ar);
            $words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
        @endphp
    @else
        @php

            $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $ServiceHeading->seo_descr);
            $words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
        @endphp
    @endif
    <meta name="key" content="@foreach ($words as $word){{ trim($word) }}, @endforeach">
@endsection

@section('og_twitter')
    @if ($app->getLocale() == 'ar')
        <meta property="og:title" content="{{ $ServiceHeading->seo_title_ar }}">
        <meta property="og:description" content="{{ $ServiceHeading->seo_descr_ar }}">
        <meta property="og:site_name" content="{{ $ServiceHeading->seo_title_ar }}">
        <meta name="twitter:title" content="{{ $ServiceHeading->seo_title_ar }}">
        <meta name="twitter:description" content="{{ $ServiceHeading->seo_descr_ar }}">
    @else
        <meta property="og:title" content="{{ $ServiceHeading->seo_title }}">
        <meta property="og:description" content="{{ $ServiceHeading->seo_descr }}">
        <meta property="og:site_name" content="{{ $ServiceHeading->seo_title }}">
        <meta name="twitter:title" content="{{ $ServiceHeading->seo_title }}">
        <meta name="twitter:description" content="{{ $ServiceHeading->seo_descr }}">
    @endif
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="assets/uploads/settings/logo/{{ $setting->favicon }}">
    <meta name="twitter:image" content="assets/uploads/settings/logo/{{ $setting->favicon }}">
@endsection

@section('title')
    @if ($app->getLocale() == 'ar')
        {{ $ServiceHeading->seo_title_ar }}
    @else
        {{ $ServiceHeading->seo_title }}
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
                        {{ $ServiceHeading->title_ar }}
                    @else
                        {{ $ServiceHeading->title }}
                    @endif
                </h1>
                <ul class=" tajawal_black page-breadcrumb">
                    <li><a href="{{ route('home') }}">{{ trans('web_trans.home') }}</a></li>
                    <li>
                        @if ($app->getLocale() == 'ar')
                            {{ $ServiceHeading->title_ar }}
                        @else
                            {{ $ServiceHeading->title }}
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class=" tajawal_black services-section">
        <div class=" tajawal_black auto-container">
            <div class=" tajawal_black row">
                @foreach ($Services as $Service)
                    <div class=" tajawal_black service-block col-lg-3 col-md-6 coll-md-12 wow fadeInUp animated"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <div class=" tajawal_black inner-box">
                            <div class=" tajawal_black image-box">
                                <figure class=" tajawal_black image"><img
                                        src="{{ asset('assets/uploads/services/photos/' . $Service->photo) }}"
                                        alt="App Development"></figure>
                            </div>
                            <div class=" tajawal_black content-box">
                                <i class="icon {{ $Service->icon }}"></i>
                                @if ($app->getLocale() == 'ar')
                                    <h5 class=" tajawal_black title">{{ $Service->name_ar }}</h5>
                                @else
                                    <h5 class=" tajawal_black title">{{ $Service->name }}</h5>
                                @endif

                            </div>
                            <div class=" tajawal_black hover-content">
                                <i class="icon {{ $Service->icon }}"></i>
                                @if ($app->getLocale() == 'ar')
                                    <h5 class=" tajawal_black title"><a
                                            href="{{ route('siteCustomService', ['slug' => $Service->slug_ar]) }}">
                                            {{ $Service->name_ar }}</a></h5>
                                    <div class=" tajawal_black text">
                                        {{ $Service->short_descr_ar }}
                                    </div>
                                @else
                                    <h5 class=" tajawal_black title"><a
                                            href="{{ route('siteCustomService', ['slug' => $Service->slug]) }}">
                                            {{ $Service->name }}</a></h5>
                                    <div class=" tajawal_black text">
                                        {{ $Service->short_descr }}
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@section('js')
@endsection
