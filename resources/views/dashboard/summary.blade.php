@extends('_layouts.default')
@section('content')
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <div class="content flex-row-fluid" id="kt_content">
        <!-- //! FILTER -->
        <div class="card">
            <div class="card-body py-5 px-2">
                <div class="container-xxl" style="padding:0 15px !important">
                    <form action="{{ url('user/dashboard/summary/filter') }}" class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3" autocomplete="off" runat="server" method="POST" id="form">
                        {{ csrf_field() }}
                        <div class="col">
                            <label class="form-label text-muted fw-bold fs-8">CH/AG</label>
                            <select name="ch_ag" class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Select an CH/AG">
                                @isset($companyTypes)
                                @foreach($companyTypes as $companyType)
                                <option></option>
                                <option value="CH">{{ $companyType->chTypeName }}</option>
                                @endforeach
                                @endisset

                                @empty($companyTypes)
                                <option></option>
                                @endempty
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label text-muted fw-bold fs-8">BUSINESS UNIT</label>
                            <select name="bu" class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Select an Business Unit">
                                @isset($BUs)
                                <option value="null">All</option>
                                @foreach($BUs as $BU)
                                <option value="{{ $BU->chDivisionCode }}">{{ $BU->chDivisionName }}</option>
                                @endforeach
                                @endisset

                                @empty($BUs)
                                <option></option>
                                @endempty
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label text-muted fw-bold fs-8">DEPARTMENT</label>
                            <select name="dept" class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Select an Department">
                                @isset($departments)
                                @foreach($departments as $deparement)
                                <option></option>
                                <option value="{{ $deparement->chDepartmentCode }}">{{ $deparement->chDepartmentName }}</option>
                                @endforeach
                                @endisset

                                @empty($departments)
                                <option></option>
                                @endempty
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label text-muted fw-bold fs-8">PRODUCT GROUP</label>
                            <select name="product_group" class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Select an Product Group">
                                @isset($product_groups)
                                @foreach($product_groups as $product_group)
                                <option></option>
                                <option value="{{ $product_group->chProdHierarchy }}">{{ $product_group->chDescription }}</option>
                                @endforeach
                                @endisset

                                @empty($product_groups)
                                <option></option>
                                @endempty
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label text-muted fw-bold fs-8">PRODUCT</label>
                            <select name="product" class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Select an Product">
                                @isset($products)
                                @foreach($products as $products)
                                <option></option>
                                <option value="{{ $products->chProdHierarchy }}">{{ $products->chDescription }}</option>
                                @endforeach
                                @endisset

                                @empty($products)
                                <option></option>
                                @endempty
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label text-muted fw-bold fs-8">COUNTRY</label>
                            <select name="country" class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Select an Country">
                                @isset($countries)
                                @foreach($countries as $country)
                                <option></option>
                                <option value="{{ $country->chCountryCode }}">{{ $country->chCountryName }}</option>
                                @endforeach
                                @endisset

                                @empty($countries)
                                <option></option>
                                @endempty
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label text-muted fw-bold fs-8">COMPANY</label>
                            <select name="company" class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Select an Company">
                                @isset($companies)
                                @foreach($companies as $company)
                                <option></option>
                                <option value="{{ $company->chCompanyCode }}">{{ $company->chCompanyName }}</option>
                                @endforeach
                                @endisset

                                @empty($companies)
                                <option></option>
                                @endempty
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label text-muted fw-bold fs-8">LOCATION</label>
                            <select name="location" class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Select an Location">
                                @isset($locations)
                                @foreach($locations as $location)
                                <option></option>
                                <option value="{{ $location->id_Location }}">{{ $location->chLocationName }}</option>
                                @endforeach
                                @endisset

                                @empty($locations)
                                <option></option>
                                @endempty
                            </select>
                        </div>
                    </form>
                </div>

            </div>
            <div class="card-footer py-5 d-flex justify-content-lg-end gap-3">
                <button type="submit" class="btn btn-sm btn-light">
                    <span class="indicator-label text-uppercase">Reset </i></span>
                </button>
                <button type="submit" class="btn btn-sm btn-primary" id="btnFilter">
                    <span class="indicator-label text-uppercase">Apply Filter <i class="bi bi-funnel-fill"></i></span>
                </button>
            </div>
        </div>
        <!-- //! FILTER -->

        <!-- //! FINANCIAL ANALYSIS -->
        <div class="d-flex flex-wrap flex-stack py-5">
            <!--begin::Title-->
            <div class="d-flex align-items-sm-center mb-5">
                <!--begin::Symbol-->
                <div class="symbol symbol-45px me-4">
                    <span class="symbol-label bg-primary">
                        <i class="text-inverse-primary fs-1 lh-0 bi bi-currency-dollar"></i>
                    </span>
                </div>
                <!--end::Symbol-->
                <!--begin::Section-->
                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                    <div class="flex-grow-1 me-2">
                        <span class="text-gray-800 fw-bold d-block fs-2">Financial</span>
                        <span class="text-gray-400 fs-4">Analysis</span>
                    </div>
                </div>
                <!--end::Section-->
            </div>
            <!--end::Title-->
            <!--begin::Controls-->
            <div class="d-flex flex-wrap my-1">
                <a href="#" class="btn btn-link btn-color-info btn-active-color-primary">View More <i class="bi bi-arrow-right"></i></a>
            </div>
            <!--end::Controls-->
        </div>
        <div class="row g-2" id="kt_blockui_target">
            <!-- //@ Turnover -->
            <div class="col-xl-6 mb-xl-10">
                <div class="card card-flush overflow-hidden h-md-100">
                    <div class="card-header py-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-2 text-uppercase text-custom-blue3">Turnover</span>
                            <div class="d-flex align-items-center mb-2">
                                <span id="turnOverYTD" class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">0</span>
                                <span class="fs-5 fw-semibold text-gray-400 align-self-start me-1">YTD</span>
                            </div>
                            <div id="turnOverDiff">
                                <span class="badge badge-light-success fs-base">
                                    <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                            <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                        </svg>
                                    </span> 0 (0%)
                                </span>
                            </div>
                        </h3>
                        <div class="card-toolbar">
                            <div class="col bg-light-primary px-5 py-5 rounded-2">
                                <div class="d-flex flex-column text-center">
                                    <span class="text-gray-400 pt-1 fw-semibold fs-8">MTD</span>
                                    <span id="turnOverMTD" class="fs-2hx fw-semibold text-dark lh-1">0M</span>
                                </div>
                                <div class="d-flex justify-content-between w-100 text-gray-400 text-custom-blue3 pt-1 fs-9">
                                    <span class="me-2" id="turnOverMTDMonth">MTD June</span>
                                    <span id="turnOverMTDVal">0</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--begin::Card body-->
                    <div class="card-body pt-4">
                        <!--begin::Chart-->
                        <div id="turnOverLineBarChart" class="h-450px w-100"></div>
                        <!--end::Chart-->
                    </div>
                    <!--end::Card body-->
                </div>
            </div>
            <!-- //@ Turnover -->

            <div class="col-xl-6">
                <div class="row g-2">
                    <div class="col-12">
                        <!-- //@ Gross Profit -->
                        <div class="card card-flush">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <span class="card-label fw-bold fs-2 mb-2 text-uppercase text-custom-blue3">Gross Profit</span>
                                <h3 class="card-title align-items-start flex-column">
                                </h3>
                                <!--begin::Toolbar-->
                                <div class="card-toolbar">
                                    <ul class="nav" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4 me-1 active" data-bs-toggle="tab" href="#kt_table_widget_6_tab_1" aria-selected="true" role="tab">Adjust GP</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_6_tab_2" aria-selected="false" role="tab" tabindex="-1">GP</a>
                                        </li>
                                    </ul>
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex py-2">
                                <!--begin::Row-->
                                <div class="row align-items-center mx-0 w-100">
                                    <!--begin::Col-->
                                    <div class="col-7 px-0">
                                        <div class="d-flex justify-content-between">
                                            <!-- //~ Adj GP -->
                                            <div>
                                                <span class="card-label fw-bold mb-2 text-uppercase text-custom-blue3">Adj Gp</span>
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2" id="grossProfitYTD">0</span>
                                                    <span class="fs-8 fw-semibold text-gray-400 align-self-start" id="grossProDiff">YTD June</span>
                                                </div>
                                                <div id="grossProfitDiff">
                                                    <span class="badge badge-light-success">
                                                        <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                                                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                                            </svg>
                                                        </span>+ 0M (0%)
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- //~ card Adj GP -->
                                            <div class="bg-light-primary px-5 py-5 rounded-2">
                                                <div class="d-flex flex-column text-center">
                                                    <span class="text-gray-400 mb-1 fw-semibold fs-9">June 2023</span>
                                                    <span class="fs-2 fw-bold text-dark" id="grossProfitMTD">0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="separator border-2 my-5"></div>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <!-- //~ Adj Margin -->
                                                <span class="card-label fw-bold mb-2 text-uppercase text-custom-blue3">Adj Gp Margin</span>
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2" id="grossProfitMarginYTD">0%</span>
                                                    <span class="fs-8 fw-semibold text-gray-400 align-self-start">YTD June</span>
                                                </div>
                                                <div id="grossProfitMarginDiff">
                                                    <span class="badge badge-light-success">
                                                        <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                                                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                                            </svg>
                                                        </span>0%
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- //~ card Adj Margin -->
                                            <div class="bg-light-primary px-5 py-5 rounded-2">
                                                <div class="d-flex flex-column text-center">
                                                    <span class="text-gray-400 mb-1 fw-semibold fs-9">June 2023</span>
                                                    <span class="fs-2 fw-bold text-dark" id="grossProfitMarginMTD">0%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-gray-400 mt-3 fw-semibold fs-8">Adj. GP: Last update as of June 2023 Closing</p>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-5 d-flex justify-content-end px-0">
                                        <!--begin::Chart-->
                                        <!-- <div id="kt_card_widget_19_chart" class="min-h-auto h-150px w-150px" data-kt-size="150" data-kt-line="25"></div> -->
                                        <div id="grossProfitDonut" class="min-h-auto h-150px w-150px" data-kt-size="150" data-kt-line="25"></div>
                                        <!--end::Chart-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Card body-->
                        </div>
                    </div>
                    <div class="col-12">
                        <!-- //@ Operation Profit -->
                        <div class="card card-flush">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <span class="card-label fw-bold fs-2 mb-2 text-uppercase text-custom-blue3">Operating Profit 3</span>
                                <h3 class="card-title align-items-start flex-column">
                                </h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex py-2">
                                <!--begin::Row-->
                                <div class="row align-items-center mx-0 w-100">
                                    <!--begin::Col-->
                                    <div class="col-7 px-0">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <!-- //~ OP3 YTD-->
                                                <span class="card-label fw-bold mb-2 text-uppercase text-custom-blue3">OP3</span>
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2" id="op3YTD">0M</span>
                                                    <span class="fs-8 fw-semibold text-gray-400 align-self-start me-1">YTD June</span>
                                                </div>
                                                <div id="op3YTDdiff">
                                                    <span class="badge badge-light-success">
                                                        <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                                                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                                            </svg>
                                                        </span>+ 0M (0%)
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- //~ OP3 MTD -->
                                            <div class="bg-light-primary px-5 py-5 rounded-2">
                                                <div class="d-flex flex-column text-center">
                                                    <span class="text-gray-400 mb-1 fw-semibold fs-9">June 2023</span>
                                                    <span class="fs-2 fw-bold text-dark" id="op3MTD">0M</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="separator border-2 my-5"></div>
                                        <!-- //~ OP3 Margin -->
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <span class="card-label fw-bold mb-2 text-uppercase text-custom-blue3">OP3 Margin</span>
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2" id="op3MarginYTD">0%</span>
                                                    <span class="fs-8 fw-semibold text-gray-400 align-self-start me-1">YTD June</span>
                                                </div>
                                                <div id="tester">
                                                    <span class="badge badge-light-success">
                                                        <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                                                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                                            </svg>
                                                        </span>0%
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- //~ card Adj Margin -->
                                            <div class="bg-light-primary px-5 py-5 rounded-2">
                                                <div class="d-flex flex-column text-center">
                                                    <span class="text-gray-400 mb-1 fw-semibold fs-9">June 2023</span>
                                                    <span class="fs-2 fw-bold text-dark" id="op3MarginMTD">0%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-gray-400 mt-3 fw-semibold fs-8">Adj. GP: Last update as of June 2023 Closing</p>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-5 d-flex justify-content-end px-0">
                                        <!--begin::Chart-->
                                        <div id="op3Donut" class="min-h-auto h-150px w-150px" data-kt-size="150" data-kt-line="25"></div>
                                        <!--end::Chart-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Card body-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //! FINANCIAL ANALYSIS -->
    </div>
