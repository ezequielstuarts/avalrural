@extends('welcome')

{{-- ESTA SECCION SOLO CONTIENE EL CARROUCEL, EL SLIDER DE PRODUCTOS Y LAS ULTIMAS NOTICIAS --}}

@section('content')
    <!-- /SHORT SERVICES -->

    @include('partials.carousel')
    <!-- /SHORT SERVICES -->

    <!-- FEATURED WORKS -->
    @include('partials.nuestros-productos')
    <!-- /FEATURED WORKS -->

    <!-- NEWS -->
    @include('partials.ultimas-noticias')
    <!-- /NEWS -->
@endsection
