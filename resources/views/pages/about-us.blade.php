@extends('layout.main')

@section('title', 'About Fortuner Ltd | Trusted IT Hardware Specialists');
@section('description', 'Learn about Fortuner Ltd, a trusted supplier of new, refurbished, and legacy IT hardware. Delivering quality, reliability, and eco-friendly technology solutions worldwide.');
@section('keywords', 'about Fortuner Ltd, IT hardware company, refurbished IT equipment supplier, enterprise hardware solutions, sustainable IT supplier');

@section('content')

    @include('layout.breadcrumb')

    <section class="py-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row gy-4">
                        <div class="col-xl-4">
                            <div class="tw-py-10 tw-px-7 text-center bg-main-two-600">
                                <span class="tw-w-92-px tw-h-84-px d-inline-flex justify-content-center align-items-center tw-text-9 text-white bg-white-01 tw-rounded-sm">
                                    <i class="ph ph-phone-call"></i>
                                </span>
                                <h5 class="text-white max-w-260-px mx-auto splitTextStyleOne tw-mt-5">Looking for IT Hardware Supplier?</h5>

                                <div class="tw-mt-11">
                                    <span class="text-uppercase text-white tw-mb-2">Call anytime</span>
                                    <a href="tel:+447447503232" class="btn btn-main hover-style-two button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 tw-px-13 tw-py-505 rounded-pill fw-bold w-100" data-block="button">
                                        <span class="button__flair"></span>
                                        <span class="button__label">+44 - 7447 - 503232</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h3 class="tw-mb-2 tw-mt-4 splitTextStyleOne">About Us</h3>

                            <p class="text-neutral-500 tw-leading-212 tw-mb-2 text-justify">At Fortuner Ltd, we believe technology is the backbone of every successful business—and that access to high-quality IT hardware should never be a challenge. Since our foundation, we’ve been on a mission to make reliable, sustainable, and affordable IT solutions available to businesses of all sizes, across industries, and across borders.</p>

                            <p class="text-neutral-500 tw-leading-212 tw-mb-2 text-justify">We specialize in new, refurbished, and end-of-life IT hardware, delivering enterprise-grade servers, networking equipment, storage devices, and components sourced from trusted global manufacturers. Whether you’re modernizing your IT infrastructure, replacing outdated systems, or searching for hard-to-find legacy equipment, we have the products, expertise, and service to meet your needs.</p>

                            <p class="text-neutral-500 tw-leading-212 tw-mb-2 text-justify">What sets us apart is not just our product range, but our commitment to excellence. Every item we sell undergoes a rigorous testing and certification process to ensure performance, durability, and peace of mind. Our customers know that when they choose Fortuner Ltd, they’re choosing technology they can trust—without compromise.</p>

                            <h3 class="tw-mb-2 tw-mt-4 splitTextStyleOne">Our Vision</h3>
                            <p class="text-neutral-500 tw-leading-212 tw-mb-2 text-justify">To be a global leader in IT hardware solutions, known for delivering exceptional quality, unmatched customer support, and innovative, eco-friendly approaches to technology lifecycle management.</p>

                            <h3 class="tw-mb-2 tw-mt-4 splitTextStyleOne">Our Mission</h3>
                            <p class="text-neutral-500 tw-leading-212 tw-mb-2 text-justify">To empower businesses by providing cost-effective, high-performance IT hardware while reducing environmental impact through refurbishment, reuse, and responsible recycling.</p>

                            <h3 class="tw-mb-2 tw-mt-4 splitTextStyleOne">Why Businesses Choose Fortuner Ltd</h3>

                            <p class="text-neutral-500 tw-leading-212 tw-mb-2 text-justify">Our customers range from small startups to large enterprises, government agencies, and IT resellers. They trust us because we combine competitive pricing, quality assurance, and genuine care for their success. With flexible purchasing options, tailored quotes, and responsive support, we make it easy to get the right hardware—exactly when you need it.</p>

                            <p class="text-neutral-500 tw-leading-212 tw-mb-2 text-justify">At Fortuner Ltd, we’re more than just a supplier—we’re your technology partner, helping you build a robust, sustainable IT infrastructure that can keep up with the demands of today’s business world.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('parts.four-box')

@endsection