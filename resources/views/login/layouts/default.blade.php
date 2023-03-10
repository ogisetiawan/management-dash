<!DOCTYPE html>
<html lang="en">

<head>
    @include('login/includes.head')
</head>

<body id="kt_body" class="auth-bg">
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            @include('login/includes.aside')

            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
                <!--begin::Form-->
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-500px p-10">
                        @yield('content')
                    </div>
                </div>
                @include('login/includes.footer')
            </div>
        </div>
    </div>
</body>
</html>