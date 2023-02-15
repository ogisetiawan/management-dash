@extends('_layouts.default')
@section('content')
<style>

</style>
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <div class="content flex-row-fluid" id="kt_content">
        <!-- //@ Filter -->
        <div class="card">
            <div class="card-body py-5 px-2">
                <div class="container-xxl" style="padding:0 15px !important">
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                        <div class="col">
                            <label class="form-label text-muted fw-bold fs-8">CH/AG</label>
                            <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Select an CH/AG">
                                <option></option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label text-muted fw-bold fs-8">BUSINESS UNIT</label>
                            <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Select an Business Unit">
                                <option></option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label text-muted fw-bold fs-8">DEPARTMENT</label>
                            <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Select an Department">
                                <option></option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label text-muted fw-bold fs-8">PRODUCT GROUP</label>
                            <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Select an Product Group">
                                <option></option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label text-muted fw-bold fs-8">PRODUCT</label>
                            <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Select an Product">
                                <option></option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label text-muted fw-bold fs-8">COUNTRY</label>
                            <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Select an Country">
                                <option></option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label text-muted fw-bold fs-8">COMPANY</label>
                            <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Select an Company">
                                <option></option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-label text-muted fw-bold fs-8">LOCATION</label>
                            <select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Select an Location">
                                <option></option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer py-5 d-flex justify-content-lg-end gap-3">
                <button type="submit" class="btn btn-sm btn-light">
                    <span class="indicator-label text-uppercase">Reset </i></span>
                </button>
                <button type="submit" class="btn btn-sm btn-primary">
                    <span class="indicator-label text-uppercase">Apply Filter <i class="bi bi-funnel-fill"></i></span>
                </button>
            </div>
        </div>
        <!-- //@ Filter -->

        <!-- //@ Financial Analysis -->
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
        <div class="row g-2">
            <!-- //@ Turnover -->
            <div class="col-xl-6 mb-xl-10">
                <div class="card card-flush overflow-hidden h-md-100">
                    <div class="card-header py-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-2 text-uppercase text-custom-blue3">Turnover</span>
                            <div class="d-flex align-items-center mb-2">
                                <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">149.7M</span>
                                <span class="fs-5 fw-semibold text-gray-400 align-self-start me-1">YTD</span>
                            </div>
                            <span class="badge badge-light-success fs-base">
                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                        <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                    </svg>
                                </span>+ 10.25M (10.5%)
                            </span>
                        </h3>
                        <div class="card-toolbar">
                            <div class="col bg-light-primary px-5 py-5 rounded-2">
                                <div class="d-flex flex-column text-center">
                                    <span class="text-gray-400 pt-1 fw-semibold fs-8">MTD</span>
                                    <span class="fs-2hx fw-semibold text-dark me-2 lh-1">19.99M</span>
                                </div>
                                <div class="d-flex justify-content-between w-100 text-gray-400 text-custom-blue3 pt-1 fs-9">
                                    <span>MTD June</span>
                                    <span>9.99M</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--begin::Card body-->
                    <div class="card-body pt-4">
                        <!--begin::Chart-->
                        <div id="kt_charts_widget_23" class="h-450px w-100"></div>
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
                                        <!-- //~ Adj GP -->
                                        <span class="card-label fw-bold mb-2 text-uppercase text-custom-blue3">Adj Gp</span>
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">49.99M</span>
                                            <span class="fs-8 fw-semibold text-gray-400 align-self-start me-1">YTD June</span>
                                        </div>

                                        <span class="badge badge-light-success">
                                            <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                                </svg>
                                            </span>+ 10.25M (10.5%)
                                        </span>

                                        <!-- //~ Adj Margin -->
                                        <div class="separator border-2 my-5"></div>
                                        <span class="card-label fw-bold mb-2 text-uppercase text-custom-blue3">Adj Gp Margin</span>
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">35.82%</span>
                                            <span class="fs-8 fw-semibold text-gray-400 align-self-start me-1">YTD June</span>
                                        </div>
                                        <span class="badge badge-light-success">
                                            <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                                </svg>
                                            </span>3.41%
                                        </span>
                                        <p class="text-gray-400 mt-3 fw-semibold fs-8">Adj. GP: Last update as of June 2022 Closing</p>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-5 d-flex justify-content-end px-0">
                                        <!--begin::Chart-->
                                        <div id="kt_card_widget_19_chart" class="min-h-auto h-150px w-150px" data-kt-size="150" data-kt-line="25"></div>
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
                                        <!-- //~ Adj GP -->
                                        <span class="card-label fw-bold mb-2 text-uppercase text-custom-blue3">OP3</span>
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">49.99M</span>
                                            <span class="fs-8 fw-semibold text-gray-400 align-self-start me-1">YTD June</span>
                                        </div>

                                        <span class="badge badge-light-success">
                                            <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                                </svg>
                                            </span>+ 10.25M (10.5%)
                                        </span>

                                        <!-- //~ Adj Margin -->
                                        <div class="separator border-2 my-5"></div>
                                        <span class="card-label fw-bold mb-2 text-uppercase text-custom-blue3">OP3 Margin</span>
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">35.82%</span>
                                            <span class="fs-8 fw-semibold text-gray-400 align-self-start me-1">YTD June</span>
                                        </div>
                                        <span class="badge badge-light-success">
                                            <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
                                                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
                                                </svg>
                                            </span>3.41%
                                        </span>
                                        <p class="text-gray-400 mt-3 fw-semibold fs-8">Adj. GP: Last update as of June 2022 Closing</p>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-5 d-flex justify-content-end px-0">
                                        <!--begin::Chart-->
                                        <div id="kt_card_widget_20_chart" class="min-h-auto h-150px w-150px" data-kt-size="150" data-kt-line="25"></div>
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
    </div>

