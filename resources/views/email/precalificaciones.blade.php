@extends('admin.layout')
@section('admin')
        
        <div class="container">
            <h5 class="text-secondary">Mensajes recibidos desde formulario de precalifiaciones.</h5>
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
                <div class="col-md-8">
                    <h5 class="text-secondary"><b>{{$totalMensajes}}</b> Mensajes en la base de datos.</h5></div>
            </div>
        </div>

        <div class="container text-right mb-4">
            <a href="{{ route('admin')}}">
                <button class="btn btn-outline-secondary">Volver</button>
            </a>
        </div>

        <div class="container">
            <table class="table table-hover table-sprite">
                <thead>
                    <tr class="background-aval">
                        <th scope="col">Recibido el</th>
                        <th scope="col">De</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Balance</th>
                        <th scope="col">Nomina</th>
                        <th colspan="1">Accion</th>
                        @if ( (Auth::user()->rol) === 1 )
                        <th scope="col"></th>
                        @endif
                    </tr>
                </thead>
                @forelse ($mensajes as $mensaje)
                <tbody>
                    <tr>
                        <td width="130px">{{date('d-m-Y', strtotime($mensaje->created_at))}}
                            <span class="blockquote-footer">{{date('H:i', strtotime($mensaje->created_at))}} hs.</span>
                        </td>
                        <td>{{$mensaje->nombre_y_apellido}} </td>
                        <td>{{$mensaje->email}}</td>                        
                        <td>
                            @if ($mensaje->balance) 
                            <a class="btn btn-sm btn-outline-secondary" href="/storage/precalificaciones/balancesynominas/{{$mensaje->balance}}" target="blanc">Ver balance</a>
                            @endif
                        </td>
                        
                        <td>
                            @if ($mensaje->nomina) 
                                <a class="btn btn-sm btn-outline-secondary" href="/storage/precalificaciones/balancesynominas/{{$mensaje->nomina}}" target="blanc">Ver nómina</a>
                            @endif
                        </td>
                        <td>
                            <input name="view" id="{{$mensaje->id}}" class="btn btn-sm btn-info view-data" type="button" value="Leer Mensaje">

                            <button id="loader{{$mensaje->id}}" class="loader btn btn-sm btn-info">Cargando <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i></button>
                            
                        </td>
                        @if ( Auth::user()->rol )
                            <td>
                                <form action="{{route('admin.precalificate.destroy', $mensaje->id)}}" method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="{{$mensaje->id}}">
                                    <input class="btn btn-sm btn-danger" type="submit" value="Eliminar" onclick="return confirm('Seguro queres eliminar?')">
                                </form>
                            </td>
                        @endif
                    </tr>
                </tbody>
                @empty
                <div class="alert alert-info" role="alert">
                    <h3 class="text-center">No hay mensajes recibidos</h3>
                </div>
                @endforelse
            </table>
        </div>
            <div class="container mt-5 mb-5">{{ $mensajes->links() }}</div>
        @include('email.leer')
        <script>
            $(document).ready(function(){
                $('.loader').hide();
                $('.view-data').click(function(){
                    var mensaje_id = $(this).attr("id");
                    $('#loader'+mensaje_id).show();
                    $('#'+mensaje_id).hide();
                    $.ajax({
                        "serveSide": true,
                        url: "{{url('/admin/precalificaciones')}}/"+mensaje_id,
                        method: "get", 
                        success:function(data){
                            $('#modal-title').html('<b>Precalificación recibida el: </b> '+data.created_at);
                            $('#message-detail').html
                            (
                                '<b>Nombre y Apellido</b> '+data.nombre_y_apellido+'<br><b>E-mail</b> '+data.email+'<br><b>Telefono</b> '+data.telefono+'<br><b>Celular</b> '+data.celular+'<br><b>Empresa</b> '+data.empresa+'<br><b>Rubro</b> '+data.rubro+'<br><b>Actividad</b> '+data.actividad+'<br><b>Cuit</b> '+data.cuit+'<br><b>Codigo_afip</b> '+data.codigo_afip+'<br><a href="/storage/precalificaciones/balancesynominas/'+data.balance+'"target="blanc">Ver Balance</a><br><a href="/storage/precalificaciones/balancesynominas/'+data.nomina+'"target="blanc">Ver Nómina</a>'
                            );
                            $('#dataModal').modal("show");
                            $('#loader'+mensaje_id).hide();
                            $('#'+mensaje_id).show()
                        }
                    });
                });
            })
        </script>
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
