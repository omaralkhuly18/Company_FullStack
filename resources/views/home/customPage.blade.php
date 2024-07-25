@extends('home.layouts.master')

@section('meta_description')
    @if ($CustomPage)
        @if ($app->getLocale() == 'ar' && $CustomPage->seo_descr_ar)
            <meta name="description" content="{{ $CustomPage->seo_descr_ar }}">
        @elseif ($CustomPage->seo_descr)
            <meta name="description" content="{{ $CustomPage->seo_descr }}">
        @endif
    @endif
@endsection

@section('key')
    @if ($app->getLocale() == 'ar')
        @php

            $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $CustomPage->content_ar);
            $words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
        @endphp
    @else
        @php
            $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $CustomPage->content);
            $words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
        @endphp
    @endif
    <meta name="key" content="@foreach ($words as $word){{ trim($word) }}, @endforeach">
@endsection

@section('og_twitter')
    @if ($app->getLocale() == 'ar')
        <meta property="og:title" content="{{ $CustomPage->seo_title_ar }}">
        <meta property="og:description" content="{{ $CustomPage->seo_descr_ar }}">
        <meta property="og:site_name" content="{{ $CustomPage->seo_title_ar }}">
        <meta name="twitter:title" content="{{ $CustomPage->seo_title_ar }}">
        <meta name="twitter:description" content="{{ $CustomPage->seo_descr_ar }}">
    @else
        <meta property="og:title" content="{{ $CustomPage->seo_title }}">
        <meta property="og:description" content="{{ $CustomPage->seo_descr }}">
        <meta property="og:site_name" content="{{ $CustomPage->seo_title }}">
        <meta name="twitter:title" content="{{ $CustomPage->seo_title }}">
        <meta name="twitter:description" content="{{ $CustomPage->seo_descr }}">
    @endif
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="assets/uploads/settings/logo/{{ $setting->favicon }}">
    <meta name="twitter:image" content="assets/uploads/settings/logo/{{ $setting->favicon }}">
@endsection

@section('title')
    @if ($CustomPage)
        @if ($app->getLocale() == 'ar' && $CustomPage->seo_title_ar)
            {{ $CustomPage->seo_title_ar }}
        @elseif ($CustomPage->seo_title)
            {{ $CustomPage->seo_title }}
        @endif
    @endif
@endsection

@section('css')
@endsection

@section('content')
    @if ($CustomPage)
        <section class=" tajawal_black page-title"
            style="background-image: url({{ asset('assets/uploads/settings/banner/' . $setting->banner) }});">
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black title-outer">
                    <h1 class=" tajawal_black title">
                        @if ($app->getLocale() == 'ar' && $CustomPage->title_ar)
                            {{ $CustomPage->title_ar }}
                        @elseif ($CustomPage->title)
                            {{ $CustomPage->title }}
                        @endif
                    </h1>
                    <ul class=" tajawal_black page-breadcrumb">
                        <li><a href="{{ route('home') }}">{{ trans('web_trans.home') }}</a></li>
                        <li>
                            @if ($app->getLocale() == 'ar' && $CustomPage->title_ar)
                                {{ $CustomPage->title_ar }}
                            @elseif ($CustomPage->title)
                                {{ $CustomPage->title }}
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class=" tajawal_black ">
            <div class=" tajawal_black container">
                <div class=" tajawal_black row">
                    <div class=" tajawal_black col">
                        <p>
                            @if ($app->getLocale() == 'ar' && $CustomPage->content_ar)
                                {!! html_entity_decode($CustomPage->content_ar) !!}
                            @elseif ($CustomPage->content)
                                {!! html_entity_decode($CustomPage->content) !!}
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection

@section('js')
@endsection