</div>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

<!-- //@ lineBarChart -->
<script>
    const turnOverChart = (data) => {
        am5.ready(function() {
            // Create root element
            // https://www.amcharts.com/docs/v5/getting-started/#Root_element
            let root = am5.Root.new("turnOverLineBarChart");

            // Set themes
            // https://www.amcharts.com/docs/v5/concepts/themes/
            root.setThemes([am5themes_Animated.new(root)]);

            // Create chart
            // https://www.amcharts.com/docs/v5/charts/xy-chart/
            let chart = root.container.children.push(
                am5xy.XYChart.new(root, {
                    panX: false,
                    panY: false,
                    //? zoomin
                    // wheelX: "panX",
                    // wheelY: "zoomX",
                    layout: root.verticalLayout
                })
            );

            // let data = data;
            console.log(data);

            // Create axes
            // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
            let xRenderer = am5xy.AxisRendererX.new(root, {});
            let xAxis = chart.xAxes.push(
                am5xy.CategoryAxis.new(root, {
                    categoryField: "Month",
                    renderer: xRenderer,
                    tooltip: am5.Tooltip.new(root, {})
                })
            );
            xRenderer.grid.template.setAll({
                location: 1
            })

            xAxis.data.setAll(data);

            let yAxis = chart.yAxes.push(
                am5xy.ValueAxis.new(root, {
                    min: 0,
                    extraMax: 0.1,
                    renderer: am5xy.AxisRendererY.new(root, {
                        strokeOpacity: 0.1
                    })
                })
            );

            // Add series
            // https://www.amcharts.com/docs/v5/charts/xy-chart/series/

            let series1 = chart.series.push(
                am5xy.ColumnSeries.new(root, {
                    name: "Total Budget",
                    xAxis: xAxis,
                    yAxis: yAxis,
                    valueYField: "Total_Budget",
                    categoryXField: "Month",
                    fill: am5.color(KTUtil.getCssVariableValue("--blue1")),
                    tooltip: am5.Tooltip.new(root, {
                        pointerOrientation: "horizontal",
                        labelText: "{name} in {categoryX}: {valueY} {info} Millions"
                    })
                })
            );

            series1.columns.template.setAll({
                tooltipY: am5.percent(10),
                templateField: "columnSettings"
            });
            series1.data.setAll(data);



            let series2 = chart.series.push(
                am5xy.LineSeries.new(root, {
                    name: "Total Sales",
                    xAxis: xAxis,
                    yAxis: yAxis,
                    valueYField: "Total_Sales",
                    categoryXField: "Month",
                    fill: am5.color(KTUtil.getCssVariableValue("--orange1")),
                    stroke: am5.color(KTUtil.getCssVariableValue("--orange1")),
                    tooltip: am5.Tooltip.new(root, {
                        pointerOrientation: "horizontal",
                        labelText: "{name} in {categoryX}: {valueY} {info} Millions"
                    }),
                })
            );

            series2.strokes.template.setAll({
                strokeWidth: 3,
                templateField: "strokeSettings"
            });

            series2.data.setAll(data);

            series2.bullets.push(function() {
                return am5.Bullet.new(root, {
                    sprite: am5.Circle.new(root, {
                        strokeWidth: 3,
                        stroke: series2.get("stroke"),
                        radius: 5,
                        fill: root.interfaceColors.get("background")
                    })
                });
            });

            chart.set("cursor", am5xy.XYCursor.new(root, {}));

            // Add legend
            // https://www.amcharts.com/docs/v5/charts/xy-chart/legend-xy-series/
            let legend = chart.children.push(
                am5.Legend.new(root, {
                    centerX: am5.p50,
                    x: am5.p50
                })
            );
            legend.data.setAll(chart.series.values);

            // Make stuff animate on load
            // https://www.amcharts.com/docs/v5/concepts/animations/
            chart.appear(1000, 100);
            series1.appear();
        }); // end am5.ready()
    };
