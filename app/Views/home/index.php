<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Sash – Bootstrap 5 Admin &amp; Dashboard Template </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin dashboard,dashboard design htmlbootstrap admin template,html admin panel,admin dashboard html,admin panel html template,bootstrap dashboard,html admin template,html dashboard,html admin dashboard template,bootstrap dashboard template,dashboard html template,bootstrap admin panel,dashboard admin bootstrap,bootstrap admin dashboard">

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url('/assets/images/brand-logos/favicon.ico'); ?>" type="image/x-icon">

    <!-- Choices JS -->
    <script src="<?php echo base_url('/assets/libs/choices.js/public/assets/scripts/choices.min.js'); ?>"></script>

    <!-- Main Theme Js -->
    <script src="<?php echo base_url('/assets/js/main.js'); ?>"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="<?php echo base_url('/assets/libs/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Style Css -->
    <link href="<?php echo base_url('/assets/css/styles.min.css'); ?>" rel="stylesheet">

    <!-- Icons Css -->
    <link href="<?php echo base_url('/assets/css/icons.css'); ?>" rel="stylesheet">

    <!-- Node Waves Css -->
    <link href="<?php echo base_url('/assets/libs/node-waves/waves.min.css'); ?>" rel="stylesheet">

    <!-- Simplebar Css -->
    <link href="<?php echo base_url('/assets/libs/simplebar/simplebar.min.css'); ?>" rel="stylesheet">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/libs/flatpickr/flatpickr.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/libs/@simonwep/pickr/themes/nano.min.css'); ?>">

    <!-- Choices Css -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/libs/choices.js/public/assets/styles/choices.min.css'); ?>">

    <!-- Jsvector Css -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/libs/jsvectormap/css/jsvectormap.min.css'); ?>">

    <!-- Swiper Css -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/libs/swiper/swiper-bundle.min.css'); ?>">

    <!-- Grid Css -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/libs/gridjs/theme/mermaid.min.css'); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <?php if (isset($css_critical)) {
        echo $css_critical;
    } ?>
    <style>
        /** BASE **/
        * {
            font-family: 'Kanit', sans-serif;
        }

        .disabled {
            pointer-events: none;
            opacity: 0.6;
        }
    </style>
    <script>
        var serverUrl = '<?php echo base_url(); ?>';
    </script>
</head>

