@extends('_layouts.default')
@section('content')
<link href="{{ asset('/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

<!--begin::Container-->
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search user" />
                    </div>
                    <!--end::Search-->
                </div>
                <!--begin::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <a href="#" class="btn btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                        <span class="svg-icon svg-icon-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor"></rect>
                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"></rect>
                            </svg>
                        </span>
                        Create new user</a>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body py-4">
                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                    <!--begin::Table head-->
                    <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                            {{-- <th class="w-10px pe-2">
                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                </div>
                            </th> --}}
                            <th class="min-w-10px"></th>
                            <th class="min-w-150px">Name</th>
                            <th class="min-w-100px">Email</th>
                            <th class="min-w-50px">Country</th>
                            <th class="min-w-125px">Role</th>
                            <th class="min-w-100px">Status</th>
                            <th class="text-end min-w-100px"></th>
                        </tr>
                        <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="text-gray-600 fw-semibold">
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Post-->
</div>
<!--end::Container-->

<!-- //@ Modal -->
<div class="modal bg-white fade" tabindex="-1" id="kt_modal_2">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content shadow-none">
            <div class="modal-header">
                <h1 class="text-muted fw-bold">USER #12</h1>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="bi bi-x-lg"></span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                    <!--begin: Pic-->
                    <div class="me-7 mb-4">
                        <div class="symbol symbol-circle symbol-60px symbol-fixed position-relative">
                            <img src="{{asset('assets/media/avatars/kewalin.jpg')}}" alt="image">
                            <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                        </div>
                    </div>
                    <!--end::Pic-->
                    <!--begin::Info-->
                    <div class="flex-grow-1">
                        <!--begin::Title-->
                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                            <!--begin::User-->
                            <div class="d-flex flex-column">
                                <!--begin::Name-->
                                <div class="d-flex align-items-center mb-2">
                                    <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Kewalin Petcharat</a>
                                </div>
                                <!--end::Name-->
                                <!--begin::Info-->
                                <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                    <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                        <span class="svg-icon svg-icon-4 me-1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor"></path>
                                                <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        Thailand
                                    </a>
                                    <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                        <span class="svg-icon svg-icon-4 me-1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor"></path>
                                                <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        kewalin@mail.com
                                    </a>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!-- <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-300px min-w-sm-300px flex-shrink-0 p-6">
                                <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                    <div class="mb-3 mb-md-0 fw-semibold">
                                        <h5 class="text-gray-900 fw-bold">Account Status</h5>
                                        <span class="text-gray-700 pe-7">Active</span>
                                        <span class="text-gray-700 pe-7">Last login </span>
                                    </div>
                                </div>
                            </div> -->
                            <!--end::User-->
                        </div>
                        <!--end::Title-->
                        <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#personal_profile">Personal Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#role_detail">Role Details</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <!-- //@ personal profile -->
                            <div class="tab-pane fade show active" id="personal_profile" role="tabpanel">
                                <div class="card-body p-9">
                                    <!--begin::Row-->
                                    <div class="row mb-7">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 fw-semibold text-muted">Full Name</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <span class="fw-bold fs-6 text-gray-800">Kewalin Petcharat</span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--begin::Row-->
                                    <div class="row mb-7">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 fw-semibold text-muted">Email</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <span class="fw-bold fs-6 text-gray-800">kewalin@mail.com</span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="row mb-7">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 fw-semibold text-muted">Password
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Phone number must be active" data-bs-original-title="Phone number must be active" data-kt-initialized="1"></i></label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 d-flex align-items-center">
                                            <a class="fw-bold fs-6 text-gray-800 me-2 text-underline" href="#">Reset password</a>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="row mb-7">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 fw-semibold text-muted">Country</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <span class="fw-bold fs-6 text-gray-800">Thailand</span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="row mb-7">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 fw-semibold text-muted">Company</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <span class="fw-bold fs-6 text-gray-800">Behn Meyer</span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="row mb-7">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 fw-semibold text-muted">Title</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <span class="fw-bold fs-6 text-gray-800">Excecutive Director</span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-primary">
                                        <span class="indicator-label">Edit profile</span>
                                    </button>
                                    <!--end::Row-->
                                </div>
                            </div>
                            <!-- //@ roles  -->
                            <div class="tab-pane fade" id="role_detail" role="tabpanel">
                                ...
                            </div>
                        </div>
                    </div>
                    <!--end::Info-->
                </div>
            </div>

           
        </div>
    </div>
</div>


<script src="{{ asset('/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script>
    "use strict";
    const KTDatatablesServerSide = function() {
        let table;
        let dt;

        const initDatatable = function() {
            dt = $("#kt_table_users").DataTable({
                searchDelay: 500,
                processing: true,
                serverSide: true,
                order: [
                    [0, 'desc']
                ],
                ajax: '{{ url('admin/user_management/users/get') }}',
                columns: [{
                        data: 'id_User',
                        render: function(data, type, row) {
                            return `
                                <span class="text-muted fw-bold">#${data}</span>
                            `;
                        }
                    },
                    {
                        data: 'chUsername',
                        render: function(data, type, row) {
                            return `
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="javascript:void(0);"> 
                                        <div class="symbol-label">
                                            <img src=\"{{ asset('assets/media/avatars/kewalin.jpg') }}\" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#kt_modal_2" class="text-dark fw-bold text-hover-primary fs-6 mb-1">${data}</a>
                                    <span>${row.chEmail}</span>
                                </div>
                                `;
                        }
                    },
                    {
                        data: 'chEmail',
                    },
                    {
                        data: 'id_Country',
                        render: function(data, type, row) {
                            return `
                            <div class="order-2 order-md-1">
                                <img class="h-20px w-20px rounded-sm me-2" src=\"{{ asset('assets/media/flags/thailand.svg') }}\">
                                <span class="text-muted">Thailand</span>
                            </div>
                            `;
                        }
                    },
                    {
                        data: function(row, type, set) {
                            return `
                                CH Steering Committee
                            `;
                        }
                    },
                    {
                        data: 'loActive',
                        render: function(data, type, row) {
                            return `
                            <div class="d-flex align-items-center">
                                <span class="bi bi-circle-fill fs-7 me-2 text-success"></span>
                                <span class="text-muted">Active</span>
                            </div>
                            `;
                        }
                    },
                    {
                        data: function(row, type, set) {
                            return `
                            <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_2" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </a>
                            `;
                        }
                    },
                ],
                columnDefs: [{
                        targets: [4, 6],
                        orderable: false,
                        searchable: false,
                    },
                    {
                        targets: [1],
                        className: "d-flex align-items-center",
                    },
                ],
            });

            table = dt.$;

            dt.on('draw', function() {
                KTMenu.createInstances();
            });
        }

        const handleSearchDatatable = function() {
            const filterSearch = document.querySelector('[data-kt-user-table-filter="search"]');
            filterSearch.addEventListener('keyup', function(e) {
                dt.search(e.target.value).draw();
            });
        }

        return {
            init: function() {
                initDatatable();
                handleSearchDatatable();
            }
        }
    }();

    KTUtil.onDOMContentLoaded(function() {
        KTDatatablesServerSide.init();
    });
</script>
@endsection