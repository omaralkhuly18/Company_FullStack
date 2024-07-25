<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="dark" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> SPRUHA - Bootstrap 5 Premium Admin & Dashboard Template </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('dashboard/assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">

    <!-- Authentication-main Js -->
    <script src="{{ asset('dashboard/assets/js/authentication-main.js') }}"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('dashboard/assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Style Css -->
    <link href="{{ asset('dashboard/assets/css/styles.min.css') }}" rel="stylesheet">

    <!-- Icons Css -->
    <link href="{{ asset('dashboard/assets/css/icons.css') }}" rel="stylesheet">
<style>
    .flag-icon-small {
        width: 16px;
        height: 16px;
    }
</style>
    <script>
        if (localStorage.spruhalandingdarktheme) {
            document.querySelector("html").setAttribute("data-theme-mode", "dark")
        }
        if (localStorage.spruhalandingrtl) {
            document.querySelector("html").setAttribute("dir", "rtl")
            document.querySelector("#style")?.setAttribute("href", "../assets/libs/bootstrap/css/bootstrap.rtl.min.css");
        }
    </script>

</head>

<body class=" tajawal_black error-1" dir="{{ App::getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

    <!-- Start switcher -->
    <div class=" tajawal_black offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class=" tajawal_black offcanvas-header border-bottom">
            <h5 class=" tajawal_black offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5>
            <button type="button" class=" tajawal_black btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class=" tajawal_black offcanvas-body">
            <nav class=" tajawal_black border-bottom border-block-end-dashed">
                <div class=" tajawal_black nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
                    <button class=" tajawal_black nav-link active" id="switcher-home-tab" data-bs-toggle="tab"
                        data-bs-target="#switcher-home" type="button" role="tab" aria-controls="switcher-home"
                        aria-selected="true">Theme Styles</button>
                    <button class=" tajawal_black nav-link" id="switcher-profile-tab" data-bs-toggle="tab"
                        data-bs-target="#switcher-profile" type="button" role="tab"
                        aria-controls="switcher-profile" aria-selected="false">Theme Colors</button>
                </div>
            </nav>
            <div class=" tajawal_black tab-content" id="nav-tabContent">
                <div class=" tajawal_black tab-pane fade show active border-0" id="switcher-home" role="tabpanel"
                    aria-labelledby="switcher-home-tab" tabindex="0">
                    <div class=" tajawal_black ">
                        <p class=" tajawal_black switcher-style-head">Theme Color Mode:</p>
                        <div class=" tajawal_black row switcher-style gx-0">
                            <div class=" tajawal_black col-4">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-light-theme">
                                        Light
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="theme-style"
                                        id="switcher-light-theme" checked>
                                </div>
                            </div>
                            <div class=" tajawal_black col-4">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-dark-theme">
                                        Dark
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="theme-style"
                                        id="switcher-dark-theme">
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
                                    <input class=" tajawal_black form-check-input" type="radio" name="direction" id="switcher-ltr"
                                        checked>
                                </div>
                            </div>
                            <div class=" tajawal_black col-4">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-rtl">
                                        RTL
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="direction"
                                        id="switcher-rtl">
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
                                    <input class=" tajawal_black form-check-input" type="radio" name="navigation-style"
                                        id="switcher-vertical" checked>
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
                                    <input class=" tajawal_black form-check-input" type="radio" name="page-styles"
                                        id="switcher-regular" checked>
                                </div>
                            </div>
                            <div class=" tajawal_black col-4">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-classic">
                                        Classic
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="page-styles"
                                        id="switcher-classic">
                                </div>
                            </div>
                            <div class=" tajawal_black col-4">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-modern">
                                        Modern
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="page-styles"
                                        id="switcher-modern">
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
                                    <input class=" tajawal_black form-check-input" type="radio" name="layout-width"
                                        id="switcher-full-width" checked>
                                </div>
                            </div>
                            <div class=" tajawal_black col-4">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-boxed">
                                        Boxed
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="layout-width"
                                        id="switcher-boxed">
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
                                    <input class=" tajawal_black form-check-input" type="radio" name="menu-positions"
                                        id="switcher-menu-fixed" checked>
                                </div>
                            </div>
                            <div class=" tajawal_black col-4">
                                <div class=" tajawal_black form-check switch-select">
                                    <label class=" tajawal_black form-check-label" for="switcher-menu-scroll">
                                        Scrollable
                                    </label>
                                    <input class=" tajawal_black form-check-input" type="radio" name="menu-positions"
                                        id="switcher-menu-scroll">
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
                <div class=" tajawal_black tab-pane fade border-0" id="switcher-profile" role="tabpanel"
                    aria-labelledby="switcher-profile-tab" tabindex="0">
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
                                    <input class=" tajawal_black form-check-input color-input color-gradient"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Gradient Menu"
                                        type="radio" name="menu-colors" id="switcher-menu-gradient">
                                </div>
                                <div class=" tajawal_black form-check switch-select me-3">
                                    <input class=" tajawal_black form-check-input color-input color-transparent"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu"
                                        type="radio" name="menu-colors" id="switcher-menu-transparent">
                                </div>
                            </div>
                            <div class=" tajawal_black px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically
                                change from below Theme Primary color picker</div>
                        </div>
                        <div class=" tajawal_black theme-colors">
                            <p class=" tajawal_black switcher-style-head">Header Colors:</p>
                            <div class=" tajawal_black d-flex switcher-style pb-2">
                                <div class=" tajawal_black form-check switch-select me-3">
                                    <input class=" tajawal_black form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Header" type="radio"
                                        name="header-colors" id="switcher-header-light" checked>
                                </div>
                                <div class=" tajawal_black form-check switch-select me-3">
                                    <input class=" tajawal_black form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Header" type="radio"
                                        name="header-colors" id="switcher-header-dark">
                                </div>
                                <div class=" tajawal_black form-check switch-select me-3">
                                    <input class=" tajawal_black form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Header" type="radio"
                                        name="header-colors" id="switcher-header-primary">
                                </div>
                                <div class=" tajawal_black form-check switch-select me-3">
                                    <input class=" tajawal_black form-check-input color-input color-gradient"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Gradient Header"
                                        type="radio" name="header-colors" id="switcher-header-gradient">
                                </div>
                                <div class=" tajawal_black form-check switch-select me-3">
                                    <input class=" tajawal_black form-check-input color-input color-transparent"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Header"
                                        type="radio" name="header-colors" id="switcher-header-transparent">
                                </div>
                            </div>
                            <div class=" tajawal_black px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically
                                change from below Theme Primary color picker</div>
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
                                    <input class=" tajawal_black form-check-input color-input color-primary-3" type="radio"
                                        name="theme-primary" id="switcher-primary2">
                                </div>
                                <div class=" tajawal_black form-check switch-select me-3">
                                    <input class=" tajawal_black form-check-input color-input color-primary-4" type="radio"
                                        name="theme-primary" id="switcher-primary3">
                                </div>
                                <div class=" tajawal_black form-check switch-select me-3">
                                    <input class=" tajawal_black form-check-input color-input color-primary-5" type="radio"
                                        name="theme-primary" id="switcher-primary4">
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
                                    <input class=" tajawal_black form-check-input color-input color-bg-3" type="radio"
                                        name="theme-background" id="switcher-background2">
                                </div>
                                <div class=" tajawal_black form-check switch-select me-3">
                                    <input class=" tajawal_black form-check-input color-input color-bg-4" type="radio"
                                        name="theme-background" id="switcher-background3">
                                </div>
                                <div class=" tajawal_black form-check switch-select me-3">
                                    <input class=" tajawal_black form-check-input color-input color-bg-5" type="radio"
                                        name="theme-background" id="switcher-background4">
                                </div>
                                <div
                                    class=" tajawal_black form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
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
                                    <input class=" tajawal_black form-check-input bgimage-input bg-img3" type="radio"
                                        name="theme-background" id="switcher-bg-img2">
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
                <div class=" tajawal_black d-flex justify-content-center gap-1 canvas-footer flex-wrap align-items-center">
                    <a href="javascript:void(0);" class=" tajawal_black btn btn-primary">Buy Now</a>
                    <a href="https://themeforest.net/user/spruko/portfolio" class=" tajawal_black btn btn-secondary">Our
                        Portfolio</a>
                    <a href="javascript:void(0);" id="reset-all" class=" tajawal_black btn btn-danger">Reset</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End switcher -->

    <div class=" tajawal_black page main-signin-wrapper">

        <!-- Start::row-1 -->
        <div class=" tajawal_black row signpages text-center">
            <div class=" tajawal_black col-md-12">
                <div class=" tajawal_black card mb-0">
                    <div class=" tajawal_black row row-sm">
                        <div class=" tajawal_black col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
                            <div class=" tajawal_black mt-5 pt-4 p-2 position-absolute">

                                <div class=" tajawal_black clearfix"></div>
                                <img src="{{ asset('dashboard/assets/images/svgs/user.svg') }}" class=" tajawal_black ht-100 mb-0"
                                    alt="user">

                                <h5 class=" tajawal_black mt-4">{{ trans('web_trans.Create Your Account') }}</h5>
                                <span
                                    class=" tajawal_black text-white-6 fs-13 mb-5 mt-xl-0">{{ trans('web_trans.Signup to create, discover and connect with the global community') }}</span>
                            </div>
                        </div>
                        <div class=" tajawal_black col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
                            <div class=" tajawal_black main-container container-fluid">
                                <div class=" tajawal_black row row-sm">
                                    <div class=" tajawal_black card-body mt-2 mb-2">
                                        <div class=" tajawal_black clearfix"></div>

                                        <ul class=" tajawal_black navbar-nav ml-auto">
                                            <li class=" tajawal_black nav-item dropdown no-arrow">
                                                <a class=" tajawal_black nav-link dropdown-toggle" href="#"
                                                    id="languageDropdown" role="button" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    @if (LaravelLocalization::getCurrentLocale() === 'ar')
                                                        <img src="{{ asset('assets/dist-admin/uploads/saudi-arabia.png') }}"
                                                            alt="Egypt Flag" class=" tajawal_black flag-icon flag-icon-small"><span
                                                            style="margin: 5px;">العربية</span>
                                                    @else
                                                        <img src="{{ asset('assets/dist-admin/uploads/usa-icon.png') }}"
                                                            alt="USA Flag" class=" tajawal_black flag-icon  flag-icon-small"><span
                                                            style="margin: 5px;">English</span>
                                                    @endif
                                                </a>
                                                <div class=" tajawal_black dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                                    data-bs-popper="static" aria-labelledby="languageDropdown">
                                                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                        <a class=" tajawal_black dropdown-item"
                                                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                            @if ($localeCode === 'ar')
                                                                <img src="{{ asset('assets/dist-admin/uploads/saudi-arabia.png') }}"
                                                                    alt="Egypt Flag"
                                                                    class=" tajawal_black flag-icon flag-icon-small">
                                                            @else
                                                                <img src="{{ asset('assets/dist-admin/uploads/usa-icon.png') }}"
                                                                    alt="USA Flag" class=" tajawal_black flag-icon flag-icon-small">
                                                            @endif
                                                            {{ $properties['native'] }}
                                                        </a>
                                                    @endforeach
                                                </div>
                                            </li>
                                        </ul>
                                        <div class=" tajawal_black text-center">
                                            <h1 class=" tajawal_black h4 text-gray-900 mb-4 fw-bold">
                                                {{ trans('web_trans.admin_login') }}</h1>
                                        </div>


                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div class=" tajawal_black form-group text-start">
                                                <input id="email" type="email"
                                                    class=" tajawal_black form-control @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}" required
                                                    autocomplete="email" autofocus
                                                    placeholder="{{ trans('web_trans.email') }}">

                                                @error('email')
                                                    <span class=" tajawal_black invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class=" tajawal_black form-group text-start">
                                                <input id="password" type="password"
                                                    class=" tajawal_black form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="current-password"
                                                    placeholder="{{ trans('web_trans.password') }}">

                                                @error('password')
                                                    <span class=" tajawal_black invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <button type="submit"
                                                class=" tajawal_black btn btn-primary btn-user btn-block color_control">
                                                {{ trans('web_trans.login_btn') }}
                                            </button>


                                        </form>







                                        <div class=" tajawal_black text-start mt-5 ms-0">

                                            <div class=" tajawal_black mb-1"><a href="forgot.html">{{ trans('web_trans.Forgot password?') }}</a></div>
                                            <div> {{ trans('web_trans.Dont have an account?') }} <a href="signup.html">{{ trans('web_trans.Register Here') }}</a></div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::row-1 -->

    </div>

    <!-- Custom-Switcher JS -->
    <script src="{{ asset('dashboard/assets/js/custom-switcher.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('dashboard/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


</body>

</html>