</div>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

<script>
    let e = document.getElementById("kt_charts_widget_23");
    if (e) {
        var t,
            run = function() {
                (t = am5.Root.new(e)).setThemes([am5themes_Animated.new(t)]);
                var a = t.container.children.push(
                        am5xy.XYChart.new(t, {
                            panX: !1,
                            panY: !1,
                            layout: t.verticalLayout,
                        })
                    ),
                    l = [{
                            year: "2016",
                            budget: 23.5,
                            expenses: 21.1,
                            columnSettings: {
                                fill: am5.color(
                                    KTUtil.getCssVariableValue("--kt-primary")
                                ),
                            },
                        },
                        {
                            year: "2017",
                            budget: 26.2,
                            expenses: 30.5,
                            columnSettings: {
                                fill: am5.color(
                                    KTUtil.getCssVariableValue("--kt-primary")
                                ),
                            },
                        },
                        {
                            year: "2018",
                            budget: 30.1,
                            expenses: 34.9,
                            columnSettings: {
                                fill: am5.color(
                                    KTUtil.getCssVariableValue("--kt-primary")
                                ),
                            },
                        },
                        {
                            year: "2019",
                            budget: 29.5,
                            expenses: 31.1,
                            columnSettings: {
                                fill: am5.color(
                                    KTUtil.getCssVariableValue("--kt-primary")
                                ),
                            },
                        },
                        {
                            year: "2020",
                            budget: 30.6,
                            expenses: 28.2,
                            strokeSettings: {
                                strokeWidth: 3,
                                strokeDasharray: [5, 5]
                            },
                            columnSettings: {
                                fill: am5.color(
                                    KTUtil.getCssVariableValue("--kt-primary")
                                ),
                            },
                        },
                        {
                            year: "2021",
                            budget: 40.6,
                            expenses: 28.2,
                            strokeSettings: {
                                strokeWidth: 3,
                                strokeDasharray: [5, 5]
                            },
                            columnSettings: {
                                fill: am5.color(
                                    KTUtil.getCssVariableValue("--kt-primary")
                                ),
                            },
                        },
                        {
                            year: "2022",
                            budget: 34.1,
                            expenses: 32.9,
                            strokeSettings: {
                                strokeWidth: 3,
                                strokeDasharray: [5, 5]
                            },
                            columnSettings: {
                                fill: am5.color(
                                    KTUtil.getCssVariableValue("--kt-primary")
                                ),
                            },
                        },
                    ],
                    r = a.xAxes.push(
                        am5xy.CategoryAxis.new(t, {
                            categoryField: "year",
                            renderer: am5xy.AxisRendererX.new(t, {}),
                        })
                    );
                r.data.setAll(l),
                    r
                    .get("renderer")
                    .labels.template.setAll({
                        paddingTop: 20,
                        fontWeight: "400",
                        fontSize: 11,
                        fill: am5.color(
                            KTUtil.getCssVariableValue("--kt-gray-500")
                        ),
                    }),
                    r
                    .get("renderer")
                    .grid.template.setAll({
                        disabled: !0,
                        strokeOpacity: 0
                    });
                var o = a.yAxes.push(
                    am5xy.ValueAxis.new(t, {
                        min: 0,
                        extraMax: 0.1,
                        renderer: am5xy.AxisRendererY.new(t, {}),
                    })
                );
                o
                    .get("renderer")
                    .labels.template.setAll({
                        paddingTop: 0,
                        fontWeight: "400",
                        fontSize: 11,
                        fill: am5.color(KTUtil.getCssVariableValue("--kt-gray-500")),
                    }),
                    o
                    .get("renderer")
                    .grid.template.setAll({
                        stroke: am5.color(
                            KTUtil.getCssVariableValue("--kt-gray-300")
                        ),
                        strokeWidth: 1,
                        strokeOpacity: 1,
                        strokeDasharray: [3],
                    });
                var i = a.series.push(
                    am5xy.ColumnSeries.new(t, {
                        name: "Budget",
                        xAxis: r,
                        yAxis: o,
                        valueYField: "budget",
                        categoryXField: "year",
                        tooltip: am5.Tooltip.new(t, {
                            pointerOrientation: "horizontal",
                            labelText: "{name} in {categoryX}: {valueY} {info}",
                        }),
                    })
                );
                i.columns.template.setAll({
                        tooltipY: am5.percent(10),
                        templateField: "columnSettings",
                    }),
                    i.data.setAll(l);
                var s = a.series.push(
                    am5xy.LineSeries.new(t, {
                        name: "Total Sales",
                        xAxis: r,
                        yAxis: o,
                        valueYField: "expenses",
                        categoryXField: "year",
                        fill: am5.color(KTUtil.getCssVariableValue("--kt-success")),
                        stroke: am5.color(KTUtil.getCssVariableValue("--kt-success")),
                        tooltip: am5.Tooltip.new(t, {
                            pointerOrientation: "horizontal",
                            labelText: "{name} in {categoryX}: {valueY} {info}",
                        }),
                    })
                );
                s.strokes.template.setAll({
                        stroke: am5.color(KTUtil.getCssVariableValue("--kt-success")),
                    }),
                    s.strokes.template.setAll({
                        strokeWidth: 3,
                        templateField: "strokeSettings",
                    }),
                    s.data.setAll(l),
                    s.bullets.push(function() {
                        return am5.Bullet.new(t, {
                            sprite: am5.Circle.new(t, {
                                strokeWidth: 3,
                                stroke: am5.color(
                                    KTUtil.getCssVariableValue("--kt-success")
                                ),
                                radius: 5,
                                fill: am5.color(
                                    KTUtil.getCssVariableValue("--kt-success-light")
                                ),
                            }),
                        });
                    }),
                    i.columns.template.setAll({
                        strokeOpacity: 0,
                        cornerRadiusBR: 0,
                        cornerRadiusTR: 6,
                        cornerRadiusBL: 0,
                        cornerRadiusTL: 6,
                    }),
                    a.set("cursor", am5xy.XYCursor.new(t, {})),
                    a.get("cursor").lineX.setAll({
                        visible: !1
                    }),
                    a.get("cursor").lineY.setAll({
                        visible: !1
                    });
                var n = a.children.push(
                    am5.Legend.new(t, {
                        centerX: am5.p50,
                        x: am5.p50
                    })
                );
                n.data.setAll(a.series.values),
                    n.labels.template.setAll({
                        fontWeight: "600",
                        fontSize: 14,
                        fill: am5.color(KTUtil.getCssVariableValue("--kt-gray-700")),
                    }),
                    a.appear(1e3, 100),
                    i.appear();
            };
        am5.ready(function() {
                run();
            }),
            KTThemeMode.on("kt.thememode.change", function() {
                t.dispose(), run();
            });
    }
