<!-- ==================== Footer Two Start Here ==================== -->
<footer class="footer position-relative z-1 mt-auto pt-120 overflow-hidden rounded-top-45-px gradient-bg-three">
    <!-- Footer Top Start -->
    <div class="container">
        <div class="d-flex align-items-center justify-content-between tw-pb-15 tw-mb-15 border-bottom border-white-01 tw-gap-6 flex-wrap">
            <div class="w-100">
                <h2 class="splitTextStyleOne text-white">
                    Fortuner Ltd – Your <span class="text-main-600">Trusted</span> Partner for Reliable and High-Quality IT Hardware Solutions.
                </h2>
            </div>
            <div class="" data-aos="fade-up" data-aos-duration="600" >
                <a href="{{ route('get_quote') }}" class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke tw-gap-5 group active--translate-y-2 tw-px-11 rounded-pill tw-py-505 fw-medium" data-block="button">
                    <span class="button__flair"></span>
                    <span class="button__label">Get Started Today</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Footer Top End -->

    <div class="pb-120">
        <div class="container container-two">
            <div class="row">
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="600" >
                    <div class="">
                        <a href="{{ route('index') }}" class="link hover--translate-y-1 active--translate-y-scale-9 tw-mb-6">
                            <img src="{{ asset('images/logo/logo-white.png') }}" alt="Fortuner Ltd">
                        </a>
                        <p class="text-white tw-text-lg">Fortuner Ltd is your trusted partner for new, refurbished, and end-of-life IT hardware. From enterprise-grade servers to hard-to-find legacy equipment, we deliver tested, certified, and sustainable technology solutions backed by fast worldwide shipping, secure payment options, and a straightforward returns process. Whether you’re upgrading, expanding, or maintaining your IT infrastructure, we’re here to provide quality you can trust and service you can rely on — every time.</p>

                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-duration="1000" >
                    <div class="">
                        <h5 class="fw-medium text-white tw-mb-8">Important Links</h5>
                        <ul class="d-flex flex-column tw-gap-4">
                            <li>
                                <a href="{{ route('index') }}" class="hover-arrow-start text--white hover-text-white hover-underline hover--translate-y-1 active--translate-y-scale-9">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('about_us') }}" class="hover-arrow-start text--white hover-text-white hover-underline hover--translate-y-1 active--translate-y-scale-9">About us</a>
                            </li>
                            <li>
                                <a href="{{ route("why_us") }}" class="hover-arrow-start text--white hover-text-white hover-underline hover--translate-y-1 active--translate-y-scale-9">Why us</a>
                            </li>
                            <li>
                                <a href="{{ route("contact_us") }}" class="hover-arrow-start text--white hover-text-white hover-underline hover--translate-y-1 active--translate-y-scale-9">Contact us</a>
                            </li>
                            <li>
                                <a href="{{ route('get_quote') }}" class="hover-arrow-start text--white hover-text-white hover-underline hover--translate-y-1 active--translate-y-scale-9">Get Quote</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-duration="1000" >
                    <div class="">
                        <h5 class="fw-medium text-white tw-mb-8">Resource</h5>
                        <ul class="d-flex flex-column tw-gap-4">
                            <li>
                                <a href="{{ route('privacy_policy') }}" class="hover-arrow-start text--white hover-text-white hover-underline hover--translate-y-1 active--translate-y-scale-9">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="{{ route('terms_and_conditions') }}" class="hover-arrow-start text--white hover-text-white hover-underline hover--translate-y-1 active--translate-y-scale-9">Terms &amp; Conditionss</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- bottom Footer -->
        <div class="border-top border-white-01 tw-py-8">
            <div class="container container-two">
                <div class="d-flex align-items-center justify-content-between tw-gap-4 flex-wrap">
                    <p class="text--white text-line-1 fw-normal">
                        Copyright @ 2025
                        <a href="https://themeforest.net/user/wowtheme7" class="fw-medium hover-underline hover--translate-y-1 active--translate-y-scale-9">{{ env('APP_NAME') }}</a>
                        All Rights Reserved
                    </p>
                    <ul class="d-flex align-items-center tw-gap-4">
                        <li>
                            <a href="mailto:info@domain.com" class="hover-arrow-start text--white hover-text-white hover-underline hover--translate-y-1 active--translate-y-scale-9">info@domain.com</a>
                        </li>
                        <li>
                            <a href="{{ route('privacy_policy') }}" class="hover-arrow-start text--white hover-text-white hover-underline hover--translate-y-1 active--translate-y-scale-9">Privacy</a>
                        </li>
                        <li>
                            <a href="{{ route('contact_us') }}" class="hover-arrow-start text--white hover-text-white hover-underline hover--translate-y-1 active--translate-y-scale-9">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ==================== Footer Two End Here ==================== -->