@extends('layout.main')

@section('title', 'Request a Quote | Fortuner Ltd IT Hardware Solutions');
@section('description', 'Get a fast, competitive quote for new, refurbished, or legacy IT hardware from Fortuner Ltd. Bulk orders, custom solutions, and worldwide shipping available.');
@section('keywords', 'get IT hardware quote, request IT equipment pricing, refurbished IT hardware quote, bulk IT supply cost, Fortuner Ltd quotes');

@section('content')

    @include('layout.breadcrumb')

    <!-- =============================== Contact Page section start =============================== -->
    <section class="py-120">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-6">
                    <div class="pe-xl-5 pe-lg-4">
                        <div class="">
                            <span class="splitTextStyleTwo tw-text-xl fw-bold fst-italic text-decoration-underline text-main-600 tw-mb-305">Quotation for any size order</span>
                            <h3 class="splitTextStyleOne tw-mb-4">Get Quote</h3>
                            <p class="text-neutral-900">Looking for reliable IT hardware at competitive prices? At Fortuner Ltd, we make it easy for you to get a tailored quote that fits your exact requirements. Whether you need a single component, bulk hardware, or hard-to-find legacy equipment, our team will prepare a personalized offer for you—fast.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 ps-lg-5">
                    <div class="bg-neutral-50 tw-py-17 tw-px-705" id="contactForm">
                        <h4 class="tw-mb-4">Fill Up The Form</h4>
                        <p class="text-neutral-600 max-w-444-px">Your email address will not be published. Required fields are marked *</p>
                        <form action="#" class="tw-mt-70-px d-flex flex-column tw-gap-12" name="quoteForm" id="quoteForm">

                            @csrf

                            <div class="position-relative">
                                <input type="text" name="name"
                                    class="focus-outline-0 bg-transparent border-0 tw-pb-5 tw-ps-9 w-100 border-bottom border-neutral-200 focus-border-main-600" placeholder="Your Name*" />
                                <span class="error-text text-danger" data-error="name"></span>
                                <span class="tw-text-xl d-flex text-neutral-500 position-absolute top-0 tw-start-0">
                                    <i class="ph-bold ph-user"></i>
                                </span>
                            </div>

                            <div class="position-relative">
                                <input type="email" name="email" class="focus-outline-0 bg-transparent border-0 tw-pb-5 tw-ps-9 w-100 border-bottom border-neutral-200 focus-border-main-600" placeholder="Email Address*" />
                                <span class="error-text text-danger" data-error="email"></span>
                                <span class="tw-text-xl d-flex text-neutral-500 position-absolute top-0 tw-start-0">
                                    <i class="ph-bold ph-envelope"></i>
                                </span>
                            </div>

                            <div class="position-relative">
                                <input type="text" name="subject" class="focus-outline-0 bg-transparent border-0 tw-pb-5 tw-ps-9 w-100 border-bottom border-neutral-200 focus-border-main-600" placeholder="Subject*" />
                                <span class="error-text text-danger" data-error="subject"></span>
                                <span class="tw-text-xl d-flex text-neutral-500 position-absolute top-0 tw-start-0">
                                    <i class="ph-bold ph-envelope"></i>
                                </span>
                            </div>

                            <div class="position-relative">
                                <textarea name="details" class="focus-outline-0 bg-transparent border-0 tw-pb-5 tw-ps-9 w-100 border-bottom border-neutral-200 focus-border-main-600 tw-h-108-px" placeholder="Enter Your Details here"></textarea>
                                <span class="error-text text-danger" data-error="details"></span>
                                <span class="tw-text-xl d-flex text-neutral-500 position-absolute top-0 tw-start-0">
                                    <i class="ph-bold ph-note-pencil"></i>
                                </span>
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-main hover--translate-y-1 active--translate-y-scale-9 hover-style-one button--stroke d-inline-flex align-items-center justify-content-center tw-gap-5 group active--translate-y-2 rounded-0" data-block="button">
                                    <span class="button__flair"></span>
                                    <span class="text-white tw-text-2xl group-hover-text-white tw-duration-500 position-relative">
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
        $("#quoteForm").on("submit", function(e) {
            e.preventDefault();
            $('.error-text').text('');
            $.ajax({
                url: "{{ route('get_quote.store') }}",
                method: "POST",
                data: {
                    _token:     $('input[name="_token"]').val(),
                    name:       $('input[name="name"]').val(),
                    email:      $('input[name="email"]').val(),
                    subject:    $('input[name="subject"]').val(),
                    details:    $('textarea[name="details"]').val()
                },
                success: function(response) {
                    $('input[name="name"]').val('');
                    $('input[name="email"]').val('');
                    $('input[name="subject"]').val('');
                    $('textarea[name="details"]').val('');
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
                        "Form not submitted, try again.",
                        "ph-fill ph-check-circle"
                    );
                }
            });
        });
    });
</script>

@endsection