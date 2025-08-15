@php
    $faqs = [
        [
            'question'  => 'What types of IT hardware do you sell?',
            'answer'    => 'We offer a wide range of IT hardware including servers, networking equipment, storage devices, and components. Our stock includes new, refurbished, and end-of-life hardware to suit different budgets and requirements.'
        ],
        [
            'question'  => 'Are your refurbished products reliable?',
            'answer'    => 'Yes. All refurbished equipment is fully tested, certified, and cleaned to meet our strict quality standards. We ensure they deliver the same dependable performance as new products.'
        ],
        [
            'question'  => 'Do you provide warranties on your products?',
            'answer'    => 'Absolutely. All our products, whether new or refurbished, come with a warranty. The warranty period may vary depending on the product type.'
        ],
        [
            'question'  => 'Can I place bulk orders for my company?',
            'answer'    => 'Yes. We specialize in bulk supply and custom orders for businesses, IT professionals, and resellers. Volume discounts are also available.'
        ],
        [
            'question'  => 'Can I return a product if I’m not satisfied?',
            'answer'    => 'Yes. We have a hassle-free return policy. Items can be returned in their original condition and packaging. Refunds or exchanges are processed promptly after inspection.'
        ],
        [
            'question'  => 'Do you stock hard-to-find or discontinued hardware?',
            'answer'    => 'Yes. We specialize in sourcing end-of-life and legacy IT hardware to support critical infrastructure and long-term projects.'
        ],
        [
            'question'  => 'How can I get a quote for specific equipment?',
            'answer'    => 'You can fill out our Get a Quote form on the website or contact our sales team directly with your requirements. We’ll respond quickly with pricing and availability.'
        ]
    ];
@endphp

<section class="faq-two py-120">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4">
                <div class="">
                    <div class="bg-neutral-100 tw-py-3 tw-px-305 rounded-pill text-heading fw-medium text-capitalize tw-leading-none d-inline-flex align-items-center tw-gap-2 tw-mb-405 min-w-max aos-init aos-animate"
                        data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="600">
                        <span class="tw-w-205 tw-h-205 bg-yellow rounded-circle"></span>
                        Got <span class="text-yellow">Questions?</span>
                    </div>
                    <h2 class="splitTextStyleOne text-heading text-capitalize" style="perspective: 100px;">
                        <div class="split-line" style="display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                        Your Answers to Everything About Fortuner Ltd
                        </div>
                    </h2>
                    <p class="splitTextStyleOne text-neutral-500 tw-mt-8 max-w-350-px fw-medium" style="perspective: 100px;">We understand that choosing the right IT hardware supplier means having all the details you need. That’s why we’ve compiled answers to our most common customer questions — covering products, shipping, payments, warranties, and more — so you can shop with confidence.</p>

                    <div class="tw-mt-9 aos-init" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="900">
                        <a href="{{ route('contact_us') }}" class="hover--translate-y-1 active--translate-y-scale-9 btn btn-main hover-style-one button--stroke tw-gap-5 group active--translate-y-2 tw-px-17 rounded-pill tw-py-505 fw-medium" data-block="button">
                            <span class="button__flair" style="translate: none; rotate: none; scale: none;"></span>
                            <span class="button__label">Contact us</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="ps-xl-5">
                    <div class="accordion common-accordion style-two" id="accordionExample">

                        @php
                            $i=1;
                        @endphp

                        @foreach($faqs as $index => $faq)
                        <div class="accordion-item tw-py-8 tw-px-40-px tw-rounded-xl bg-transparent border-0 mb-0 aos-init" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="8000">
                            <h5 class="accordion-header d-flex align-items-center justify-content-between tw-gap-3">
                                <button class="accordion-button shadow-none p-0 line-clamp-3 bg-transparent h5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">
                                    {{ $faq['question'] }}
                                </button>
                            </h5>
                            <div id="collapse{{ $index }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body p-0 tw-mt-605 max-w-620-px">
                                    <p class="text-neutral-500">{{ $faq['answer'] }}</p>
                                </div>
                            </div>
                        </div>

                        @php
                            $i++;
                        @endphp

                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
