<!DOCTYPE html>
<html lang="en">

<head>
    @include('_includes.head')
</head>
<!--end::Head-->
<!--begin::Body-->
@if(Auth::user()->chUserType === '1')
<body id="kt_body" class="header-extended header-fixed header-tablet-and-mobile-fixed">
@elseif(Auth::user()->chUserType === '3')
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed">
@endif
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header">
                    @include('_includes.header-top')
                    @if(Auth::user()->chUserType === '1')
                        @include('_includes.header-navs')
                    @endif
                </div>
                <!--end::Header-->

                @include('_includes.breadcumb')
                
                <!-- //@ Content -->
                @yield('content')

                <!--begin::Footer-->
                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    @include('_includes.footer')
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        @include('_includes.scroll-top')
    </div>
</body>
<!--end::Body-->

</html>