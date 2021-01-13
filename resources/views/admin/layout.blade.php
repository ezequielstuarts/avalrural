<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('', 'Panel de Administracion') }}</title>

    <!-- Scripts -->

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/all.css')}}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin-style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{asset('css/toastr.css')}}">
    @yield('styles')

</head>
<body>
   @include('admin.nav-bar')
   <div style="padding-top:100px;">
    <div>

        @yield('admin')
        @yield('scripts')
    </div>
   </div>

   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="{{asset('js/sweetalert2@9.js')}}"></script>
   <script src="{{asset('js/toastr.min.js')}}"></script>
   <script src="{{asset('js/app.js')}}"></script>

</body>
</html>