</script>

<!-- //@ GrossProfit-donutChart -->
<script>
    /**
     * ---------------------------------------
     * This demo was created using amCharts 5.
     *
     * For more information visit:
     * https://www.amcharts.com/
     *
     * Documentation is available at:
     * https://www.amcharts.com/docs/v5/
     * ---------------------------------------
     */

    // Create root and chart
    let root = am5.Root.new("grossProfitDonut");

    root.setThemes([
        am5themes_Animated.new(root)
    ]);

    let chart = root.container.children.push(
        am5percent.PieChart.new(root, {
            layout: root.horizontalLayout,
            radius: am5.percent(100),
            innerRadius: am5.percent(80)
        })
    );

    // Define data
    const data = [{
        country: "France",
        sales: 100000,
        color: am5.color("#fff"),
    }, {
        country: "Spain",
        sales: 160000
    }];

    // Create series
    let series = chart.series.push(
        am5percent.PieSeries.new(root, {
            name: "Series",
            valueField: "sales",
            categoryField: "country",
        })
    );

    series.labels.template.set("forceHidden", true);
    series.ticks.template.set("forceHidden", true);

    let label = series.children.push(am5.Label.new(root, {
        text: "43%",
        fontSize: 20,
        centerX: am5.percent(50),
        centerY: am5.percent(50),
        populateText: true
    }));

    series.data.setAll(data);
