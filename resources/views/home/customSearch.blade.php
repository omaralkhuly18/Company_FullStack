@extends('home.layouts.master')

@section('meta_description')
    @if ($app->getLocale() == 'ar')
        <meta name="description" content="{{ $SearchHeader->seo_descr_ar}}">

    @else
        <meta name="description" content="{{ $SearchHeader->seo_descr}}">

    @endif
@endsection

@section('key')
    @if ($app->getLocale() == 'ar')
        @php

            $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $SearchHeader->seo_descr_ar);
            $words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
        @endphp
    @else
        @php

            $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $SearchHeader->seo_descr);
            $words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
        @endphp
    @endif
    <meta name="key" content="@foreach ($words as $word){{ trim($word) }}, @endforeach">
@endsection

@section('og_twitter')
    @if ($app->getLocale() == 'ar')
        <meta property="og:title" content="{{ $SearchHeader->seo_title_ar }}">
        <meta property="og:description" content="{{ $SearchHeader->seo_descr_ar }}">
        <meta property="og:site_name" content="{{ $SearchHeader->seo_title_ar }}">
        <meta name="twitter:title" content="{{ $SearchHeader->seo_title_ar }}">
        <meta name="twitter:description" content="{{ $SearchHeader->seo_descr_ar }}">
    @else
        <meta property="og:title" content="{{ $SearchHeader->seo_title }}">
        <meta property="og:description" content="{{ $SearchHeader->seo_descr }}">
        <meta property="og:site_name" content="{{ $SearchHeader->seo_title }}">
        <meta name="twitter:title" content="{{ $SearchHeader->seo_title }}">
        <meta name="twitter:description" content="{{ $SearchHeader->seo_descr }}">
    @endif
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="assets/uploads/settings/logo/{{ $setting->favicon }}">
    <meta name="twitter:image" content="assets/uploads/settings/logo/{{ $setting->favicon }}">
@endsection

@section('title')
    @if ($app->getLocale() == 'ar')
        {{ $SearchHeader->seo_title_ar }}
    @else
        {{ $SearchHeader->seo_title }}
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
                        {{ $SearchHeader->seo_title_ar }}
                    @else
                        {{ $SearchHeader->seo_title }}
                    @endif
                </h1>
                <ul class=" tajawal_black page-breadcrumb">
                    <li><a href="{{ route('home') }}">{{ trans('web_trans.home') }}</a></li>
                    <li>
                        @if ($app->getLocale() == 'ar')
                            {{ $SearchHeader->seo_title_ar }}
                        @else
                            {{ $SearchHeader->seo_title }}
                        @endif
                </ul>
            </div>
        </div>
    </section>

    @if ($Posts->isNotEmpty())
        <section class=" tajawal_black news-section">
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black row">
                    @foreach ($Posts as $Post)
                        <div class=" tajawal_black news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp"
                            style="visibility: visible; animation-name: none;">
                            <div class=" tajawal_black inner-box">
                                <div class=" tajawal_black image-box">
                                    @if ($app->getLocale() == 'ar')
                                        <figure class=" tajawal_black image"><a
                                                href="{{ route('siteCustomBlog', ['slug' => $Post->slug_ar]) }}"><img
                                                    src="{{ asset('assets/uploads/posts/' . $Post->photo) }}"
                                                    alt=""></a></figure>
                                    @else
                                        <figure class=" tajawal_black image"><a
                                                href="{{ route('siteCustomBlog', ['slug' => $Post->slug]) }}"><img
                                                    src="{{ asset('assets/uploads/posts/' . $Post->photo) }}"
                                                    alt=""></a></figure>
                                    @endif
                                </div>
                                <div class=" tajawal_black content-box">
                                    <span class=" tajawal_black date">{{ $Post->created_at->format('d M, Y') }}
                                    </span>
                                    <ul class=" tajawal_black post-info">
                                        <li><i class="fa fa-user-circle"></i> by Admin</li>
                                    </ul>
                                    @if ($app->getLocale() == 'ar')
                                        <h4 class=" tajawal_black title"><a
                                                href="{{ route('siteCustomBlog', ['slug' => $Post->slug_ar]) }}">
                                                {{ $Post->title_ar }}
                                            </a>
                                        </h4>
                                    @else
                                        <h4 class=" tajawal_black title"><a
                                                href="{{ route('siteCustomBlog', ['slug' => $Post->slug]) }}">
                                                {{ $Post->title_ar }}
                                            </a>
                                        </h4>
                                    @endif

                                    @if ($app->getLocale() == 'ar')
                                        <a href="{{ route('siteCustomBlog', ['slug' => $Post->slug_ar]) }}"
                                            class=" tajawal_black read-more">{{ trans('web_trans.read_more') }} <i
                                                class=" tajawal_black  fa fa-long-arrow-alt-right "></i></a>
                                    @else
                                        <h4 class=" tajawal_black title"><a
                                                href="{{ route('siteCustomBlog', ['slug' => $Post->slug]) }}">
                                                {{ $Post->title_ar }}
                                            </a>
                                        </h4>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
    @else
        <section class=" tajawal_black news-section">
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black row">
                    <div class=" tajawal_black text-danger text-center">No Post Found</div>
                    <div class=" tajawal_black col-md-12">

                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection

@section('js')
@endsection
