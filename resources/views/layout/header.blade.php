<!-- ========================== Top header two start =============================== -->
<div class="tw-pt-3 tw-pb-4 position-absolute top-0 tw-start-0 tw-end-0 w-100 tw-z-991">
    <div class="container max-w-1290-px">
        <div class="d-flex align-items-center justify-content-between tw-gap-4 flex-wrap">

            <div class="d-flex align-items-center tw-gap-2 d-sm-flex d-none">
                <span class="text-white tw-text-base d-flex tw-leading-none">
                    <i class="ph-bold ph-envelope-simple"></i>
                </span>
                <span class="text-neutral-300 fw-medium tw-text-sm">
                    <a href="mailto:info@domain.com" class="text-neutral-300 hover-text-white">
                        info@domain.com
                    </a>
                </span>
            </div>

            <div class="d-flex align-items-center tw-gap-705 justify-content-between justify-content-sm-start flex-sm-grow-0 flex-grow-1">
                <div class="d-flex align-items-center tw-gap-2">
                    <a href="{{ route('privacy_policy') }}" class="text-neutral-300 fw-medium tw-text-sm hover-text-white">Privacy Policy</a>
                </div>
                <div class="d-flex align-items-center tw-gap-2">
                    <a href="{{ route('terms_and_conditions') }}" class="text-neutral-300 fw-medium tw-text-sm hover-text-white">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ========================== Top header two end =============================== -->

<!-- ==================== Header Two Start Here ==================== -->
<header class="header home-two-header py-0 top-0 tw-start-0 tw-end-0 w-100 tw-z-99 tw-mt-13">
    <div class="container">
        <div class="header-box-inner py-2 py-lg-0 tw-gap-4 tw-lg-ps-12 tw-ps-6 tw-pe-705 bg-white transition-all tw-rounded-lg">
            <nav class="d-flex align-items-center justify-content-between position-relative">
                <!-- Logo Start -->
                <div class="logo">
                    <a href="{{ route("index") }}" class="link hover--translate-y-1 active--translate-y-scale-9">
                        <img src="{{ asset('images/logo/logo.png') }}" alt="Fortuner Ltd" class="max-w-200-px">
                    </a>
                </div>
                <!-- Logo End  -->

                <!-- Menu Start  -->
                <div class="header-menu d-lg-block d-none">
                    <!-- Nav menu Two Start -->
                    <ul class="nav-menu d-lg-flex align-items-center tw-gap-7">
                        <li class="nav-menu__item">
                            <a href="{{ route('index') }}" class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Home</a>
                        </li>
                        <li class="nav-menu__item">
                            <a href="{{ route('about_us') }}" class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">About us</a>
                        </li>
                        <li class="nav-menu__item">
                            <a href="{{ route('why_us') }}" class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Why us?</a>
                        </li>
                        <li class="nav-menu__item">
                            <a href="{{ route('contact_us') }}" class="nav-menu__link hover--translate-y-1 tw-pe-5 text-heading tw-py-9 fw-semibold w-100">Contact us</a>
                        </li>
                    </ul>
                <!-- Nav menu Two End  -->
                </div>
                <!-- Menu End  -->

                <!-- Header Right start -->
                <div class="d-flex align-items-center tw-gap-6">
                    <div class="d-flex align-items-center tw-gap-6">

                        <a href="{{ route('get_quote') }}" class="hover--translate-y-1 active--translate-y-scale-9 btn button--stroke d-lg-flex d-none align-items-center justify-content-center tw-gap-5 group active--translate-y-2 px-xxl-5 px-xl-4 px-3 tw-py-405 fw-medium rounded-pill btn-main hover-style-one " data-block="button">
                            <span class="button__flair"></span>
                            <span class="button__label">Get Quote</span>
                        </a>
                    </div>
                    <button type="button" class="toggle-mobileMenu leading-none d-lg-none text-neutral-800 tw-text-9">
                        <i class="ph ph-list"></i>
                    </button>
                </div>
                <!-- Header Right End  -->
            </nav>
        </div>
    </div>
</header>
<!-- ==================== Header Two End Here ==================== -->