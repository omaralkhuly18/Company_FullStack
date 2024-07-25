@extends('home.layouts.master')

@section('meta_description')
    @if ($app->getLocale() == 'ar')
        <meta name="description" content="{{ $FaqHeader->seo_descr_ar }}">
    @else
        <meta name="description" content="{{ $FaqHeader->seo_descr }}">
    @endif
@endsection

@section('key')
    @if ($app->getLocale() == 'ar')
        @php

            $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $FaqHeader->seo_descr_ar);
            $words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
        @endphp
    @else
        @php

            $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $FaqHeader->seo_descr);
            $words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
        @endphp
    @endif
    <meta name="key" content="@foreach ($words as $word){{ trim($word) }}, @endforeach">
@endsection

@section('og_twitter')
    @if ($app->getLocale() == 'ar')
        <meta property="og:title" content="{{ $FaqHeader->seo_title_ar }}">
        <meta property="og:description" content="{{ $FaqHeader->seo_descr_ar }}">
        <meta property="og:site_name" content="{{ $FaqHeader->seo_title_ar }}">
        <meta name="twitter:title" content="{{ $FaqHeader->seo_title_ar }}">
        <meta name="twitter:description" content="{{ $FaqHeader->seo_descr_ar }}">
    @else
        <meta property="og:title" content="{{ $FaqHeader->seo_title }}">
        <meta property="og:description" content="{{ $FaqHeader->seo_descr }}">
        <meta property="og:site_name" content="{{ $FaqHeader->seo_title }}">
        <meta name="twitter:title" content="{{ $FaqHeader->seo_title }}">
        <meta name="twitter:description" content="{{ $FaqHeader->seo_descr }}">
    @endif
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="assets/uploads/settings/logo/{{ $setting->favicon }}">
    <meta name="twitter:image" content="assets/uploads/settings/logo/{{ $setting->favicon }}">
@endsection

@section('title')
    @if ($app->getLocale() == 'ar')
        {{ $FaqHeader->seo_title_ar }}
    @else
        {{ $FaqHeader->seo_title }}
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
                        {{ $FaqHeader->title_ar }}
                    @else
                        {{ $FaqHeader->title }}
                    @endif
                </h1>
                <ul class=" tajawal_black page-breadcrumb">
                    <li><a href="{{ route('home') }}">{{ trans('web_trans.home') }}</a></li>
                    <li>
                        @if ($app->getLocale() == 'ar')
                            {{ $FaqHeader->title_ar }}
                        @else
                            {{ $FaqHeader->title }}
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
                    <ul class=" tajawal_black accordion-box wow fadeInRight animated"
                        style="visibility: visible; animation-name: fadeInRight;">
                        @foreach ($FAQs as $FAQ)
                            <li class=" tajawal_black accordion block ">
                                <div class=" tajawal_black acc-btn ">
                                    @if ($app->getLocale() == 'ar')
                                        {{ $FAQ->question_ar }}
                                    @else
                                        {{ $FAQ->question }}
                                    @endif
                                    <div class=" tajawal_black icon fa fa-plus"></div>
                                </div>
                                <div class=" tajawal_black acc-content ">
                                    <div class=" tajawal_black content">
                                        <div class=" tajawal_black text">
                                            <p><span
                                                    style="color:#374151;font-family:'Söhne', 'ui-sans-serif', 'system-ui', '-apple-system', 'Segoe UI', Roboto, Ubuntu, Cantarell, 'Noto Sans', sans-serif, 'Helvetica Neue', Arial, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';font-size:16px;font-style:normal;font-weight:400;">
                                                    @if ($app->getLocale() == 'ar')
                                                        {!! html_entity_decode($FAQ->answer_ar) !!}
                                                    @else
                                                        {!! html_entity_decode($FAQ->answer) !!}
                                                    @endif
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach


                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
@endsection
