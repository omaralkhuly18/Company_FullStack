<footer class=" tajawal_black main-footer">


    <div class=" tajawal_black bg bg-pattern-6"></div>
    <div class=" tajawal_black footer-upper" style="direction: ltr">
        <div class=" tajawal_black auto-container">
            <div class=" tajawal_black row">
                <div class=" tajawal_black contact-info-block col-lg-4 col-md-6">
                    <div class=" tajawal_black inner">
                        <i class="icon fa fa-phone-square"></i>
                        <span class=" tajawal_black sub-title">{{ trans('web_trans.call_anytime') }}</span>
                        <div class=" tajawal_black text"><a href="tel:{{ $setting->footer_phone }}">{{ $setting->footer_phone }}</a>
                        </div>
                    </div>
                </div>

                <div class=" tajawal_black contact-info-block col-lg-4 col-md-6">
                    <div class=" tajawal_black inner">
                        <i class="icon fa fa-envelope"></i>
                        <span class=" tajawal_black sub-title">{{ trans('web_trans.send_email') }}</span>
                        <div class=" tajawal_black text"><a
                                href="mailto:{{ $setting->footer_email }}">{{ $setting->footer_email }}</a></div>
                    </div>
                </div>

                <div class=" tajawal_black contact-info-block col-lg-4 col-md-6">
                    <div class=" tajawal_black inner">
                        <i class="icon fa fa-map-marker"></i>
                        <span class=" tajawal_black sub-title">{{ trans('web_trans.address') }}</span>
                        <div class=" tajawal_black text">
                            @if ($app->getLocale() == 'ar')
                                {{ $setting->footer_address_ar }}
                            @else
                                {{ $setting->footer_address }}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Widgets Section -->
    <div class=" tajawal_black widgets-section">
        <div class=" tajawal_black auto-container">
            <div class=" tajawal_black row">
                <!-- Footer COlumn -->
                <div class=" tajawal_black footer-column col-xl-5 col-lg-4 col-md-12">
                    <div class=" tajawal_black footer-widget about-widget">
                        <div class=" tajawal_black widget-content">
                            <div class=" tajawal_black logo"><a href="{{ route('home') }}"><img
                                        src="{{ asset('assets/uploads/settings/logo/' . $setting->logo) }}"
                                        alt="Desix"></a></div>
                            <div class=" tajawal_black text">
                                @if ($app->getLocale() == 'ar')
                                    {{ $setting->footer_text_ar }}
                                @else
                                    {{ $setting->footer_text }}
                                @endif
                            </div>
                            <ul class=" tajawal_black social-icon-two">
                                <li><a href="{{ $setting->twitter }}"><i class="fab fa-twitter"></i></a></li>


                                <li><a href="{{ $setting->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                </li>


                                <li><a href="{{ $setting->instagram }}"><i class="fab fa-instagram"></i></a>
                                </li>


                                <li><a href="{{ $setting->pintrest }}"><i class="fab fa-pinterest-p"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Footer COlumn -->
                <div class=" tajawal_black footer-column col-xl-4 col-lg-4 col-md-6">
                    <div class=" tajawal_black widget links-widget">
                        <h5 class=" tajawal_black widget-title">
                            @if ($app->getLocale() == 'ar')
                                {{ $setting->footer_links_ar }}
                            @else
                                {{ $setting->footer_links }}
                            @endif
                        </h5>
                        <div class=" tajawal_black widget-content">
                            <ul class=" tajawal_black user-links two-column">
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
                                    @elseif ($Menu->identifier_name == 'service')
                                        <li>
                                            <a href="{{ route('siteService') }}">
                                                @if ($app->getLocale() == 'ar')
                                                    {{ $Menu->menu_name_ar }}
                                                @else
                                                    {{ $Menu->menu_name }}
                                                @endif
                                            </a>
                                        </li>
                                    @elseif ($Menu->identifier_name == 'portfolio')
                                        <li>
                                            <a href="{{ route('sitePortfolio') }}">
                                                @if ($app->getLocale() == 'ar')
                                                    {{ $Menu->menu_name_ar }}
                                                @else
                                                    {{ $Menu->menu_name }}
                                                @endif
                                            </a>
                                        </li>
                                    @elseif ($Menu->identifier_name == 'product')
                                        <li>
                                            <a href="{{ route('siteProduct') }}">
                                                @if ($app->getLocale() == 'ar')
                                                    {{ $Menu->menu_name_ar }}
                                                @else
                                                    {{ $Menu->menu_name }}
                                                @endif
                                            </a>
                                        </li>
                                    @elseif ($Menu->identifier_name == 'blog')
                                        <li>
                                            <a href="{{ route('siteBlog') }}">
                                                @if ($app->getLocale() == 'ar')
                                                    {{ $Menu->menu_name_ar }}
                                                @else
                                                    {{ $Menu->menu_name }}
                                                @endif
                                            </a>
                                        </li>
                                    @elseif ($Menu->identifier_name == 'contact')
                                        <li>
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

                                <li>
                                    <a href="{{ route('siteTerm') }}">
                                        @if ($app->getLocale() == 'ar')
                                            {{ $Term->title_ar }}
                                        @else
                                            {{ $Term->title }}
                                        @endif
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('sitePrivacy') }}">
                                        @if ($app->getLocale() == 'ar')
                                            {{ $Privacy->title_ar }}
                                        @else
                                            {{ $Privacy->title }}
                                        @endif
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=" tajawal_black footer-column col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class=" tajawal_black widget newsletter-widget">
                        <h5 class=" tajawal_black widget-title">
                            @if ($app->getLocale() == 'ar')
                                {{ $setting->footer_subscriber_ar }}
                            @else
                                {{ $setting->footer_subscriber }}
                            @endif
                        </h5>
                        <div class=" tajawal_black widget-content">
                            <div class=" tajawal_black text">
                                @if ($app->getLocale() == 'ar')
                                    {{ $setting->footer_subscriber_text_ar }}
                                @else
                                    {{ $setting->footer_subscriber_text }}
                                @endif
                            </div>
                            <div class=" tajawal_black subscribe-form">
                                <form method="post" action="{{ route('dash.subscriber.store') }}" id="subscribe-form">
                                    @csrf
                                    <div class=" tajawal_black form-group">
                                        <input type="email" name="email" class=" tajawal_black email" value=""
                                            placeholder="{{ trans('web_trans.email') }}" required=""
                                            autocomplete="off">
                                    </div>
                                    <div class=" tajawal_black form-group">
                                        <button type="submit" class=" tajawal_black theme-btn btn-style-one hover-light"><span
                                                class=" tajawal_black btn-title">{{ trans('web_trans.subscribe') }}</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=" tajawal_black footer-bottom">
        <div class=" tajawal_black auto-container">
            <div class=" tajawal_black copyright-text">
                @if ($app->getLocale() == 'ar')
                    {{ $setting->footer_copyright_ar }}
                @else
                    {{ $setting->footer_copyright }}
                @endif
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/dist-front/js/jquery-3.7.1.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#subscribe-form').submit(function(event) {
                event.preventDefault();
                var formData = $(this).serialize();

                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: formData,
                    success: function(response) {

                        const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 3000,
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
                            title: "{{ trans('web_trans.subscriber_done') }}"
                        });

                        $('#subscribe-form input[name="email"]').val('');
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>

</footer>
