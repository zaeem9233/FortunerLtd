<!DOCTYPE html>
<html lang="en" class="home-two">

    @include('layout.head')

<body>
    <!--==================== Preloader Start ====================-->
    <div class="preloader">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
    </div>
    <!--==================== Preloader End ====================-->

    <!--==================== Overlay Start ====================-->
    <div class="overlay"></div>
    <!--==================== Overlay End ====================-->

    <!--==================== Sidebar Overlay End ====================-->
    <div class="side-overlay"></div>
    <!--==================== Sidebar Overlay End ====================-->

    <!-- Custom Toast Message start -->
    <div id="toast-container"></div>
    <!-- Custom Toast Message End -->

    <!-- ==================== Scroll to Top End Here ==================== -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>
    <!-- ==================== Scroll to Top End Here ==================== -->

    <!-- Custom Cursor Start -->
    <div class="cursor"></div>
    <span class="dot"></span>
    <!-- Custom Cursor End -->

    @include('layout.mobile-menu')


<div id="smooth-wrapper">

    @include('layout.header')

    <div id="smooth-content">

        @yield('content')

        @include('layout.footer')

    </div>
</div>

    @include('layout.bottom-files')

    </body>
</html>