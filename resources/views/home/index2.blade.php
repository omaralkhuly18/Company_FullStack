@extends('home.layouts.master')

@section('meta_description')
    <meta name="description" content="{{ $setting->home_seo_descr }}">
@endsection
@section('meta_description')
    @if ($app->getLocale() == 'ar')
        <meta name="description" content="{{ $setting->home_seo_descr_ar }}">
    @else
        <meta name="description" content="{{ $setting->home_seo_descr }}">
    @endif
@endsection

@section('key')
    @if ($app->getLocale() == 'ar')
        @php
            $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $setting->home_seo_descr_ar);
            $words = preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY);
        @endphp
    @else
        @php
            $cleaned_description = preg_replace('/[^\p{L}\p{N}\s]+/u', ' ', $setting->home_seo_descr);
            $words = preg_split('/[\s,;&]+/', $cleaned_description, -1, PREG_SPLIT_NO_EMPTY);
        @endphp
    @endif
    <meta name="key" content="@foreach ($words as $word){{ trim($word) }}, @endforeach">
@endsection


@section('og_twitter')
    @if ($app->getLocale() == 'ar')
        <meta property="og:title" content="{{ $setting->home_seo_title_ar }}">
        <meta property="og:description" content="{{ $setting->home_seo_descr_ar }}">
        <meta property="og:site_name" content="{{ $setting->home_seo_title_ar }}">
        <meta name="twitter:title" content="{{ $setting->home_seo_title_ar }}">
        <meta name="twitter:description" content="{{ $setting->home_seo_descr_ar }}">
    @else
        <meta property="og:title" content="{{ $setting->home_seo_title }}">
        <meta property="og:description" content="{{ $setting->home_seo_descr }}">
        <meta property="og:site_name" content="{{ $setting->home_seo_title }}">
        <meta name="twitter:title" content="{{ $setting->home_seo_title }}">
        <meta name="twitter:description" content="{{ $setting->home_seo_descr }}">
    @endif
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="assets/uploads/settings/logo/{{ $setting->favicon }}">
    <meta name="twitter:image" content="assets/uploads/settings/logo/{{ $setting->favicon }}">
@endsection

@section('title')
    @if ($app->getLocale() == 'ar')
        {{ $setting->home_seo_title_ar }}
    @else
        {{ $setting->home_seo_title }}
    @endif
@endsection

