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
    @if (session('success'))
    @endif
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
                                    style="background-image: url({{ asset('assets/uploads/sliders/' . $Slider->photo) }});position:fixed !important;">
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

    {{-- Service on Slider --}}
    @if ($HomeOne->service_slider_status == 1)
        <section class=" tajawal_black services-section-home3 pt-0 pb-90">
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black outer-box">
                    <div class=" tajawal_black row row-cols-sm-2 row-cols-md-3 row-cols-xl-5 justify-content-center">
                        @foreach ($Service_sliders as $Service_slider)
                            <div class=" tajawal_black service-block-new-3 at-home6 col wow fadeInUp"
                                style="visibility: hidden; animation-name: none;">
                                <div class=" tajawal_black inner-box ">
                                    <i class="icon {{ $Service_slider->icon }}"></i>
                                    @if ($app->getLocale() == 'ar')
                                        <h6 class=" tajawal_black title"><a
                                                href="{{ route('siteCustomService', ['slug' => $Service_slider->slug_ar]) }}">{{ $Service_slider->name_ar }}</a>
                                        </h6>
                                        <div class=" tajawal_black text">{{ $Service_slider->short_descr_ar }}</div>
                                    @else
                                        <h6 class=" tajawal_black title"><a
                                                href="{{ route('siteCustomService', ['slug' => $Service_slider->slug]) }}">{{ $Service_slider->name }}</a>
                                        </h6>
                                        <div class=" tajawal_black text">{{ $Service_slider->short_descr }}</div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- Welcome One --}}
    @if ($HomeOne->welcome_one_status == 1)
        <section class=" tajawal_black about-section pt-0" style="direction: ltr">
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black row">
                    <div class=" tajawal_black content-column col-lg-6 col-md-12 col-sm-12 order-2 wow fadeInRight"
                        style="visibility: visible; animation-name: none;">
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
                            <a href="{{ $WelcomeOne->btn_url }}" class=" tajawal_black theme-btn btn-style-one"><span class=" tajawal_black btn-title">
                                    @if ($app->getLocale() == 'ar')
                                        {{ $WelcomeOne->btn_text_ar }}
                                        @else{{ $WelcomeOne->btn_text }}
                                    @endif
                                </span></a>
                        </div>
                    </div>
                    <div class=" tajawal_black image-column col-lg-6 col-md-12 col-sm-12 wow fadeInLeft animated"
                        style="visibility: visible; animation-name: fadeInLeft;">
                        <div class=" tajawal_black image-box">
                            <span class=" tajawal_black icon-dots bounce-y"></span>
                            <span class=" tajawal_black icon-circle zoom-one"></span>
                            <figure class=" tajawal_black image-1 wow fadeIn animated"
                                style="visibility: visible; animation-name: fadeIn;"><img
                                    src="{{ asset('assets/uploads/All_Sections/welcome_one/' . $WelcomeOne->photo1) }}"
                                    alt=""></figure>
                            <figure class=" tajawal_black image-2 wow fadeIn animated" data-wow-delay="600ms"
                                style="visibility: visible; animation-delay: 600ms; animation-name: fadeIn;"><img
                                    src="{{ asset('assets/uploads/All_Sections/welcome_one/' . $WelcomeOne->photo2) }}"
                                    alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- Service --}}
    @if ($HomeOne->service_status == 1)
        <section class=" tajawal_black services-section">
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black sec-title text-center">
                    @if ($app->getLocale() == 'ar')
                        <span class=" tajawal_black sub-title">{{ $HomeOne->service_heading_ar }}</span>
                        <h2>{{ $HomeOne->service_subheading_ar }}
                        </h2>
                    @else
                        <span class=" tajawal_black sub-title">{{ $HomeOne->service_heading }}</span>
                        <h2>{{ $HomeOne->service_subheading }}
                        </h2>
                    @endif
                </div>
                <div class=" tajawal_black row">
                    @foreach ($Service_Contents as $Service_Content)
                        <div class=" tajawal_black service-block-new-1 col-lg-4 col-md-6 col-sm-12 wow fadeInUp"
                            style="visibility: visible; animation-name: none;">
                            <div class=" tajawal_black inner-box">
                                <div class=" tajawal_black image-box">
                                    @if ($app->getLocale() == 'ar')
                                        <figure class=" tajawal_black image">
                                            <a
                                                href="{{ route('siteCustomService', ['slug' => $Service_slider->slug_ar]) }}"><img
                                                    src="{{ asset('assets/uploads/services/photos/' . $Service_Content->photo) }}"
                                                    alt="Product Crafting">
                                            </a>
                                        </figure>
                                    @else
                                        <figure class=" tajawal_black image">
                                            <a href="{{ route('siteCustomService', ['slug' => $Service_slider->slug]) }}"><img
                                                    src="{{ asset('assets/uploads/services/photos/' . $Service_Content->photo) }}"
                                                    alt="Product Crafting">
                                            </a>
                                        </figure>
                                    @endif

                                    <div class=" tajawal_black icon-box"><i class="icon {{ $Service_Content->icon }}"></i></div>
                                </div>
                                <div class=" tajawal_black content-box">
                                    @if ($app->getLocale() == 'ar')
                                        <h5 class=" tajawal_black title"><a
                                                href="{{ route('siteCustomService', ['slug' => $Service_slider->slug_ar]) }}">
                                                {{ $Service_Content->name_ar }}</a></h5>
                                        <div class=" tajawal_black text">
                                            <p>{{ $Service_Content->short_descr_ar }}</p>
                                        </div>
                                    @else
                                        <h5 class=" tajawal_black title"><a
                                                href="{{ route('siteCustomService', ['slug' => $Service_slider->slug]) }}">
                                                {{ $Service_Content->name }}</a></h5>
                                        <div class=" tajawal_black text">
                                            <p>{{ $Service_Content->short_descr }}</p>
                                        </div>
                                    @endif
                                    @if ($app->getLocale() == 'ar')
                                        <a href="{{ route('siteCustomService', ['slug' => $Service_slider->slug_ar]) }}"
                                            class=" tajawal_black read-more">{{ trans('web_trans.read_more') }} <i
                                                class=" tajawal_black  fa fa-long-arrow-alt-right "></i></a>
                                    @else
                                        <a href="{{ route('siteCustomService', ['slug' => $Service_slider->slug]) }}"
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

    {{-- Video One --}}
    @if ($HomeOne->video_one_status == 1)
        <section class=" tajawal_black video-section-new-3">
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black video-box-new-3">
                    <div class=" tajawal_black bg">
                        <div class=" tajawal_black bg bg-image"
                            style="background-image: url({{ asset('assets/uploads/All_Sections/video_one/' . $VideoOne->photo) }})">
                        </div>
                        <div class=" tajawal_black overlay"></div>
                    </div>
                    <div class=" tajawal_black content">
                        <div class=" tajawal_black btn-box">
                            <a href="https://www.youtube.com/watch?v={{ $VideoOne->youtube_video_id }}" class=" tajawal_black play-now"
                                data-fancybox="gallery" data-caption="" savefrom_lm_index="0" savefrom_lm="1"><i
                                    class=" tajawal_black icon fa fa-play" aria-hidden="true"></i><span class=" tajawal_black ripple"></span></a>
                            <span style="padding: 0; margin: 0; margin-left: 5px;"><a
                                    href="http://savefrom.net/?url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D{{ $VideoOne->youtube_video_id }}&amp;utm_source=chrome&amp;utm_medium=extensions&amp;utm_campaign=link_modifier"
                                    target="_blank" title="Get a direct link" savefrom_lm="1" savefrom_lm_is_link="1"
                                    style="background-image: url(&quot;data:image/gif;base64,R0lGODlhEAAQAOZ3APf39+Xl5fT09OPj4/Hx8evr6/3+/u7u7uDh4OPi497e3t7e3/z8/P79/X3GbuXl5ubl5eHg4WzFUfb39+Pj4lzGOV7LOPz7+/n6+vn5+ZTLj9/e387Ozt7f3/7+/vv7/ISbePn5+m/JV1nRKXmVbkCnKVrSLDqsCuDh4d/e3uDn3/z7/H6TdVeaV1uSW+bn5v39/eXm5eXm5kyHP/f39pzGmVy7J3yRd9/f3mLEKkXCHJbka2TVM5vaZn6Wdfn6+YG/c/r5+ZO/jeLi41aHTIeageLn4f39/vr6+kzNG2PVM5i+lomdf2CXYKHVmtzo2YXNeDqsBebl5uHh4HDKWN3g3kKqEH6WeZHTXIPKdnSPbv79/pfmbE7PHpe1l4O8dTO5DODg4VDLIlKUUtzo2J7SmEWsLlG4NJbFjkrJHP7+/VK5Nfz8+zmnC3KKa+Hg4OHh4Y63j/3+/eDg4Ojo6P///8DAwP///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAHcALAAAAAAQABAAAAfWgHd2g4SFhYJzdYqLjIpzgx5bBgYwHg1Hk2oNDXKDFwwfDF5NLmMtcStsn4MhGT8YS04aGmU1QRhIGYMTADQAQlAODlloAMYTgwICRmRfVBISIkBPKsqDBAREZmcVFhYVayUz2IMHB1dWOmImI2lgUVrmgwUFLzdtXTxKSSduMfSD6Aik48MGlx05SAykM0gKhAAPAhTB0oNFABkPHg5KMIBCxzlMQFQZMGBIggSDpsCJgGDOmzkIUCAIM2dOhEEcNijQuQDHgg4KOqRYwMGOIENIB90JBAA7&quot;); background-repeat: no-repeat; width: 16px; height: 16px; display: inline-block; border: none; text-decoration: none; padding: 0px; position: relative;"></a></span>
                        </div>
                        @if ($app->getLocale() == 'ar')
                            <h2 class=" tajawal_black title">{{ $VideoOne->heading_ar }}</h2>
                        @else
                            <h2 class=" tajawal_black title">{{ $VideoOne->heading }}</h2>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- Funfact --}}
    @if ($HomeOne->funfact_status == 1)
        <section class=" tajawal_black fun-fact-section-new-3">
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black outer-box">
                    <div class=" tajawal_black row">
                        @if ($app->getLocale() == 'ar')
                            <div class=" tajawal_black title-column col-lg-6">
                                <div class=" tajawal_black inner-column">
                                    <div class=" tajawal_black sec-title light">
                                        <span class=" tajawal_black sub-title">{{ $FunFact->sub_heading_ar }}</span>
                                        <h2>{{ $FunFact->heading_ar }}</h2>
                                        <div class=" tajawal_black text">
                                            {{ $FunFact->text_ar }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class=" tajawal_black title-column col-lg-6">
                                <div class=" tajawal_black inner-column">
                                    <div class=" tajawal_black sec-title light">
                                        <span class=" tajawal_black sub-title">{{ $FunFact->subheading }}</span>
                                        <h2>{{ $FunFact->heading }}</h2>
                                        <div class=" tajawal_black text">
                                            {{ $FunFact->text }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class=" tajawal_black column col-lg-6">
                            <div class=" tajawal_black fact-counter">
                                <div class=" tajawal_black row">
                                    @foreach ($FunFactElements as $FunFactElement)
                                        <div class=" tajawal_black counter-block-new-3 col-lg-4 col-md-4 col-sm-6 wow fadeInUp"
                                            style="visibility: hidden; animation-name: none;">
                                            <div class=" tajawal_black inner">
                                                <div class=" tajawal_black content">
                                                    <i class="icon {{ $FunFactElement->icon }}"></i>
                                                    <div class=" tajawal_black count-box"><span class=" tajawal_black count-text" data-speed="3000"
                                                            data-stop="{{ $FunFactElement->number }}">0</span></div>
                                                    <h6 class=" tajawal_black counter-title">
                                                        @if ($app->getLocale() == 'ar')
                                                            {{ $FunFactElement->name_ar }}
                                                        @else
                                                            {{ $FunFactElement->name }}
                                                        @endif
                                                    </h6>
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
    @endif

    {{--  Portfolio --}}
    @if ($HomeOne->portfolio_status == 1)
        <section class=" tajawal_black projects-section-home3">
            <div class=" tajawal_black upper-box">
                <div class=" tajawal_black auto-container">
                    <div class=" tajawal_black sec-title">
                        @if ($app->getLocale() == 'ar')
                            <span class=" tajawal_black sub-title">{{ $HomeOne->portfolio_heading_ar }}</span>
                            <h2>{{ $HomeOne->portfolio_subheading_ar }}</h2>
                        @else
                            <span class=" tajawal_black sub-title">{{ $HomeOne->portfolio_heading }}</span>
                            <h2>{{ $HomeOne->portfolio_subheading }}</h2>
                        @endif
                    </div>
                </div>
            </div>
            <div class=" tajawal_black carousel-outer" style="direction: ltr">
                <div class=" tajawal_black projects-carousel owl-carousel owl-theme default-navs owl-loaded owl-drag">
                    <div class=" tajawal_black owl-stage-outer">
                        <div class=" tajawal_black owl-stage"
                            style="transform: translate3d(-2205px, 0px, 0px); transition: all 0s ease 0s; width: 8085px;">

                            @foreach ($Portfolios as $Portfolio)
                                <div class=" tajawal_black owl-item" style="width: 735px;">
                                    <div class=" tajawal_black project-block-home3">
                                        <div class=" tajawal_black image-box">
                                            <figure class=" tajawal_black image"><a
                                                    href="{{ asset('assets/uploads/portfolios/photos/' . $Portfolio->photo) }}"
                                                    class=" tajawal_black lightbox-image"><img
                                                        src="{{ asset('assets/uploads/portfolios/photos/' . $Portfolio->photo) }}"
                                                        alt=""></a>
                                            </figure>

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

                    <div class=" tajawal_black owl-dots">
                        <div class=" tajawal_black owl-dot active"><span></span></div>
                        <div class=" tajawal_black owl-dot"><span></span></div>
                        <div class=" tajawal_black owl-dot"><span></span></div>
                        <div class=" tajawal_black owl-dot"><span></span></div>
                        <div class=" tajawal_black owl-dot"><span></span></div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{--  Contact --}}
    @if ($HomeOne->contact_status == 1)
        <section class=" tajawal_black contact-section pt-120" style="direction: ltr">
            <div class=" tajawal_black anim-icons">
                <span class=" tajawal_black icon icon-line3"></span>
                <span class=" tajawal_black icon icon-arrow1"></span>
                <span class=" tajawal_black icon icon-arrow2"></span>
            </div>
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black outer-box">
                    <div class=" tajawal_black bg bg-pattern-5"></div>

                    <div class=" tajawal_black sec-title">
                        @if ($app->getLocale() == 'ar')
                            <span class=" tajawal_black sub-title">{{ $HomeOne->contact_heading_ar }}</span>
                            <h2>{{ $HomeOne->contact_subheading_ar }}</h2>
                        @else
                            <span class=" tajawal_black sub-title">{{ $HomeOne->contact_heading }}</span>
                            <h2>{{ $HomeOne->contact_subheading }}</h2>
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
                                    <input type="email" name="email" placeholder="{{ trans('web_trans.email') }}"
                                        required="" autocomplete="off">
                                </div>
                                <div class=" tajawal_black form-group col-lg-12">
                                    <input type="text" name="subject" placeholder="{{ trans('web_trans.subject') }}"
                                        required="" autocomplete="off">
                                </div>
                                <div class=" tajawal_black form-group col-lg-12">
                                    <textarea name="message" placeholder="{{ trans('web_trans.message') }}" required="" autocomplete="off"></textarea>
                                </div>
                                <div class=" tajawal_black form-group col-lg-12">
                                    <button class=" tajawal_black theme-btn btn-style-one" type="submit" name="submit-form"><span
                                            class=" tajawal_black btn-title">{{ trans('web_trans.send_msg') }}</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <figure class=" tajawal_black image"><img
                            src="{{ asset('assets/uploads/home_pages/' . $HomeOne->photo_home_one) }}" alt="">
                    </figure>
                </div>
            </div>
        </section>
    @endif

    {{-- Blog --}}
    @if ($HomeOne->blog_status == 1)
        <section class=" tajawal_black news-section">
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black sec-title text-center">
                    @if ($app->getLocale() == 'ar')
                        <span class=" tajawal_black sub-title">{{ $HomeOne->blog_subheading_ar }}</span>
                        <h2>{{ $HomeOne->blog_heading_ar }}</h2>
                    @else
                        <span class=" tajawal_black sub-title">{{ $HomeOne->blog_subheading }}</span>
                        <h2>{{ $HomeOne->blog_heading }}</h2>
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
                                                {{ $Post->title }}
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

    {{-- Video two --}}
    @if ($HomeOne->video_two_status == 1)
        <section class=" tajawal_black video-section pull-down">
            <div class=" tajawal_black bg bg-pattern-4"></div>
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black sec-title text-center light">
                    <a href="https://www.youtube.com/watch?v={{ $VideoTwo->youtube_video_id }}" class=" tajawal_black play-btn"
                        data-fancybox="gallery" data-caption="" savefrom_lm_index="0"><i class="icon fa fa-play"
                            aria-hidden="true"></i></a>
                    <h2>
                        @if ($app->getLocale() == 'ar')
                            {{ $VideoTwo->heading_ar }}
                        @else
                            {{ $VideoTwo->heading }}
                        @endif
                    </h2>
                </div>
            </div>
        </section>
    @endif

    {{-- Feature one --}}
    @if ($HomeOne->feature_one_status == 1)
        <section class=" tajawal_black features-section-two pt-0">
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black outer-box">
                    <div class=" tajawal_black row">
                        <div class=" tajawal_black title-column col-lg-3">
                            <div class=" tajawal_black inner-column">
                                <h4 class=" tajawal_black title">
                                    @if ($app->getLocale() == 'ar')
                                        {{ $FeatureOne->text_ar }}
                                    @else
                                        {{ $FeatureOne->text }}
                                    @endif
                                </h4>
                                <figure class=" tajawal_black image"><img
                                        src="{{ asset('assets/uploads/All_Sections/feature_one/' . $FeatureOne->photo) }}"
                                        alt=""></figure>
                            </div>
                        </div>
                        @foreach ($FeatureOneElements as $FeatureOneElement)
                            <div class=" tajawal_black feature-block-two col-lg-3 col-md-4 col-sm-6">
                                <div class=" tajawal_black inner-box">
                                    <i class="icon {{ $FeatureOneElement->icon }}"></i>
                                    @if ($app->getLocale() == 'ar')
                                        <h5 class=" tajawal_black title">{{ $FeatureOneElement->heading_ar }}</h5>
                                        <div class=" tajawal_black text">
                                            {{ $FeatureOneElement->text_ar }}
                                        </div>
                                    @else
                                        <h5 class=" tajawal_black title">{{ $FeatureOneElement->heading }}</h5>
                                        <div class=" tajawal_black text">
                                            {{ $FeatureOneElement->text }}
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

    {{-- Testimonial --}}
    @if ($HomeOne->testimonial_status == 1)
        <section class=" tajawal_black testimonial-section-home5-v2">
            <div class=" tajawal_black bg bg-pattern-7"></div>
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black row">
                    <div class=" tajawal_black title-column col-xl-3 col-lg-12">
                        <div class=" tajawal_black sec-title">
                            @if ($app->getLocale() == 'ar')
                                <span class=" tajawal_black sub-title">{{ $HomeOne->testimonial_subheading_ar }}</span>
                                <h2>{{ $HomeOne->testimonial_heading_ar }}</h2>
                                <div class=" tajawal_black text">
                                    {{ $HomeOne->testimonial_text_ar }}
                                </div>
                            @else
                                <span class=" tajawal_black sub-title">{{ $HomeOne->testimonial_subheading }}</span>
                                <h2>{{ $HomeOne->testimonial_heading }}</h2>
                                <div class=" tajawal_black text">
                                    {{ $HomeOne->testimonial_text }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class=" tajawal_black testimonial-column col-xl-9 col-lg-12" style="direction: ltr">
                        <div class=" tajawal_black inner-column">
                            <div class=" tajawal_black testimonial-carousel owl-carousel owl-theme owl-loaded owl-drag">
                                <div class=" tajawal_black owl-stage-outer">
                                    <div class=" tajawal_black owl-stage"
                                        style="transform: translate3d(-730px, 0px, 0px); transition: all 0s ease 0s; width: 2920px;">
                                        @foreach ($Testimonials as $Testimonial)
                                            <div class=" tajawal_black owl-item" style="width: 340px; margin-right: 25px;">
                                                <div class=" tajawal_black testimonial-block-home5-v2">
                                                    <div class=" tajawal_black inner-box">
                                                        <div class=" tajawal_black content-box">
                                                            <div class=" tajawal_black thumb"><img
                                                                    src="{{ asset('assets/uploads/testimonials/' . $Testimonial->photo) }}"
                                                                    alt=""></div>
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
                            </div>
                        </div>
                    </div>
                    <div class=" tajawal_black owl-nav disabled">
                        <div class=" tajawal_black owl-prev"><span class=" tajawal_black far fa-arrow-left-long"></span></div>
                        <div class=" tajawal_black owl-next"><span class=" tajawal_black far fa-arrow-right-long"></span></div>
                    </div>
                    <div class=" tajawal_black owl-dots">
                        <div class=" tajawal_black owl-dot active"><span></span></div>
                        <div class=" tajawal_black owl-dot"><span></span></div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
        </section>
    @endif

    {{-- Choose one --}}
    @if ($HomeOne->choose_one_status == 1)
        <section class=" tajawal_black why-choose-us-home5 py-0" style="direction: ltr">
            <div class=" tajawal_black auto-container">
                <div class=" tajawal_black outer-box">
                    <div class=" tajawal_black row align-items-center">
                        <div class=" tajawal_black content-column mb-0 col-xl-6 col-lg-7 order-2 wow fadeInRight" data-wow-delay="600ms"
                            style="visibility: hidden; animation-delay: 600ms; animation-name: none;">
                            <div class=" tajawal_black inner-column mb-5 mb-xl-0">
                                <div class=" tajawal_black sec-title">
                                    @if ($app->getLocale() == 'ar')
                                        <span class=" tajawal_black sub-title">{{ $ChooseOne->subheading_ar }}</span>
                                        <h2>{{ $ChooseOne->heading_ar }}</h2>
                                        <div class=" tajawal_black text">
                                            {{ $ChooseOne->text_ar }}
                                        </div>
                                    @else
                                        <span class=" tajawal_black sub-title">{{ $ChooseOne->subheading }}</span>
                                        <h2>{{ $ChooseOne->heading }}</h2>
                                        <div class=" tajawal_black text">
                                            {{ $ChooseOne->text }}
                                        </div>
                                    @endif
                                </div>
                                <div class=" tajawal_black row">
                                    @foreach ($ChooseOneElements as $ChooseOneElement)
                                        <div class=" tajawal_black col-md-6">
                                            <div class=" tajawal_black feature-box">
                                                <i class="icon {{ $ChooseOneElement->icon }}"></i>
                                                @if ($app->getLocale() == 'ar')
                                                    <h6 class=" tajawal_black title">{{ $ChooseOneElement->heading_ar }}</h6>
                                                @else
                                                    <h6 class=" tajawal_black title">{{ $ChooseOneElement->heading }}</h6>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class=" tajawal_black image-column mb-0 col-xl-6 col-lg-5">
                            <div class=" tajawal_black inner-column wow fadeInLeft animated"
                                style="visibility: visible; animation-name: fadeInLeft;">
                                <div class=" tajawal_black image-box">
                                    <figure class=" tajawal_black image overlay-anim wow fadeInUp animated"
                                        style="visibility: visible; animation-name: fadeInUp;"><img
                                            src="{{ asset('assets/uploads/All_Sections/choose_one/' . $ChooseOne->photo) }}"
                                            alt=""></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- Client --}}
    @if ($HomeOne->client_status == 1)
        <section class=" tajawal_black clients-section" style="direction:ltr">
            <div class=" tajawal_black auto-container dir_spicial">
                <div class=" tajawal_black sponsors-outer">
                    <ul class=" tajawal_black clients-carousel owl-carousel owl-theme owl-loaded owl-drag">

                        <div class=" tajawal_black owl-stage-outer">
                            <div class=" tajawal_black owl-stage"
                                style="transform: translate3d(-705px, 0px, 0px); transition: all 0s ease 0s; width: 2585px;">
                                @foreach ($Clients as $Client)
                                    <div class=" tajawal_black owl-item" style="width: 235px;">
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
                        </div>
                    </ul>
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
