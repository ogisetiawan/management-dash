@extends('login/layouts.default')
@section('content')

@if(session('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
@endif
@if($errors->any())
@foreach($errors->all() as $err)
    <p class="alert alert-danger">{{ $err }}</p>
@endforeach
@endif

<!--begin::Form-->
<form class="form w-100" method="POST" action="{{ url('validate') }}">
    @csrf
    <!--begin::Heading-->
    <div class="text-center mb-5">
        <!--begin::Title-->
        <h1 class="text-gray-700 fw-bolder mb-5 text-uppercase text-start">Management Dashboard</h1>
        <!--end::Title-->
        <!--begin::Subtitle-->
        <div class="text-gray-500 fw-semibold fs-6 text-uppercase text-start">Login to view Dashboard</div>
        <!--end::Subtitle=-->
    </div>
    <!--begin::Heading-->
    <!--begin::Input group=-->
    <div class="form-floating fv-row mb-5">
        <!--begin::Email-->
        <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" id="floatingEmail" />
        <label for="floatingEmail" class="text-gray-500"><span class="bi bi-envelope me-2"></span>Email</label>
        <!--end::Email-->
    </div>
    <!--end::Input group=-->
    <div class="form-floating fv-row mb-5">
        <!--begin::Password-->
        <input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" id="floatingPassword" />
        <label for="floatingPassword" class="text-gray-500"><span class="bi bi-lock me-2"></span>Password</label>
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
            <span class="indicator-label">Login</i></span>
            <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </button>
    </div>
    <!-- <a href="#" class="btn btn-link btn-color-gray-600 btn-active-color-primary me-5 mb-2 text-end float-end">LOGIN &nbsp;&nbsp; <i class="fa fa-arrow-right-to-bracket fs-2 text-primary"></i></a> -->
    <!--end::Submit button-->
</form>
<!--end::Form-->
<script src="{{ asset('/assets/js/custom/authentication/sign-in/general.js') }}"></script>
@endsection