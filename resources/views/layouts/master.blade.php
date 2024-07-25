

<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    @include('layouts.head')

</head>

<body dir="{{ App::getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

    <!-- Start Switcher -->
    <div class=" tajawal_black offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class=" tajawal_black offcanvas-header border-bottom">
            <h5 class=" tajawal_black offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5>
            <button type="button" class=" tajawal_black btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class=" tajawal_black offcanvas-body">
            <nav class=" tajawal_black border-bottom border-block-end-dashed">
                <div class=" tajawal_black nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
                    <button class=" tajawal_black nav-link active" id="switcher-home-tab" data-bs-toggle="tab" data-bs-target="#switcher-home"
                        type="button" role="tab" aria-controls="switcher-home" aria-selected="true">Theme Styles</button>
                    <button class=" tajawal_black nav-link" id="switcher-profile-tab" data-bs-toggle="tab" data-bs-target="#switcher-profile"
                        type="button" role="tab" aria-controls="switcher-profile" aria-selected="false">Theme Colors</button>
                </div>
            </nav>
            <div class=" tajawal_black tab-content" id="nav-tabContent">
                <div class=" tajawal_black tab-pane fade show active border-0" id="switcher-home" role="tabpanel" aria-labelledby="switcher-home-tab"
                    tabindex="0">
                    <div class=" tajawal_black ">
                        <p class=" tajawal_black switcher-style-head">Theme Color Mode:</p>
                        <div class=" tajawal_black row switcher-style gx-0">
                            <div class=" tajawal_black col-4">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-light-theme">
                                        Light
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="theme-style" id="switcher-light-theme"
                                        checked>
                                </div>
                            </div>
                            <div class=" tajawal_black col-4">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-dark-theme">
                                        Dark
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="theme-style" id="switcher-dark-theme">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" tajawal_black ">
                        <p class=" tajawal_black switcher-style-head">Directions:</p>
                        <div class=" tajawal_black row switcher-style gx-0">
                            <div class=" tajawal_black col-4">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-ltr">
                                        LTR
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="direction" id="switcher-ltr" checked>
                                </div>
                            </div>
                            <div class=" tajawal_black col-4">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-rtl">
                                        RTL
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="direction" id="switcher-rtl">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" tajawal_black ">
                        <p class=" tajawal_black switcher-style-head">Navigation Styles:</p>
                        <div class=" tajawal_black row switcher-style gx-0">
                            <div class=" tajawal_black col-4">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-vertical">
                                        Vertical
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="navigation-style" id="switcher-vertical"
                                        checked>
                                </div>
                            </div>
                            <div class=" tajawal_black col-4">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-horizontal">
                                        Horizontal
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="navigation-style"
                                        id="switcher-horizontal">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" tajawal_black navigation-menu-styles">
                        <p class=" tajawal_black switcher-style-head">Vertical & Horizontal Menu Styles:</p>
                        <div class=" tajawal_black row switcher-style gx-0 pb-2 gy-2">
                            <div class=" tajawal_black col-4">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-menu-click">
                                        Menu Click
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-click">
                                </div>
                            </div>
                            <div class=" tajawal_black col-4">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-menu-hover">
                                        Menu Hover
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-hover">
                                </div>
                            </div>
                            <div class=" tajawal_black col-4">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-icon-click">
                                        Icon Click
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-click">
                                </div>
                            </div>
                            <div class=" tajawal_black col-4">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-icon-hover">
                                        Icon Hover
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-hover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" tajawal_black sidemenu-layout-styles">
                        <p class=" tajawal_black switcher-style-head">Sidemenu Layout Styles:</p>
                        <div class=" tajawal_black row switcher-style gx-0 pb-2 gy-2">
                            <div class=" tajawal_black col-sm-6">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-default-menu">
                                        Default Menu
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-default-menu" checked>
                                </div>
                            </div>
                            <div class=" tajawal_black col-sm-6">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-closed-menu">
                                        Closed Menu
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-closed-menu">
                                </div>
                            </div>
                            <div class=" tajawal_black col-sm-6">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-icontext-menu">
                                        Icon Text
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icontext-menu">
                                </div>
                            </div>
                            <div class=" tajawal_black col-sm-6">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-icon-overlay">
                                        Icon Overlay
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icon-overlay">
                                </div>
                            </div>
                            <div class=" tajawal_black col-sm-6">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-detached">
                                        Detached
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-detached">
                                </div>
                            </div>
                            <div class=" tajawal_black col-sm-6">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-double-menu">
                                        Double Menu
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-double-menu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" tajawal_black ">
                        <p class=" tajawal_black switcher-style-head">Page Styles:</p>
                        <div class=" tajawal_black row switcher-style gx-0">
                            <div class=" tajawal_black col-4">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-regular">
                                        Regular
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="page-styles" id="switcher-regular"
                                        checked>
                                </div>
                            </div>
                            <div class=" tajawal_black col-4">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-classic">
                                        Classic
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="page-styles" id="switcher-classic">
                                </div>
                            </div>
                            <div class=" tajawal_black col-4">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-modern">
                                        Modern
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="page-styles" id="switcher-modern">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" tajawal_black ">
                        <p class=" tajawal_black switcher-style-head">Layout Width Styles:</p>
                        <div class=" tajawal_black row switcher-style gx-0">
                            <div class=" tajawal_black col-4">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-full-width">
                                        Full Width
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="layout-width" id="switcher-full-width"
                                        checked>
                                </div>
                            </div>
                            <div class=" tajawal_black col-4">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-boxed">
                                        Boxed
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="layout-width" id="switcher-boxed">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" tajawal_black ">
                        <p class=" tajawal_black switcher-style-head">Menu Positions:</p>
                        <div class=" tajawal_black row switcher-style gx-0">
                            <div class=" tajawal_black col-4">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-menu-fixed">
                                        Fixed
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="menu-positions" id="switcher-menu-fixed"
                                        checked>
                                </div>
                            </div>
                            <div class=" tajawal_black col-4">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-menu-scroll">
                                        Scrollable
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="menu-positions" id="switcher-menu-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" tajawal_black ">
                        <p class=" tajawal_black switcher-style-head">Header Positions:</p>
                        <div class=" tajawal_black row switcher-style gx-0">
                            <div class=" tajawal_black col-4">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-header-fixed">
                                        Fixed
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-fixed" checked>
                                </div>
                            </div>
                            <div class=" tajawal_black col-4">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-header-scroll">
                                        Scrollable
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" tajawal_black ">
                        <p class=" tajawal_black switcher-style-head">Loader:</p>
                        <div class=" tajawal_black row switcher-style gx-0">
                            <div class=" tajawal_black col-4">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-loader-enable">
                                        Enable
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="page-loader"
                                        id="switcher-loader-enable">
                                </div>
                            </div>
                            <div class=" tajawal_black col-4">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-loader-disable">
                                        Disable
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="page-loader"
                                        id="switcher-loader-disable" checked>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" tajawal_black tab-pane fade border-0" id="switcher-profile" role="tabpanel" aria-labelledby="switcher-profile-tab" tabindex="0">
                    <div>
                        <div class=" tajawal_black theme-colors">
                            <p class=" tajawal_black switcher-style-head">Menu Colors:</p>
                            <div class=" tajawal_black d-flex switcher-style pb-2">
                                <div class=" tajawal_black form-check switch-select me-3">
                                    <input class=" tajawal_black form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-light">
                                </div>
                                <div class=" tajawal_black form-check switch-select me-3">
                                    <input class=" tajawal_black form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-dark" checked>
                                </div>
                                <div class=" tajawal_black form-check switch-select me-3">
                                    <input class=" tajawal_black form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-primary">
                                </div>
                                <div class=" tajawal_black form-check switch-select me-3">
                                    <input class=" tajawal_black form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Gradient Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-gradient">
                                </div>
                                <div class=" tajawal_black form-check switch-select me-3">
                                    <input class=" tajawal_black form-check-input color-input color-transparent"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu"
                                        type="radio" name="menu-colors" id="switcher-menu-transparent">
                                </div>
                            </div>
                            <div class=" tajawal_black px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically change from below Theme Primary color picker</div>
                        </div>
                        <div class=" tajawal_black theme-colors">
                            <p class=" tajawal_black switcher-style-head">Header Colors:</p>
                            <div class=" tajawal_black d-flex switcher-style pb-2">
                                <div class=" tajawal_black form-check switch-select me-3">
                                    <input class=" tajawal_black form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Header" type="radio" name="header-colors"
                                        id="switcher-header-light" checked>
                                </div>
                                <div class=" tajawal_black form-check switch-select me-3">
                                    <input class=" tajawal_black form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Header" type="radio" name="header-colors"
                                        id="switcher-header-dark">
                                </div>
                                <div class=" tajawal_black form-check switch-select me-3">
                                    <input class=" tajawal_black form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Header" type="radio" name="header-colors"
                                        id="switcher-header-primary">
                                </div>
                                <div class=" tajawal_black form-check switch-select me-3">
                                    <input class=" tajawal_black form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Gradient Header" type="radio" name="header-colors"
                                        id="switcher-header-gradient">
                                </div>
                                <div class=" tajawal_black form-check switch-select me-3">
                                    <input class=" tajawal_black form-check-input color-input color-transparent" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Transparent Header" type="radio" name="header-colors"
                                        id="switcher-header-transparent">
                                </div>
                            </div>
                            <div class=" tajawal_black px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically change from below Theme Primary color picker</div>
                        </div>
                        <div class=" tajawal_black theme-colors">
                            <p class=" tajawal_black switcher-style-head">Theme Primary:</p>
                            <div class=" tajawal_black d-flex flex-wrap align-items-center switcher-style">
                                <div class=" tajawal_black form-check switch-select me-3">
                                    <input class=" tajawal_black form-check-input color-input color-primary-1" type="radio"
                                        name="theme-primary" id="switcher-primary">
                                </div>
                                <div class=" tajawal_black form-check switch-select me-3">
                                    <input class=" tajawal_black form-check-input color-input color-primary-2" type="radio"
                                        name="theme-primary" id="switcher-primary1">
                                </div>
                                <div class=" tajawal_black form-check switch-select me-3">
                                    <input class=" tajawal_black form-check-input color-input color-primary-3" type="radio" name="theme-primary"
                                        id="switcher-primary2">
                                </div>
                                <div class=" tajawal_black form-check switch-select me-3">
                                    <input class=" tajawal_black form-check-input color-input color-primary-4" type="radio" name="theme-primary"
                                        id="switcher-primary3">
                                </div>
                                <div class=" tajawal_black form-check switch-select me-3">
                                    <input class=" tajawal_black form-check-input color-input color-primary-5" type="radio" name="theme-primary"
                                        id="switcher-primary4">
                                </div>
                                <div class=" tajawal_black form-check switch-select ps-0 mt-1 color-primary-light">
                                    <div class=" tajawal_black theme-container-primary"></div>
                                    <div class=" tajawal_black pickr-container-primary"></div>
                                </div>
                            </div>
                        </div>
                        <div class=" tajawal_black theme-colors">
                            <p class=" tajawal_black switcher-style-head">Theme Background:</p>
                            <div class=" tajawal_black d-flex flex-wrap align-items-center switcher-style">
                                <div class=" tajawal_black form-check switch-select me-3">
                                    <input class=" tajawal_black form-check-input color-input color-bg-1" type="radio"
                                        name="theme-background" id="switcher-background">
                                </div>
                                <div class=" tajawal_black form-check switch-select me-3">
                                    <input class=" tajawal_black form-check-input color-input color-bg-2" type="radio"
                                        name="theme-background" id="switcher-background1">
                                </div>
                                <div class=" tajawal_black form-check switch-select me-3">
                                    <input class=" tajawal_black form-check-input color-input color-bg-3" type="radio" name="theme-background"
                                        id="switcher-background2">
                                </div>
                                <div class=" tajawal_black form-check switch-select me-3">
                                    <input class=" tajawal_black form-check-input color-input color-bg-4" type="radio"
                                        name="theme-background" id="switcher-background3">
                                </div>
                                <div class=" tajawal_black form-check switch-select me-3">
                                    <input class=" tajawal_black form-check-input color-input color-bg-5" type="radio"
                                        name="theme-background" id="switcher-background4">
                                </div>
                                <div class=" tajawal_black form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                    <div class=" tajawal_black theme-container-background"></div>
                                    <div class=" tajawal_black pickr-container-background"></div>
                                </div>
                            </div>
                        </div>
                        <div class=" tajawal_black menu-image mb-3">
                            <p class=" tajawal_black switcher-style-head">Menu With Background Image:</p>
                            <div class=" tajawal_black d-flex flex-wrap align-items-center switcher-style">
                                <div class=" tajawal_black form-check switch-select m-2">
                                    <input class=" tajawal_black form-check-input bgimage-input bg-img1" type="radio"
                                        name="theme-background" id="switcher-bg-img">
                                </div>
                                <div class=" tajawal_black form-check switch-select m-2">
                                    <input class=" tajawal_black form-check-input bgimage-input bg-img2" type="radio"
                                        name="theme-background" id="switcher-bg-img1">
                                </div>
                                <div class=" tajawal_black form-check switch-select m-2">
                                    <input class=" tajawal_black form-check-input bgimage-input bg-img3" type="radio" name="theme-background"
                                        id="switcher-bg-img2">
                                </div>
                                <div class=" tajawal_black form-check switch-select m-2">
                                    <input class=" tajawal_black form-check-input bgimage-input bg-img4" type="radio"
                                        name="theme-background" id="switcher-bg-img3">
                                </div>
                                <div class=" tajawal_black form-check switch-select m-2">
                                    <input class=" tajawal_black form-check-input bgimage-input bg-img5" type="radio"
                                        name="theme-background" id="switcher-bg-img4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" tajawal_black d-grid canvas-footer">
                    <a href="javascript:void(0);" id="reset-all" class=" tajawal_black btn btn-secondary btn-block m-1">Reset</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->


    <!-- Loader -->
    <div id="loader" >
        <img src="{{ asset('dashboard/assets/images/media/media-79.svg') }}" alt="">
    </div>
    <!-- Loader -->

    <div class=" tajawal_black page">
         <!-- app-header -->
         <header class=" tajawal_black app-header">

            @include('layouts.header')

        </header>
        <!-- /app-header -->
        <!-- Start::app-sidebar -->
        <aside class=" tajawal_black app-sidebar sticky" id="sidebar">

        @include('layouts.siderbar')


        </aside>
        <!-- End::app-sidebar -->

        <!-- Start::app-content -->
        <div class=" tajawal_black main-content app-content">
           @yield('content')
        </div>
        <!-- End::app-content -->

        <div class=" tajawal_black modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
          <div class=" tajawal_black modal-dialog">
            <div class=" tajawal_black modal-content">
                <div class=" tajawal_black modal-body">
                  <span class=" tajawal_black input-group">
                    <input type="search" class=" tajawal_black form-control px-2 " placeholder="Search..." aria-label="Username">
                    <a href="javascript:void(0);" class=" tajawal_black input-group-text bg-primary text-white" id="Search-Grid"><i class="fe fe-search header-link-icon fs-18"></i></a>
                  </span>
                  <div class=" tajawal_black mt-3">
                    <div class=" tajawal_black ">
                        <p class=" tajawal_black fw-semibold text-muted mb-2 fs-13">Recent Searches</p>
                        <div class=" tajawal_black ps-2">
                            <a  href="javascript:void(0)" class=" tajawal_black search-tags"><i class="fe fe-search me-2"></i>People<span></span></a>
                            <a  href="javascript:void(0)" class=" tajawal_black search-tags"><i class="fe fe-search me-2"></i>Pages<span></span></a>
                            <a  href="javascript:void(0)" class=" tajawal_black search-tags"><i class="fe fe-search me-2"></i>Articles<span></span></a>
                        </div>
                    </div>
                    <div class=" tajawal_black mt-3">
                        <p class=" tajawal_black fw-semibold text-muted mb-2 fs-13">Apps and pages</p>
                        <ul class=" tajawal_black ps-2">
                            <li class=" tajawal_black p-1 d-flex align-items-center text-muted mb-2 search-app">
                                <a href="full-calendar.html"><span><i class='bx bx-calendar me-2 fs-14 bg-primary-transparent p-2 rounded-circle '></i>Calendar</span></a>
                            </li>
                            <li class=" tajawal_black p-1 d-flex align-items-center text-muted mb-2 search-app">
                                <a href="mail.html"><span><i class='bx bx-envelope me-2 fs-14 bg-primary-transparent p-2 rounded-circle'></i>Mail</span></a>
                            </li>
                            <li class=" tajawal_black p-1 d-flex align-items-center text-muted mb-2 search-app">
                                <a href="buttons.html"><span><i class='bx bx-dice-1 me-2 fs-14 bg-primary-transparent p-2 rounded-circle '></i>Buttons</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class=" tajawal_black mt-3">
                      <p class=" tajawal_black fw-semibold text-muted mb-2 fs-13">Links</p>
                      <ul class=" tajawal_black ps-2">
                          <li class=" tajawal_black p-1 align-items-center  mb-1 search-app">
                                  <a href="javascript:void(0)" class=" tajawal_black text-primary"><u>http://spruko/html/spruko.com</u></a>
                          </li>
                          <li class=" tajawal_black p-1 align-items-center mb-1 search-app">
                                  <a href="javascript:void(0)"  class=" tajawal_black text-primary"><u>http://spruko/demo/spruko.com</u></a>
                          </li>
                      </ul>
                    </div>
                  </div>
              </div>
              <div class=" tajawal_black modal-footer d-block">
                <div class=" tajawal_black text-center">
                    <a href="javascript:void(0)" class=" tajawal_black text-primary text-decoration-underline fs-15">View all results</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Footer Start -->
        <footer class=" tajawal_black footer mt-auto py-3 bg-white text-center">
            <div class=" tajawal_black container">
                <span class=" tajawal_black text-muted"> Copyright © <span id="year"></span> <a
                        href="javascript:void(0);" class=" tajawal_black text-dark fw-semibold">Spruha</a>.
                    Designed with <span class=" tajawal_black bi bi-heart-fill text-danger"></span> by <a href="javascript:void(0);">
                        <span class=" tajawal_black fw-semibold text-primary text-decoration-underline">Spruko</span>
                    </a> All
                    rights
                    reserved
                </span>
            </div>
        </footer>
        <!-- Footer End -->
        <!-- Start Right-Sidebar -->
        <div class=" tajawal_black offcanvas offcanvas-end" tabindex="-1" id="right-sidebar-canvas" aria-labelledby="offcanvasRightLabel1">
            <div class=" tajawal_black offcanvas-header border-bottom">
                <h5 class=" tajawal_black offcanvas-title text-default" id="offcanvasRightLabel1">Todo</h5>
                <button type="button" class=" tajawal_black btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class=" tajawal_black offcanvas-body p-0 sidebar-right">
                    <div class=" tajawal_black d-flex p-3">
                        <div class=" tajawal_black form-check">
                            <input class=" tajawal_black form-check-input" type="checkbox" value="" id="checkebox-sm1" checked="">
                            <label class=" tajawal_black form-check-label" for="checkebox-sm1"> Hangout With friends </label>
                        </div>
                        <span class=" tajawal_black ms-auto">
                            <i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Edit"></i>
                            <i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Delete"></i>
                        </span>
                    </div>
                    <div class=" tajawal_black d-flex p-3 border-top">
                        <div class=" tajawal_black form-check">
                            <input class=" tajawal_black form-check-input" type="checkbox" value="" id="checkebox-sm2">
                            <label class=" tajawal_black form-check-label" for="checkebox-sm2"> Prepare for presentation </label>
                        </div>
                        <span class=" tajawal_black ms-auto">
                            <i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Edit"></i>
                            <i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Delete"></i>
                        </span>
                    </div>
                    <div class=" tajawal_black d-flex p-3 border-top">
                        <div class=" tajawal_black form-check">
                            <input class=" tajawal_black form-check-input" type="checkbox" value="" id="checkebox-sm3">
                            <label class=" tajawal_black form-check-label" for="checkebox-sm3"> Prepare for presentation </label>
                        </div>
                        <span class=" tajawal_black ms-auto">
                            <i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Edit"></i>
                            <i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Delete"></i>
                        </span>
                    </div>
                    <div class=" tajawal_black d-flex p-3 border-top">
                        <div class=" tajawal_black form-check">
                            <input class=" tajawal_black form-check-input" type="checkbox" value="" id="checkebox-sm4" checked="">
                            <label class=" tajawal_black form-check-label" for="checkebox-sm4"> System Updated </label>
                        </div>
                        <span class=" tajawal_black ms-auto">
                            <i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Edit"></i>
                            <i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Delete"></i>
                        </span>
                    </div>
                    <div class=" tajawal_black d-flex p-3 border-top">
                        <div class=" tajawal_black form-check">
                            <input class=" tajawal_black form-check-input" type="checkbox" value="" id="checkebox-sm5">
                            <label class=" tajawal_black form-check-label" for="checkebox-sm5"> Do something more </label>
                        </div>
                        <span class=" tajawal_black ms-auto">
                            <i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Edit"></i>
                            <i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Delete"></i>
                        </span>
                    </div>
                    <div class=" tajawal_black d-flex p-3 border-top">
                        <div class=" tajawal_black form-check">
                            <input class=" tajawal_black form-check-input" type="checkbox" value="" id="checkebox-sm6">
                            <label class=" tajawal_black form-check-label" for="checkebox-sm6"> System Updated </label>
                        </div>
                        <span class=" tajawal_black ms-auto">
                            <i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Edit"></i>
                            <i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Delete"></i>
                        </span>
                    </div>
                    <div class=" tajawal_black d-flex p-3 border-top">
                        <div class=" tajawal_black form-check">
                            <input class=" tajawal_black form-check-input" type="checkbox" value="" id="checkebox-sm7" checked="">
                            <label class=" tajawal_black form-check-label" for="checkebox-sm7"> Find an Idea </label>
                        </div>
                        <span class=" tajawal_black ms-auto">
                            <i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Edit"></i>
                            <i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Delete"></i>
                        </span>
                    </div>
                    <div class=" tajawal_black d-flex p-3 border-top mb-0">
                        <div class=" tajawal_black form-check">
                            <input class=" tajawal_black form-check-input" type="checkbox" value="" id="checkebox-sm8" checked="">
                            <label class=" tajawal_black form-check-label" for="checkebox-sm8"> Project review </label>
                        </div>
                        <span class=" tajawal_black ms-auto">
                            <i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Edit"></i>
                            <i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Delete"></i>
                        </span>
                    </div>
                    <h5 class=" tajawal_black px-4 Overviews">Overview</h5>
                    <div class=" tajawal_black p-4">
                        <div class=" tajawal_black main-traffic-detail-item">
                            <div>
                                <span>Founder &amp; CEO</span> <span>24</span>
                            </div>
                            <div class=" tajawal_black progress mb-3 progress-sm progress-animate" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                <div class=" tajawal_black progress-bar bg-primary" style="width: 25%"></div>
                            </div><!-- progress -->
                        </div>
                        <div class=" tajawal_black main-traffic-detail-item">
                            <div>
                                <span>UX Designer</span> <span>1</span>
                            </div>
                            <div class=" tajawal_black progress mb-3 progress-sm progress-animate" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                <div class=" tajawal_black progress-bar bg-secondary" style="width: 10%"></div>
                            </div><!-- progress -->
                        </div>
                        <div class=" tajawal_black main-traffic-detail-item">
                            <div>
                                <span>Recruitment</span> <span>87</span>
                            </div>
                            <div class=" tajawal_black progress mb-3 progress-sm progress-animate" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                <div class=" tajawal_black progress-bar bg-success" style="width: 45%"></div>
                            </div><!-- progress -->
                        </div>
                        <div class=" tajawal_black main-traffic-detail-item">
                            <div>
                                <span>Software Engineer</span> <span>32</span>
                            </div>
                            <div class=" tajawal_black progress mb-3 progress-sm progress-animate" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                <div class=" tajawal_black progress-bar bg-info" style="width: 30%"></div>
                            </div><!-- progress -->
                        </div>
                        <div class=" tajawal_black main-traffic-detail-item">
                            <div>
                                <span>Project Manager</span> <span>32</span>
                            </div>
                            <div class=" tajawal_black progress progress-sm progress-animate" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                <div class=" tajawal_black progress-bar bg-danger" style="width: 30%"></div>
                            </div><!-- progress -->
                        </div>
                    </div>
            </div>
        </div>
        <!-- End Right-Sidebar -->



    </div>


    <!-- Scroll To Top -->
    <div class=" tajawal_black scrollToTop">
        <span class=" tajawal_black arrow"><i class="fe fe-arrow-up"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->

    @include('layouts.scripts')


</body>

</html>
