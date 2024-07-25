@extends('home.layouts.master')

@section('meta_description')
    @if ($app->getLocale() == 'ar')
        <meta name="description" content="{{ $About->seo_descr_ar }}">
    @else
        <meta name="description" content="{{ $About->seo_descr }}">
    @endif
@endsection

@section('key')
    @if ($app->getLocale() == 'ar')
        @php

            $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $About->seo_descr_ar);
            $words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
        @endphp
    @else
        @php

            $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $About->seo_descr);
            $words = array_unique(preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY));
        @endphp
    @endif
    <meta name="key" content="@foreach ($words as $word){{ trim($word) }}, @endforeach">
@endsection

@section('og_twitter')
    @if ($app->getLocale() == 'ar')
        <meta property="og:title" content="{{ $About->seo_title_ar }}">
        <meta property="og:description" content="{{ $About->seo_descr_ar }}">
        <meta property="og:site_name" content="{{ $About->seo_title_ar }}">
        <meta name="twitter:title" content="{{ $About->seo_title_ar }}">
        <meta name="twitter:description" content="{{ $About->seo_descr_ar }}">
    @else
        <meta property="og:title" content="{{ $About->seo_title }}">
        <meta property="og:description" content="{{ $About->seo_descr }}">
        <meta property="og:site_name" content="{{ $About->seo_title }}">
        <meta name="twitter:title" content="{{ $About->seo_title }}">
        <meta name="twitter:description" content="{{ $About->seo_descr }}">
    @endif
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="assets/uploads/settings/logo/{{ $setting->favicon }}">
    <meta name="twitter:image" content="assets/uploads/settings/logo/{{ $setting->favicon }}">
@endsection

