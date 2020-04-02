@extends('admin.layout')
@section('admin')

<div class="container mt-3">
    <h5 class="text-secondary">Mensajes recibidos desde formulario de contacto.</h5>
</div>

<div class="container">
    @if (session('mensaje'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" data-dismiss="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4>{{ session('mensaje') }}</h4>
    </div>
    @endif
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 ">
            <h5 class="text-secondary"><b>{{$totalMensajes}}</b> Mensajes en la base de datos.</h5></div>
    </div>
</div>

<div class="container text-right mb-4">
    <a href="{{ route('panel')}}">
        <button class="btn btn-outline-secondary">Volver</button>
    </a>
</div>


<div class="container">
    <table class="table table-hover table-sprite">
        <thead>
            <tr>
                <th scope="col">Recibido el</th>
                <th scope="col">De</th>
                <th scope="col">Consulta</th>
                <th scope="col">Empresa</th>
                <th scope="col">CUIT</th>
                <th scope="col">Localidad</th>
                <th scope="col">Telefono</th>
                <th scope="col">Email</th>
                @if ( (Auth::user()->rol) === 1 )
                <th colspan="1">&nbsp;</th>
                @endif
            </tr>
        </thead>
        @forelse ($mensajes as $mensaje)
        <tbody>
            <tr>
                <td width="130px">{{date('d-m-Y', strtotime($mensaje->created_at))}}</td>

                <td>{{$mensaje->nombre}} {{$mensaje->apellido}} </td>
                
                <td>{{ $mensaje->consulta}}</td>
                
                <td>{{$mensaje->empresa}}</td>
                <td>{{$mensaje->cuit}}</td>
                <td>{{$mensaje->localidad}}</td>
                <td>{{$mensaje->telefono}}</td>
                <td>{{$mensaje->email}}</td>
                @if ( (Auth::user()->rol) === 1 )
                <td>
                    <form action="{{route('admin.mensajes.destroy', $mensaje->id)}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$mensaje->id}}">
                        <input class="btn btn-danger" type="submit" value="Eliminar" onclick="return confirm('Seguro queres eliminar?')">
                    </form>
                </td>
                @endif
            </tr>
            <tr>
            </tr>
        </tbody>
        @empty
        <div class="alert alert-info" role="alert">
            <h3 class="text-center">No hay mensajes recibidos</h3>
        </div>
        @endforelse
    </table>
    {{ $mensajes->links() }}
</div>
@endsection

<!-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<link href="{{ asset('css/admin-style.css') }}" rel="stylesheet">



<div class="container mt-5">
    <table id="mensajes" class="display" style="width:100%">
        <thead>
            <tr>
                <th></th>
                <th>Fecha</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
            </tr>
        </thead>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script>
    function format ( data ) {
    // `d` is the original data object for the row
        return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+

            '<tr>'+
                '<span><b>Empresa: </b></span>'+
                '<span>'+data.empresa+'</span>'+

                '<span><b> CUIT: </b></span>'+
                '<span>'+data.cuit+'</span>'+

                '<span><b> Localidad: </b></span>'+
                '<span>'+data.localidad+'</span>'+

                '<span><b> Teléfono: </b></span>'+
                '<span>'+data.telefono+'</span>'+

                '<p><b>Consulta: </b>'+data.consulta+'</p>'+
            '</tr>'+

        '</table>';
    }

    $(document).ready(function() {
        var table = $('#mensajes').DataTable( {
            "serveSide": true,
            "ajax":"{{ url('api/mensajes')}}",
            "columns": [
                {
                    "className":      'details-control',
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": ''
                },
                    {"data": 'created_at'},
                    {"data": 'nombre'},
                    {"data": 'apellido'},
                    {"data": 'email'},
            ],
            "order": [[1, 'dsc']],
            "language": { "url" : 'https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json'}
        } );

    // Add event listener for opening and closing details
    $('#mensajes tbody').on('click', 'td.details-control', function () {
            var tr = $(this).closest('tr');
            var row = table.row( tr );

            if ( row.child.isShown() ) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            }
            else {
                // Open this row
                row.child( format(row.data()) ).show();
                tr.addClass('shown');
            }
        } );
    } );
</script> -->