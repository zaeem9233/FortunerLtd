@extends('layout.main')

@section('title', 'Contact Fortuner Ltd | Get in Touch with Our IT Experts');
@section('description', 'Have questions or need a quote? Contact Fortuner Ltd for professional advice on new, refurbished, and end-of-life IT hardware. We’re here to help.');
@section('keywords', 'contact Fortuner Ltd, IT hardware inquiries, get in touch, refurbished IT equipment support, IT hardware supplier contact');

@section('content')

    @include('layout.breadcrumb')

    <!-- ========================= Contact box section Start ============================ -->
    <section class="bg-neutral-light-half style-two">
        <div class="container">
            <div class="bg-white tw-py-9 tw-px-8">
                <div class="row gy-4">
                    <div class="col-lg-4 col-sm-6">
                        <div
                            class="bg-white tw-rounded-lg tw-py-15 tw-px-5 common-shadow-thirteen hover-bg-main-600 group group-item text-center animation-item tw-transition tw-duration-200 h-100">
                            <span class="tw-mb-705">
                                <img src="{{ asset('images/icons/contact-icon1.svg') }}" alt="Icon"
                                    class="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat">
                            </span>
                            <h5
                                class="group-hover-text-white tw-transition tw-duration-200 tw-mb-5 text-capitalize splitTextStyleOne">
                                address line</h5>
                            <div class="max-w-250-px mx-auto">
                                <p
                                    class="group-hover-text-white tw-transition tw-duration-200 text-neutral-600 fw-medium tw-text-lg splitTextStyleOne">
                                    64 Sylvan way, Bathgate, EH48 2RH</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div
                            class="bg-white tw-rounded-lg tw-py-15 tw-px-5 common-shadow-thirteen hover-bg-main-600 group group-item text-center animation-item tw-transition tw-duration-200 h-100">
                            <span class="tw-mb-705">
                                <img src="{{ asset('images/icons/contact-icon2.svg') }}" alt="Icon"
                                    class="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat">
                            </span>
                            <h5
                                class="group-hover-text-white tw-transition tw-duration-200 tw-mb-5 text-capitalize splitTextStyleOne">
                                Phone Number</h5>
                            <div class="max-w-250-px mx-auto">
                                <a href="tel:+447447503232"
                                    class="group-hover-text-white tw-transition tw-duration-200 text-neutral-600 fw-medium tw-text-lg splitTextStyleOne">+447447503232</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div
                            class="bg-white tw-rounded-lg tw-py-15 tw-px-5 common-shadow-thirteen hover-bg-main-600 group group-item text-center animation-item tw-transition tw-duration-200 h-100">
                            <span class="tw-mb-705">
                                <img src="{{ asset('images/icons/contact-icon3.svg') }}" alt="Icon"
                                    class="group-hover-item-text-invert tw-transition tw-duration-200 animate__heartBeat">
                            </span>
                            <h5
                                class="group-hover-text-white tw-transition tw-duration-200 tw-mb-5 text-capitalize splitTextStyleOne">
                                Mail Address</h5>
                            <div class="max-w-250-px mx-auto">
                                <a href="mailto:info@domain.com"
                                    class="group-hover-text-white tw-transition tw-duration-200 text-neutral-600 fw-medium tw-text-lg splitTextStyleOne">info@domain.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= Contact box section End ============================ -->

    <!-- =============================== Contact Page section start =============================== -->
    <section class="py-120">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-6">
                    <div class="pe-xl-5 pe-lg-4">
                        <div class="">
                            <span
                                class="splitTextStyleTwo tw-text-xl fw-bold fst-italic text-decoration-underline text-main-600 tw-mb-305">Get
                                In Touch</span>
                            <h3 class="splitTextStyleOne tw-mb-4">Contact Us</h3>
                            <p class="text-neutral-900">We’re here to help! Whether you have a question about our products,
                                need a custom quote, or want technical guidance, our team at Fortuner Ltd is just a message
                                away. Get in touch today and let’s find the right IT solution for you.</p>
                        </div>
                        <div class="xs-grid-cols-2 d-grid tw-mt-16 tw-gap-74-px">
                            <div class="d-flex align-items-start tw-gap-6">
                                <span class="tw-text-3xl text-main-600 d-flex">
                                    <i class="ph-bold ph-map-pin"></i>
                                </span>
                                <div class="">
                                    <h6 class="tw-mb-4">Location</h6>
                                    <p class="text-neutral-600">64 Sylvan way, Bathgate, EH48 2RH</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start tw-gap-6">
                                <span class="tw-text-3xl text-main-600 d-flex">
                                    <i class="ph-bold ph-phone"></i>
                                </span>
                                <div class="">
                                    <h6 class="tw-mb-4">Phone</h6>
                                    <a href="tel:+447447503232"
                                        class="text-neutral-600 hover-text-main-600">+447447503232</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-start tw-gap-6">
                                <span class="tw-text-3xl text-main-600 d-flex">
                                    <i class="ph-bold ph-envelope-simple"></i>
                                </span>
                                <div class="">
                                    <h6 class="tw-mb-4">Location</h6>
                                    <a href="mailto:info@domain.com"
                                        class="text-neutral-600 hover-text-main-600">info@domain.com</a>
                                </div>
                            </div>
                        </div>

                        <!-- map Start -->
                        <div class="map tw-mt-15">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2251.686017239301!2d-3.6560020322766955!3d55.89525339121531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x488876105c4e5e41%3A0x78e7feaaa308a09d!2s64%20Sylvan%20Way%2C%20Bathgate%20EH48%202RH%2C%20UK!5e1!3m2!1sen!2s!4v1755115986359!5m2!1sen!2s"
                                class="w-100" height="240" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <!-- map End -->
                    </div>
                </div>

                <div class="col-lg-6 ps-lg-5">
                    <div class="bg-neutral-50 tw-py-17 tw-px-705" id="contactForm">
                        <h4 class="tw-mb-4">Fill Up The Form</h4>
                        <p class="text-neutral-600 max-w-444-px">Your email address will not be published. Required fields
                            are marked *</p>
                        <form action="#" class="tw-mt-70-px d-flex flex-column tw-gap-12" name="contactForm"
                            id="contactForm">

                            @csrf

                            <div class="position-relative">
                                <input type="text" name="name"
                                    class="focus-outline-0 bg-transparent border-0 tw-pb-5 tw-ps-9 w-100 border-bottom border-neutral-200 focus-border-main-600"
                                    placeholder="Your Name*" />
                                <span class="error-text text-danger" data-error="name"></span>
                                <span class="tw-text-xl d-flex text-neutral-500 position-absolute top-0 tw-start-0">
                                    <i class="ph-bold ph-user"></i>
                                </span>
                            </div>

                            <div class="position-relative">
                                <input type="email" name="email"
                                    class="focus-outline-0 bg-transparent border-0 tw-pb-5 tw-ps-9 w-100 border-bottom border-neutral-200 focus-border-main-600"
                                    placeholder="Email Address*" />
                                <span class="error-text text-danger" data-error="email"></span>
                                <span class="tw-text-xl d-flex text-neutral-500 position-absolute top-0 tw-start-0">
                                    <i class="ph-bold ph-envelope"></i>
                                </span>
                            </div>

                            <div class="position-relative">
                                <textarea name="message"
                                    class="focus-outline-0 bg-transparent border-0 tw-pb-5 tw-ps-9 w-100 border-bottom border-neutral-200 focus-border-main-600 tw-h-108-px"
                                    placeholder="Enter Your Message here"></textarea>
                                <span class="error-text text-danger" data-error="message"></span>
                                <span class="tw-text-xl d-flex text-neutral-500 position-absolute top-0 tw-start-0">
                                    <i class="ph-bold ph-note-pencil"></i>
                                </span>
                            </div>
                            <div class="">
                                <button type="submit"
                                    class="btn btn-main hover--translate-y-1 active--translate-y-scale-9 hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 rounded-0"
                                    data-block="button">
                                    <span class="button__flair"></span>
                                    <span
                                        class="text-white tw-text-2xl group-hover-text-white tw-duration-500 position-relative">
                                        <i class="ph-bold ph-paper-plane-tilt"></i>
                                    </span>
                                    <span class="button__label">Get In Touch</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============================== Contact Page section End =============================== -->

@endsection

@include('layout.page-script-all')

@section('script')

<script>
    $(document).ready(function() {
        $("#contactForm").on("submit", function(e) {
            e.preventDefault();
            $('.error-text').text('');
            $.ajax({
                url: "{{ route('contact_us.store') }}",
                method: "POST",
                data: {
                    _token: $('input[name="_token"]').val(),
                    name: $('input[name="name"]').val(),
                    email: $('input[name="email"]').val(),
                    message: $('textarea[name="message"]').val()
                },
                success: function(response) {
                    $('input[name="name"]').val('');
                    $('input[name="email"]').val('');
                    $('textarea[name="message"]').val('');
                    toastMessage(
                        "success",
                        "Success",
                        response.success,
                        "ph-fill ph-check-circle"
                    );
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            $(`[data-error="${key}"]`).text(value[0]);
                        });
                    }
                    toastMessage(
                        "warning",
                        "Warning",
                        "Message not sent, try again.",
                        "ph-fill ph-check-circle"
                    );
                }
            });
        });
    });
</script>

@endsection
