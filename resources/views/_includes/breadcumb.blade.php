@php $link = "" @endphp

<!--begin::Toolbar-->
<div class="toolbar mb-n1 mb-lg-n3 mt-4" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap gap-2">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column align-items-start me-3 py-2 py-lg-0 gap-2">
            <!--begin::Title-->
            <h1 class="d-flex text-dark fw-bold m-0 fs-3">{{ ucwords(str_replace('_',' ',Request::segment(3))) }}</h1>
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-6">
                @for($i = 1; $i <= count(Request::segments()); $i++) @if ($i < count(Request::segments()) & $i> 0)
                    @php $link .= "/" . Request::segment($i); @endphp
                    <li class="breadcrumb-item text-gray-600">
                        <a href="{{ $link }}" class="text-gray-600 text-hover-primary">{{ ucwords(str_replace('_',' ',Request::segment($i)))}}</a>&nbsp;
                    </li>
                    @else
                    <li class="breadcrumb-item text-gray-500">{{ucwords(str_replace('_',' ',Request::segment($i)))}}</li>
                    @endif
                    @endfor
            </ul>
            <!--end::Breadcrumb-->
            <!--end::Title-->
        </div>
        <!--end::Page title-->
        <!-- //@ AUTH:USER -->
        @if(Auth::user()->chUserType === '3')
        <div class="d-flex align-items-center gap-3 mt-4">
            <select class="form-select form-select-sm" data-control="select2" data-placeholder="Select saved filter">
                <option></option>
                <option value="1">Malaysia Latex</option>
                <option value="2">Indonesia Latex</option>
            </select>
            <a href="javascript:void(0)" target="_blank" class="btn btn-sm btn-icon" style="margin-left:-10px">
                <i class="bi bi-three-dots-vertical"></i>
            </a>
            <select class="form-select form-select-sm" data-control="select2" data-placeholder="Currency">
                <option></option>
                <option value="1">EUR</option>
                <option value="2">USD</option>
                <option value="3">IDR</option>
            </select>
            <div class="form-check form-check-custom form-check-sm ms-3">
                <input class="form-check-input" type="radio" value="" id="currencyFormat" name="currency" checked />
                <label class="form-check-label" for="currencyFormat">
                    Millions
                </label>
            </div>
            <div class="form-check form-check-custom form-check-sm">
                <input class="form-check-input" type="radio" value="" id="currencyFormat" name="currency" />
                <label class="form-check-label" for="currencyFormat">
                    Thousands
                </label>
            </div>
            <a href="#" class="btn btn-link btn-color-info btn-active-color-primary btn-sm ms-3 d-none d-sm-block">Help</a>
        </div>
        @endif
    </div>
    <!--end::Container-->
</div>
<!--end::Toolbar-->