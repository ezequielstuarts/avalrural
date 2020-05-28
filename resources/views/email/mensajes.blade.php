@extends('admin.layout')
@section('admin')


<div class="container">
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
    <a href="{{ route('admin')}}">
        <button class="btn btn-outline-secondary">Volver</button>
    </a>
</div>


<div class="container">
    <table class="table table-hover table-sprite">
        <thead>
            <tr>
                <th scope="col">Recibido el</th>
                <th scope="col">De</th>
                <th scope="col">Email</th>
                <th colspan="1">&nbsp;</th>
                @if ( (Auth::user()->rol) === 1 )
                    <th colspan="1">&nbsp;</th>
                @endif
            </tr>
        </thead>
        @forelse ($mensajes as $mensaje)
        <tbody>
            <tr>
                <td width="130px">{{date('d-m-Y', strtotime($mensaje->created_at))}}
                    <span class="blockquote-footer">{{date('H:i', strtotime($mensaje->created_at))}} hs.</span>
                </td>

                <td>{{$mensaje->nombre}}, {{$mensaje->apellido}} </td>
                <td>{{$mensaje->email}}</td>
                <td>
                    <input name="view" id="{{$mensaje->id}}" class="btn btn-sm btn-outline-info view-data" type="button" value="Leer">
                </td>
                @if ( Auth::user()->rol )
                <td>
                    <form action="{{route('admin.mensajes.destroy', $mensaje->id)}}" method="post">
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
    {{ $mensajes->links() }}
</div>

<div class="modal fade" id="dataModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-title">Mensaje recibido el: </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p id="message-detail" ></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
<script>
    $(document).ready(function(){
        $('.view-data').click(function(){
            var mensaje_id = $(this).attr("id");
            $.ajax({
                "serveSide": true,
                url: "{{url('/api/getMensaje')}}/"+mensaje_id,
                method: "post", 
                success:function(data){
                    $('#mensaje_details').html(data.mensaje);
                    console.log(data);
                    $('#modal-title').html('<b>Mensaje recibido el: </b> '+data.data.created_at);
                    $('#message-detail').html(
                        '<b>De:</b> '+data.data.nombre+', '+data.data.apellido+'<br><b>E-mail:</b> '+data.data.email+'<br><b>Empresa:</b> '+data.data.empresa+'<br><b>Cuit:</b> '+data.data.cuit+'<br><b>Localidad:</b> '+data.data.localidad+'<br><b>Teléfono:</b> '+data.data.telefono+'<br><b>Consulta:</b> '+data.data.consulta);
                    $('#dataModal').modal("show");
                }
            });
        });
    })
</script>

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