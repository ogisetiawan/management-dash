<!DOCTYPE html>
<html lang="en">

<head>
    @include('login/includes.head')
</head>

<body id="kt_body" class="auth-bg">
    {{-- <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-theme-mode");
            } else {
                if (localStorage.getItem("data-theme") !== null) {
                    themeMode = localStorage.getItem("data-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-theme", themeMode);
        }
    </script> --}}

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
    <!-- <script src="{{ asset('public/dist/assets/plugins/global/plugins.bundle.js') }}"></script> -->
    <!-- <script src="{{ asset('public/dist/assets/js/scripts.bundle.js') }}"></script> -->

    <script src="{{ asset('public/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('public/assets/js/scripts.bundle.js') }}"></script>
    <!-- <script src="{{ asset('public/assets/js/custom/authentication/sign-in/general.js') }}"></script>
    <script src="{{ asset('public/dist/assets/js/custom/authentication/reset-password/new-password.js') }}"></script>
    <script src="{{ asset('public/assets/js/custom/authentication/sign-in/i18n.js') }}"></script> -->
</body>

</html>