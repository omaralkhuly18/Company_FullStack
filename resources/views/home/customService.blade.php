@extends('home.layouts.master')

@section('meta_description')
@if ($app->getLocale() == 'ar')
<meta name="description" content="{{ $Service->seo_descr_ar }}">
@else
<meta name="description" content="{{ $Service->seo_descr }}">
@endif
@endsection

@section('key')
@if ($app->getLocale() == 'ar')
@php

$cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $Service->seo_descr_ar);
$words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
@endphp
@else
@php

$cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $Service->seo_descr);
$words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
@endphp
@endif
<meta name="key" content="@foreach ($words as $word){{ trim($word) }}, @endforeach">
@endsection

@section('og_twitter')
@if ($app->getLocale() == 'ar')
<meta property="og:title" content="{{ $Service->seo_title_ar }}">
<meta property="og:description" content="{{ $Service->seo_descr_ar }}">
<meta property="og:site_name" content="{{ $Service->seo_title_ar }}">
<meta name="twitter:title" content="{{ $Service->seo_title_ar }}">
<meta name="twitter:description" content="{{ $Service->seo_descr_ar }}">
@else
<meta property="og:title" content="{{ $Service->seo_title }}">
<meta property="og:description" content="{{ $Service->seo_descr }}">
<meta property="og:site_name" content="{{ $Service->seo_title }}">
<meta name="twitter:title" content="{{ $Service->seo_title }}">
<meta name="twitter:description" content="{{ $Service->seo_descr }}">
@endif
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:image" content="assets/uploads/settings/banner/{{ $Service->banner }}">
<meta name="twitter:image" content="assets/uploads/settings/banner/{{ $Service->banner }}">
@endsection

@section('title')
@if ($app->getLocale() == 'ar')
{{ $Service->seo_title_ar }}
@else
{{ $Service->seo_title }}
@endif
@endsection

@section('css')
@endsection

@section('content')
<style>

</style>
<section class=" tajawal_black page-title bg_image_customService" style="background-image: url({{ asset('assets/uploads/settings/banner/' . $setting->banner) }});">
    <div class=" tajawal_black auto-container">
        <div class=" tajawal_black title-outer">
            <h1 class=" tajawal_black title">
                @if ($app->getLocale() == 'ar')
                {{ $Service->name_ar }}
                @else
                {{ $Service->name }}
                @endif
            </h1>
            <ul class=" tajawal_black page-breadcrumb">
                <li><a href="{{ route('home') }}">{{ trans('web_trans.home') }}</a></li>
                <li>
                    @if ($app->getLocale() == 'ar')
                    {{ $Service->name_ar }}
                    @else
                    {{ $Service->name }}
                    @endif
                </li>
            </ul>
        </div>
    </div>
</section>

<section class=" tajawal_black services-details" style="direction: ltr">
    <div class=" tajawal_black container">
        <div class=" tajawal_black row">
            <div class=" tajawal_black col-xl-4 col-lg-4">
                <div class=" tajawal_black service-sidebar">
                    <div class=" tajawal_black sidebar-widget service-sidebar-single">
                        <div class=" tajawal_black sidebar-service-list">
                            <ul>
                                @foreach ($AllServices as $AllService)
                                @if ($app->getLocale() == 'ar')
                                <li><a href="{{ route('siteCustomService', ['slug' => $AllService->slug_ar]) }}" class=" tajawal_black current"><i class=" fas  fa-angle-right "></i><span>{{ $AllService->name_ar }}</span></a>
                                </li>
                                @else
                                <li><a href="{{ route('siteCustomService', ['slug' => $AllService->slug]) }}" class=" tajawal_black current"><i class=" fas  fa-angle-right "></i><span>{{ $AllService->name }}</span></a>
                                </li>
                                @endif
                                @endforeach
                            </ul>
                        </div>

                        <div class=" tajawal_black service-details-help">
                            <div class=" tajawal_black help-shape-1"></div>
                            <div class=" tajawal_black help-shape-2"></div>
                            <h2 class=" tajawal_black help-title">{{ trans('web_trans.Service_site_contact') }}</h2>
                            <div class=" tajawal_black help-icon">
                                <span class=" tajawal_black  lnr-icon-phone-handset"></span>
                            </div>
                            <div class=" tajawal_black help-contact">
                                <p>{{ trans('web_trans.talk_to_expert') }}</p>
                                <a href="tel:{{ $Service->phone }}">{{ $Service->phone }}</a>
                            </div>
                        </div>

                        <div class=" tajawal_black sidebar-widget service-sidebar-single mt-4">
                            <div class=" tajawal_black service-sidebar-single-btn wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1200m" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
                                <a href="{{ asset('assets/uploads/services/pdfs/' . $Service->pdf) }}" class=" tajawal_black theme-btn btn-style-one d-grid"><span class=" tajawal_black btn-title"><span class=" tajawal_black fas fa-file-pdf"></span>
                                        {{ trans('web_trans.dowload_pdf_file') }}</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" tajawal_black col-xl-8 col-lg-8" style="direction: rtl">
                <div class=" tajawal_black services-details__content">
                    <img src="{{ asset('assets/uploads/services/banners/' . $Service->banner) }}" alt="">
                    <h3 class=" tajawal_black mt-4">{{ trans('web_trans.service_overview') }}</h3>
                    <div class=" tajawal_black content mt-40">
                        <div class=" tajawal_black text">
                            <p>
                            </p>
                            @if ($app->getLocale() == 'ar')
                            {!! html_entity_decode($Service->descr_ar) !!}
                            @else
                            {!! html_entity_decode($Service->descr) !!}
                            @endif
                            <p></p>
                        </div>
                    </div>
                    <div class=" tajawal_black  mt-25">
                        <h3>{{ trans('web_trans.frequently_asked_questions') }}</h3>
                        <ul class=" tajawal_black accordion-box wow fadeInRight" style="visibility: hidden; animation-name: none;">
                            @foreach ($FAQs as $FAQ)
                            <li class=" tajawal_black accordion block">
                                <div class=" tajawal_black acc-btn">
                                    @if ($app->getLocale() == 'ar')
                                    {{ $FAQ->question_ar }}
                                    @else
                                    {{ $FAQ->question }}
                                    @endif
                                    <div class=" tajawal_black icon fa fa-plus"></div>
                                </div>
                                <div class=" tajawal_black acc-content">
                                    <div class=" tajawal_black content">
                                        <div class=" tajawal_black text">
                                            <p></p>
                                            <p>
                                                @if ($app->getLocale() == 'ar')
                                                {!! html_entity_decode($FAQ->answer_ar) !!}
                                                @else
                                                {!! html_entity_decode($FAQ->answer) !!}
                                                @endif
                                            </p>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
@endsection