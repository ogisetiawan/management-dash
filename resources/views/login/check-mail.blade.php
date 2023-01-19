@extends('login/layouts.default')
@section('content')
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<!--begin::Form-->

<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="../../demo20/dist/index.html" action="#">
    <!--begin::Heading-->
    <div class="text-center mb-5">
        <!--begin::Title-->
        <h1 class="text-gray-700 fw-bolder mb-3 text-uppercase text-start">Management Dashboard</h1>
        <!--end::Title-->
    </div>
    <!--begin::Heading-->

    <div class="d-flex align-items-center mb-5">
        <div class="flex-shrink-0 ">
            <lottie-player style="height: 125px; width: 125px;" src="{{ url('/assets/media/svg/mail-lottie.json') }}" background="transparent" speed="1" loop autoplay></lottie-player>
        </div>
        <div class="flex-grow-1 ms-3">
            <div class="text-gray-500 fw-semibold fs-6 text-uppercase text-start mb-3">Check your mail</div>
            <div class="text-gray-500 fw-semibold fs-6">We have set other intruction for password recovery to you email</div>
        </div>
    </div>

    <!--begin::Submit button-->
    <div class="d-grid mb-10">
        <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
            <!--begin::Indicator label-->
            <span class="indicator-label">Back to login</span>
            <!--end::Indicator label-->
            <!--begin::Indicator progress-->
            <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
            <!--end::Indicator progress-->
        </button>
    </div>
    <!--end::Submit button-->

    <div class="fs-6 mt-5">
        <span class="fw-semibold text-gray-500">Did not receive the email?</span>
        <p><a href="#" class="link-primary fw-bold">Resend password recovery</a></p>
    </div>
</form>
<!--end::Form-->
@endsection