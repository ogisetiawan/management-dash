@extends('login/layouts.default')
@section('content')
<!--begin::Form-->
<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="../../demo20/dist/index.html" action="#">
    <!--begin::Heading-->
    <div class="text-center mb-5">
        <!--begin::Title-->
        <h1 class="text-dark fw-bolder mb-5 text-uppercase text-start text-gray-700">Management Dashboard</h1>
        <!--end::Title-->
        <!--begin::Subtitle-->
        <div class="text-gray-500 fw-semibold fs-6 text-uppercase text-start">Login to view Dashboard</div>
        <!--end::Subtitle=-->
    </div>
    <!--begin::Heading-->
    <!--begin::Input group=-->
    <div class="fv-row mb-8">
        <!--begin::Email-->
        <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" />
        <!--end::Email-->
    </div>
    <!--end::Input group=-->
    <div class="fv-row mb-3">
        <!--begin::Password-->
        <input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" />
        <!--end::Password-->
    </div>
    <!--end::Input group=-->
    <!--begin::Wrapper-->
    <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
        <div></div>
        <!--begin::Link-->
        <a href="{{ url('password/reset') }}" class="link-primary">Forgot Password ?</a>
        <!--end::Link-->
    </div>
    <!--end::Wrapper-->
    <!--begin::Submit button-->
    <div class="d-grid mb-10">
        <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
            <span class="indicator-label">LOGIN <i class="fa fa-arrow-right-to-bracket fs-3"></i></span>
            <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </button>
    </div>
    <!-- <a href="#" class="btn btn-link btn-color-gray-600 btn-active-color-primary me-5 mb-2 text-end float-end">LOGIN &nbsp;&nbsp; <i class="fa fa-arrow-right-to-bracket fs-2 text-primary"></i></a> -->
    <!--end::Submit button-->
</form>
<!--end::Form-->
<script src="{{ asset('public/assets/js/custom/authentication/sign-in/general.js') }}"></script>
@endsection