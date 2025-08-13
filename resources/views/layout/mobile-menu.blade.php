<!-- ==================== Mobile Menu Start Here ==================== -->
<div class="mobile-menu d-lg-none d-block scroll-sm position-fixed bg-white tw-w-300-px tw-h-screen overflow-y-auto tw-p-6 tw-z-999 tw--translate-x-full tw-pb-68 ">

    <button type="button" class="close-button position-absolute tw-end-0 top-0 tw-me-2 tw-mt-2 tw-w-605 tw-h-605 rounded-circle d-flex justify-content-center align-items-center text-neutral-900 bg-neutral-200 hover-bg-neutral-900 hover-text-white">
        <i class="ph ph-x"></i>
    </button>

    <div class="mobile-menu__inner">
        <a href="{{ route('index') }}" class="mobile-menu__logo">
            <img src="{{ asset('images/logo/logo.png') }}" alt="Fortuner Ltd">
        </a>
        <div class="mobile-menu__menu">
            <!-- Nav menu Start -->
            <ul class="nav-menu d-lg-flex align-items-center nav-menu--mobile d-block tw-mt-8">
                <li class="nav-menu__item">
                    <a href="{{ route('index') }}" class="nav-menu__link hover--translate-y-1 text-heading tw-py-9 fw-semibold w-100">Home</a>
                </li>
                <li class="nav-menu__item">
                    <a href="{{ route('about_us') }}" class="nav-menu__link hover--translate-y-1 text-heading tw-py-9 fw-semibold w-100">About Us</a>
                </li>
                <li class="nav-menu__item">
                    <a href="{{ route('why_us') }}" class="nav-menu__link hover--translate-y-1 text-heading tw-py-9 fw-semibold w-100">Why Us?</a>
                </li>
                <li class="nav-menu__item">
                    <a href="{{ route('contact_us') }}" class="nav-menu__link hover--translate-y-1 text-heading tw-py-9 fw-semibold w-100">Contact Us</a>
                </li>
            </ul>
            <!-- Nav menu End  -->
        </div>

        <a href="{{ route('get_quote') }}" class="btn btn-main-two hover-style-two button--stroke d-sm-none d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-8 rounded-pill tw-mt-6" data-block="button">
            <span class="button__flair"></span>
            <span class="button__label">Get Quote</span>
        </a>

    </div>
</div>
<!-- ==================== Mobile Menu End Here ==================== -->