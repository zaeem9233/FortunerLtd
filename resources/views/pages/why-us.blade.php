@extends('layout.main')

@section('title', 'Why Choose Fortuner Ltd | Certified IT Hardware You Can Trust');
@section('description', 'Discover why businesses worldwide choose Fortuner Ltd for certified, tested IT hardware. Quality, fast shipping, secure payments, and exceptional customer service.');
@section('keywords', 'why choose Fortuner Ltd, IT hardware reliability, certified IT equipment, refurbished hardware supplier, trusted IT partner');

@section('content')

    @php
        $list = [
            'Every product we offer—new or refurbished—is rigorously tested to ensure performance, durability, and reliability.',
            'Whether you need the latest servers or hard-to-find legacy components, we provide options to fit every need and budget.',
            'We extend the lifecycle of IT equipment, helping your business reduce e-waste and lower costs while staying environmentally responsible.',
            'From same-day dispatch to international delivery, our shipping is reliable, tracked, and insured for peace of mind.',
            'We provide custom solutions, bulk pricing, and volume discounts for businesses, IT professionals, and resellers.',
            'Our friendly and knowledgeable team is ready to guide you from product selection to after-sales service.',
            'We serve customers worldwide, delivering IT hardware solutions to major international destinations quickly and safely.'
        ];
    @endphp

    @include('layout.breadcrumb')

    <section class="py-120">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-10 col-xs-12 offset-md-2 offset-sm-1">
                    <h2 class="tw-mb-2 tw-mt-4 splitTextStyleOne">Why Choose Fortuner Ltd</h2>

                    <p class="text-neutral-500 tw-leading-212 tw-mb-2 text-justify">At Fortuner Ltd, we understand that selecting the right IT hardware supplier is about far more than just buying products—it’s about trust, reliability, and consistent service. Our mission is to provide businesses, IT professionals, and resellers with high-quality new, refurbished, and end-of-life IT hardware that meets the highest standards of performance and durability. Every product we offer undergoes rigorous testing and certification to ensure it delivers the reliability our customers depend on, whether it’s the latest enterprise-grade server or a hard-to-find legacy component.</p>

                    <p class="text-neutral-500 tw-leading-212 tw-mb-2 text-justify">We differentiate ourselves by offering a complete range of IT hardware solutions. Our portfolio includes new equipment sourced from trusted global manufacturers, as well as refurbished and end-of-life hardware that provides cost-effective alternatives for businesses aiming to maximize value without compromising on quality. By offering both new and refurbished options, we ensure that our clients can upgrade, replace, or maintain their IT infrastructure efficiently, regardless of budget or system requirements.</p>

                    <p class="text-neutral-500 tw-leading-212 tw-mb-2 text-justify">Sustainability is a core principle at Fortuner Ltd. We are committed to reducing electronic waste by extending the lifecycle of IT equipment through refurbishment and responsible reuse. This eco-friendly approach not only helps the environment but also offers our customers significant cost savings. Choosing Fortuner Ltd means partnering with a supplier who cares about the planet while delivering reliable and high-performance technology.</p>

                    <p class="text-neutral-500 tw-leading-212 tw-mb-2 text-justify">Our commitment extends beyond products to include exceptional customer service and support. We understand that time is critical in the IT industry, which is why we offer fast, secure shipping with options for same-day dispatch on in-stock items and international delivery to major destinations. Our team is always ready to provide guidance, technical assistance, and personalized advice to help you select the right hardware solutions for your business.</p>

                    <p class="text-neutral-500 tw-leading-212 tw-mb-2 text-justify">At Fortuner Ltd, we also offer flexible purchasing and payment options to suit the needs of different customers, from single orders to bulk procurement. Transparent pricing, multiple payment methods, and no hidden fees ensure a smooth and secure buying experience. We believe in creating long-term relationships with our clients by combining high-quality products, reliable delivery, sustainable practices, and outstanding support, making us the trusted IT hardware partner for businesses worldwide.</p>

                    <h3 class="tw-mb-2 tw-mt-4 splitTextStyleOne">Our Key Advantages</h3>

                    <ul class="d-flex flex-column tw-gap-5">
                        @foreach($list as $item)
                        <li class="d-flex align-items-center tw-gap-4 group">
                            <span class="tw-w-705 tw-h-705 common-shadow-seven bg-white d-flex justify-content-center align-items-center rounded-circle text-main-600 tw-text-lg group-hover-bg-main-600 group-hover-text-white tw-duration-500">
                                <i class="ph-bold ph-check"></i>
                            </span>
                            <p class="text-neutral-600">{{ $item }}</p>
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </section>

    @include('parts.testimonial')

@endsection