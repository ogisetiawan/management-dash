@extends('login/layouts.default')
@section('content')
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<!--begin::Form-->

<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="../../demo20/dist/index.html" action="#">
    <!--begin::Heading-->
    <div class="text-center mb-5">
        <!--begin::Title-->
        <h1 class="text-dark fw-bolder mb-3 text-uppercase text-start">Management Dashboard</h1>
        <!--end::Title-->
    </div>
    <!--begin::Heading-->

    {{-- <div class="row mb-9">
        <div class="col-md-4">
            <lottie-player style="width: auto;" src="{https://assets8.lottiefiles.com/packages/lf20_ekmyT1.json}" background="transparent" speed="1" loop autoplay></lottie-player>
        </div>
        <div class="col-md-8 align-items-center">
            <div class="text-gray-500 fw-semibold fs-6 text-uppercase text-start mb-3">Check your mail</div>
            <div class="text-gray-500 fw-semibold fs-6">We have set other intruction for password recovery to you email</div>
        </div>
    </div> --}}

    <div class="d-flex align-items-center">
        <div class="flex-shrink-0 ">
            <lottie-player style="height: 125px; width: 125px;" src="{{ url('public/assets/media/svg/mail-lottie.json') }}" background="transparent" speed="1" loop autoplay></lottie-player>
            <!-- <lottie-player style="height: 125px; width: 125px;" src="https://assets8.lottiefiles.com/packages/lf20_gylol8jm.json" background="transparent" speed="1" loop autoplay></lottie-player> -->
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
</form>
<!--end::Form-->
@endsection