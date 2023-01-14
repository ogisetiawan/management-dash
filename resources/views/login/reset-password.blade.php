@extends('login/layouts.default')
@section('content')
<!--begin::Form-->
<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="../../demo20/dist/index.html" action="#">
	<!--begin::Heading-->
	<div class="text-center mb-5">
		<!--begin::Title-->
		<h1 class="text-gray-700 fw-bolder mb-5 text-uppercase text-start">Management Dashboard</h1>
		<!--end::Title-->
		<!--begin::Subtitle-->
		<div class="text-gray-500 fw-semibold fs-6 text-uppercase text-start mb-4">Forgot your password?</div>
		<div class="text-gray-500 fw-semibold fs-6 text-start">Enter the email associated with your account and we will send you a link to reset your password.</div>
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
	<!--begin::Submit button-->
	<div class="d-grid mb-5">
		<button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
			<!--begin::Indicator label-->
			<span class="indicator-label">Reset passsword</span>
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
<div class="text-center fw-semibold fs-5">
	<a href="{{ url('/') }}" class="link-primary fs-5 me-1">Back to login</a>
</div>
<!--end::Form-->
@endsection