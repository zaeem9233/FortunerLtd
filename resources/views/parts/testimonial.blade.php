@php
    $testimonials = [
        [
            'name'          => 'Sarah Thompson',
            'designation'   => 'IT Manager, TechNova Solutions',
            'heading'       => 'I had a great experience',
            'comment'       => 'Fortuner Ltd has been our go-to partner for IT hardware. Their refurbished servers are reliable, cost-effective, and delivered on time. Their customer support is outstanding and always ready to assist.'
        ],
        [
            'name'          => 'Mark Reynolds',
            'designation'   => 'Infrastructure Lead, Global Enterprises',
            'heading'       => 'Reliable IT Hardware Partner',
            'comment'       => 'We needed legacy hardware for our data center, and Fortuner Ltd sourced everything we required quickly and efficiently. Their team guided us throughout the process, making it a smooth experience.'
        ],
        [
            'name'          => 'Priya Kapoor',
            'designation'   => 'CTO, Innovatech Ltd',
            'heading'       => 'Efficient Legacy Hardware Sourcing',
            'comment'       => 'The quality of their certified refurbished equipment is impressive. Fortuner Ltd has helped our company reduce costs while maintaining performance and reliability in our IT systems.'
        ],
        [
            'name'          => 'James Carter',
            'designation'   => 'Operations Manager, NextGen Logistics',
            'heading'       => 'Fast, Secure, and Stress-Free Service',
            'comment'       => 'Fast shipping, secure payments, and excellent service! Fortuner Ltd makes IT hardware procurement simple and stress-free. We highly recommend them to any business looking for dependable IT solutions.'
        ]
    ];
@endphp

<section class="py-120 gradient-bg-two">
    <div class="text-center mx-auto tw-pb-15 max-w-548-px">
        <div class="bg-white tw-py-2 tw-px-7 rounded-pill text-main-600 fw-bold text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max common-shadow-twentyNine aos-init aos-animate" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600"> what other say about us
        </div>
        <h2 class="splitTextStyleOne text-white text-capitalize tw-leading-none" style="perspective: 100px;">
            <div class="split-line" style="display: block; text-align: center; position: relative; translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">Trusted  by </div><div class="split-line" style="display: block; text-align: center; position: relative; translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">happy clients</div>
        </h2>
    </div>

    <div class="">

        <div class="swiper testimonials-five-slider swiper-initialized swiper-horizontal swiper-backface-hidden">
            <div class="swiper-wrapper" id="swiper-wrapper-10d71256e573b61b5" aria-live="off"
                style="cursor: grab; transition-duration: 0ms; transform: translate3d(-538.333px, 0px, 0px); transition-delay: 0ms;">

                @foreach($testimonials as $index =>  $item)
                <div class="swiper-slide aos-init aos-animate {{ ($index == 0) ? 'swiper-slide-prev' : '' }} {{ ($index == 1) ? 'swiper-slide-active' : '' }} {{ ($index == 2) ? 'swiper-slide-next' : '' }}" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600" role="group" aria-label="1 / 4" data-swiper-slide-index="0" style="width: 508.333px; margin-right: 30px;">
                    <div class="">
                        <div class="common-shadow-ten tw-rounded-2xl tw-p-60-px bg-white animation-item">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="">
                                    <h5 class="tw-mb-2 text-capitalize">{{ $item['name'] }}</h5>
                                    <span class="text-neutral-500 fw-medium">{{ $item['designation'] }}</span>
                                </div>
                                <div class="">
                                    <img src="{{ asset('images/icons/ratings.svg') }}" alt="Star Rating">
                                </div>
                            </div>
                            <h4 class="max-w-288-px tw-mt-8 tw-mb-9">{{ $item['heading'] }}</h4>
                            <p class="text-neutral-600 tw-text-2xl tw-leading-153">{{ $item['comment'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="testimonials-five-slider-pagination pagination-style-four d-flex align-items-center justify-content-center tw-gap-6 tw-mt-15 tw-pb-3 swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">

                @foreach($testimonials as $index => $item)

                <span class="swiper-pagination-bullet {{ ($index == 1) ? 'swiper-pagination-bullet-active' : ''  }}" tabindex="0" role="button" aria-label="Go to slide {{ $index }}" {!! ($index == 1) ? 'aria-current="true"' : ''  !!}></span>

                @endforeach

            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </div>
</section>
