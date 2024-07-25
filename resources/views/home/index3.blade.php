@extends('home.layouts.master')

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
            <div class=" tajawal_black owl-stage-outer owl-height" style="height: 581.391px;">
                <div class=" tajawal_black owl-stage"
                    style="transform: translate3d(-946px, 0px, 0px); transition: all 0s ease 0s; width: 2838px;">
                    @foreach ($Sliders as $Slider)
                        <div class=" tajawal_black owl-item" style="width: 473px;">
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
                <div class=" tajawal_black owl-dot active"><span></span></div>
                <div class=" tajawal_black owl-dot"><span></span></div>
            </div>
        </div>
    </section>

    {{-- Service --}}
    @if ($HomeThree->service_status == 1)
        <section class=" tajawal_black services-section-two border-top-1 bg-f7">
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black outer-box">
                    <div class=" tajawal_black row">
                        @foreach ($Service_Contents as $Service_Content)
                            <div class=" tajawal_black service-block-home4 col-sm-6 col-lg-4 wow fadeInUp"
                                style="visibility: visible; animation-name: none;">
                                <div class=" tajawal_black inner-box" style="direction: ltr">
                                    <span class=" tajawal_black count" style="direction: ltr"><em style="direction: ltr">{{ $loop->iteration }}</em></span>
                                    <i class="icon flaticon-digital-services"></i>
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
            </div>
        </section>
    @endif

    {{-- Welcome Two --}}
    @if ($HomeThree->welcome_two_status == 1)
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

    {{--  Offer --}}
    @if ($HomeThree->offer_status == 1)
        <section class=" tajawal_black offer-section-home4" style="direction: ltr">
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black row">
                    <div class=" tajawal_black content-column position-relative col-lg-6 col-md-12">
                        <div class=" tajawal_black inner-column">
                            <div class=" tajawal_black sec-title light">
                                @if ($app->getLocale() == 'ar')
                                    <span class=" tajawal_black sub-title">{{ $Offer->subheading_ar }}</span>
                                    <h2>{{ $Offer->heading_ar }}</h2>
                                    <div class=" tajawal_black text">
                                        {{ $Offer->text_ar }}
                                    </div>
                                @else
                                    <span class=" tajawal_black sub-title">{{ $Offer->subheading }}</span>
                                    <h2>{{ $Offer->heading }}</h2>
                                    <div class=" tajawal_black text">
                                        {{ $Offer->text }}
                                    </div>
                                @endif
                            </div>
                            <div class=" tajawal_black info-box">
                                <i class="icon {{ $Offer->icon }}"></i>
                                <h5 class=" tajawal_black title">
                                    @if ($app->getLocale() == 'ar')
                                        {{ $Offer->tagline_ar }}
                                    @else
                                        {{ $Offer->tagline }}
                                    @endif
                                </h5>
                            </div>
                            <ul class=" tajawal_black list-style-two">
                                @foreach ($OfferElements as $OfferElement)
                                    <li><i class="fa fa-check-circle"></i>
                                        @if ($app->getLocale() == 'ar')
                                            {{ $OfferElement->item_ar }}
                                        @else
                                            {{ $OfferElement->item }}
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class=" tajawal_black image-column position-relative col-lg-6 col-md-12 col-sm-12">
                        <div class=" tajawal_black inner-column">
                            <div class=" tajawal_black image-box">
                                <figure class=" tajawal_black image"><img
                                        src="{{ asset('assets/uploads/All_Sections/offers/' . $Offer->photo) }}"
                                        alt=""></figure>
                                <div class=" tajawal_black caption-box wow slideInRight"
                                    style="visibility: hidden; animation-name: none;">
                                    <div class=" tajawal_black icon-box">
                                        <a href="https://www.youtube.com/watch?v={{ $Offer->youtube_video_id }}"
                                            class=" tajawal_black play-now-home4 lightbox-image" savefrom_lm_index="0"
                                            savefrom_lm="1"><i class="icon fa fa-play"></i></a><span
                                            style="padding: 0; margin: 0; margin-left: 5px;"><a
                                                href="http://savefrom.net/?url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DEWEDUrd1i5g&amp;utm_source=chrome&amp;utm_medium=extensions&amp;utm_campaign=link_modifier"
                                                target="_blank" title="Get a direct link" savefrom_lm="1"
                                                savefrom_lm_is_link="1"
                                                style="background-image: url(&quot;data:image/gif;base64,R0lGODlhEAAQAOZ3APf39+Xl5fT09OPj4/Hx8evr6/3+/u7u7uDh4OPi497e3t7e3/z8/P79/X3GbuXl5ubl5eHg4WzFUfb39+Pj4lzGOV7LOPz7+/n6+vn5+ZTLj9/e387Ozt7f3/7+/vv7/ISbePn5+m/JV1nRKXmVbkCnKVrSLDqsCuDh4d/e3uDn3/z7/H6TdVeaV1uSW+bn5v39/eXm5eXm5kyHP/f39pzGmVy7J3yRd9/f3mLEKkXCHJbka2TVM5vaZn6Wdfn6+YG/c/r5+ZO/jeLi41aHTIeageLn4f39/vr6+kzNG2PVM5i+lomdf2CXYKHVmtzo2YXNeDqsBebl5uHh4HDKWN3g3kKqEH6WeZHTXIPKdnSPbv79/pfmbE7PHpe1l4O8dTO5DODg4VDLIlKUUtzo2J7SmEWsLlG4NJbFjkrJHP7+/VK5Nfz8+zmnC3KKa+Hg4OHh4Y63j/3+/eDg4Ojo6P///8DAwP///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAHcALAAAAAAQABAAAAfWgHd2g4SFhYJzdYqLjIpzgx5bBgYwHg1Hk2oNDXKDFwwfDF5NLmMtcStsn4MhGT8YS04aGmU1QRhIGYMTADQAQlAODlloAMYTgwICRmRfVBISIkBPKsqDBAREZmcVFhYVayUz2IMHB1dWOmImI2lgUVrmgwUFLzdtXTxKSSduMfSD6Aik48MGlx05SAykM0gKhAAPAhTB0oNFABkPHg5KMIBCxzlMQFQZMGBIggSDpsCJgGDOmzkIUCAIM2dOhEEcNijQuQDHgg4KOqRYwMGOIENIB90JBAA7&quot;); background-repeat: no-repeat; width: 16px; height: 16px; display: inline-block; border: none; text-decoration: none; padding: 0px; position: relative;"></a></span>
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
    @if ($HomeThree->portfolio_status == 1)
        <section class=" tajawal_black home4-projects-section pt-120" style="direction: ltr">
            <div class=" tajawal_black upper-box">
                <div class=" tajawal_black auto-container">
                    <div class=" tajawal_black sec-title">
                        <div class=" tajawal_black row">
                            @if ($app->getLocale() == 'ar')
                                <div class=" tajawal_black col-lg-7">

                                    <span class=" tajawal_black sub-title">{{ $HomeThree->portfolio_heading_ar }}</span>
                                    <h2>{{ $HomeThree->portfolio_subheading_ar }}</h2>
                                </div>
                                <div class=" tajawal_black col-lg-5">
                                    <div class=" tajawal_black text">{{ $HomeThree->portfolio_text_ar }}</div>
                                </div>
                            @else
                                <div class=" tajawal_black col-lg-7">
                                    <span class=" tajawal_black sub-title">{{ $HomeThree->portfolio_heading }}</span>
                                    <h2>{{ $HomeThree->portfolio_subheading }}</h2>

                                </div>
                                <div class=" tajawal_black col-lg-5">
                                    <div class=" tajawal_black text">{{ $HomeThree->portfolio_text }}</div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class=" tajawal_black container pt-0">
                <div class=" tajawal_black row">
                    <div class=" tajawal_black col-12">
                        <div class=" tajawal_black carousel-outer">
                            <div class=" tajawal_black projects-carousel-home4 owl-carousel owl-theme default-navs owl-loaded owl-drag">
                                <div class=" tajawal_black owl-stage-outer">
                                    <div class=" tajawal_black owl-stage"
                                        style="transform: translate3d(-1437px, 0px, 0px); transition: all 0s ease 0s; width: 5269px;">
                                        @foreach ($Portfolios as $Portfolio)
                                            <div class=" tajawal_black owl-item" style="width: 449px; margin-right: 30px;">
                                                <div class=" tajawal_black project-block-home4">
                                                    <div class=" tajawal_black image-box">
                                                        <figure class=" tajawal_black image"><a
                                                                href="{{ asset('assets/uploads/portfolios/photos/' . $Portfolio->photo) }}"
                                                                class=" tajawal_black lightbox-image"><img
                                                                    src="{{ asset('assets/uploads/portfolios/photos/' . $Portfolio->photo) }}"
                                                                    alt=""></a> </figure>
                                                        <div class=" tajawal_black caption-box">
                                                            @if ($app->getLocale() == 'ar')
                                                                <h4 class=" tajawal_black title"><a
                                                                        href="{{ route('siteCustomPortfolio', ['slug' => $Portfolio->slug_ar]) }}">
                                                                        {{ $Portfolio->name_ar }}
                                                                    </a>
                                                                </h4>
                                                            @else
                                                                <h4 class=" tajawal_black title"><a
                                                                        href="{{ route('siteCustomPortfolio', ['slug' => $Portfolio->slug]) }}">
                                                                        {{ $Portfolio->name }}
                                                                    </a>
                                                                </h4>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class=" tajawal_black owl-nav disabled">
                                    <div class=" tajawal_black owl-prev"><span class=" tajawal_black fa fa-long-arrow-alt-left"></span></div>
                                    <div class=" tajawal_black owl-next"><span class=" tajawal_black fa fa-long-arrow-alt-right"></span></div>
                                </div>
                                <div class=" tajawal_black owl-dots">
                                    <div class=" tajawal_black owl-dot active"><span></span></div>
                                    <div class=" tajawal_black owl-dot"><span></span></div>
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

    {{-- Video One --}}
    @if ($HomeThree->video_one_status == 1)
        <section class=" tajawal_black video-section p-0">
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black video-box video-box1">
                    <div class=" tajawal_black bg bg-image"
                        style="background-image: url({{ asset('assets/uploads/All_Sections/video_one/' . $VideoOne->photo) }})">
                    </div>
                    <div class=" tajawal_black bg bg-overlay"></div>
                    <a href="https://www.youtube.com/watch?v={{ $VideoOne->youtube_video_id }}" class=" tajawal_black play-btn"
                        data-fancybox="gallery" data-caption="" savefrom_lm_index="0"><i class="icon fa fa-play"
                            aria-hidden="true"></i></a>
                </div>
            </div>
        </section>
    @endif

    {{--  Feaeure Two --}}
    @if ($HomeThree->feature_two_status == 1)
        <section class=" tajawal_black features-section-three pull-up">
            <div class=" tajawal_black bg bg-pattern-8"></div>
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black row">
                    <div class=" tajawal_black title-column col-lg-6 col-md-12">
                        <div class=" tajawal_black inner-column">
                            <div class=" tajawal_black sec-title light">
                                @if ($app->getLocale() == 'ar')
                                    <span class=" tajawal_black sub-title">{{ $FeatureTwo->subheading_ar }}</span>
                                    <h2>{{ $FeatureTwo->heading_ar }}</h2>
                                @else
                                    <span class=" tajawal_black sub-title">{{ $FeatureTwo->subheading }}</span>
                                    <h2>{{ $FeatureTwo->heading }}</h2>
                                @endif
                            </div>
                            <div class=" tajawal_black info-box">
                                <figure class=" tajawal_black image"><img
                                        src="{{ asset('assets/uploads/All_Sections/feature_two/' . $FeatureTwo->photo) }}"
                                        alt=""></figure>
                                <div class=" tajawal_black text">
                                    @if ($app->getLocale() == 'ar')
                                        {{ $FeatureTwo->text_ar }}
                                    @else
                                        {{ $FeatureTwo->text }}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" tajawal_black info-column col-lg-6 col-md-12">
                        <div class=" tajawal_black inner-column">
                            <ul class=" tajawal_black info-list">
                                @foreach ($FeatureTwoElements as $FeatureTwoElement)
                                    <li>{{ $FeatureTwoElement->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endif

    {{-- Call To Action --}}
    @if ($HomeThree->call_to_action_status == 1)
        <section class=" tajawal_black call-to-action-two">
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black outer-box wow fadeIn" style="visibility: visible; animation-name: none;">
                    <div class=" tajawal_black bg bg-pattern-10"></div>
                    <div class=" tajawal_black title-box">
                        <h4 class=" tajawal_black title" style="word-wrap: break-word;max-width: 350px;">
                            @if ($app->getLocale() == 'ar')
                                {{ $CallToAction->text_ar }}
                            @else
                                {{ $CallToAction->text }}
                            @endif
                        </h4>
                    </div>
                    <div class=" tajawal_black icon-box">
                        <i class="icon {{ $CallToAction->icon }}"></i>
                    </div>
                    <div class=" tajawal_black info-box">
                        <a href="tel:{{ $CallToAction->phone }}" class=" tajawal_black num">{{ $CallToAction->phone }}</a>
                        <a href="mailto:{{ $CallToAction->email }}" class=" tajawal_black mail">{{ $CallToAction->email }}</a>
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- Client --}}
    @if ($HomeThree->client_status == 1)
        <section class=" tajawal_black clients-section" style="direction: ltr">
            <div class=" tajawal_black auto-container dir_spicial">
                <div class=" tajawal_black sponsors-outer">
                    <ul class=" tajawal_black clients-carousel owl-carousel owl-theme owl-loaded owl-drag">
                        <div class=" tajawal_black owl-stage-outer">
                            <div class=" tajawal_black owl-stage"
                                style="transform: translate3d(-664px, 0px, 0px); transition: all 0s ease 0s; width: 2437px;">
                                @foreach ($Clients as $Client)
                                    <div class=" tajawal_black owl-item" style="width: 221.5px;">
                                        <li class=" tajawal_black client-block">
                                            <a href="javascript:void;">
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
                            <div class=" tajawal_black owl-dot active"><span></span></div>
                            <div class=" tajawal_black owl-dot"><span></span></div>
                            <div class=" tajawal_black owl-dot"><span></span></div>
                        </div>
                    </ul>
                </div>
            </div>
        </section>
    @endif

    {{-- Team Member --}}
    @if ($HomeThree->team_member_status == 1)
        <section class=" tajawal_black team-section bg-f7 pb-30">
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black sec-title text-center">
                    @if ($app->getLocale() == 'ar')
                        <span class=" tajawal_black sub-title">{{ $HomeThree->team_member_subheading_ar }}</span>
                        <h2>{{ $HomeThree->team_member_heading_ar }}</h2>
                    @else
                        <span class=" tajawal_black sub-title">{{ $HomeThree->team_member_subheading }}</span>
                        <h2>{{ $HomeThree->team_member_heading }}</h2>
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

    {{--  Contact --}}
    @if ($HomeThree->contact_status == 1)
        <section class=" tajawal_black contact-section-two" style="direction: ltr">
            <div class=" tajawal_black bg bg-pattern-11"></div>
            <div class=" tajawal_black image-box">
                <div class=" tajawal_black image"><img src="{{ asset('assets/uploads/home_pages/' . $HomeThree->photo_home_three) }}"
                        alt=""></div>
                <div class=" tajawal_black image-overlay"></div>
            </div>
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black row">
                    <div class=" tajawal_black form-column col-lg-7 col-md-12">
                        <div class=" tajawal_black inner-column">
                            <div class=" tajawal_black sec-title light">
                                @if ($app->getLocale() == 'ar')
                                    <span class=" tajawal_black sub-title">{{ $HomeThree->contact_heading_ar }}</span>
                                    <h2>{{ $HomeThree->contact_subheading_ar }}</h2>
                                @else
                                    <span class=" tajawal_black sub-title">{{ $HomeThree->contact_heading }}</span>
                                    <h2>{{ $HomeThree->contact_subheading }}</h2>
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
