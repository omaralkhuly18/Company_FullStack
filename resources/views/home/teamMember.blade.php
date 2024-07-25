@extends('home.layouts.master')

@section('meta_description')
    @if ($app->getLocale() == 'ar')
        <meta name="description" content="{{ $TeamHeader->seo_descr_ar }}">
    @else
        <meta name="description" content="{{ $TeamHeader->seo_descr }}">
    @endif
@endsection

@section('key')
    @if ($app->getLocale() == 'ar')
        @php

            $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $TeamHeader->seo_descr_ar);
            $words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
        @endphp
    @else
        @php

            $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $TeamHeader->seo_descr);
            $words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
        @endphp
    @endif
    <meta name="key" content="@foreach ($words as $word){{ trim($word) }}, @endforeach">
@endsection

@section('og_twitter')
    @if ($app->getLocale() == 'ar')
        <meta property="og:title" content="{{ $TeamHeader->seo_title_ar }}">
        <meta property="og:description" content="{{ $TeamHeader->seo_descr_ar }}">
        <meta property="og:site_name" content="{{ $TeamHeader->seo_title_ar }}">
        <meta name="twitter:title" content="{{ $TeamHeader->seo_title_ar }}">
        <meta name="twitter:description" content="{{ $TeamHeader->seo_descr_ar }}">
    @else
        <meta property="og:title" content="{{ $TeamHeader->seo_title }}">
        <meta property="og:description" content="{{ $TeamHeader->seo_descr }}">
        <meta property="og:site_name" content="{{ $TeamHeader->seo_title }}">
        <meta name="twitter:title" content="{{ $TeamHeader->seo_title }}">
        <meta name="twitter:description" content="{{ $TeamHeader->seo_descr }}">
    @endif
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="assets/uploads/settings/logo/{{ $setting->favicon }}">
    <meta name="twitter:image" content="assets/uploads/settings/logo/{{ $setting->favicon }}">
@endsection

@section('title')
    @if ($app->getLocale() == 'ar')
        {{ $TeamHeader->seo_title_ar }}
    @else
        {{ $TeamHeader->seo_title }}
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
                        {{ $TeamHeader->title_ar }}
                    @else
                        {{ $TeamHeader->title }}
                    @endif
                </h1>
                <ul class=" tajawal_black page-breadcrumb">
                    <li><a href="{{ route('home') }}">{{ trans('web_trans.home') }}</a></li>
                    <li>
                        @if ($app->getLocale() == 'ar')
                            {{ $TeamHeader->title_ar }}
                        @else
                            {{ $TeamHeader->title }}
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class=" tajawal_black team-section">
        <div class=" tajawal_black auto-container">
            <div class=" tajawal_black row">
                @foreach ($TeamMembers as $TeamMember)
                    <div class=" tajawal_black team-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <div class=" tajawal_black inner-box">
                            <div class=" tajawal_black info-box">
                                @if ($app->getLocale() == 'ar')
                                    <h4 class=" tajawal_black name"><a
                                            href="{{ route('siteCustomTeamMember', ['slug' => $TeamMember->slug_ar]) }}">{{ $TeamMember->name_ar }}</a>
                                    </h4>
                                    <span class=" tajawal_black designation">{{ $TeamMember->designation_ar }}</span>
                                @else
                                    <h4 class=" tajawal_black name"><a
                                            href="{{ route('siteCustomTeamMember', ['slug' => $TeamMember->slug]) }}">{{ $TeamMember->name }}</a>
                                    </h4>
                                    <span class=" tajawal_black designation">{{ $TeamMember->designation }}</span>
                                @endif

                            </div>
                            <div class=" tajawal_black image-box">
                                <figure class=" tajawal_black image">
                                    @if ($app->getLocale() == 'ar')
                                        <a href="{{ route('siteCustomTeamMember', ['slug' => $TeamMember->slug_ar]) }}">
                                        @else
                                            <a href="{{ route('siteCustomTeamMember', ['slug' => $TeamMember->slug]) }}">
                                    @endif
                                    <img src="{{ asset('assets/uploads/teams/' . $TeamMember->photo) }}"
                                        alt=""></a>
                                </figure>
                                <div class=" tajawal_black social-links">
                                    <a href="{{ $TeamMember->facebook }}" target="_blank"><i
                                            class=" tajawal_black fab fa-facebook-f"></i></a>
                                    <a href="{{ $TeamMember->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="{{ $TeamMember->linkedin }}" target="_blank"><i
                                            class=" tajawal_black fab fa-linkedin-in"></i></a>
                                    <a href="{{ $TeamMember->instagram }}" target="_blank"><i
                                            class=" tajawal_black fab fa-instagram"></i></a>
                                </div>
                                <span class=" tajawal_black share-icon fas fa-plus"></span>
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
