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
    <meta property="og:image" content="assets/uploads/teams/{{ $TeamHeader->photo }}">
    <meta name="twitter:image" content="assets/uploads/teams/{{ $TeamHeader->photo }}">
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
                    @elseif ($TeamHeader->title)
                        {{ $TeamHeader->title }}
                    @endif
                </h1>
                <ul class=" tajawal_black page-breadcrumb">
                    <li><a href="{{ route('home') }}">{{ trans('web_trans.home') }}</a></li>
                    <li>
                        @if ($app->getLocale() == 'ar' && $TeamHeader->title_ar)
                            {{ $TeamHeader->title_ar }}
                        @elseif ($TeamHeader->title)
                            {{ $TeamHeader->title }}
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class=" tajawal_black team-details">
        <div class=" tajawal_black "></div>
        <div class=" tajawal_black container pb-100">
            <div class=" tajawal_black team-details__top pb-70">
                <div class=" tajawal_black row">
                    <div class=" tajawal_black col-xl-6 col-lg-6">
                        <div class=" tajawal_black team-details__top-left">
                            <div class=" tajawal_black team-details__top-img"> <img
                                    src="{{ asset('assets/uploads/teams/' . $Team->photo) }}" alt="">
                                <div class=" tajawal_black team-details__big-text"></div>
                            </div>
                        </div>
                    </div>
                    <div class=" tajawal_black col-xl-6 col-lg-6">
                        <div class=" tajawal_black team-details__top-right">
                            <div class=" tajawal_black team-details__top-content">
                                @if ($app->getLocale() == 'ar')
                                    <h3 class=" tajawal_black team-details__top-name">{{ $Team->name_ar }}</h3>
                                    <p class=" tajawal_black team-details__top-title">{{ $Team->designation_ar }}</p>
                                    <p class=" tajawal_black team-details__top-text-1">
                                        {{ $Team->tagline_ar }}
                                    </p>
                                @else
                                    <h3 class=" tajawal_black team-details__top-name">{{ $Team->name }}</h3>
                                    <p class=" tajawal_black team-details__top-title">{{ $Team->designation }}</p>
                                    <p class=" tajawal_black team-details__top-text-1">
                                        {{ $Team->tagline }}
                                    </p>
                                @endif
                                <div class=" tajawal_black team-details-contact mb-30">
                                    <h5 class=" tajawal_black mb-0">{{ trans('web_trans.email') }}</h5>
                                    <div class=" tajawal_black "><span>{{ $Team->email }}</span></div>
                                </div>
                                <div class=" tajawal_black team-details-contact mb-30">
                                    <h5 class=" tajawal_black mb-0">{{ trans('web_trans.phone') }}</h5>
                                    <div class=" tajawal_black "><span>{{ $Team->phone }}</span></div>
                                </div>
                                <div class=" tajawal_black team-details-contact">
                                    <h5 class=" tajawal_black mb-0">Website</h5>
                                    <div class=" tajawal_black "><span>{{ $Team->website }}</span></div>
                                </div>

                                <div class=" tajawal_black team-details__social">

                                    <a href="{{ $Team->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <span style="width: 5px"></span>
                                    <a href="{{ $Team->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <span style="width: 5px"></span>
                                    <a href="{{ $Team->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    <span style="width: 5px"></span>
                                    <a href="{{ $Team->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" tajawal_black team-details__bottom pt-100">
                <div class=" tajawal_black row">
                    <div class=" tajawal_black col-xl-6 col-lg-6">
                        <div class=" tajawal_black team-details__bottom-left">
                            <h4 class=" tajawal_black team-details__bottom-left-title">{{ trans('web_trans.personal_experience') }}</h4>
                            <p class=" tajawal_black team-details__bottom-left-text">
                                @if ($app->getLocale() == 'ar')
                                    {{ $Team->experience_text_ar }}
                                @else
                                    {{ $Team->experience_text }}
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class=" tajawal_black col-xl-6 col-lg-6">
                        <div class=" tajawal_black team-details__bottom-right">
                            <div class=" tajawal_black team-details__progress">
                                @foreach ($TeamExperiences as $TeamExperience)
                                    <div class=" tajawal_black team-details__progress-single">
                                        <h4 class=" tajawal_black team-details__progress-title" style="direction: ltr">
                                            @if ($app->getLocale() == 'ar')
                                                {{ $TeamExperience->name_ar }}
                                            @else
                                                {{ $TeamExperience->name }}
                                            @endif
                                        </h4>
                                        <div class=" tajawal_black bar">
                                            <div class=" tajawal_black bar-inner count-bar counted"
                                                data-percent="{{ $TeamExperience->percentage }}%"
                                                style="width: {{ $TeamExperience->percentage }}%;">

                                                <div class=" tajawal_black count-text">{{ $TeamExperience->percentage }}%</div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
@endsection