<body>

    <!-- Start Switcher -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <nav class="border-bottom border-block-end-dashed">
                <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
                    <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab" data-bs-target="#switcher-home"
                        type="button" role="tab" aria-controls="switcher-home" aria-selected="true">Theme Styles</button>
                    <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab" data-bs-target="#switcher-profile"
                        type="button" role="tab" aria-controls="switcher-profile" aria-selected="false">Theme Colors</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel" aria-labelledby="switcher-home-tab"
                    tabindex="0">
                    <div class="">
                        <p class="switcher-style-head">Theme Color Mode:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-light-theme">
                                        Light
                                    </label>
                                    <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-dark-theme">
                                        Dark
                                    </label>
                                    <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Directions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-ltr">
                                        LTR
                                    </label>
                                    <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-rtl">
                                        RTL
                                    </label>
                                    <input class="form-check-input" type="radio" name="direction" id="switcher-rtl">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Navigation Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-vertical">
                                        Vertical
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style" id="switcher-vertical"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-horizontal">
                                        Horizontal
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style"
                                        id="switcher-horizontal">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-menu-styles">
                        <p class="switcher-style-head">Vertical & Horizontal Menu Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-click">
                                        Menu Click
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-click">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-hover">
                                        Menu Hover
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-hover">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-click">
                                        Icon Click
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-click">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-hover">
                                        Icon Hover
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-hover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidemenu-layout-styles">
                        <p class="switcher-style-head">Sidemenu Layout Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-default-menu">
                                        Default Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-default-menu" checked>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-closed-menu">
                                        Closed Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-closed-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icontext-menu">
                                        Icon Text
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icontext-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-overlay">
                                        Icon Overlay
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icon-overlay">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-detached">
                                        Detached
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-detached">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-double-menu">
                                        Double Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-double-menu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Page Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-regular">
                                        Regular
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles" id="switcher-regular"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-classic">
                                        Classic
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles" id="switcher-classic">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Layout Width Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-full-width">
                                        Full Width
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width" id="switcher-full-width"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-boxed">
                                        Boxed
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width" id="switcher-boxed">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Menu Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-fixed">
                                        Fixed
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-fixed"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-scroll">
                                        Scrollable
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Header Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-fixed">
                                        Fixed
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-fixed" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-scroll">
                                        Scrollable
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Loader:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-loader-enable">
                                        Enable
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-loader"
                                        id="switcher-loader-enable">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-loader-disable">
                                        Disable
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-loader"
                                        id="switcher-loader-disable" checked>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel" aria-labelledby="switcher-profile-tab" tabindex="0">
                    <div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Menu Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-light">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-dark" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Gradient Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu"
                                        type="radio" name="menu-colors" id="switcher-menu-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Header Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Header" type="radio" name="header-colors"
                                        id="switcher-header-light" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Header" type="radio" name="header-colors"
                                        id="switcher-header-dark">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Header" type="radio" name="header-colors"
                                        id="switcher-header-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Gradient Header" type="radio" name="header-colors"
                                        id="switcher-header-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Transparent Header" type="radio" name="header-colors"
                                        id="switcher-header-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Primary:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-1" type="radio"
                                        name="theme-primary" id="switcher-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-2" type="radio"
                                        name="theme-primary" id="switcher-primary1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-3" type="radio" name="theme-primary"
                                        id="switcher-primary2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-4" type="radio" name="theme-primary"
                                        id="switcher-primary3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-5" type="radio" name="theme-primary"
                                        id="switcher-primary4">
                                </div>
                                <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                    <div class="theme-container-primary"></div>
                                    <div class="pickr-container-primary"></div>
                                </div>
                            </div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Background:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-1" type="radio"
                                        name="theme-background" id="switcher-background">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-2" type="radio"
                                        name="theme-background" id="switcher-background1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-3" type="radio" name="theme-background"
                                        id="switcher-background2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-4" type="radio"
                                        name="theme-background" id="switcher-background3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-5" type="radio"
                                        name="theme-background" id="switcher-background4">
                                </div>
                                <div class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                    <div class="theme-container-background"></div>
                                    <div class="pickr-container-background"></div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-image mb-3">
                            <p class="switcher-style-head">Menu With Background Image:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img1" type="radio"
                                        name="theme-background" id="switcher-bg-img">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img2" type="radio"
                                        name="theme-background" id="switcher-bg-img1">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img3" type="radio" name="theme-background"
                                        id="switcher-bg-img2">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img4" type="radio"
                                        name="theme-background" id="switcher-bg-img3">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img5" type="radio"
                                        name="theme-background" id="switcher-bg-img4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center canvas-footer flex-wrap px-0 px-sm-5">
                    <a href="javascript:void(0);" id="reset-all" class="btn btn-danger m-1">Reset</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->


    <!-- Loader -->
    <div id="loader">
        <img src="<?php echo base_url('/assets/images/media/loader.svg'); ?>" alt="">
    </div>
    <!-- Loader -->

    <div class="page">
        <!-- app-header -->
        <header class="app-header">

            <!-- Start::main-header-container -->
            <div class="main-header-container container-fluid">

                <!-- Start::header-content-left -->
                <div class="header-content-left">

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <div class="horizontal-logo">
                            <a href="index.html" class="header-logo">
                                <img src="https://evx.services/assets/img/logo.png" alt="logo" class="desktop-logo">
                                <img src="<?php echo base_url('/assets/images/brand-logos/toggle-logo.png'); ?>" alt="logo" class="toggle-logo">
                                <img src="<?php echo base_url('/assets/images/brand-logos/desktop-dark.png'); ?>" alt="logo" class="desktop-dark">
                                <img src="<?php echo base_url('/assets/images/brand-logos/toggle-dark.png'); ?>" alt="logo" class="toggle-dark">
                                <img src="<?php echo base_url('/assets/images/brand-logos/desktop-white.png'); ?>" alt="logo" class="desktop-white">
                                <img src="<?php echo base_url('/assets/images/brand-logos/toggle-white.png'); ?>" alt="logo" class="toggle-white">
                            </a>
                        </div>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link -->
                        <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-left -->

                <!-- Start::header-content-right -->
                <div class="header-content-right">

                    <!-- Start::header-element -->
                    <div class="header-element header-fullscreen">
                        <a aria-label="anchor" href="#" class="header-link">
                            <button type="button" class="btn btn-warning-ghost btn-wave waves-effect waves-light disabled">อัพเกรด</button>
                        </a>
                        <!-- Start::header-link -->
                        <a aria-label="anchor" href="<?php echo base_url('/create'); ?>" class="header-link">
                            <button type="button" class="btn btn-info-gradient btn-wave waves-effect waves-light"><i class="fe fe-plus-circle side-menu__icon"></i> สร้าง</button>
                        </a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element main-profile-user">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="#" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <div class="me-xxl-2 me-0">
                                    <img src="<?php echo base_url('/assets/images/faces/9.jpg'); ?>" alt="img" width="32" height="32" class="rounded-circle">
                                </div>
                                <div class="d-xxl-block d-none my-auto">
                                    <h6 class="fw-semibold mb-0 lh-1 fs-14">Username</h6>
                                    <span class="op-7 fw-normal d-block fs-11 text-muted">Type User</span>
                                </div>
                            </div>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu pt-0 header-profile-dropdown dropdown-menu-end" aria-labelledby="mainHeaderProfile">
                            <li class="drop-heading d-xxl-none d-block">
                                <div class="text-center">
                                    <h5 class="text-dark mb-0 fs-14 fw-semibold">Username</h5>
                                    <small class="text-muted">Type User</small>
                                </div>
                            </li>
                            <li class="dropdown-item disabled"><a class="d-flex w-100" href="<?php echo base_url('/profile'); ?>"><i class="fe fe-user fs-18 me-2 text-primary"></i>Profile</a></li>
                            <li class="dropdown-item disabled"><a class="d-flex w-100" href="<?php echo base_url('/'); ?>"><i class="fe fe-mail fs-18 me-2 text-primary"></i>โพส <span class="badge bg-danger ms-auto">25</span></a></li>
                            <li class="dropdown-item disabled"><a class="d-flex w-100" href="<?php echo base_url('/'); ?>"><i class="fe fe-headphones fs-18 me-2 text-primary"></i>โมเดลของฉัน</a></li>
                            <li class="dropdown-item disabled"><a class="d-flex w-100" href="<?php echo base_url('/'); ?>"><i class="fe fe-lock fs-18 me-2 text-primary"></i>Subscriptions</a></li>
                            <li class="dropdown-item disabled"><a class="d-flex w-100" href="<?php echo base_url('/setting'); ?>"><i class="fe fe-settings fs-18 me-2 text-primary"></i>ตั้งค่า</a></li>
                            <li class="dropdown-item"><a class="d-flex w-100" href="<?php echo base_url('/logout'); ?>"><i class="fe fe-log-out fs-18 me-2 text-primary"></i>ออกจากระบบ</a></li>
                        </ul>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link|switcher-icon -->
                        <a aria-label="anchor" href="#" class="header-link switcher-icon" data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas">
                            <i class="bx bx-cog header-link-icon"></i>
                        </a>
                        <!-- End::header-link|switcher-icon -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-right -->

            </div>
            <!-- End::main-header-container -->

        </header>
        <!-- /app-header -->
        <!-- Start::app-sidebar -->
        <aside class="app-sidebar sticky" id="sidebar">

            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header">
                <a href="<?php echo base_url(); ?>" class="header-logo">
                    <img src="https://evx.services/assets/img/logo.png" width="107" alt="logo" class="desktop-logo">
                    <img src="https://evx.services/assets/img/logo.png" width="107" alt="logo" class="toggle-logo">
                    <img src="https://evx.services/assets/img/logo.png" width="107" alt="logo" class="desktop-dark">
                    <img src="https://evx.services/assets/img/logo.png" width="107" alt="logo" class="toggle-dark">
                    <img src="https://evx.services/assets/img/logo.png" width="107" alt="logo" class="desktop-white">
                    <img src="https://evx.services/assets/img/logo.png" width="107" alt="logo" class="toggle-white">
                </a>
            </div>
            <!-- End::main-sidebar-header -->

            <!-- Start::main-sidebar -->
            <div class="main-sidebar" id="sidebar-scroll">

                <!-- Start::nav -->
                <nav class="main-menu-container nav nav-pills flex-column sub-open">
                    <div class="slide-left" id="slide-left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                        </svg>
                    </div>
                    <ul class="main-menu">
                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="<?php echo base_url(); ?>" class="side-menu__item active">
                                <i class="fe fe-home side-menu__icon"></i>
                                <span class="side-menu__label">หน้าแรก</span>
                            </a>
                        </li>
                        <li class="slide">
                            <a href="<?php echo base_url('/create'); ?>" class="side-menu__item">
                                <i class="fe fe-plus-circle side-menu__icon"></i>
                                <span class="side-menu__label">สร้าง Image</span>
                            </a>
                        </li>
                        <hr>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-slack side-menu__icon"></i>
                                <span class="side-menu__label">My Stuff</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1 disabled">
                                    <a href="javascript:void(0)">Creation History</a>
                                </li>
                                <li class="slide">
                                    <a href="full-calendar.html" class="side-menu__item disabled">Bookmarks</a>
                                </li>
                                <li class="slide">
                                    <a href="gallery.html" class="side-menu__item disabled">Liked</a>
                                </li>
                                <li class="slide">
                                    <a href="sweet_alerts.html" class="side-menu__item disabled">Saved Albums</a>
                                </li>
                                <li class="slide">
                                    <a href="sweet_alerts.html" class="side-menu__item disabled">Trained Models</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <hr>

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-package side-menu__icon"></i>
                                <span class="side-menu__label">Resources</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1 mega-menu">
                                <li class="slide side-menu__label1 disabled">
                                    <a href="javascript:void(0)">Tutorials</a>
                                </li>
                                <li class="slide">
                                    <a href="alerts.html" class="side-menu__item disabled">Wiki</a>
                                </li>
                                <li class="slide">
                                    <a href="badge.html" class="side-menu__item disabled">Help Center</a>
                                </li>
                                <li class="slide">
                                    <a href="breadcrumb.html" class="side-menu__item disabled">What's New</a>
                                </li>
                                <li class="slide">
                                    <a href="buttons.html" class="side-menu__item disabled">Theme Gallery</a>
                                </li>
                                <li class="slide">
                                    <a href="buttongroup.html" class="side-menu__item disabled">Blog</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->
                    </ul>
                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                        </svg></div>
                </nav>
                <!-- End::nav -->

            </div>
            <!-- End::main-sidebar -->

        </aside>
        <!-- End::app-sidebar -->

        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title my-auto">Pricing</h1>
                    <div>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">Pages</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Pricing</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->


                <!-- Start:: row-1 -->
                <div class="row mb-5">
                    <div class="col-xl-12">
                        <h5 class="fw-semibold text-center mb-0"> Simple Pricing For Everyone </h5>
                        <div class="d-flex justify-content-center mt-4">
                            <ul class="nav nav-tabs mb-3 tab-style-6 bg-primary-transparent" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pricing-monthly1" data-bs-toggle="tab"
                                        data-bs-target="#pricing-monthly1-pane" type="button" role="tab"
                                        aria-controls="pricing-monthly1-pane" aria-selected="true">Monthly</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pricing-yearly1" data-bs-toggle="tab"
                                        data-bs-target="#pricing-yearly1-pane" type="button" role="tab"
                                        aria-controls="pricing-yearly1-pane" aria-selected="false">Yearly</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent1">
                            <div class="tab-pane show active p-0 border-0" id="pricing-monthly1-pane"
                                role="tabpanel" aria-labelledby="pricing-monthly1" tabindex="0">
                                <div class="row justify-content-center">
                                    <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="card custom-card overflow-hidden">
                                            <div class="card-body p-0">
                                                <div class="p-4">
                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                        <div class="d-flex">
                                                            <i class="ti ti-free-rights fs-24 text-primary me-1"></i>
                                                            <div class="fs-18 fw-semibold ">Free</div>
                                                        </div>
                                                        <div>
                                                            <span class="badge bg-success-transparent">For Indivudials</span>
                                                        </div>
                                                    </div>
                                                    <div class="fs-25 fw-bold mb-1">$0<sub class="text-muted fw-semibold fs-11">/ Per Month</sub></div>
                                                    <div class="mb-1 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                                    <div class="fs-12 mb-3"><span>Billed Monthly</span></div>
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="d-flex align-items-center mb-3">
                                                            <span class="me-2">
                                                                <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                            </span>
                                                            <span>
                                                                <strong class="me-1">2 Free</strong>Websites
                                                            </span>
                                                        </li>
                                                        <li class="d-flex align-items-center mb-3">
                                                            <span class="me-2">
                                                                <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                            </span>
                                                            <span>
                                                                <strong class="me-1">1 GB</strong>Hard disk storage
                                                            </span>
                                                        </li>
                                                        <li class="d-flex align-items-center mb-3">
                                                            <span class="me-2">
                                                                <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                            </span>
                                                            <span>
                                                                <strong class="me-1">1 Year</strong>Email support
                                                            </span>
                                                        </li>
                                                        <li class="d-flex align-items-center mb-3">
                                                            <span class="me-2">
                                                                <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                            </span>
                                                            <span>
                                                                <strong class="me-1">2</strong>Licenses
                                                            </span>
                                                        </li>
                                                        <li class="d-flex align-items-center mb-3">
                                                            <span class="me-2">
                                                                <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                            </span>
                                                            <span>
                                                                Custom SEO optimizataion
                                                            </span>
                                                        </li>
                                                        <li class="d-flex align-items-center mb-3">
                                                            <span class="me-2">
                                                                <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                            </span>
                                                            <span>
                                                                Chat Support
                                                            </span>
                                                        </li>
                                                        <li class="d-grid">
                                                            <button type="button" class="btn btn-light btn-wave">Choose Plan</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="card custom-card overflow-hidden">
                                            <div class="card-body p-0">
                                                <div class="p-4">
                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                        <div class="d-flex">
                                                            <i class="ti ti-api-app  fs-24 text-primary me-1"></i>
                                                            <div class="fs-18 fw-semibold">Team</div>
                                                        </div>
                                                        <div>
                                                            <span class="badge bg-success-transparent">
                                                                For Small Teams
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="fs-25 fw-bold mb-1">$149<sub class="text-muted fw-semibold fs-11">/ Per Month</sub></div>
                                                    <div class="mb-1 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                                    <div class="fs-12 mb-3"><span>Billed Monthly</span></div>
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="d-flex align-items-center mb-3">
                                                            <span class="me-2">
                                                                <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                            </span>
                                                            <span>
                                                                <strong class="me-1">5 Free</strong>Websites
                                                            </span>
                                                        </li>
                                                        <li class="d-flex align-items-center mb-3">
                                                            <span class="me-2">
                                                                <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                            </span>
                                                            <span>
                                                                <strong class="me-1">5 GB</strong>Hard disk storage
                                                            </span>
                                                        </li>
                                                        <li class="d-flex align-items-center mb-3">
                                                            <span class="me-2">
                                                                <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                            </span>
                                                            <span>
                                                                <strong class="me-1">2 Years</strong>Email support
                                                            </span>
                                                        </li>
                                                        <li class="d-flex align-items-center mb-3">
                                                            <span class="me-2">
                                                                <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                            </span>
                                                            <span>
                                                                <strong class="me-1">5</strong>Licenses
                                                            </span>
                                                        </li>
                                                        <li class="d-flex align-items-center mb-3">
                                                            <span class="me-2">
                                                                <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                            </span>
                                                            <span>
                                                                Custom SEO optimizataion
                                                            </span>
                                                        </li>
                                                        <li class="d-flex align-items-center mb-3">
                                                            <span class="me-2">
                                                                <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                            </span>
                                                            <span>
                                                                Chat Support
                                                            </span>
                                                        </li>
                                                        <li class="d-grid">
                                                            <button type="button" class="btn btn-light btn-wave">Choose Plan</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="custom-card  border border-primary rounded card">
                                            <div class="d-flex flex-column p-0">
                                                <div class="card-body p-0">
                                                    <div class="p-4">
                                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                                            <div class="d-flex">
                                                                <i class="ti ti-businessplan text-primary fs-24 me-1"></i>
                                                                <div class="fs-18 fw-semibold">Business</div>
                                                            </div>
                                                            <div>
                                                                <span class="badge bg-primary-transparent">
                                                                    For Business Purpose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="fs-25 fw-bold mb-1">$1,299<sub class="text-muted fw-semibold fs-11">/ Per Month</sub></div>
                                                        <div class="mb-1 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                                        <div class="fs-12 mb-3 text-primary"><span>Billed Monthly</span></div>
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-flex align-items-center mb-3">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1">10 Free</strong>Websites
                                                                </span>
                                                            </li>
                                                            <li class="d-flex align-items-center mb-3">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1">20 GB</strong>Hard disk storage
                                                                </span>
                                                            </li>
                                                            <li class="d-flex align-items-center mb-3">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1">3 Years</strong>Email support
                                                                </span>
                                                            </li>
                                                            <li class="d-flex align-items-center mb-3">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1">15</strong>Licenses
                                                                </span>
                                                            </li>
                                                            <li class="d-flex align-items-center mb-3">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                </span>
                                                                <span>
                                                                    Custom SEO optimizataion
                                                                </span>
                                                            </li>
                                                            <li class="d-flex align-items-center mb-3">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                                </span>
                                                                <span>
                                                                    Chat Support
                                                                </span>
                                                            </li>
                                                            <li class="d-grid">
                                                                <button type="button" class="btn btn-primary btn-wave">Choose Plan</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane p-0 border-0" id="pricing-yearly1-pane"
                                role="tabpanel" aria-labelledby="pricing-yearly1" tabindex="0">
                                <div class="row justify-content-center">
                                    <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="card custom-card overflow-hidden">
                                            <div class="card-body p-0">
                                                <div class="p-4">
                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                        <div class="d-flex">
                                                            <i class="ti ti-free-rights fs-24 text-primary me-1"></i>
                                                            <div class="fs-18 fw-semibold ">Free</div>
                                                        </div>
                                                        <div>
                                                            <span class="badge bg-success-transparent">For Indivudials</span>
                                                        </div>
                                                    </div>
                                                    <div class="fs-25 fw-bold mb-1">$0<sub class="text-muted fw-semibold fs-11">/ Per year</sub></div>
                                                    <div class="mb-1 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                                    <div class="fs-12 mb-3"><span>Billed yearly</span></div>
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="d-flex align-items-center mb-3">
                                                            <span class="me-2">
                                                                <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                            </span>
                                                            <span>
                                                                <strong class="me-1">2 Free</strong>Websites
                                                            </span>
                                                        </li>
                                                        <li class="d-flex align-items-center mb-3">
                                                            <span class="me-2">
                                                                <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                            </span>
                                                            <span>
                                                                <strong class="me-1">1 GB</strong>Hard disk storage
                                                            </span>
                                                        </li>
                                                        <li class="d-flex align-items-center mb-3">
                                                            <span class="me-2">
                                                                <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                            </span>
                                                            <span>
                                                                <strong class="me-1">1 Year</strong>Email support
                                                            </span>
                                                        </li>
                                                        <li class="d-flex align-items-center mb-3">
                                                            <span class="me-2">
                                                                <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                            </span>
                                                            <span>
                                                                <strong class="me-1">2</strong>Licenses
                                                            </span>
                                                        </li>
                                                        <li class="d-flex align-items-center mb-3">
                                                            <span class="me-2">
                                                                <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                            </span>
                                                            <span>
                                                                Custom SEO optimizataion
                                                            </span>
                                                        </li>
                                                        <li class="d-flex align-items-center mb-3">
                                                            <span class="me-2">
                                                                <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                            </span>
                                                            <span>
                                                                Chat Support
                                                            </span>
                                                        </li>
                                                        <li class="d-grid">
                                                            <button type="button" class="btn btn-light btn-wave">Choose Plan</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="card custom-card overflow-hidden">
                                            <div class="card-body p-0">
                                                <div class="p-4">
                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                        <div class="d-flex">
                                                            <i class="ti ti-api-app  fs-24 text-primary me-1"></i>
                                                            <div class="fs-18 fw-semibold">Team</div>
                                                        </div>
                                                        <div>
                                                            <span class="badge bg-success-transparent">
                                                                For Small Teams
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="fs-25 fw-bold mb-1">$10,49<sub class="text-muted fw-semibold fs-11">/ Per year</sub></div>
                                                    <div class="mb-1 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                                    <div class="fs-12 mb-3"><span>Billed yearly</span></div>
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="d-flex align-items-center mb-3">
                                                            <span class="me-2">
                                                                <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                            </span>
                                                            <span>
                                                                <strong class="me-1">5 Free</strong>Websites
                                                            </span>
                                                        </li>
                                                        <li class="d-flex align-items-center mb-3">
                                                            <span class="me-2">
                                                                <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                            </span>
                                                            <span>
                                                                <strong class="me-1">5 GB</strong>Hard disk storage
                                                            </span>
                                                        </li>
                                                        <li class="d-flex align-items-center mb-3">
                                                            <span class="me-2">
                                                                <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                            </span>
                                                            <span>
                                                                <strong class="me-1">2 Years</strong>Email support
                                                            </span>
                                                        </li>
                                                        <li class="d-flex align-items-center mb-3">
                                                            <span class="me-2">
                                                                <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                            </span>
                                                            <span>
                                                                <strong class="me-1">5</strong>Licenses
                                                            </span>
                                                        </li>
                                                        <li class="d-flex align-items-center mb-3">
                                                            <span class="me-2">
                                                                <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                            </span>
                                                            <span>
                                                                Custom SEO optimizataion
                                                            </span>
                                                        </li>
                                                        <li class="d-flex align-items-center mb-3">
                                                            <span class="me-2">
                                                                <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                            </span>
                                                            <span>
                                                                Chat Support
                                                            </span>
                                                        </li>
                                                        <li class="d-grid">
                                                            <button type="button" class="btn btn-light btn-wave">Choose Plan</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="custom-card border border-primary rounded card">
                                            <div class=" d-flex flex-column p-0">
                                                <div class="card-body p-0">
                                                    <div class="p-4">
                                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                                            <div class="d-flex">
                                                                <i class="ti ti-businessplan text-primary fs-24 me-1"></i>
                                                                <div class="fs-18 fw-semibold">Business</div>
                                                            </div>
                                                            <div>
                                                                <span class="badge bg-primary-transparent">
                                                                    For Business Purpose
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="fs-25 fw-bold mb-1">$50,299<sub class="text-muted fw-semibold fs-11">/ Per year</sub></div>
                                                        <div class="mb-1 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos debitis aliquam .</div>
                                                        <div class="fs-12 mb-3 text-primary"><span>Billed yearly</span></div>
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-flex align-items-center mb-3">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1">10 Free</strong>Websites
                                                                </span>
                                                            </li>
                                                            <li class="d-flex align-items-center mb-3">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1">20 GB</strong>Hard disk storage
                                                                </span>
                                                            </li>
                                                            <li class="d-flex align-items-center mb-3">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1">3 Years</strong>Email support
                                                                </span>
                                                            </li>
                                                            <li class="d-flex align-items-center mb-3">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                </span>
                                                                <span>
                                                                    <strong class="me-1">15</strong>Licenses
                                                                </span>
                                                            </li>
                                                            <li class="d-flex align-items-center mb-3">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line fs-15 text-success"></i>
                                                                </span>
                                                                <span>
                                                                    Custom SEO optimizataion
                                                                </span>
                                                            </li>
                                                            <li class="d-flex align-items-center mb-3">
                                                                <span class="me-2">
                                                                    <i class="ri-checkbox-circle-line fs-15 text-muted op-3"></i>
                                                                </span>
                                                                <span>
                                                                    Chat Support
                                                                </span>
                                                            </li>
                                                            <li class="d-grid">
                                                                <button type="button" class="btn btn-primary btn-wave">Choose Plan</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-1 -->

            </div>
        </div>
        <!-- End::app-content -->

        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="input-group">
                            <a href="javascript:void(0);" class="input-group-text" id="Search-Grid"><i class="fe fe-search header-link-icon fs-18"></i></a>
                            <input type="search" class="form-control border-0 px-2" placeholder="Search" aria-label="Username">
                            <a href="javascript:void(0);" class="input-group-text" id="voice-search"><i class="fe fe-mic header-link-icon"></i></a>
                            <a href="javascript:void(0);" class="btn btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <div class="mt-4">
                            <p class="font-weight-semibold text-muted mb-2">Are You Looking For...</p>
                            <span class="search-tags"><i class="fe fe-user me-2"></i>People<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                            <span class="search-tags"><i class="fe fe-file-text me-2"></i>Pages<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                            <span class="search-tags"><i class="fe fe-align-left me-2"></i>Articles<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                            <span class="search-tags"><i class="fe fe-server me-2"></i>Tags<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                        </div>
                        <div class="my-4">
                            <p class="font-weight-semibold text-muted mb-2">Recent Search :</p>
                            <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                                <a href="notifications.html"><span>Notifications</span></a>
                                <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                            </div>
                            <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                                <a href="alerts.html"><span>Alerts</span></a>
                                <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                            </div>
                            <div class="p-2 border br-5 d-flex align-items-center text-muted mb-0 alert">
                                <a href="mail.html"><span>Mail</span></a>
                                <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group ms-auto">
                            <button class="btn btn-sm btn-primary-light">Search</button>
                            <button class="btn btn-sm btn-primary">Clear Recents</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Switcher -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="sidebar-right" aria-labelledby="offcanvasRightLabel2">
            <div class="offcanvas-header border-bottom bg-primary text-fixed-white">
                <h6 class="offcanvas-title d-inline-flex text-fixed-white" id="offcanvasRightLabel2">
                    <span class=" me-2 d-inline-flex">
                        <i class="fe fe-bell my-auto"></i> <span class=" pulse w-9 h-9 bg-success rounded-circle"></span>
                    </span>
                    Notifications
                </h6>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0">
                <nav class="nav nav-tabs nav-justified" role="tablist">
                    <button class="nav-link active" id="sidebar-side1" data-bs-toggle="tab" data-bs-target="#sidebar-slidepane-1"
                        type="button" role="tab" aria-controls="sidebar-slidepane-1" aria-selected="true"><i class="d-inline-flex fe fe-settings me-1"></i> Feeds</button>
                    <button class="nav-link" id="sidebar-side2" data-bs-toggle="tab" data-bs-target="#sidebar-slidepane-2"
                        type="button" role="tab" aria-controls="sidebar-slidepane-2" aria-selected="false"><i class="d-inline-flex fe fe-message-circle me-1"></i>Chat</button>
                    <button class="nav-link" id="sidebar-side3" data-bs-toggle="tab" data-bs-target="#sidebar-slidepane-3"
                        type="button" role="tab" aria-controls="sidebar-slidepane-3" aria-selected="false"><i class="d-inline-flex fe fe-anchor me-1"></i>Timeline</button>
                </nav>
                <div class="tab-content">
                    <div class="tab-pane fade show active border-0 p-0" id="sidebar-slidepane-1" role="tabpanel" aria-labelledby="sidebar-side1" tabindex="0">
                        <div class="p-3 fw-semibold">Feeds</div>
                        <div class="py-3 px-4 pt-0">
                            <div class="row mb-3">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-primary-transparent"><i class="fe fe-user text-primary"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">New user registered</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings me-1"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-secondary-transparent"><i class="fe fe-shopping-cart text-secondary"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">New order delivered</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings me-1"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-danger-transparent"><i class="fe fe-bell text-danger"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">You have pending tasks</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings me-1"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-warning-transparent"><i class="fe fe-gitlab text-warning"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">New version arrived</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings me-1"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-pink-transparent"><i class="fe fe-database text-pink"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">Server #1 overloaded</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings me-1"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-info-transparent"><i class="fe fe-check-circle text-info"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">New project launched</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings me-1"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 fw-semibold">Settings</div>
                        <div class="py-3 px-4 pt-0">
                            <div class="row mb-3">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-primary-transparent"><i class="fe fe-settings text-primary"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">General Settings</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-secondary-transparent"><i class="fe fe-map-pin text-secondary"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">Map Settings</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-danger-transparent"><i class="fe fe-headphones text-danger"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">Support Settings</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-warning-transparent"><i class="fe fe-credit-card text-warning"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">Payment Settings</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-pink-transparent"><i class="fe fe-bell text-pink"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">Notification Settings</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade border-0 p-0" id="sidebar-slidepane-2" role="tabpanel" aria-labelledby="sidebar-side2" tabindex="0">
                        <div class="p-3 fw-semibold">Today</div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md avatar-rounded cover-image" data-bs-image-src="<?php echo base_url('/assets/images/faces/2.jpg'); ?>"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Addie Minstra</div>
                                    <p class="mb-0 fs-12 text-muted"> Hey! there I' am available.... </p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md online avatar-rounded cover-image" data-bs-image-src="<?php echo base_url('/assets/images/faces/11.jpg'); ?>"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Rose Bush</div>
                                    <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you </p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md avatar-rounded cover-image" data-bs-image-src="<?php echo base_url('/assets/images/faces/10.jpg'); ?>"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Claude Strophobia</div>
                                    <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project......</p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md avatar-rounded cover-image" data-bs-image-src="<?php echo base_url('/assets/images/faces/13.jpg'); ?>"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Eileen Dover</div>
                                    <p class="mb-0 fs-12 text-muted"> New product Launching...</p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md online avatar-rounded cover-image" data-bs-image-src="<?php echo base_url('/assets/images/faces/12.jpg'); ?>"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Willie Findit</div>
                                    <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you </p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md avatar-rounded cover-image" data-bs-image-src="<?php echo base_url('/assets/images/faces/15.jpg'); ?>"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Manny Jah</div>
                                    <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project......</p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-0 px-3">
                            <div class="me-2">
                                <span class="avatar avatar-md avatar-rounded cover-image" data-bs-image-src="<?php echo base_url('/assets/images/faces/4.jpg'); ?>"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Cherry Blossom</div>
                                    <p class="mb-0 fs-12 text-muted"> Hey! there I' am available....</p>
                                </a>
                            </div>
                        </div>
                        <div class="p-3 fw-semibold">Yesterday</div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md online avatar-rounded cover-image" data-bs-image-src="<?php echo base_url('/assets/images/faces/7.jpg'); ?>"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Simon Sais</div>
                                    <p class="mb-0 fs-12 text-muted">Schedule Realease...... </p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md avatar-rounded cover-image" data-bs-image-src="<?php echo base_url('/assets/images/faces/9.jpg'); ?>"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Laura Biding</div>
                                    <p class="mb-0 fs-12 text-muted">Hi we can explain our new project...... </p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md online avatar-rounded cover-image" data-bs-image-src="<?php echo base_url('/assets/images/faces/2.jpg'); ?>"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Addie Minstra</div>
                                    <p class="mb-0 fs-12 text-muted">Contact me for details....</p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md avatar-rounded cover-image" data-bs-image-src="<?php echo base_url('/assets/images/faces/9.jpg'); ?>"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Ivan Notheridiya</div>
                                    <p class="mb-0 fs-12 text-muted">Hi we can explain our new project......</p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md avatar-rounded cover-image" data-bs-image-src="<?php echo base_url('/assets/images/faces/14.jpg'); ?>"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Dulcie Veeta</div>
                                    <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you</p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md avatar-rounded cover-image" data-bs-image-src="<?php echo base_url('/assets/images/faces/11.jpg'); ?>"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Florinda Carasco</div>
                                    <p class="mb-0 fs-12 text-muted">New product Launching...</p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md online avatar-rounded cover-image" data-bs-image-src="<?php echo base_url('/assets/images/faces/11.jpg'); ?>"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Cherry Blossom</div>
                                    <p class="mb-0 fs-12 text-muted">cherryblossom@gmail.com</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade border-0 p-3" id="sidebar-slidepane-3" role="tabpanel" aria-labelledby="sidebar-side3" tabindex="0">
                        <ul class="task-list timeline-task">
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold fs-14">Task Finished<span
                                            class="text-muted fs-11 mx-2 fw-normal">09 July 2021</span></h6>
                                    <p class="text-muted fs-12 mb-0">Adam Berry finished task on<a href="javascript:void(0)" class="fw-semibold text-primary"> Project Management</a></p>
                                </div>
                                <div class="ms-auto d-md-flex task-icon-link">
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted me-2"><i class="fe fe-edit"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><i class="fe fe-trash-2 fs-12"></i></a>
                                </div>
                            </li>
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold fs-14">New Comment<span
                                            class="text-muted fs-11 mx-2 fw-normal">05 July 2021</span></h6>
                                    <p class="text-muted fs-12 mb-0">Victoria commented on Project <a href="javascript:void(0)"
                                            class="fw-semibold text-primary"> AngularJS Template</a></p>
                                </div>
                                <div class="ms-auto d-md-flex task-icon-link">
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted me-2"><i class="fe fe-edit"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><i class="fe fe-trash-2 fs-12"></i></a>
                                </div>
                            </li>
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold fs-14">New Comment<span
                                            class="text-muted fs-11 mx-2 fw-normal">25 June 2021</span></h6>
                                    <p class="text-muted fs-12 mb-0">Victoria commented on Project <a href="javascript:void(0)"
                                            class="fw-semibold text-primary"> AngularJS Template</a></p>
                                </div>
                                <div class="ms-auto d-md-flex task-icon-link">
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted me-2"><i class="fe fe-edit"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><i class="fe fe-trash-2 fs-12"></i></a>
                                </div>
                            </li>
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold fs-14">Task Overdue<span
                                            class="text-muted fs-11 mx-2 fw-normal">14 June 2021</span></h6>
                                    <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a href="javascript:void(0)"
                                            class="fw-semibold text-primary"> Integrated management</a></p>
                                </div>
                                <div class="ms-auto d-md-flex task-icon-link">
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted me-2"><i class="fe fe-edit"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><i class="fe fe-trash-2 fs-12"></i></a>
                                </div>
                            </li>
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold fs-14">Task Overdue<span
                                            class="text-muted fs-11 mx-2 fw-normal">29 June 2021</span></h6>
                                    <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a href="javascript:void(0)"
                                            class="fw-semibold text-primary"> Integrated management</a></p>
                                </div>
                                <div class="ms-auto d-md-flex task-icon-link">
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted me-2"><i class="fe fe-edit"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><i class="fe fe-trash-2 fs-12"></i></a>
                                </div>
                            </li>
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold fs-14">Task Finished<span
                                            class="text-muted fs-11 mx-2 fw-normal">09 July 2021</span></h6>
                                    <p class="text-muted fs-12 mb-0">Adam Berry finished task on<a href="javascript:void(0)"
                                            class="fw-semibold text-primary"> Project Management</a></p>
                                </div>
                                <div class="ms-auto d-md-flex task-icon-link">
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted me-2"><i class="fe fe-edit"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><i class="fe fe-trash-2 fs-12"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Switcher -->


        <!-- Footer Start -->
        <footer class="footer mt-auto py-3 text-center">
            <div class="container">
                <span class=""> Copyright © <span id="year"></span> <a href="javascript:void(0);" class="text-primary">Sash</a>.
                    Designed with <span class="bi bi-heart-fill text-danger"></span> by <a href="javascript:void(0);"><span class="text-primary">EVX</span></a> Allr ights reserved
                </span>
            </div>
        </footer>
        <!-- Footer End -->

    </div>


    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->

    <!-- Popper JS -->
    <script src="<?php echo base_url('/assets/libs/@popperjs/core/umd/popper.min.js'); ?>"></script>

    <!-- Bootstrap JS -->
    <script src="<?php echo base_url('/assets/libs/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Defaultmenu JS -->
    <script src="<?php echo base_url('/assets/js/defaultmenu.min.js'); ?>"></script>

    <!-- Node Waves JS-->
    <script src="<?php echo base_url('/assets/libs/node-waves/waves.min.js'); ?>"></script>

    <!-- Sticky JS -->
    <script src="<?php echo base_url('/assets/js/sticky.js'); ?>"></script>

    <!-- Simplebar JS -->
    <script src="<?php echo base_url('/assets/libs/simplebar/simplebar.min.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/simplebar.js'); ?>"></script>

    <!-- Color Picker JS -->
    <script src="<?php echo base_url('/assets/libs/@simonwep/pickr/pickr.es5.min.js'); ?>"></script>



    <!-- JSVector Maps JS -->
    <script src="<?php echo base_url('/assets/libs/jsvectormap/js/jsvectormap.min.js'); ?>"></script>

    <!-- JSVector Maps MapsJS -->
    <script src="<?php echo base_url('/assets/libs/jsvectormap/maps/world-merc.js'); ?>"></script>

    <!-- Apex Charts JS -->
    <script src="<?php echo base_url('/assets/libs/apexcharts/apexcharts.min.js'); ?>"></script>

    <!-- Chartjs Chart JS -->
    <script src="<?php echo base_url('/assets/libs/chart.js/chart.min.js'); ?>"></script>

    <!-- index -->
    <script src="<?php echo base_url('/assets/js/index.js'); ?>"></script>


    <!-- Custom-Switcher JS -->
    <script src="<?php echo base_url('/assets/js/custom-switcher.min.js'); ?>"></script>

    <!-- Custom JS -->
    <script src="<?php echo base_url('/assets/js/custom.js'); ?>"></script>

</body>

</html>