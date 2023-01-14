@extends('login/layouts.default')
@section('content')
<!--begin::Form-->
<form class="form w-100" novalidate="novalidate" id="kt_new_password_form" data-kt-redirect-url="../../demo20/dist/authentication/layouts/fancy/sign-in.html" action="#">
    <!--begin::Heading-->
    <div class="text-start mb-10">
        <!--begin::Title-->
		<h1 class="text-dark fw-bolder mb-4 text-uppercase text-start">Management Dashboard</h1>
        <!--end::Title-->
        <!--begin::Text-->
		<div class="text-gray-500 fw-semibold fs-6 text-uppercase text-start mb-4">Create new password</div>
        <!--end::Link-->
    </div>
    <!--end::Heading-->
    <!--begin::Input group-->
    <div class="mb-10 fv-row" data-kt-password-meter="true">
        <!--begin::Wrapper-->
        <div class="mb-1">
            <!--begin::Input wrapper-->
            <div class="position-relative mb-3">
                <input class="form-control form-control-lg form-control-solid" type="password" placeholder="Password" name="password" autocomplete="off" data-kt-translate="new-password-input-password" />
                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                    <i class="bi bi-eye-slash fs-2"></i>
                    <i class="bi bi-eye fs-2 d-none"></i>
                </span>
            </div>
            <!--end::Input wrapper-->
            <!--begin::Meter-->
            <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
            </div>
            <!--end::Meter-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Hint-->
        <div class="text-muted" data-kt-translate="new-password-hint">Use 8 or more characters with a mix of letters, numbers & symbols.</div>
        <!--end::Hint-->
    </div>
    <!--end::Input group=-->
    <!--begin::Input group=-->
    <div class="fv-row mb-10">
        <input class="form-control form-control-lg form-control-solid" type="password" placeholder="Confirm Password" name="confirm-password" autocomplete="off" data-kt-translate="new-password-confirm-password" />
    </div>
    <!--end::Input group=-->
    <!--begin::Actions--> 
    <div class="d-grid mb-5">
        <!--begin::Link-->
        <button id="kt_new_password_submit" class="btn btn-primary" data-kt-translate="new-password-submit">
            <!--begin::Indicator label-->
            <span class="indicator-label">Save new password</span>
            <!--end::Indicator label-->
            <!--begin::Indicator progress-->
            <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            <!--end::Indicator progress-->
        </button>
        <!--end::Link-->
    </div>
    <!--end::Actions-->
</form>
<!--end::Form-->
<script src="{{ asset('public/dist/assets/js/custom/authentication/reset-password/new-password.js') }}"></script>
@endsection