@section('title')
    @if ($app->getLocale() == 'ar')
        {{ $About->seo_title_ar }}
    @else
        {{ $About->seo_title }}
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
                        {{ $About->title_ar }}
                    @else
                        {{ $About->title }}
                    @endif
                </h1>
                <ul class=" tajawal_black page-breadcrumb">
                    <li><a href="{{ route('home') }}">{{ trans('web_trans.home') }}</a></li>
                    <li>
                        @if ($app->getLocale() == 'ar')
                            {{ $About->title_ar }}
                        @else
                            {{ $About->title }}
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </section>

    @if ($About->welcome_one_status == 1)
        <section class=" tajawal_black about-section" style="direction: ltr">
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black row">
                    <div class=" tajawal_black content-column col-lg-6 col-md-12 col-sm-12 order-2 wow fadeInRight animated"
                        style="visibility: visible; animation-name: fadeInRight;">
                        <div class=" tajawal_black inner-column">
                            <div class=" tajawal_black sec-title">
                                @if ($app->getLocale() == 'ar')
                                    <span class=" tajawal_black sub-title">{{ $WelcomeOne->sub_heading_ar }}</span>
                                    <h2>{{ $WelcomeOne->heading_ar }}</h2>
                                    <div class=" tajawal_black text">
                                        {{ $WelcomeOne->text_ar }}
                                    </div>
                                @else
                                    <span class=" tajawal_black sub-title">{{ $WelcomeOne->sub_heading }}</span>
                                    <h2>{{ $WelcomeOne->heading }}</h2>
                                    <div class=" tajawal_black text">
                                        {{ $WelcomeOne->text }}
                                    </div>
                                @endif
                            </div>
                            @foreach ($WelcomeOneElements as $WelcomeOneElement)
                                <div class=" tajawal_black info-box">
                                    <div class=" tajawal_black inner">
                                        <i class="icon {{ $WelcomeOneElement->icon }}"></i>
                                        @if ($app->getLocale() == 'ar')
                                            <h5 class=" tajawal_black title">{{ $WelcomeOneElement->heading_ar }}</h5>
                                            <div class=" tajawal_black text">
                                                {{ $WelcomeOneElement->text_ar }}
                                            </div>
                                        @else
                                            <h5 class=" tajawal_black title">{{ $WelcomeOneElement->heading }}</h5>
                                            <div class=" tajawal_black text">
                                                {{ $WelcomeOneElement->text }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                            <div class=" tajawal_black other-info">
                                <div class=" tajawal_black author-info">
                                    <div class=" tajawal_black inner">
                                        <figure class=" tajawal_black thumb"><img
                                                src="{{ asset('assets/uploads/All_Sections/welcome_one/' . $WelcomeOne->person_photo) }}"
                                                alt=""></figure>
                                        @if ($app->getLocale() == 'ar')
                                            <h5 class=" tajawal_black name">{{ $WelcomeOne->person_name_ar }}</h5>
                                            <span class=" tajawal_black designation">{{ $WelcomeOne->person_designation_ar }}</span>
                                        @else
                                            <h5 class=" tajawal_black name">{{ $WelcomeOne->person_name }}</h5>
                                            <span class=" tajawal_black designation">{{ $WelcomeOne->person_designation }}</span>
                                        @endif
                                    </div>
                                </div>
                                <a href="{{ $WelcomeOne->btn_url }}" class=" tajawal_black theme-btn btn-style-one"><span
                                        class=" tajawal_black btn-title">
                                        @if ($app->getLocale() == 'ar')
                                            {{ $WelcomeOne->btn_text_ar }}
                                            @else{{ $WelcomeOne->btn_text }}
                                        @endif
                                    </span></a>
                            </div>
                        </div>
                    </div>

                    <div class=" tajawal_black image-column col-lg-6 col-md-12 col-sm-12 wow fadeInLeft animated"
                        style="visibility: visible; animation-name: fadeInLeft;">
                        <div class=" tajawal_black image-box">
                            <span class=" tajawal_black icon-dots bounce-y"></span>
                            <span class=" tajawal_black icon-circle zoom-one"></span>
                            <figure class=" tajawal_black image-1 wow fadeIn animated"
                                style="visibility: visible; animation-name: fadeIn;">
                                <img src="{{ asset('assets/uploads/All_Sections/welcome_one/' . $WelcomeOne->photo1) }}"
                                    alt="">
                            </figure>
                            <figure class=" tajawal_black image-2 wow fadeIn animated" data-wow-delay="600ms"
                                style="visibility: visible; animation-delay: 600ms; animation-name: fadeIn;"><img
                                    src="{{ asset('assets/uploads/All_Sections/welcome_one/' . $WelcomeOne->photo2) }}"
                                    alt=""></figure>
                            <div class=" tajawal_black exp-box">
                                <div class=" tajawal_black inner">
                                    <i class="icon flaticon-promotion"></i>
                                    <span class=" tajawal_black count">{{ $WelcomeOne->experience_year }}+</span>
                                    <div class=" tajawal_black text">{{ trans('web_trans.work_experience') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if ($About->service_status == 1)
        <section class=" tajawal_black services-section">
            <div class=" tajawal_black bg-shape"></div>
            <div class=" tajawal_black bg bg-pattern-1"></div>
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black sec-title light">
                    <div class=" tajawal_black row">
                        @if ($app->getLocale() == 'ar')
                            <div class=" tajawal_black col-lg-7">
                                <span class=" tajawal_black sub-title">{{ $About->service_heading_ar }}</span>
                                <h2>{{ $About->service_subheading_ar }}
                                </h2>
                            </div>
                            <div class=" tajawal_black col-lg-5">
                                <div class=" tajawal_black text">{{ $About->text_ar }}</div>
                            </div>
                        @else
                            <div class=" tajawal_black col-lg-7">
                                <span class=" tajawal_black sub-title">{{ $About->service_heading }}</span>
                                <h2>{{ $About->service_subheading }}
                                </h2>
                            </div>
                            <div class=" tajawal_black col-lg-5">
                                <div class=" tajawal_black text">{{ $About->text }}</div>
                            </div>
                        @endif
                    </div>
                </div>
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
                                        <h5 class=" tajawal_black title"><a href="#">
                                                {{ $Service->name_ar }}</a></h5>
                                    @else
                                        <h5 class=" tajawal_black title"><a href="#">
                                                {{ $Service->name }}</a></h5>
                                    @endif
                                </div>
                                <div class=" tajawal_black hover-content">
                                    <i class="icon {{ $Service->icon }}"></i>
                                    @if ($app->getLocale() == 'ar')
                                        <h5 class=" tajawal_black title"><a href="#">
                                                {{ $Service->name_ar }}</a></h5>
                                        <div class=" tajawal_black text">
                                            <p>{{ $Service->short_descr_ar }}</p>
                                        </div>
                                    @else
                                        <h5 class=" tajawal_black title"><a href="#">
                                                {{ $Service->name }}</a></h5>
                                        <div class=" tajawal_black text">
                                            <p>{{ $Service->short_descr }}</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if ($About->team_member_status == 1)
        <section class=" tajawal_black team-section pt-10">
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black sec-title text-center">
                    @if ($app->getLocale() == 'ar')
                        <span class=" tajawal_black sub-title">{{ $About->team_member_subheading_ar }}</span>
                        <h2>{{ $About->team_member_heading_ar }}</h2>
                    @else
                        <span class=" tajawal_black sub-title">{{ $About->team_member_subheading }}</span>
                        <h2>{{ $About->team_member_heading }}</h2>
                    @endif
                </div>
                <div class=" tajawal_black row">
                    @foreach ($Teams as $Team)
                        <div class=" tajawal_black team-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class=" tajawal_black inner-box">
                                <div class=" tajawal_black info-box">
                                    @if ($app->getLocale() == 'ar')
                                        <h4 class=" tajawal_black name"><a
                                                href="{{ route('siteCustomTeamMember', ['slug' => $Team->slug_ar]) }}"></a>{{ $Team->name_ar }}
                                        </h4>
                                        <span class=" tajawal_black designation">{{ $Team->designation_ar }}</span>
                                    @else
                                        <h4 class=" tajawal_black name"><a
                                                href="{{ route('siteCustomTeamMember', ['slug' => $Team->slug]) }}"></a>{{ $Team->name }}
                                        </h4>
                                        <span class=" tajawal_black designation">{{ $Team->designation }}</span>
                                    @endif

                                </div>
                                <div class=" tajawal_black image-box">
                                    <figure class=" tajawal_black image">
                                        @if ($app->getLocale() == 'ar')
                                            <a href="{{ route('siteCustomTeamMember', ['slug' => $Team->slug_ar]) }}">
                                            @else
                                                <a href="{{ route('siteCustomTeamMember', ['slug' => $Team->slug]) }}">
                                        @endif
                                        <img src="{{ asset('assets/uploads/teams/' . $Team->photo) }}"
                                            alt=""></a>
                                    </figure>
                                    <div class=" tajawal_black social-links">
                                        <a href="{{ $Team->facebook }}" target="_blank"><i
                                                class=" tajawal_black fab fa-facebook-f"></i></a>
                                        <a href="{{ $Team->twitter }}" target="_blank"><i
                                                class=" tajawal_black fab fa-twitter"></i></a>
                                        <a href="{{ $Team->linkedin }}" target="_blank"><i
                                                class=" tajawal_black fab fa-linkedin-in"></i></a>
                                        <a href="{{ $Team->instagram }}" target="_blank"><i
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
    @endif
@endsection
@section('js')
@endsection
