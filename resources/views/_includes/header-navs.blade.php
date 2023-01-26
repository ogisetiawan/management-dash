<!--begin::Header navs-->
<div class="header-navs d-flex align-items-stretch flex-stack h-lg-70px w-100 py-5 py-lg-0" id="kt_header_navs" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_navs_toggle" data-kt-swapper="true" data-kt-swapper-mode="append" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header'}">
    <!--begin::Container-->
    <div class="d-lg-flex container-xxl w-100">
        <!--begin::Wrapper-->
        <div class="d-lg-flex flex-column justify-content-lg-center w-100" id="kt_header_navs_wrapper">
            <!--begin::Header tab content-->
            <div class="tab-content" data-kt-scroll="true" data-kt-scroll-activate="{default: true, lg: false}" data-kt-scroll-height="auto" data-kt-scroll-offset="70px">
                <!-- //@ Master Data -->
                <!--begin::Tab panel-->
                <div class="tab-pane fade {{ Request::segment(2) == 'master_data'  ? 'active show' : '' }}" id="kt_header_navs_tab_1">
                    <!--begin::Menu wrapper-->
                    <div class="header-menu flex-column align-items-stretch flex-lg-row">
                        <!-- //@ Admin -->
                        <!--begin::Menu-->
                        <div class="menu menu-rounded menu-column menu-lg-row menu-root-here-bg-desktop menu-active-bg menu-title-gray-700 menu-state-primary menu-arrow-gray-400 fw-semibold align-items-stretch flex-grow-1 px-2 px-lg-0" id="#kt_header_menu" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item py-3 {{ Request::is('admin/master_data/country') ? 'here' : '' }}">
                                <a href="{{ url('admin/master_data/country') }}" class="menu-link">
                                    <span class="menu-title">Country</span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item py-3 {{ Request::is('admin/master_data/company') ? 'here' : '' }}">
                                <a href="{{ url('admin/master_data/company') }}" class="menu-link">
                                    <span class="menu-title">Company</span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item py-3 menu-item py-3 {{ Request::is('admin/master_data/division') ? 'here' : '' }}">
                                <a href="{{ url('admin/master_data/division') }}" class="menu-link">
                                    <span class="menu-title">Division</span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item py-3 {{ Request::is('admin/master_data/department') ? 'here' : '' }}">
                                <a href="{{ url('admin/master_data/department') }}" class="menu-link">
                                    <span class="menu-title">Department</span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item py-3 {{ Request::is('admin/master_data/profit_center') ? 'here' : '' }}">
                                <a href="{{ url('admin/master_data/profit_center') }}" class="menu-link">
                                    <span class="menu-title">Profit Center</span>
                                </a>
                            </div>
                            <!--begin:Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item py-3 {{ Request::is('admin/master_data/location') ? 'here' : '' }}">
                                <a href="{{ url('admin/master_data/location') }}" class="menu-link">
                                    <span class="menu-title">Location</span>
                                </a>
                            </div>
                            <!--begin::Menu item-->
                            <div class="menu-item py-3">
                                <a href="#" class="menu-link">
                                    <span class="menu-title">Data Mapping</span>
                                </a>
                            </div>
                        </div>
                        <!--end::Menu-->

                    </div>
                    <!--end::Menu wrapper-->
                </div>
                <!--end::Tab panel-->
                <!-- //@ User Management -->
                <!--begin::Tab panel-->
                <div class="tab-pane fade {{ Request::segment(2) == 'user_management'  ? 'active show' : '' }}" id="kt_header_navs_tab_2">
                    <!--begin::Menu wrapper-->
                    <div class="header-menu flex-column align-items-stretch flex-lg-row">
                        <!--begin::Menu-->
                        <div class="menu menu-rounded menu-column menu-lg-row menu-root-here-bg-desktop menu-active-bg menu-title-gray-700 menu-state-primary menu-arrow-gray-400 fw-semibold align-items-stretch flex-grow-1 px-2 px-lg-0" id="#kt_header_menu" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item py-3">
                                <a href="#" class="menu-link">
                                    <span class="menu-title">Roles</span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item py-3 {{ Request::is('admin/user_management/users') ? 'here' : '' }}">
                                <a href="{{ url('admin/user_management/users') }}" class="menu-link">
                                    <span class="menu-title">Users</span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Menu wrapper-->
                </div>
                <!--end::Tab panel-->
                <!-- //@ Menu Management -->
                <!--begin::Tab panel-->
                <div class="tab-pane fade {{ Request::segment(2) == 'menu_management'  ? 'active show' : '' }}" id="kt_header_navs_tab_3">
                    <!--begin::Menu wrapper-->
                    <div class="header-menu flex-column align-items-stretch flex-lg-row">
                        <!--begin::Menu-->
                        <div class="menu menu-rounded menu-column menu-lg-row menu-root-here-bg-desktop menu-active-bg menu-title-gray-700 menu-state-primary menu-arrow-gray-400 fw-semibold align-items-stretch flex-grow-1 px-2 px-lg-0" id="#kt_header_menu" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item py-3">
                                <a href="#" class="menu-link">
                                    <span class="menu-title">Menu</span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Menu wrapper-->
                </div>
                <!--end::Tab panel-->
            </div>
            <!--end::Header tab content-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Container-->
</div>
<!--end::Header navs-->