</script>
<script>
    let donut = document.getElementById("kt_card_widget_19_chart");
    if (donut) {
        var t = {
                size: donut.getAttribute("data-kt-size") ?
                    parseInt(donut.getAttribute("data-kt-size")) : 70,
                lineWidth: donut.getAttribute("data-kt-line") ?
                    parseInt(donut.getAttribute("data-kt-line")) : 11,
                rotate: donut.getAttribute("data-kt-rotate") ?
                    parseInt(donut.getAttribute("data-kt-rotate")) : 145,
            },
            a = document.createElement("canvas"),
            l = document.createElement("span");
        "undefined" != typeof G_vmlCanvasManager &&
            G_vmlCanvasManager.initElement(a);
        var r = a.getContext("2d");
        (a.width = a.height = t.size),
        donut.appendChild(l),
            donut.appendChild(a),
            r.translate(t.size / 2, t.size / 2),
            r.rotate((t.rotate / 180 - 0.5) * Math.PI);
        var o = (t.size - t.lineWidth) / 2,
            i = function(e, t, a) {
                (a = Math.min(Math.max(0, a || 1), 1)),
                r.beginPath(),
                    r.arc(0, 0, o, 0, 2 * Math.PI * a, !1),
                    (r.strokeStyle = e),
                    (r.lineCap = "round"),
                    (r.lineWidth = t),
                    r.stroke();
            };
        i("#E4E6EF", t.lineWidth, 1),
            i(KTUtil.getCssVariableValue("--kt-primary"), t.lineWidth, 100 / 150),
            i(KTUtil.getCssVariableValue("--kt-success"), t.lineWidth, 0.4);
    }
