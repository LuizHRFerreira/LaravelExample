<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('dist/plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">

        {{-- DataTables CSS --}}
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
        {{-- <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css"> --}}

        {{-- Master CSS --}}
        <link rel="stylesheet" href="{{ asset('css/master.css') }}">
        @livewireStyles
    </head>
    <body class="font-sans antialiased">

        <div class="wrapper">
            {{-- Nav bar --}}
            @include('layouts.navbar')

            <!-- Main Sidebar Container -->
            @include('layouts.sidebar')

            <div class="content-wrapper">
                <section class="content">
                    @include('layouts.messages')
                    @yield('content')
                </section>
            </div>        
        </div>
    @stack('scripts')
    </body>

    <!-- jQuery -->
    <script src="{{ asset('dist/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('dist/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('js/adminlte.min.js') }}"></script>

    {{-- DataTables JS --}}
    <script src="{{ asset('dist/plugins/datatables/js/dataTables.js') }}"></script>
    <script src="{{ asset('dist/plugins/datatables/js/dataTables.bootstrap5.js') }}"></script>

    <script src="{{ asset('dist/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('dist/plugins/datatables-jszip/js/jszip.min.js') }}"></script>
    <script src="{{ asset('dist/plugins/pdfmake/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('dist/plugins/pdfmake/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('dist/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('dist/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>

    
    {{-- <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap5.min.js"></script> --}}
    
</html>
