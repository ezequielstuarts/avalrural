@extends('layouts.app')
@section('content')
{{-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/admin-style.css') }} " /> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

@yield('admin')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                You are logged in!
            </div>
        </div>
    </div>
    </div> -->

    @endsection