</script>
<script>
    let donut2 = document.getElementById("kt_card_widget_20_chart");
    if (donut2) {
        var t = {
                size: donut2.getAttribute("data-kt-size") ?
                    parseInt(donut2.getAttribute("data-kt-size")) : 70,
                lineWidth: donut2.getAttribute("data-kt-line") ?
                    parseInt(donut2.getAttribute("data-kt-line")) : 11,
                rotate: donut2.getAttribute("data-kt-rotate") ?
                    parseInt(donut2.getAttribute("data-kt-rotate")) : 145,
            },
            a = document.createElement("canvas"),
            l = document.createElement("span");
        "undefined" != typeof G_vmlCanvasManager &&
            G_vmlCanvasManager.initElement(a);
        var r = a.getContext("2d");
        (a.width = a.height = t.size),
        donut2.appendChild(l),
            donut2.appendChild(a),
            r.translate(t.size / 2, t.size / 2),
            r.rotate((t.rotate / 180 - 0.5) * Math.PI);
        var o = (t.size - t.lineWidth) / 2,
            i = function(e, t, a) {
                (a = Math.min(Math.max(0, a || 1), 1)),
                r.beginPath(),
                    r.arc(0, 0, o, 0, 2 * Math.PI * a, !1),
                    (r.strokeStyle = e),
                    (r.lineCap = "round"),
                    (r.lineWidth = t),
                    r.stroke();
            };
        i("#E4E6EF", t.lineWidth, 1),
            i(KTUtil.getCssVariableValue("--kt-primary"), t.lineWidth, 100 / 150),
            i(KTUtil.getCssVariableValue("--kt-success"), t.lineWidth, 0.4);
    }
</script>
@endsection