</script>

<!-- //@ op3-donutChart -->
<script>
    /**
     * ---------------------------------------
     * This demo was created using amCharts 5.
     *
     * For more information visit:
     * https://www.amcharts.com/
     *
     * Documentation is available at:
     * https://www.amcharts.com/docs/v5/
     * ---------------------------------------
     */

    // Create root and chart
    let roots = am5.Root.new("op3Donut");

    roots.setThemes([
        am5themes_Animated.new(roots)
    ]);

    let charts = roots.container.children.push(
        am5percent.PieChart.new(roots, {
            layout: roots.horizontalLayout,
            radius: am5.percent(100),
            innerRadius: am5.percent(80)
        })
    );

    // Define data
    const datas = [{
        country: "France",
        sales: 100000,
        color: am5.color("#fff"),
    }, {
        country: "Spain",
        sales: 160000
    }];

    // Create series
    let seriess = charts.series.push(
        am5percent.PieSeries.new(roots, {
            name: "Series",
            valueField: "sales",
            categoryField: "country",
        })
    );

    seriess.labels.template.set("forceHidden", true);
    seriess.ticks.template.set("forceHidden", true);

    let labels = seriess.children.push(am5.Label.new(roots, {
        text: "43%",
        fontSize: 20,
        centerX: am5.percent(50),
        centerY: am5.percent(50),
        populateText: true
    }));

    seriess.data.setAll(datas);
