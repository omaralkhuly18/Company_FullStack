<style>
    .flag-icon-small {
        width: 26px;
        height: 26px;
    }

    .icon_phone_img{ width: 15px;}

    .location_icon{ width: 15px;}

    .instagram_icon{width: 15px;}
    .pinterest_icon{width: 15px;}
    .facebook_icon{ width: 15px;}
    .twitter_icon{ width: 15px;}

    .icon_phone_img,
    .location_icon,
    .mail_icon{
        margin-right: 5px;
    }
</style>
<header class=" tajawal_black main-header header-style-two">

    <!-- Header Top -->
    <div class=" tajawal_black header-top" id="myTopnav" style="direction: ltr">
        <div class=" tajawal_black inner-container">

            <div class=" tajawal_black dropdown_topheader">
                <div class=" tajawal_black dropdown_content_top">
                    <div class=" tajawal_black contant_top">
                        <img src="{{asset('assets/uploads/icons/phone_call_icone.png')}}" alt="phone_call_icone">
                        {{ $setting->top_phone }}
                    </div>
                    <a class=" tajawal_black nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if (LaravelLocalization::getCurrentLocale() === 'ar')
                        <img src="{{ asset('assets/dist-admin/uploads/saudi-arabia.png') }}" alt="Egypt Flag" class=" tajawal_black flag-icon flag-icon-small"> <span style="margin: 5px">العربية</span>
                        @else
                        <img src="{{ asset('assets/dist-admin/uploads/usa-icon.png') }}" alt="USA Flag" class=" tajawal_black flag-icon flag-icon-small"><span style="margin: 5px">English</span>
                        @endif
                    </a>
                    <div class=" tajawal_black dropdown-menu dropdown-menu-right shadow animated--grow-in" data-bs-popper="static" aria-labelledby="languageDropdown">
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <a class=" tajawal_black dropdown-item" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            @if ($localeCode === 'ar')
                            <img src="{{ asset('assets/dist-admin/uploads/saudi-arabia.png') }}" alt="Egypt Flag" class=" tajawal_black flag-icon flag-icon-small">
                            @else
                            <img src="{{ asset('assets/dist-admin/uploads/usa-icon.png') }}" alt="USA Flag" class=" tajawal_black flag-icon flag-icon-small">
                            @endif
                            {{ $properties['native'] }}
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class=" tajawal_black top-left">
                <!-- Info List -->
                <ul class=" tajawal_black list-style-one">
                    <li>
                        <img class="mail_icon" src="{{asset('assets/uploads/icons/mail_icon.png')}}" alt="mail_icon">
                        <a href="mailto:{{ $setting->top_email }}">
                            {{ $setting->top_email }}
                        </a>
                    </li>

                    <li>
                        <img class="location_icon" src="{{asset('assets/uploads/icons/location_icon.png')}}" alt="location_icon">
                        @if ($app->getLocale() == 'ar')
                        {{ $setting->top_address_ar }}
                        @else
                        {{ $setting->top_address }}
                        @endif
                    </li>

                    <li>
                        <img class="icon_phone_img" src="{{asset('assets/uploads/icons/phone_call_icone.png')}}" alt="phone_call_icone">
                        {{ $setting->top_phone }}
                    </li>


                </ul>
            </div>

            <div class=" tajawal_black top-right">
                <ul class=" tajawal_black useful-links">
                    <li><a href="{{ route('siteAbout') }}">{{ trans('web_trans.about') }}</a></li>
                    <li><a href="{{ route('siteFAQ') }}">FAQ</a></li>
                    <li><a href="{{ route('siteContact') }}">{{ trans('web_trans.contact') }}</a></li>

                </ul>
                <ul class=" tajawal_black useful-links">
                    <li class=" tajawal_black nav-item dropdown no-arrow">
                        <a class=" tajawal_black nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if (LaravelLocalization::getCurrentLocale() === 'ar')
                            <img src="{{ asset('assets/dist-admin/uploads/saudi-arabia.png') }}" alt="Egypt Flag" class=" tajawal_black flag-icon flag-icon-small"> <span style="margin: 5px">العربية</span>
                            @else
                            <img src="{{ asset('assets/dist-admin/uploads/usa-icon.png') }}" alt="USA Flag" class=" tajawal_black flag-icon flag-icon-small"><span style="margin: 5px">English</span>
                            @endif
                        </a>

                        <div class=" tajawal_black dropdown-menu dropdown-menu-right shadow animated--grow-in" data-bs-popper="static" aria-labelledby="languageDropdown">
                            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a class=" tajawal_black dropdown-item" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                @if ($localeCode === 'ar')
                                <img src="{{ asset('assets/dist-admin/uploads/saudi-arabia.png') }}" alt="Egypt Flag" class=" tajawal_black flag-icon flag-icon-small">
                                @else
                                <img src="{{ asset('assets/dist-admin/uploads/usa-icon.png') }}" alt="USA Flag" class=" tajawal_black flag-icon flag-icon-small">
                                @endif
                                {{ $properties['native'] }}
                            </a>
                            @endforeach
                        </div>

                    </li>
                </ul>
                <ul class=" tajawal_black social-icon-one">
                    <li><a href=""><span class=" tajawal_black "></span></a></li>

                    <li><a href="{{ $setting->twitter }}">
                        <!-- <span class=" tajawal_black fab fa-twitter"></span> -->
                        <img class="twitter_icon" src="{{asset('assets/uploads/icons/twitter_icon.png')}}" alt="twitter_icon">
                    </a>
                </li>

                    <li><a href="{{ $setting->facebook }}">
                        <!-- <span class=" tajawal_black fab fa-facebook-f"></span> -->
                        <img class="facebook_icon" src="{{asset('assets/uploads/icons/facebook_icon.png')}}" alt="facebook_icon">
                    </a>
                </li>


                    <li><a href="{{ $setting->instagram }}">
                        <!-- <span class=" tajawal_black fab fa-instagram"></span> -->
                         <img class="instagram_icon" src="{{asset('assets/uploads/icons/instagram_icon.png')}}" alt="instagram_icon">
                    </a>
                </li>


                    <li><a href="{{ $setting->pintrest }}">
                        <!-- <span class=" tajawal_black fab fa-pinterest-p"></span> -->
                         <img class="pinterest_icon" src="{{asset('assets/uploads/icons/pinterest_icon.png')}}" alt="pinterest_icon">
                    </a>
                </li>

                </ul>
            </div>
        </div>
    </div>
    <!-- Header Top -->

    <div class=" tajawal_black header-lower">
        <!-- Main box -->
        <div class=" tajawal_black main-box nav_this">
            <div class=" tajawal_black logo-box ">
                <div class=" tajawal_black logo"><a href="{{ route('home') }}"><img src="{{ asset('assets/uploads/settings/logo/' . $setting->logo) }}" alt="Desix"></a>
                </div>
            </div>

            <!--Nav Box-->
            <div class=" tajawal_black nav-outer  responcive2">
                <nav class=" tajawal_black nav main-menu ">
                    <ul class=" tajawal_black navigation ">
                        <li style="margin-right:30px !important" class=" tajawal_black {{ request()->route()->getName() == 'home' ? 'current' : '' }}"><a href="{{ route('home') }}">{{ trans('web_trans.home') }}
                            </a>
                        </li>
                        <li style="margin-right:30px !important" class=" tajawal_black dropdown">
                            <a href="javascript:;">
                                {{ trans('web_trans.pages') }}
                            </a>
                            <ul class=" tajawal_black dropdown-menu">
                                @foreach ($Menus as $Menu)
                                @if ($Menu->identifier_name == 'about')
                                <li>
                                    <a href="{{ route('siteAbout') }}">
                                        @if ($app->getLocale() == 'ar')
                                        {{ $Menu->menu_name_ar }}
                                        @else
                                        {{ $Menu->menu_name }}
                                        @endif
                                    </a>
                                </li>
                                @elseif ($Menu->identifier_name == 'team_member')
                                <li>
                                    <a href="{{ route('siteTeamMember') }}">
                                        @if ($app->getLocale() == 'ar')
                                        {{ $Menu->menu_name_ar }}
                                        @else
                                        {{ $Menu->menu_name }}
                                        @endif
                                    </a>
                                </li>
                                @elseif ($Menu->identifier_name == 'testimonial')
                                <li>
                                    <a href="{{ route('siteTestimonial') }}">
                                        @if ($app->getLocale() == 'ar')
                                        {{ $Menu->menu_name_ar }}
                                        @else
                                        {{ $Menu->menu_name }}
                                        @endif
                                    </a>
                                </li>
                                @elseif ($Menu->identifier_name == 'pricing')
                                <li>
                                    <a href="{{ route('sitePricing') }}">
                                        @if ($app->getLocale() == 'ar')
                                        {{ $Menu->menu_name_ar }}
                                        @else
                                        {{ $Menu->menu_name }}
                                        @endif
                                    </a>
                                </li>
                                @elseif ($Menu->identifier_name == 'faq')
                                <li>
                                    <a href="{{ route('siteFAQ') }}">
                                        @if ($app->getLocale() == 'ar')
                                        {{ $Menu->menu_name_ar }}
                                        @else
                                        {{ $Menu->menu_name }}
                                        @endif
                                    </a>
                                </li>
                                @endif
                                @endforeach
                                @foreach ($CustomPages as $CustomPage)
                                <li>
                                    @if ($app->getLocale() == 'ar')
                                    <a href="{{ route('siteCustomPage', ['slug' => $CustomPage->slug_ar]) }}">

                                        {{ $CustomPage->name_ar }}
                                        @else
                                        <a href="{{ route('siteCustomPage', ['slug' => $CustomPage->slug]) }}">
                                            {{ $CustomPage->name }}
                                            @endif
                                        </a>
                                </li>
                                @endforeach
                            </ul>

                        </li>

                        @foreach ($Menus as $Menu)
                        @if ($Menu->identifier_name == 'service')
                        <li style="margin-right:30px !important" class=" tajawal_black {{ request()->route()->getName() == 'siteService' ? 'current' : '' }}">
                            <a href="{{ route('siteService') }}">
                                @if ($app->getLocale() == 'ar')
                                {{ $Menu->menu_name_ar }}
                                @else
                                {{ $Menu->menu_name }}
                                @endif
                            </a>
                        </li>
                        @elseif ($Menu->identifier_name == 'product')
                        <li style="margin-right:30px !important" class=" tajawal_black {{ request()->route()->getName() == 'siteProduct' ? 'current' : '' }}">
                            <a href="{{ route('siteProduct') }}">
                                @if ($app->getLocale() == 'ar')
                                {{ $Menu->menu_name_ar }}
                                @else
                                {{ $Menu->menu_name }}
                                @endif
                            </a>
                        </li>
                        @elseif ($Menu->identifier_name == 'portfolio')
                        <li style="margin-right:30px !important" class=" tajawal_black {{ request()->route()->getName() == 'sitePortfolio' ? 'current' : '' }}">
                            <a href="{{ route('sitePortfolio') }}">
                                @if ($app->getLocale() == 'ar')
                                {{ $Menu->menu_name_ar }}
                                @else
                                {{ $Menu->menu_name }}
                                @endif
                            </a>
                        </li>
                        @elseif ($Menu->identifier_name == 'blog')
                        <li style="margin-right:30px !important" class=" tajawal_black {{ request()->route()->getName() == 'siteBlog' ? 'current' : '' }}">
                            <a href="{{ route('siteBlog') }}">
                                @if ($app->getLocale() == 'ar')
                                {{ $Menu->menu_name_ar }}
                                @else
                                {{ $Menu->menu_name }}
                                @endif
                            </a>
                        </li>
                        @elseif ($Menu->identifier_name == 'contact')
                        <li style="margin-right:30px !important" class=" tajawal_black {{ request()->route()->getName() == 'siteContact' ? 'current' : '' }}">
                            <a href="{{ route('siteContact') }}">
                                @if ($app->getLocale() == 'ar')
                                {{ $Menu->menu_name_ar }}
                                @else
                                {{ $Menu->menu_name }}
                                @endif
                            </a>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </nav>
            </div>

            <!--Mobile Navigation Toggler-->
            <div class=" tajawal_black hamburger">
                <span class=" tajawal_black bar"></span>
                <span class=" tajawal_black bar"></span>
                <span class=" tajawal_black bar"></span>
            </div>
        </div>
    </div>


    <!--sticky-->
    @if ($setting->sticky_header == 1)
    <!-- Sticky Header  -->
    <div class=" tajawal_black sticky-header nav_this_tow">
        <div class=" tajawal_black auto-container">
            <div class=" tajawal_black inner-container">
                <!--Logo-->
                <div class=" tajawal_black logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/uploads/settings/logo/' . $setting->sticky) }}" alt="Desix">
                    </a>
                </div>

                <!--Right Col-->
                <div class=" tajawal_black nav-outer responcive">
                    <nav class=" tajawal_black nav  main_mobile">
                        <ul class=" tajawal_black navigation ">
                            <li class=" tajawal_black {{ request()->route()->getName() == 'home' ? 'current' : '' }}"><a href="{{ route('home') }}">{{ trans('web_trans.home') }}</a></li>
                            <li class=" tajawal_black dropdown">
                                <a href="javascript:;">
                                    {{ trans('web_trans.pages') }}
                                </a>
                                <ul class=" tajawal_black dropdown-menu">
                                    @foreach ($Menus as $Menu)
                                    @if ($Menu->identifier_name == 'about')
                                    <li>
                                        <a href="{{ route('siteAbout') }}">
                                            @if ($app->getLocale() == 'ar')
                                            {{ $Menu->menu_name_ar }}
                                            @else
                                            {{ $Menu->menu_name }}
                                            @endif
                                        </a>
                                    </li>
                                    @elseif ($Menu->identifier_name == 'team_member')
                                    <li>
                                        <a href="{{ route('siteTeamMember') }}">
                                            @if ($app->getLocale() == 'ar')
                                            {{ $Menu->menu_name_ar }}
                                            @else
                                            {{ $Menu->menu_name }}
                                            @endif
                                        </a>
                                    </li>
                                    @elseif ($Menu->identifier_name == 'testimonial')
                                    <li>
                                        <a href="{{ route('siteTestimonial') }}">
                                            @if ($app->getLocale() == 'ar')
                                            {{ $Menu->menu_name_ar }}
                                            @else
                                            {{ $Menu->menu_name }}
                                            @endif
                                        </a>
                                    </li>
                                    @elseif ($Menu->identifier_name == 'pricing')
                                    <li>
                                        <a href="{{ route('sitePricing') }}">
                                            @if ($app->getLocale() == 'ar')
                                            {{ $Menu->menu_name_ar }}
                                            @else
                                            {{ $Menu->menu_name }}
                                            @endif
                                        </a>
                                    </li>
                                    @elseif ($Menu->identifier_name == 'faq')
                                    <li>
                                        <a href="{{ route('siteFAQ') }}">
                                            @if ($app->getLocale() == 'ar')
                                            {{ $Menu->menu_name_ar }}
                                            @else
                                            {{ $Menu->menu_name }}
                                            @endif
                                        </a>
                                    </li>
                                    @endif
                                    @endforeach
                                    @foreach ($CustomPages as $CustomPage)
                                    <li>
                                        @if ($app->getLocale() == 'ar')
                                        <a href="{{ route('siteCustomPage', ['slug' => $CustomPage->slug_ar]) }}">

                                            {{ $CustomPage->name_ar }}
                                            @else
                                            <a href="{{ route('siteCustomPage', ['slug' => $CustomPage->slug]) }}">
                                                {{ $CustomPage->name }}
                                                @endif
                                            </a>
                                    </li>
                                    @endforeach
                                </ul>

                            </li>

                            @foreach ($Menus as $Menu)
                            @if ($Menu->identifier_name == 'service')
                            <li class=" tajawal_black {{ request()->route()->getName() == 'siteService' ? 'current' : '' }}">
                                <a href="{{ route('siteService') }}">
                                    @if ($app->getLocale() == 'ar')
                                    {{ $Menu->menu_name_ar }}
                                    @else
                                    {{ $Menu->menu_name }}
                                    @endif
                                </a>
                            </li>
                            @elseif ($Menu->identifier_name == 'product')
                            <li class=" tajawal_black {{ request()->route()->getName() == 'siteProduct' ? 'current' : '' }}">
                                <a href="{{ route('siteProduct') }}">
                                    @if ($app->getLocale() == 'ar')
                                    {{ $Menu->menu_name_ar }}
                                    @else
                                    {{ $Menu->menu_name }}
                                    @endif
                                </a>
                            </li>
                            @elseif ($Menu->identifier_name == 'portfolio')
                            <li class=" tajawal_black {{ request()->route()->getName() == 'sitePortfolio' ? 'current' : '' }}">
                                <a href="{{ route('sitePortfolio') }}">
                                    @if ($app->getLocale() == 'ar')
                                    {{ $Menu->menu_name_ar }}
                                    @else
                                    {{ $Menu->menu_name }}
                                    @endif
                                </a>
                            </li>
                            @elseif ($Menu->identifier_name == 'blog')
                            <li class=" tajawal_black {{ request()->route()->getName() == 'siteBlog' ? 'current' : '' }}">
                                <a href="{{ route('siteBlog') }}">
                                    @if ($app->getLocale() == 'ar')
                                    {{ $Menu->menu_name_ar }}
                                    @else
                                    {{ $Menu->menu_name }}
                                    @endif
                                </a>
                            </li>
                            @elseif ($Menu->identifier_name == 'contact')
                            <li class=" tajawal_black {{ request()->route()->getName() == 'siteContact' ? 'current' : '' }}">
                                <a href="{{ route('siteContact') }}">
                                    @if ($app->getLocale() == 'ar')
                                    {{ $Menu->menu_name_ar }}
                                    @else
                                    {{ $Menu->menu_name }}
                                    @endif
                                </a>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </nav>
                </div>
                <div class=" tajawal_black hamburger_menu">
                    <span class=" tajawal_black bar_menu"></span>
                    <span class=" tajawal_black bar_menu"></span>
                    <span class=" tajawal_black bar_menu"></span>
                </div>
            </div>
        </div>
    </div><!-- End Sticky Menu -->
    @endif
</header>