@section('css')
@endsection
@section('content')

    {{-- Slider --}}
    <section class=" tajawal_black banner-section" style="direction: ltr">
        <div class=" tajawal_black banner-carousel owl-carousel owl-theme default-navs owl-loaded owl-drag">
            <div class=" tajawal_black owl-stage-outer owl-height" style="height: 557.562px;">
                <div class=" tajawal_black owl-stage"
                    style="transform: translate3d(-1404px, 0px, 0px); transition: all 0s ease 0s; width: 2808px;">
                    @foreach ($Sliders as $Slider)
                        <div class=" tajawal_black owl-item" style="width: 468px;">
                            <div class=" tajawal_black slide-item">
                                <div class=" tajawal_black bg-image"
                                    style="background-image: url({{ asset('assets/uploads/sliders/' . $Slider->photo) }});">
                                </div>
                                <div class=" tajawal_black auto-container">
                                    <div class=" tajawal_black content-box">
                                        <h1 class=" tajawal_black title animate-1">
                                            @if ($app->getLocale() == 'ar')
                                                {{ $Slider->text_ar }}
                                            @else
                                                {{ $Slider->text }}
                                            @endif
                                        </h1>
                                        <div class=" tajawal_black btn-box animate-2">
                                            <a href="{{ $Slider->btn_url }}"
                                                class=" tajawal_black theme-btn btn-style-one hover-light"><span class=" tajawal_black btn-title">
                                                    @if ($app->getLocale() == 'ar')
                                                        {{ $Slider->btn_text_ar }}
                                                    @else
                                                        {{ $Slider->btn_text }}
                                                    @endif
                                                </span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class=" tajawal_black owl-nav">
                <div class=" tajawal_black owl-prev"><span class=" tajawal_black fa fa-long-arrow-alt-left"></span></div>
                <div class=" tajawal_black owl-next"><span class=" tajawal_black fa fa-long-arrow-alt-right"></span></div>
            </div>
            <div class=" tajawal_black owl-dots">
                <div class=" tajawal_black owl-dot"><span></span></div>
                <div class=" tajawal_black owl-dot active"><span></span></div>
            </div>
        </div>
    </section>

    {{-- Service --}}
    @if ($HomeTwo->service_status == 1)
        <section class=" tajawal_black services-section-two">
            <div class=" tajawal_black bg bg-pattern-12"></div>
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black sec-title text-center light">
                    @if ($app->getLocale() == 'ar')
                        <span class=" tajawal_black sub-title">{{ $HomeTwo->service_heading_ar }}</span>
                        <h2>{{ $HomeTwo->service_subheading_ar }}
                        </h2>
                    @else
                        <span class=" tajawal_black sub-title">{{ $HomeTwo->service_heading }}</span>
                        <h2>{{ $HomeTwo->service_subheading }}
                        </h2>
                    @endif
                </div>
                <div class=" tajawal_black row">
                    @foreach ($Service_Contents as $Service_Content)
                        <div class=" tajawal_black service-block-two col-lg-4 col-md-6 coll-md-12 wow fadeInUp"
                            style="visibility: visible; animation-name: none;">
                            <div class=" tajawal_black inner-box">
                                <div class=" tajawal_black image-box">
                                    <figure class=" tajawal_black image"><img
                                            src="{{ asset('assets/uploads/services/photos/' . $Service_Content->photo) }}"
                                            alt=""></figure>
                                </div>
                                @if ($app->getLocale() == 'ar')
                                    <div class=" tajawal_black title-box">
                                        <h5 class=" tajawal_black title"><a
                                                href="{{ route('siteCustomService', ['slug' => $Service_Content->slug_ar]) }}">
                                                {{ $Service_Content->name_ar }}</a></h5>
                                    </div>
                                    <div class=" tajawal_black content-box">
                                        <i class="icon {{ $Service_Content->icon }}"></i>
                                        <div class=" tajawal_black text">
                                            <p>{{ $Service_Content->short_descr_ar }}</p>
                                        </div>
                                    </div>
                                @else
                                    <div class=" tajawal_black title-box">
                                        <h5 class=" tajawal_black title"><a
                                                href="{{ route('siteCustomService', ['slug' => $Service_Content->slug]) }}">
                                                {{ $Service_Content->name }}</a></h5>
                                    </div>
                                    <div class=" tajawal_black content-box">
                                        <i class="icon {{ $Service_Content->icon }}"></i>
                                        <div class=" tajawal_black text">
                                            <p>{{ $Service_Content->short_descr }}</p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    {{-- Marquee --}}
    @if ($HomeTwo->marquee_status == 1)
        <div class=" tajawal_black marquee-section" style="direction: ltr">
            <div class=" tajawal_black marquee">
                <div aria-hidden="true" class=" tajawal_black marquee-group">
                    @foreach ($Marquees as $Marquee)
                        @if ($app->getLocale() == 'ar')
                            <div class=" tajawal_black text">{{ $Marquee->item_ar }}</div>
                        @else
                            <div class=" tajawal_black text">{{ $Marquee->item }}</div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    {{-- Welcome Two --}}
    @if ($HomeTwo->welcome_two_status == 1)
        <section class=" tajawal_black about-section-two" style="direction: ltr">
            <div class=" tajawal_black anim-icons">
                <span class=" tajawal_black icon icon-line4"></span>
                <span class=" tajawal_black icon icon-line5"></span>
                <span class=" tajawal_black icon icon-arrow1 bounce-x"></span>
                <span class=" tajawal_black icon icon-speaker zoom-one"></span>
            </div>
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black outer-box">
                    <div class=" tajawal_black row">
                        <div class=" tajawal_black content-column col-xl-6 col-lg-7 col-md-12 col-sm-12 order-2 wow fadeInRight"
                            data-wow-delay="600ms"
                            style="visibility: hidden; animation-delay: 600ms; animation-name: none;">
                            <div class=" tajawal_black inner-column">
                                <div class=" tajawal_black sec-title">
                                    @if ($app->getLocale() == 'ar')
                                        <span class=" tajawal_black sub-title">{{ $WelcomeTwo->subheading_ar }}</span>
                                        <h2>{{ $WelcomeTwo->heading_ar }}</h2>
                                        <div class=" tajawal_black text">
                                            {{ $WelcomeTwo->text_ar }}
                                        </div>
                                    @else
                                        <span class=" tajawal_black sub-title">{{ $WelcomeTwo->subheading }}</span>
                                        <h2>{{ $WelcomeTwo->heading }}</h2>
                                        <div class=" tajawal_black text">
                                            {{ $WelcomeTwo->text }}
                                        </div>
                                    @endif
                                </div>
                                <div class=" tajawal_black row">
                                    @foreach ($WelcomeTwoElements as $WelcomeTwoElement)
                                        <div class=" tajawal_black info-box col-lg-6 col-md-6">
                                            <div class=" tajawal_black inner">
                                                @if ($app->getLocale() == 'ar')
                                                    <h5 class=" tajawal_black title"><i
                                                            class=" tajawal_black icon  fa fa-circle-arrow-right "></i>{{ $WelcomeTwoElement->heading_ar }}
                                                    </h5>
                                                    <div class=" tajawal_black text">
                                                        {{ $WelcomeTwoElement->text_ar }}
                                                    </div>
                                                @else
                                                    <h5 class=" tajawal_black title"><i
                                                            class=" tajawal_black icon  fa fa-circle-arrow-right "></i>{{ $WelcomeTwoElement->heading }}
                                                    </h5>
                                                    <div class=" tajawal_black text">
                                                        {{ $WelcomeTwoElement->text }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class=" tajawal_black skills">
                                    @foreach ($WelcomeTwoSkills as $WelcomeTwoSkill)
                                        <div class=" tajawal_black skill-item">
                                            <div class=" tajawal_black skill-header">
                                                @if ($app->getLocale() == 'ar')
                                                    <h5 class=" tajawal_black skill-title">{{ $WelcomeTwoSkill->name_ar }}</h5>
                                                @else
                                                    <h5 class=" tajawal_black skill-title">{{ $WelcomeTwoSkill->name }}</h5>
                                                @endif
                                            </div>
                                            <div class=" tajawal_black skill-bar">
                                                <div class=" tajawal_black bar-inner">
                                                    <div class=" tajawal_black bar progress-line"
                                                        data-width="{{ $WelcomeTwoSkill->percentage }}">
                                                        <div class=" tajawal_black skill-percentage">
                                                            <div class=" tajawal_black count-box"><span class=" tajawal_black count-text"
                                                                    data-speed="3000"
                                                                    data-stop="{{ $WelcomeTwoSkill->percentage }}">0</span>%
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class=" tajawal_black bottom-box">
                                    <a href="{{ $WelcomeTwo->btn_url }}" class=" tajawal_black theme-btn btn-style-one hvr-dark">
                                        @if ($app->getLocale() == 'ar')
                                            <span class=" tajawal_black btn-title">{{ $WelcomeTwo->btn_text_ar }}</span>
                                        @else
                                            <span class=" tajawal_black btn-title">{{ $WelcomeTwo->btn_text }}</span>
                                        @endif
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class=" tajawal_black image-column col-xl-6 col-lg-5 col-md-12 col-sm-12">
                            <div class=" tajawal_black inner-column wow fadeInLeft" style="visibility: hidden; animation-name: none;">
                                <div class=" tajawal_black image-box">
                                    <span class=" tajawal_black icon-dots2"></span>
                                    <figure class=" tajawal_black image-1 overlay-anim wow fadeInUp"
                                        style="visibility: visible; animation-name: none;"><img
                                            src="{{ asset('assets/uploads/All_Sections/welcome_two/' . $WelcomeTwo->photo1) }}"
                                            alt=""></figure>
                                    <figure class=" tajawal_black image-2 overlay-anim wow fadeInRight animated"
                                        style="visibility: visible; animation-name: fadeInRight;"><img
                                            src="{{ asset('assets/uploads/All_Sections/welcome_two/' . $WelcomeTwo->photo2) }}"
                                            alt=""></figure>
                                    <div class=" tajawal_black exp-box">
                                        <div class=" tajawal_black inner">
                                            <i class="icon flaticon-promotion"></i>
                                            <span class=" tajawal_black count">{{ $WelcomeTwo->experience_year }}+</span>
                                            <h6 class=" tajawal_black title">{{ trans('web_trans.work_experience') }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{--  Portfolio --}}
    @if ($HomeTwo->portfolio_status == 1)
        <section class=" tajawal_black projects-section pt-0">
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black sec-title text-center">
                    @if ($app->getLocale() == 'ar')
                        <span class=" tajawal_black sub-title">{{ $HomeTwo->portfolio_heading_ar }}</span>
                        <h2>{{ $HomeTwo->portfolio_subheading_ar }}</h2>
                    @else
                        <span class=" tajawal_black sub-title">{{ $HomeTwo->portfolio_heading }}</span>
                        <h2>{{ $HomeTwo->portfolio_subheading }}</h2>
                    @endif
                </div>
                <div class=" tajawal_black outer-box">
                    <div class=" tajawal_black row">
                        @foreach ($Portfolios as $Portfolio)
                            <div class=" tajawal_black  project-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp"
                                style="visibility: hidden; animation-name: none;">
                                <div class=" tajawal_black inner-box">
                                    <div class=" tajawal_black image-box">
                                        <figure class=" tajawal_black image"><a
                                                href="{{ asset('assets/uploads/portfolios/photos/' . $Portfolio->photo) }}"><img
                                                    src="{{ asset('assets/uploads/portfolios/photos/' . $Portfolio->photo) }}"
                                                    alt=""></a></figure>
                                    </div>
                                    <div class=" tajawal_black content-box">
                                        @if ($app->getLocale() == 'ar')
                                            <a href="{{ route('siteCustomPortfolio', ['slug' => $Portfolio->slug_ar]) }}"
                                                class=" tajawal_black icon"><i class="fa  fa-long-arrow-alt-right "></i></a>
                                            <h4 class=" tajawal_black title">
                                                <a href="{{ route('siteCustomPortfolio', ['slug' => $Portfolio->slug_ar]) }}"
                                                    title="">
                                                    @if ($app->getLocale() == 'ar')
                                                        {{ $Portfolio->name_ar }}
                                                    @else
                                                        {{ $Portfolio->name }}
                                                    @endif
                                                </a>
                                            </h4>
                                        @else
                                            <a href="{{ route('siteCustomPortfolio', ['slug' => $Portfolio->slug]) }}"
                                                class=" tajawal_black icon"><i class="fa  fa-long-arrow-alt-right "></i></a>
                                            <h4 class=" tajawal_black title">
                                                <a href="{{ route('siteCustomPortfolio', ['slug' => $Portfolio->slug]) }}"
                                                    title="">
                                                    @if ($app->getLocale() == 'ar')
                                                        {{ $Portfolio->name_ar }}
                                                    @else
                                                        {{ $Portfolio->name }}
                                                    @endif
                                                </a>
                                            </h4>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- Choose two --}}
    @if ($HomeTwo->choose_two_status == 1)
        <section class=" tajawal_black why-choose-us-two" style="direction: ltr">
            <div class=" tajawal_black anim-icons">
                <span class=" tajawal_black icon icon-arrow1"></span>
            </div>
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black row">
                    <div class=" tajawal_black content-column col-lg-6 col-md-12">
                        <div class=" tajawal_black inner-column wow fadeInRight" style="visibility: hidden; animation-name: none;">
                            <div class=" tajawal_black sec-title">
                                @if ($app->getLocale() == 'ar')
                                    <span class=" tajawal_black sub-title">{{ $ChooseTwo->subheading_ar }}</span>
                                    <h2>{{ $ChooseTwo->heading_ar }}</h2>
                                    <div class=" tajawal_black text">
                                        {{ $ChooseTwo->text_ar }}
                                    </div>
                                @else
                                    <span class=" tajawal_black sub-title">{{ $ChooseTwo->subheading }}</span>
                                    <h2>{{ $ChooseTwo->heading }}</h2>
                                    <div class=" tajawal_black text">
                                        {{ $ChooseTwo->text }}
                                    </div>
                                @endif
                            </div>
                            <div class=" tajawal_black row">
                                @foreach ($ChooseTwoElements as $ChooseTwoElement)
                                    <div class=" tajawal_black info-box col-lg-6 col-md-6">
                                        <div class=" tajawal_black inner">
                                            <div class=" tajawal_black title-box">
                                                <i class="icon {{ $ChooseTwoElement->icon }}"></i>
                                                @if ($app->getLocale() == 'ar')
                                                    <h6 class=" tajawal_black title">{{ $ChooseTwoElement->heading_ar }}</h6>
                                                @else
                                                    <h6 class=" tajawal_black title">{{ $ChooseTwoElement->heading }}</h6>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class=" tajawal_black image-column col-lg-6 col-md-12">
                        <div class=" tajawal_black inner-column">
                            <div class=" tajawal_black image-box">
                                <figure class=" tajawal_black image anim-overlay"><img
                                        src="{{ asset('assets/uploads/All_Sections/choose_two/' . $ChooseTwo->photo) }}"
                                        alt=""></figure>
                                <div class=" tajawal_black content-box">
                                    @if ($app->getLocale() == 'ar')
                                        <div class=" tajawal_black text">
                                            {{ $ChooseTwo->photo_over_text_ar }}
                                        </div>
                                        <div class=" tajawal_black caption">{{ $ChooseTwo->photo_over_heading_ar }}</div>
                                    @else
                                        <div class=" tajawal_black text">
                                            {{ $ChooseTwo->photo_over_text }}
                                        </div>
                                        <div class=" tajawal_black caption">{{ $ChooseTwo->photo_over_heading }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- Testimonial --}}
    @if ($HomeTwo->testimonial_status == 1)
        <section class=" tajawal_black testimonial-section-two">
            <div class=" tajawal_black bg bg-pattern-9"></div>
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black row">
                    <div class=" tajawal_black title-column col-xl-3 col-lg-4 col-md-12">
                        <div class=" tajawal_black inner-column">
                            <div class=" tajawal_black sec-title">
                                @if ($app->getLocale() == 'ar')
                                    <span class=" tajawal_black sub-title">{{ $HomeTwo->testimonial_subheading_ar }}</span>
                                    <h2>{{ $HomeTwo->testimonial_heading_ar }}</h2>
                                    <div class=" tajawal_black text">
                                        {{ $HomeTwo->testimonial_text_ar }}
                                    </div>
                                @else
                                    <span class=" tajawal_black sub-title">{{ $HomeTwo->testimonial_subheading }}</span>
                                    <h2>{{ $HomeTwo->testimonial_heading }}</h2>
                                    <div class=" tajawal_black text">
                                        {{ $HomeTwo->testimonial_text }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class=" tajawal_black testimonial-column col-xl-9 col-lg-8 col-md-12" style="direction: ltr">
                        <div class=" tajawal_black inner-column">
                            <div class=" tajawal_black testimonial-carousel-two owl-carousel default-navs owl-loaded owl-drag">
                                <div class=" tajawal_black owl-stage-outer">
                                    <div class=" tajawal_black owl-stage"
                                        style="transform: translate3d(-840px, 0px, 0px); transition: all 0.7s ease 0s; width: 3360px;">
                                        @foreach ($Testimonials as $Testimonial)
                                            <div class=" tajawal_black owl-item" style="width: 390px; margin-right: 30px;">
                                                <div class=" tajawal_black testimonial-block-two">
                                                    <div class=" tajawal_black inner-box">
                                                        <div class=" tajawal_black content-box">
                                                            <figure class=" tajawal_black thumb"><img
                                                                    src="{{ asset('assets/uploads/testimonials/' . $Testimonial->photo) }}"
                                                                    alt=""></figure>
                                                            <div class=" tajawal_black rating">
                                                                @for ($i = 0; $i < $Testimonial->rating; $i++)
                                                                    <i class="fas fa-star"></i>
                                                                @endfor
                                                            </div>
                                                            @if ($app->getLocale() == 'ar')
                                                                <div class=" tajawal_black text">
                                                                    <p>{{ $Testimonial->comment_ar }}</p>
                                                                </div>
                                                                <div class=" tajawal_black info-box">
                                                                    <h6 class=" tajawal_black name">{{ $Testimonial->name_ar }}</h6>
                                                                    <span
                                                                        class=" tajawal_black designation">{{ $Testimonial->designation_ar }}</span>
                                                                </div>
                                                            @else
                                                                <div class=" tajawal_black text">
                                                                    <p>{{ $Testimonial->comment }}</p>
                                                                </div>

                                                                <div class=" tajawal_black info-box">
                                                                    <h6 class=" tajawal_black name">{{ $Testimonial->name }}</h6>
                                                                    <span
                                                                        class=" tajawal_black designation">{{ $Testimonial->designation }}</span>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class=" tajawal_black owl-nav">
                                    <div class=" tajawal_black owl-prev"><span class=" tajawal_black far fa-arrow-left-long"></span></div>
                                    <div class=" tajawal_black owl-next"><span class=" tajawal_black far fa-arrow-right-long"></span></div>
                                </div>
                                <div class=" tajawal_black owl-dots">
                                    <div class=" tajawal_black owl-dot active"><span></span></div>
                                    <div class=" tajawal_black owl-dot"><span></span></div>
                                    <div class=" tajawal_black owl-dot"><span></span></div>
                                    <div class=" tajawal_black owl-dot"><span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- Team Member --}}
    @if ($HomeTwo->team_member_status == 1)
        <section class=" tajawal_black team-section pb-0">
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black sec-title text-center">
                    @if ($app->getLocale() == 'ar')
                        <span class=" tajawal_black sub-title">{{ $HomeTwo->team_member_subheading_ar }}</span>
                        <h2>{{ $HomeTwo->team_member_heading_ar }}</h2>
                        <div class=" tajawal_black text">
                            {{ $HomeTwo->team_member_text_ar }}
                        </div>
                    @else
                        <span class=" tajawal_black sub-title">{{ $HomeTwo->team_member_subheading }}</span>
                        <h2>{{ $HomeTwo->team_member_heading }}</h2>
                        <div class=" tajawal_black text">
                            {{ $HomeTwo->team_member_text }}
                        </div>
                    @endif
                </div>
                <div class=" tajawal_black row">
                    @foreach ($Teams as $Team)
                        <div class=" tajawal_black team-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp"
                            style="visibility: hidden; animation-name: none;">
                            <div class=" tajawal_black inner-box">
                                <div class=" tajawal_black info-box">
                                    @if ($app->getLocale() == 'ar')
                                        <h4 class=" tajawal_black name"><a
                                                href="{{ route('siteCustomTeamMember', ['slug' => $Team->slug_ar]) }}">{{ $Team->name_ar }}</a>
                                        </h4>
                                        <span class=" tajawal_black designation">{{ $Team->designation_ar }}</span>
                                    @else
                                        <h4 class=" tajawal_black name"><a
                                                href="{{ route('siteCustomTeamMember', ['slug' => $Team->slug]) }}">{{ $Team->name }}</a>
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

    {{-- Client --}}
    @if ($HomeTwo->client_status == 1)
        <section class=" tajawal_black clients-section" style="direction: ltr">
            <div class=" tajawal_black auto-container dir_spicial">
                <div class=" tajawal_black sponsors-outer">
                    <ul class=" tajawal_black clients-carousel owl-carousel owl-theme owl-loaded owl-drag">
                        <div class=" tajawal_black owl-stage-outer">
                            <div class=" tajawal_black owl-stage"
                                style="transform: translate3d(-2730px, 0px, 0px); transition: all 0.4s ease 0s; width: 4290px;">
                                @foreach ($Clients as $Client)
                                    <div class=" tajawal_black owl-item" style="width: 390px;">
                                        <li class=" tajawal_black client-block">
                                            <a href="#">
                                                <img src="{{ asset('assets/uploads/clients/' . $Client->photo) }}"
                                                    alt="">
                                            </a>
                                        </li>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class=" tajawal_black owl-nav disabled">
                            <div class=" tajawal_black owl-prev"><span class=" tajawal_black fa fa-angle-left"></span></div>
                            <div class=" tajawal_black owl-next"><span class=" tajawal_black fa fa-angle-right"></span></div>
                        </div>
                        <div class=" tajawal_black owl-dots">
                            <div class=" tajawal_black owl-dot"><span></span></div>
                            <div class=" tajawal_black owl-dot"><span></span></div>
                            <div class=" tajawal_black owl-dot"><span></span></div>
                            <div class=" tajawal_black owl-dot"><span></span></div>
                            <div class=" tajawal_black owl-dot active"><span></span></div>
                        </div>
                    </ul>
                </div>
            </div>
        </section>
    @endif

    {{--  Contact --}}
    @if ($HomeTwo->contact_status == 1)
        <section class=" tajawal_black contact-section-two" style="direction: ltr">
            <div class=" tajawal_black bg bg-pattern-11"></div>
            <div class=" tajawal_black image-box">
                <div class=" tajawal_black image"><img src="{{ asset('assets/uploads/home_pages/' . $HomeTwo->photo_home_two) }}"
                        alt=""></div>
                <div class=" tajawal_black image-overlay"></div>
            </div>
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black row">
                    <div class=" tajawal_black form-column col-lg-7 col-md-12">
                        <div class=" tajawal_black inner-column">
                            <div class=" tajawal_black sec-title light">
                                @if ($app->getLocale() == 'ar')
                                    <span class=" tajawal_black sub-title">{{ $HomeTwo->contact_heading_ar }}</span>
                                    <h2>{{ $HomeTwo->contact_subheading_ar }}</h2>
                                @else
                                    <span class=" tajawal_black sub-title">{{ $HomeTwo->contact_heading }}</span>
                                    <h2>{{ $HomeTwo->contact_subheading }}</h2>
                                @endif
                            </div>
                            <div class=" tajawal_black contact-form wow fadeInLeft" style="visibility: visible; animation-name: none;">
                                <form method="post" action="{{ route('dash.contact.store') }}" id="contact-form">
                                    @csrf
                                    <div class=" tajawal_black row">
                                        <div class=" tajawal_black form-group col-lg-6 col-md-12 col-sm-12">
                                            <input type="text" name="name"
                                                placeholder="{{ trans('web_trans.full_name') }}" required=""
                                                autocomplete="off">
                                        </div>
                                        <div class=" tajawal_black form-group col-lg-6 col-md-12 col-sm-12">
                                            <input type="email" name="email"
                                                placeholder="{{ trans('web_trans.email') }}" required=""
                                                autocomplete="off">
                                        </div>
                                        <div class=" tajawal_black form-group col-lg-12 col-md-12 col-sm-12">
                                            <input type="text" name="subject"
                                                placeholder="{{ trans('web_trans.subject') }}" required=""
                                                autocomplete="off">
                                        </div>
                                        <div class=" tajawal_black form-group col-lg-12">
                                            <textarea name="message" placeholder="{{ trans('web_trans.message') }}" required="" autocomplete="off"></textarea>
                                        </div>
                                        <div class=" tajawal_black form-group col-lg-12">
                                            <button class=" tajawal_black theme-btn btn-style-one" type="submit"
                                                name="submit-form"><span
                                                    class=" tajawal_black btn-title">{{ trans('web_trans.send_msg') }}</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- Blog --}}
    @if ($HomeTwo->blog_status == 1)
        <section class=" tajawal_black news-section">
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black sec-title text-center">
                    @if ($app->getLocale() == 'ar')
                        <span class=" tajawal_black sub-title">{{ $HomeTwo->blog_subheading_ar }}</span>
                        <h2>{{ $HomeTwo->blog_heading_ar }}</h2>
                    @else
                        <span class=" tajawal_black sub-title">{{ $HomeTwo->blog_subheading }}</span>
                        <h2>{{ $HomeTwo->blog_heading }}</h2>
                    @endif
                </div>
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
                                        <a href="{{ route('siteCustomBlog', ['slug' => $Post->slug]) }}"
                                            class=" tajawal_black read-more">{{ trans('web_trans.read_more') }} <i
                                                class=" tajawal_black  fa fa-long-arrow-alt-right "></i></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
    @endif

    {{-- Map --}}
    @if ($HomeTwo->map_status == 1)
        <section class=" tajawal_black map-section">
            {!! $Map !!}
        </section>
    @endif
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#contact-form').submit(function(event) {
                event.preventDefault();
                // Serialize form data
                var formData = $(this).serialize();

                // Send Ajax request
                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        // Extract and display the success message
                        if (response.success) {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: "top-end",
                                showConfirmButton: false,
                                timer: 5000, // Adjust the duration in milliseconds
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal
                                        .stopTimer);
                                    toast.addEventListener('mouseleave', Swal
                                        .resumeTimer);
                                }
                            });

                            Toast.fire({
                                icon: "success",
                                title: response.success // Display the success message
                            });
                        }
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
@endsection
