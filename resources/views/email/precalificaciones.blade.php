@extends('admin.admin')
@section('admin')
        
        <div class="container mt-5">
            <h5 class="text-secondary">Mensajes recibidos desde formulario de precalifiaciones.</h5>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h5 class="text-secondary"><b>{{$totalMensajes}}</b> Mensajes en la base de datos.</h5></div>
            </div>
        </div>

        <div class="container text-right mb-4">
            <a href="{{ route('admin')}}">
                <button class="btn btn-info">Volver</button>
            </a>
        </div>

        <div class="container">
            <table class="table table-hover table-sprite">
                <thead>
                    <tr>
                        <th scope="col">Recibido el</th>
                        <th scope="col">De</th>
                        <th scope="col">email</th>
                        <th scope="col">telefono</th>
                        <th scope="col">celular</th>
                        <th scope="col">empresa</th>
                        <th scope="col">cuit</th>
                        <th scope="col">rubro</th>
                        <th scope="col">codigo_afip</th>
                        <th scope="col">balance</th>
                        <th scope="col">nomina</th>
                        <th scope="col">actividad</th>
                        @if ( (Auth::user()->rol) === 1 )
                            <th colspan="1">&nbsp;</th>
                        @endif
                    </tr>
                </thead>
                @forelse ($mensajes as $mensaje)
                <tbody>
                    <tr>
                        <td width="130px">{{date('d-m-Y', strtotime($mensaje->created_at))}}</td>
                        <td>{{$mensaje->nombre_y_apellido}} </td>
                        <td>{{$mensaje->email}}</td>
                        <td>{{$mensaje->telefono}}</td>
                        <td>{{$mensaje->celular}}</td>
                        <td>{{$mensaje->empresa}}</td>
                        <td>{{$mensaje->cuit}}</td>
                        <td>{{$mensaje->rubro}}</td>
                        <td>{{$mensaje->codigo_afip}}</td>
                        <td>{{$mensaje->balance}}</td>
                        <td>{{$mensaje->nomina}}</td>
                        <td>{{$mensaje->actividad}}</td>
                        @if ( (Auth::user()->rol) === 1 )
                            <td>
                                <form action="{{route('mensajes.destroy', $mensaje->nombre)}}" method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="{{$mensaje->nombre}}">
                                    <input class="btn-sm btn-danger" type="submit" value="Eliminar" onclick="return confirm('Seguro queres eliminar?')">
                                </form>
                            </td>
                        @endif
                    </tr>
                </tbody>
                @empty
                <div class="alert alert-info" role="alert">
                    <h3>No hay mensajes cargadas en la base de datos</h3>
                </div>
                @endforelse
            </table>
            {{ $mensajes->links() }}
        </div>

@endsection


<!-- <script src="{{ asset('js/app.js') }}" defer></script>

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
                <th>Nombre y Apellido</th>
                <th>Email</th>
            </tr>
        </thead>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

{<script>
    function format ( data ) {
    // `d` is the original data object for the row
        return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+

            '<tr>'+
                '<td><b>Teléfono:</b></td>'+
                '<td>'+data.telefono+'</td>'+
            '</tr>'+

            '<tr>'+
                '<td><b>Celular:</b></td>'+
                '<td>'+data.celular+'</td>'+
            '</tr>'+

            '<tr>'+
                '<td><b>Empresa:</b></td>'+
                '<td>'+data.empresa+'</td>'+
            '</tr>'+

            '<tr>'+
                '<td><b>Rubro:</b></td>'+
                '<td>'+data.rubro+'</td>'+
            '</tr>'+

            '<tr>'+
                '<td><b>CUIT:</b></td>'+
                '<td>'+data.cuit+'</td>'+
            '</tr>'+

            '<tr>'+
                '<td><b>Codigo AFIP:</b></td>'+
                '<td>'+data.codigo_afip+'</td>'+
            '</tr>'+
            '<tr>'+
                '<td><b>Actividad:</b></td>'+
                '<td>'+data.actividad+'</td>'+
            '</tr>'+
            '<tr>'+
                '<td><b>Balance:</b></td>'+
                '<td><a href="storage/precalificaciones/balancesynominas/'+data.balance+'" target="blanck"><button type="button" class="btn btn-outline-info btn-sm">Ver</button></a></td>'+
            '</tr>'+
            '<tr>'+
                '<td><b>Nómina:</b></td>'+
                '<td><a href="storage/precalificaciones/balancesynominas/'+data.nomina+'" target="blanck"><button type="button" class="btn btn-outline-info btn-sm">Ver</button></a></td>'+
            '</tr>'+
        '</table>';
    }

    $(document).ready(function() {
        var table = $('#mensajes').DataTable( {
            "serveSide": true,
            "ajax":"{{ url('api/precalificaciones')}}",
            "columns": [
                {
                    "className":      'details-control',
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": ''
                },
                    {"data": 'created_at'},
                    {"data": 'nombre_y_apellido'},
                    {"data": 'email'}
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
