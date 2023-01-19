<!DOCTYPE html>
<html lang="en">

<head>
    @include('_includes.head')
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-extended header-fixed header-tablet-and-mobile-fixed">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <!--begin::Header-->
<div id="kt_header" class="header">
	<!--begin::Header top-->
	<div class="header-top d-flex align-items-stretch flex-grow-1">
		<!--begin::Container-->
		<div class="d-flex  container-xxl  align-items-stretch">
			<!--begin::Brand-->
			<div class="d-flex align-items-center align-items-lg-stretch me-5 flex-row-fluid">
				<!--begin::Heaeder navs toggle-->
				<button
					class="d-lg-none btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-35px h-35px h-md-40px w-md-40px ms-n2 me-2"
					id="kt_header_navs_toggle">
					<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
					<span class="svg-icon svg-icon-2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path
								d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
								fill="currentColor" />
							<path opacity="0.3"
								d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
								fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon--> </button>
				<!--end::Heaeder navs toggle-->
				<!--begin::Logo-->
				<a href="?page=index" class="d-flex align-items-center">
					<img alt="Logo" src="assets/media/logos/demo20.svg" class="h-25px h-lg-30px" />
				</a>
				<!--end::Logo-->
				<!--begin::Tabs wrapper-->
				<div class="align-self-end overflow-auto" id="kt_brand_tabs">
					<!--layout-partial:layout/header/__navs-tabs.html-->
					<!--begin::Header tabs wrapper-->
					<div class="header-tabs overflow-auto mx-4 ms-lg-10 mb-5 mb-lg-0" id="kt_header_tabs"
						data-kt-swapper="true" data-kt-swapper-mode="prepend"
						data-kt-swapper-parent="{default: '#kt_header_navs_wrapper', lg: '#kt_brand_tabs'}">
						<!--begin::Header tabs-->
						<ul class="nav flex-nowrap text-nowrap">
							<li class="nav-item">
								<a class="nav-link active" data-bs-toggle="tab"
									href="#kt_header_navs_tab_1">Features</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#kt_header_navs_tab_2">Forms</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#kt_header_navs_tab_3">Applications</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#kt_header_navs_tab_4">Reports</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#kt_header_navs_tab_5">Help</a>
							</li>
						</ul>
						<!--begin::Header tabs-->
					</div>
					<!--end::Header tabs wrapper-->
				</div>
				<!--end::Tabs wrapper-->
			</div>
			<!--end::Brand-->
			<!--layout-partial:layout/header/__topbar.html-->
			<!--begin::Topbar-->
			<div class="d-flex align-items-center flex-row-auto">
				<!--begin::Search-->
				<div class="d-flex align-items-stretch ms-1">
					<!--layout-partial:partials/search/_dropdown.html-->
				</div>
				<!--end::Search-->
				<!--begin::Activities-->
				<div class="d-flex align-items-center ms-1">
					<!--begin::Drawer toggle-->
					<div class="btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-35px h-35px h-md-40px w-md-40px"
						id="kt_activities_toggle">
						<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
						<span class="svg-icon svg-icon-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor" />
								<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor" />
								<rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor" />
								<rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Drawer toggle-->
				</div>
				<!--end::Activities-->
				<!--begin::Chat-->
				<div class="d-flex align-items-center ms-1">
					<!--begin::Menu wrapper-->
					<div class="btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-35px h-35px h-md-40px w-md-40px position-relative"
						id="kt_drawer_chat_toggle">
						<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
						<span class="svg-icon svg-icon-2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path opacity="0.3"
									d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
									fill="currentColor" />
								<rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor" />
								<rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
						<!--begin::Notification animation-->
						<span
							class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink">
						</span>
						<!--end::Notification animation-->
					</div>
					<!--end::Menu wrapper-->
				</div>
				<!--end::Chat-->
				<!--begin::Quick links-->
				<div class="d-flex align-items-center ms-1">
					<!--begin::Menu wrapper-->
					<div class="btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-35px h-35px h-md-40px w-md-40px"
						data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
						<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
						<span class="svg-icon svg-icon-2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
								<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
								<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
								<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--layout-partial:partials/menus/_quick-links-menu.html-->
					<!--end::Menu wrapper-->
				</div>
				<!--begin::Quick links-->
				<!--begin::Theme mode-->
				<div class="d-flex align-items-center ms-1">
					<!--layout-partial:partials/theme-mode/_main.html-->
				</div>
				<!--end::Theme mode-->
				<!--begin::User-->
				<div class="d-flex align-items-center ms-1" id="kt_header_user_menu_toggle">
					<!--begin::User info-->
					<div class="btn btn-flex align-items-center bg-hover-white bg-hover-opacity-10 py-2 px-2 px-md-3"
						data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
						<!--begin::Name-->
						<div class="d-none d-md-flex flex-column align-items-end justify-content-center me-2 me-md-4">
							<span class="text-white opacity-75 fs-8 fw-semibold lh-1 mb-1">Max</span>
							<span class="text-white fs-8 fw-bold lh-1">UX Designer</span>
						</div>
						<!--end::Name-->
						<!--begin::Symbol-->
						<div class="symbol symbol-30px symbol-md-40px">
							<img src="assets/media/avatars/300-1.jpg" alt="image" />
						</div>
						<!--end::Symbol-->
					</div>
					<!--end::User info-->
					<!--layout-partial:partials/menus/_user-account-menu.html-->
				</div>
				<!--end::User -->
				<!--begin::Heaeder menu toggle-->
				<!--end::Heaeder menu toggle-->
			</div>
			<!--end::Topbar-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Header top-->
</div>
<!--end::Header-->
                <!--end::Header-->

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
    <!--end::Scrolltop-->
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('/assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <!-- <script src="{{ asset('/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="{{ asset('/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script> -->
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <!-- <script src="{{ asset('/assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('/assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('/assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('/assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('/assets/js/custom/utilities/modals/create-campaign.js') }}"></script>
    <script src="{{ asset('/assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('/assets/js/custom/utilities/modals/users-search.js') }}"></script> -->
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>