@extends('home.layouts.master')

@section('meta_description')
    @if ($app->getLocale() == 'ar')
        <meta name="description" content="{{ $Term->seo_descr_ar }}">
    @else
        <meta name="description" content="{{ $Term->seo_descr }}">
    @endif
@endsection

@section('key')
    @if ($app->getLocale() == 'ar')
        @php

            $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $Term->seo_descr_ar);
            $words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
        @endphp
    @else
        @php

            $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $Term->seo_descr);
            $words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
        @endphp
    @endif
    <meta name="key" content="@foreach ($words as $word){{ trim($word) }}, @endforeach">
@endsection

@section('og_twitter')
    @if ($app->getLocale() == 'ar')
        <meta property="og:title" content="{{ $Term->seo_title_ar }}">
        <meta property="og:description" content="{{ $Term->seo_descr_ar }}">
        <meta property="og:site_name" content="{{ $Term->seo_title_ar }}">
        <meta name="twitter:title" content="{{ $Term->seo_title_ar }}">
        <meta name="twitter:description" content="{{ $Term->seo_descr_ar }}">
    @else
        <meta property="og:title" content="{{ $Term->seo_title }}">
        <meta property="og:description" content="{{ $Term->seo_descr }}">
        <meta property="og:site_name" content="{{ $Term->seo_title }}">
        <meta name="twitter:title" content="{{ $Term->seo_title }}">
        <meta name="twitter:description" content="{{ $Term->seo_descr }}">
    @endif
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="assets/uploads/settings/logo/{{ $setting->favicon }}">
    <meta name="twitter:image" content="assets/uploads/settings/logo/{{ $setting->favicon }}">
@endsection

@section('title')
    @if ($app->getLocale() == 'ar')
        {{ $Term->seo_title_ar }}
    @else
        {{ $Term->seo_title }}
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
                        {{ $Term->title_ar }}
                    @else
                        {{ $Term->title }}
                    @endif
                </h1>
                <ul class=" tajawal_black page-breadcrumb">
                    <li><a href="{{ route('home') }}">{{ trans('web_trans.home') }}</a></li>
                    <li>
                        @if ($app->getLocale() == 'ar')
                            {{ $Term->title_ar }}
                        @else
                            {{ $Term->title }}
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class=" tajawal_black blog-details">
        <div class=" tajawal_black container">
            <div class=" tajawal_black row">
                <div class=" tajawal_black col-md-12">
                    @if ($app->getLocale() == 'ar')
                        {{ $Term->content_ar }}
                    @else
                        {{ $Term->content }}
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
@endsection
