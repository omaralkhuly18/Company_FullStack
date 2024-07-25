<!-- Start::main-sidebar-header -->
<div class=" tajawal_black main-sidebar-header">
    <a href="index.html" class=" tajawal_black header-logo">
        <img src="{{ asset('dashboard/assets/images/brand-logos/desktop-white.png') }}" class=" tajawal_black desktop-white"
            alt="logo">
        <img src="{{ asset('dashboard/assets/images/brand-logos/toggle-white.png') }}" class=" tajawal_black toggle-white" alt="logo">
        <img src="{{ asset('dashboard/assets/images/brand-logos/desktop-logo.png') }}" class=" tajawal_black desktop-logo"
            alt="logo">
        <img src="{{ asset('dashboard/assets/images/brand-logos/toggle-dark.png') }}" class=" tajawal_black toggle-dark"
            alt="logo">
        <img src="{{ asset('dashboard/assets/images/brand-logos/toggle-logo.png') }}" class=" tajawal_black toggle-logo"
            alt="logo">
        <img src="{{ asset('dashboard/assets/images/brand-logos/100x100.png') }}"
            height="50px" class=" tajawal_black desktop-dark " alt="image">
    </a>
</div>
<!-- End::main-sidebar-header -->

<!-- Start::main-sidebar -->
<div class=" tajawal_black main-sidebar" id="sidebar-scroll">

    <!-- Start::nav -->
    <nav class=" tajawal_black main-menu-container nav nav-pills flex-column sub-open">
        <div class=" tajawal_black slide-left" id="slide-left">
            <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
            </svg>
        </div>
        <ul class=" tajawal_black main-menu">


            <!-- Start::slide -->
            <li class=" tajawal_black slide">
                <a href="{{ route('dash.index') }}" class=" tajawal_black side-menu__item">
                    <span class=" tajawal_black shape1"></span>
                    <span class=" tajawal_black shape2"></span>
                    <i class="ti-home side-menu__icon"></i>
                    <span class=" tajawal_black side-menu__label">{{ trans('web_trans.dashboard') }}</span>
                </a>
            </li>
            <!-- End::slide -->

            <!-- Start::slide -->
            <li class=" tajawal_black slide ">
                <a href="{{ route('dash.setting.index') }}" class=" tajawal_black side-menu__item">
                    <span class=" tajawal_black shape1"></span>
                    <span class=" tajawal_black shape2"></span>
                    <i class="far fa-caret-square-right side-menu__icon"></i>
                    <span class=" tajawal_black side-menu__label">{{ trans('web_trans.website_settings') }}</span>
                </a>

            </li>
            <!-- End::slide -->


            <!-- Start::slide -->
            <li class=" tajawal_black slide ">
                <a href="{{ route('dash.contact.index') }}" class=" tajawal_black side-menu__item">
                    <span class=" tajawal_black shape1"></span>
                    <span class=" tajawal_black shape2"></span>
                    <i class="far fa-caret-square-right side-menu__icon"></i>
                    <span class=" tajawal_black side-menu__label">{{ trans('web_trans.contact') }}</span>
                </a>

            </li>
            <!-- End::slide -->




            <!-- Start::slide -->
            <li class=" tajawal_black slide has-sub">
                <a href="javascript:void(0);" class=" tajawal_black side-menu__item">
                    <span class=" tajawal_black shape1"></span>
                    <span class=" tajawal_black shape2"></span>
                    <i class="fas fa-folder side-menu__icon"></i>
                    <span class=" tajawal_black side-menu__label">{{ trans('web_trans.blog_section') }}</span>
                    <i class="fe fe-chevron-right side-menu__angle"></i>
                </a>
                <ul class=" tajawal_black slide-menu child1">
                    <li class=" tajawal_black slide side-menu__label1">
                        <a href="javascript:void(0)">E-Commerce</a>
                    </li>
                    <li class=" tajawal_black slide">
                        <a href="{{ route('dash.category.index') }}"
                            class=" tajawal_black side-menu__item">{{ trans('web_trans.categories') }}</a>
                    </li>
                    <li class=" tajawal_black slide">
                        <a href="{{ route('dash.post.index') }}"
                            class=" tajawal_black side-menu__item">{{ trans('web_trans.posts') }}</a>
                    </li>

                </ul>
            </li>
            <!-- End::slide -->



            <!-- Start::slide -->
            <li class=" tajawal_black slide has-sub">
                <a href="javascript:void(0);" class=" tajawal_black side-menu__item">
                    <span class=" tajawal_black shape1"></span>
                    <span class=" tajawal_black shape2"></span>
                    <i class="fas fa-folder side-menu__icon"></i>
                    <span class=" tajawal_black side-menu__label">{{ trans('web_trans.product_section') }}</span>
                    <i class="fe fe-chevron-right side-menu__angle"></i>
                </a>
                <ul class=" tajawal_black slide-menu child1">
                    <li class=" tajawal_black slide side-menu__label1">
                        <a href="javascript:void(0)">E-Commerce</a>
                    </li>
                    <li class=" tajawal_black slide">
                        <a href="{{ route('dash.product.category.index') }}"
                            class=" tajawal_black side-menu__item">{{ trans('web_trans.categories') }}</a>
                    </li>
                    <li class=" tajawal_black slide">
                        <a href="{{ route('dash.product.index') }}"
                            class=" tajawal_black side-menu__item">{{ trans('web_trans.products') }}</a>
                    </li>

                    <li class=" tajawal_black slide">
                        <a href="{{ route('dash.product.order.index') }}"
                            class=" tajawal_black side-menu__item">{{ trans('web_trans.orders') }}</a>
                    </li>

                </ul>
            </li>
            <!-- End::slide -->

            <!-- Start::slide -->
            <li class=" tajawal_black slide has-sub">
                <a href="javascript:void(0);" class=" tajawal_black side-menu__item">
                    <span class=" tajawal_black shape1"></span>
                    <span class=" tajawal_black shape2"></span>
                    <i class="fas fa-folder side-menu__icon"></i>
                    <span class=" tajawal_black side-menu__label">{{ trans('web_trans.subscribers') }}</span>
                    <i class="fe fe-chevron-right side-menu__angle"></i>
                </a>
                <ul class=" tajawal_black slide-menu child1">

                    <li class=" tajawal_black slide">
                        <a href="{{ route('dash.subscriber.index') }}"
                            class=" tajawal_black side-menu__item">{{ trans('web_trans.subscribers') }}</a>
                    </li>
                    <li class=" tajawal_black slide">
                        <a href="{{ route('dash.show.email.subscriber') }}"
                            class=" tajawal_black side-menu__item">{{ trans('web_trans.send_msg') }}</a>
                    </li>



                </ul>
            </li>
            <!-- End::slide -->




            <!-- Start::slide -->
            <li class=" tajawal_black slide has-sub">
                <a href="javascript:void(0);" class=" tajawal_black side-menu__item">
                    <span class=" tajawal_black shape1"></span>
                    <span class=" tajawal_black shape2"></span>
                    <i class="fas fa-folder side-menu__icon"></i>
                    <span class=" tajawal_black side-menu__label">{{ trans('web_trans.all_sections') }}</span>
                    <i class="fe fe-chevron-right side-menu__angle"></i>
                </a>
                <ul class=" tajawal_black slide-menu child1">
                    <li class=" tajawal_black slide side-menu__label1">
                        <a href="javascript:void(0)">E-Commerce</a>
                    </li>
                    <li class=" tajawal_black slide">
                        <a href="{{ route('dash.funfact.index') }}" class=" tajawal_black side-menu__item">Fun Fact</a>
                    </li>
                    <li class=" tajawal_black slide">
                        <a href="{{ route('dash.marquee.index') }}" class=" tajawal_black side-menu__item">Marquee</a>
                    </li>
                    <li class=" tajawal_black slide">
                        <a href="{{ route('dash.offer.index') }}"
                            class=" tajawal_black side-menu__item">{{ trans('web_trans.offers') }}</a>
                    </li>

                    <li class=" tajawal_black slide">
                        <a href="{{ route('dash.action.index') }}" class=" tajawal_black side-menu__item">Call To Action</a>
                    </li>

                    <li class=" tajawal_black slide">
                        <a href="{{ route('dash.welcome.one.index') }}"
                            class=" tajawal_black side-menu__item">{{ trans('web_trans.welcome_one') }}</a>
                    </li>

                    <li class=" tajawal_black slide">
                        <a href="{{ route('dash.welcome.two.index') }}"
                            class=" tajawal_black side-menu__item">{{ trans('web_trans.welcome_two') }}</a>
                    </li>

                    <li class=" tajawal_black slide">
                        <a href="{{ route('dash.video.one.index') }}"
                            class=" tajawal_black side-menu__item">{{ trans('web_trans.video_one') }}</a>
                    </li>

                    <li class=" tajawal_black slide">
                        <a href="{{ route('dash.video.two.index') }}"
                            class=" tajawal_black side-menu__item">{{ trans('web_trans.video_two') }}</a>
                    </li>

                    <li class=" tajawal_black slide">
                        <a href="{{ route('dash.feature.one.index') }}"
                            class=" tajawal_black side-menu__item">{{ trans('web_trans.feature_one') }}</a>
                    </li>

                    <li class=" tajawal_black slide">
                        <a href="{{ route('dash.feature.two.index') }}"
                            class=" tajawal_black side-menu__item">{{ trans('web_trans.feature_two') }}</a>
                    </li>

                    <li class=" tajawal_black slide">
                        <a href="{{ route('dash.choose.one.index') }}"
                            class=" tajawal_black side-menu__item">{{ trans('web_trans.choose_one') }}</a>
                    </li>

                    <li class=" tajawal_black slide">
                        <a href="{{ route('dash.choose.two.index') }}"
                            class=" tajawal_black side-menu__item">{{ trans('web_trans.choose_two') }}</a>
                    </li>




                </ul>
            </li>
            <!-- End::slide -->

            <!-- Start::slide -->
            <li class=" tajawal_black slide has-sub">
                <a href="javascript:void(0);" class=" tajawal_black side-menu__item">
                    <span class=" tajawal_black shape1"></span>
                    <span class=" tajawal_black shape2"></span>
                    <i class="fas fa-folder side-menu__icon"></i>
                    <span class=" tajawal_black side-menu__label">{{ trans('web_trans.home_pages') }}</span>
                    <i class="fe fe-chevron-right side-menu__angle"></i>
                </a>
                <ul class=" tajawal_black slide-menu child1">
                    <li class=" tajawal_black slide side-menu__label1">
                        <a href="javascript:void(0)">E-Commerce</a>
                    </li>
                    <li class=" tajawal_black slide">
                        <a href="{{ route('dash.home.one.index') }}"
                            class=" tajawal_black side-menu__item">{{ trans('web_trans.home_one') }}</a>
                    </li>
                    <li class=" tajawal_black slide">
                        <a href="{{ route('dash.home.two.index') }}"
                            class=" tajawal_black side-menu__item">{{ trans('web_trans.home_two') }}</a>
                    </li>

                    <li class=" tajawal_black slide">
                        <a href="{{ route('dash.home.three.index') }}"
                            class=" tajawal_black side-menu__item">{{ trans('web_trans.home_three') }}</a>
                    </li>

                    <li class=" tajawal_black slide">
                        <a href="{{ route('dash.home.four.index') }}"
                            class=" tajawal_black side-menu__item">{{ trans('web_trans.home_four') }}</a>
                    </li>

                    <li class=" tajawal_black slide">
                        <a href="{{ route('dash.home.contact.photo.index') }}"
                            class=" tajawal_black side-menu__item">{{ trans('web_trans.contact_photos') }}</a>
                    </li>

                </ul>
            </li>
            <!-- End::slide -->



            <li class=" tajawal_black slide">
                <a href="{{ route('dash.other.page.index') }}" class=" tajawal_black side-menu__item">
                    <span class=" tajawal_black shape1"></span>
                    <span class=" tajawal_black shape2"></span>
                    <i class="far fa-caret-square-right side-menu__icon"></i>
                    <span class=" tajawal_black side-menu__label">{{ trans('web_trans.other_pages') }}</span>
                </a>
            </li>





            <!-- Start::slide -->
            <li class=" tajawal_black slide has-sub">
                <a href="javascript:void(0);" class=" tajawal_black side-menu__item">
                    <span class=" tajawal_black shape1"></span>
                    <span class=" tajawal_black shape2"></span>
                    <i class="fas fa-folder side-menu__icon"></i>
                    <span class=" tajawal_black side-menu__label">{{ trans('web_trans.translation') }}</span>
                    <i class="fe fe-chevron-right side-menu__angle"></i>
                </a>
                <ul class=" tajawal_black slide-menu child1">
                    <li class=" tajawal_black slide side-menu__label1">
                        <a href="javascript:void(0)">E-Commerce</a>
                    </li>
                    <li class=" tajawal_black slide">
                        <a href="{{ route('dash.translation.arabic.index') }}"
                            class=" tajawal_black side-menu__item">{{ trans('web_trans.arabic_trans') }}</a>
                    </li>
                    <li class=" tajawal_black slide">
                        <a href="{{ route('dash.translation.english.index') }}"
                            class=" tajawal_black side-menu__item">{{ trans('web_trans.english_trans') }}</a>
                    </li>



                </ul>
            </li>
            <!-- End::slide -->



            <li class=" tajawal_black slide">
                <a href="{{ route('dash.menu.manage.index') }}" class=" tajawal_black side-menu__item">
                    <span class=" tajawal_black shape1"></span>
                    <span class=" tajawal_black shape2"></span>
                    <i class="far fa-caret-square-right side-menu__icon"></i>
                    <span class=" tajawal_black side-menu__label">{{ trans('web_trans.menu_manage') }}</span>
                </a>
            </li>

            <li class=" tajawal_black slide">
                <a href="{{ route('dash.slider.index') }}" class=" tajawal_black side-menu__item">
                    <span class=" tajawal_black shape1"></span>
                    <span class=" tajawal_black shape2"></span>
                    <i class="far fa-caret-square-right side-menu__icon"></i>
                    <span class=" tajawal_black side-menu__label">{{ trans('web_trans.Slider') }}</span>
                </a>
            </li>


            <li class=" tajawal_black slide">
                <a href="{{ route('dash.service.index') }}" class=" tajawal_black side-menu__item">
                    <span class=" tajawal_black shape1"></span>
                    <span class=" tajawal_black shape2"></span>
                    <i class="far fa-caret-square-right side-menu__icon"></i>
                    <span class=" tajawal_black side-menu__label">{{ trans('web_trans.Services') }}</span>
                </a>
            </li>

            <li class=" tajawal_black slide">
                <a href="{{ route('dash.portfolio.index') }}" class=" tajawal_black side-menu__item">
                    <span class=" tajawal_black shape1"></span>
                    <span class=" tajawal_black shape2"></span>
                    <i class="far fa-caret-square-right side-menu__icon"></i>
                    <span class=" tajawal_black side-menu__label">{{ trans('web_trans.Portfolio') }} </span>
                </a>
            </li>

            <li class=" tajawal_black slide">
                <a href="{{ route('dash.team.index') }}" class=" tajawal_black side-menu__item">
                    <span class=" tajawal_black shape1"></span>
                    <span class=" tajawal_black shape2"></span>
                    <i class="far fa-caret-square-right side-menu__icon"></i>
                    <span class=" tajawal_black side-menu__label">{{ trans('web_trans.team_members') }}</span>
                </a>
            </li>

            <li class=" tajawal_black slide">
                <a href="{{ route('dash.testimonial.index') }}" class=" tajawal_black side-menu__item">
                    <span class=" tajawal_black shape1"></span>
                    <span class=" tajawal_black shape2"></span>
                    <i class="far fa-caret-square-right side-menu__icon"></i>
                    <span class=" tajawal_black side-menu__label">{{ trans('web_trans.testimonials') }}</span>
                </a>
            </li>

            <li class=" tajawal_black slide">
                <a href="{{ route('dash.FAQ.index') }}" class=" tajawal_black side-menu__item">
                    <span class=" tajawal_black shape1"></span>
                    <span class=" tajawal_black shape2"></span>
                    <i class="far fa-caret-square-right side-menu__icon"></i>
                    <span class=" tajawal_black side-menu__label">{{ trans('web_trans.FAQ') }}</span>
                </a>
            </li>

            <!-- Start::slide -->
            <li class=" tajawal_black slide has-sub">
                <a href="javascript:void(0);" class=" tajawal_black side-menu__item">
                    <span class=" tajawal_black shape1"></span>
                    <span class=" tajawal_black shape2"></span>
                    <i class="fas fa-folder side-menu__icon"></i>
                    <span class=" tajawal_black side-menu__label">{{ trans('web_trans.pricing_plans') }}</span>
                    <i class="fe fe-chevron-right side-menu__angle"></i>
                </a>
                <ul class=" tajawal_black slide-menu child1">
                    <li class=" tajawal_black slide side-menu__label1">
                        <a href="javascript:void(0)">E-Commerce</a>
                    </li>
                    <li class=" tajawal_black slide">
                        <a href="{{ route('dash.price.index') }}"
                            class=" tajawal_black side-menu__item">{{ trans('web_trans.pricing_plans') }}</a>
                    </li>
                    <li class=" tajawal_black slide">
                        <a href="{{ route('dash.pricing.order.index') }}"
                            class=" tajawal_black side-menu__item">{{ trans('web_trans.orders') }}</a>
                    </li>



                </ul>
            </li>
            <!-- End::slide -->


            <li class=" tajawal_black slide">
                <a href="{{ route('dash.client.index') }}" class=" tajawal_black side-menu__item">
                    <span class=" tajawal_black shape1"></span>
                    <span class=" tajawal_black shape2"></span>
                    <i class="far fa-caret-square-right side-menu__icon"></i>
                    <span class=" tajawal_black side-menu__label">{{ trans('web_trans.clients') }}</span>
                </a>
            </li>



        </ul>
        <div class=" tajawal_black slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                width="24" height="24" viewBox="0 0 24 24">
                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
            </svg></div>
    </nav>
    <!-- End::nav -->

</div>
<!-- End::main-sidebar -->
