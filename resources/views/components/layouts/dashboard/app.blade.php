<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <title>{{ isset($title) ? $title . ' - ' : '' }} {{ config('app.name') }}</title>
    <link rel="icon" href="{!! asset('images/logo-ini.png') !!}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- jquery.vectormap css -->
    <link href="{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}"
        rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/spectrum-colorpicker2/spectrum.min.css') }}" rel="stylesheet" type="text/css">

    {{-- --------------------------------------------------------------------------------------------------- --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastify-js/1.6.1/toastify.min.css"
        integrity="sha512-UiKdzM5DL+I+2YFxK+7TDedVyVm7HMp/bN85NeWMJNYortoll+Nd6PU9ZDrZiaOsdarOyk9egQm6LOJZi36L2g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @isset($head)
        {{ $head }}
    @endisset

    @livewireStyles
</head>

{{-- <body class="app sidebar-mini ltr"> --}}

<body data-topbar="dark">
    <div id="layout-wrapper">
        @include('components.layouts.dashboard.topbar')
        @include('components.layouts.dashboard.sidebar')
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/spectrum-colorpicker2/spectrum.min.js') }}"></script>
    <!-- jquery.vectormap map -->
    <script src="{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}">
    </script>
    <!-- Required datatable js -->
    <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    {{--

    {{-- Toastify --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastify-js/1.6.1/toastify.min.js"
        integrity="sha512-79j1YQOJuI8mLseq9icSQKT6bLlLtWknKwj1OpJZMdPt2pFBry3vQTt+NZuJw7NSd1pHhZlu0s12Ngqfa371EA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            $("body").trigger("click");
        });
        $(document).on("click", "#playsound", function() {
            if (document.getElementById("myAudio").paused) {
                document.getElementById("myAudio").play()
            }
        })

        $("#file").change(function() {
            $('#import-data-form').submit();
        })

        $('#import-data-form').submit(function() {
            $('#import-data').attr('disabled', true);
            $('#import-data').html(
                `<span class="spinner-border" role="status"> <span
                    class="sr-only">Loading...</span>
                </span>`

            )
        })

        $('.sumoselect').SumoSelect({
            csvDispCount: 3,
            search: true,
            searchText: 'Enter here.'
        });


        document.addEventListener('livewire:load', function() {

            Livewire.on("closeModal", (modalId) => {

                console.log('closing modal ');
                let modal = $(`#${modalId}`);
                let closeBtn = modal.find('.btn-close')
                closeBtn.click()

            });

            Livewire.on("openModal", (modalId) => {

                $(`#${modalId}-opener`).click();

            });

            Livewire.on("toast", (e) => {

                if ($(".notification" + (e.message ?? 'Success')).length > 0) {
                    $(".notification" + (e.message ?? 'Success')).remove();
                }

                Toastify({
                    text: e.message,
                    className: "notification" + e.message,
                    gravity: "top",
                    position: 'center',
                    style: {
                        background: '#12b812'
                    }
                }).showToast()

            })


        })
    </script>

    @isset($foot)
        {{ $foot }}
    @endisset

    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @livewireScripts
</body>

</html>
