@php $link = "" @endphp

<!--begin::Toolbar-->
<div class="toolbar mb-n1 mb-lg-n3" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap gap-2">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column align-items-start me-3 py-2 py-lg-0 gap-2">
            <!--begin::Title-->
            <h1 class="d-flex text-dark fw-bold m-0 fs-3">{{ ucwords(str_replace('_',' ',Request::segment(3))) }}</h1>
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-6">
                @for($i = 1; $i <= count(Request::segments()); $i++) 
                    @if ($i < count(Request::segments()) & $i> 0)
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
    </div>
    <!--end::Container-->
</div>
<!--end::Toolbar-->