</script>

<script>
    const formatNumber = (number) => {
        const unitlist = ["", "K", "M", "G"];
        let sign = Math.sign(number);
        let unit = 0;

        while (Math.abs(number) > 1000) {
            unit = unit + 1;
            number = Math.floor(Math.abs(number) / 100) / 10;
        }
        return sign * Math.abs(number) + unitlist[unit];
    };

    //~ fetchPost
    const getFlter = (blockUI) => {
        const URL = $("#form").attr("action");
        const formData = new FormData(document.getElementById("form"))
        fetch(URL, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(result => {
                console.log(result);
                blockUI.block();
                setTimeout(function() {
                    blockUI.release();

                    // @ TurnoverYTD
                    const turnOverYTD = document.querySelector("#turnOverYTD");
                    const turnOverDiff = document.querySelector("#turnOverDiff");
                    turnOverYTD.innerHTML = formatNumber(result.turnOverYTD[0].Turnover_YTD)
                    if (result.turnOverYTD[0].Diff) {
                        if (result.turnOverYTD[0].Diff.includes('-')) {
                            turnOverDiff.innerHTML = `
                        <span class="badge badge-light-danger fs-base">
                            <span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor"></rect>
                                    <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor"></path>
                                </svg>
                            </span> ${formatNumber(result.turnOverYTD[0].Diff)} (${parseInt(result.turnOverYTD[0].Diff_Prcnt)}%)
                        </span>`;
                        } else {
                            turnOverDiff.innerHTML = `
                        <span class="badge badge-light-success fs-base">
                            <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                </svg>
                            </span> ${formatNumber(result.turnOverYTD[0].Diff)} (${parseInt(result.turnOverYTD[0].Diff_Prcnt)}%)
                        </span>`;
                        }
                    }

                    //@ TurnOverChart
                    for (let key in result.turnOverBudgetSales) {
                        result.turnOverBudgetSales[key].Total_Sales = parseInt(result.turnOverBudgetSales[key].Total_Sales)
                        result.turnOverBudgetSales[key].Total_Budget = parseInt(result.turnOverBudgetSales[key].Total_Budget)
                        if (result.turnOverBudgetSales[key].Month == 1) {
                            result.turnOverBudgetSales[key].Month = 'Jan';
                        } else if (result.turnOverBudgetSales[key].Month == 2) {
                            result.turnOverBudgetSales[key].Month = 'Feb';
                        } else {
                            result.turnOverBudgetSales[key].Month = 'Null';
                        }
                    }
                    turnOverChart(result.turnOverBudgetSales);

                    //@ TurnoverMTD
                    const turnOverMTD = document.querySelector("#turnOverMTD");
                    const turnOverMTDVal = document.querySelector("#turnOverMTDVal");
                    turnOverMTD.innerHTML = formatNumber(result.turnOverMTD[0].Turnover_MTD)
                    turnOverMTDVal.innerHTML = formatNumber(result.turnOverMTD[0].Turnover_LMTD)

                    //@ GrossProfitYTD
                    const grossProfitYTD = document.querySelector("#grossProfitYTD");
                    const grossProDiff = document.querySelector("#grossProDiff");
                    grossProfitYTD.innerHTML = formatNumber(result.grossProfitYTD[0].GP_YTD);
                    const grossProfitDiff = document.querySelector("#grossProfitDiff");
                    if (result.grossProfitYTD[0].Diff) {
                        if (result.grossProfitYTD[0].Diff.includes('-')) {
                            grossProfitDiff.innerHTML = `
                        <span class="badge badge-light-danger fs-base">
                            <span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor"></rect>
                                    <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor"></path>
                                </svg>
                            </span> ${formatNumber(result.grossProfitYTD[0].Diff)} (${parseInt(result.grossProfitYTD[0].Diff_Prcnt)}%)
                        </span>`;
                        } else {
                            grossProfitDiff.innerHTML = `
                        <span class="badge badge-light-success fs-base">
                            <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                </svg>
                            </span> ${formatNumber(result.grossProfitYTD[0].Diff)} (${parseInt(result.grossProfitYTD[0].Diff_Prcnt)}%)
                        </span>`;
                        }
                    }

                    //@ GrossProfitMTD
                    const grossProfitMTD = document.querySelector("#grossProfitMTD");
                    grossProfitMTD.innerHTML = formatNumber(result.grossProfitMTD[0].GP_MTD);

                    //@ GrossProfitMarginYTD
                    const grossProfitMarginYTD = document.querySelector("#grossProfitMarginYTD");
                    grossProfitMarginYTD.innerHTML = `${parseInt(result.grossProfitMarginYTD[0].GP_MARGIN_YTD)}%`;
                    const grossProfitMarginDiff = document.querySelector("#grossProfitMarginDiff");
                    if (result.grossProfitMarginYTD[0].Diff) {
                        if (result.grossProfitMarginYTD[0].Diff.includes('-')) {
                            grossProfitMarginDiff.innerHTML = `
                        <span class="badge badge-light-danger fs-base">
                            <span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor"></rect>
                                    <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor"></path>
                                </svg>
                            </span> ${parseInt(result.grossProfitMarginYTD[0].Diff)}%
                        </span>`;
                        } else {
                            grossProfitMarginDiff.innerHTML = `
                        <span class="badge badge-light-success fs-base">
                            <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                </svg>
                            </span> ${parseInt(result.grossProfitMarginYTD[0].Diff)}%
                        </span>`;
                        }
                    }

                    //@ GrossProfitMarginMTD
                    const grossProfitMarginMTD = document.querySelector("#grossProfitMarginMTD");
                    grossProfitMarginMTD.innerHTML = `${parseInt(result.grossProfitMarginMTD[0].GP_MARGIN_MTD)}%`;

                    //@ OP3YTD
                    const op3YTD = document.querySelector("#op3YTD");
                    op3YTD.innerHTML = `${formatNumber(result.op3YTD[0].OP3_YTD)}`;
                    const op3YTDdiff = document.querySelector("#op3YTDdiff");
                    if (result.op3YTD[0].Diff_Prcnt) {
                        if (result.op3YTD[0].Diff_Prcnt.includes('-')) {
                            op3YTDdiff.innerHTML = `
                            <span class="badge badge-light-danger fs-base">
                                <span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor"></rect>
                                        <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor"></path>
                                    </svg>
                                </span> ${formatNumber(result.op3YTD[0].Diff)} (${parseInt(result.op3YTD[0].Diff_Prcnt)}%)
                            </span>`;
                        } else {
                            op3YTDdiff.innerHTML = `
                            <span class="badge badge-light-success fs-base">
                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                        <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                    </svg>
                                </span> ${formatNumber(result.op3YTD[0].Diff)} (${parseInt(result.op3YTD[0].Diff_Prcnt)}%)
                            </span>`;
                        }
                    }

                    //@ OP3MTD
                    const op3MTD = document.querySelector("#op3MTD");
                    if (result.op3MTD[0].OP3_MTD) {
                        op3MTD.innerHTML = `${formatNumber(result.op3MTD[0].OP3_MTD)}`;
                    }

                    //@ OP3MARGINYTD
                    const op3MarginYTD = document.querySelector("#op3MarginYTD");
                    result.op3MarginYTD[0].OP3_YTD = parseInt(result.op3MarginYTD[0].OP3_YTD) || 0; //? later set all property if nan to be 0
                    // result.op3MarginYTD[0].OP3_YTD = result.op3MarginYTD[0].OP3_YTD == null ? 0 : result.op3MarginYTD[0].OP3_YTD; //? later set all property if nan to be 0
                    op3MarginYTD.innerHTML = `${formatNumber(result.op3MarginYTD[0].OP3_MARGIN_YTD)}%`;
                    const op3MarginYTDdiff = document.querySelector("#tester");
                    if (result.op3MarginYTD[0].Diff) {
                        if (result.op3MarginYTD[0].Diff.includes('-')) {
                            op3MarginYTDdiff.innerHTML = `
                            <span class="badge badge-light-danger fs-base">
                                <span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor"></rect>
                                        <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor"></path>
                                    </svg>
                                </span> ${parseFloat(result.op3MarginYTD[0].Diff)}%
                            </span>`;
                        } else {
                            op3MarginYTDdiff.innerHTML = `<span class="badge badge-light-success fs-base">
                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                        <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                    </svg>
                                </span> ${parseFloat(result.op3MarginYTD[0].Diff)}%
                            </span>`;
                        }
                    }

                    //@ OP3MTD
                    const op3MarginMTD = document.querySelector("#op3MarginMTD");
                    if (result.op3MarginMTD[0].OP3_MTD) {
                        op3MarginMTD.innerHTML = `${parseInt(result.op3MarginMTD[0].OP3_MARGIN_MTD)}%`;
                    }

                }, 500);

            })
            .catch(error => {
                console.error('Error:', error);
            });
    };

    //~ onLoad
    document.addEventListener("DOMContentLoaded", () => {
        const btnFilter = document.querySelector("#btnFilter");
        const target = document.querySelector("#kt_blockui_target");
        const blockUI = new KTBlockUI(target);
        btnFilter.addEventListener("click", function() {
            getFlter(blockUI);
            //@ set month minus 1
        });
    });
</script>
@endsection