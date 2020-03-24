<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aval Rural SGR – Sociedad de Garantía Recíproca</title>
        <!-- Fonts -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
        <link href="{{ asset('css/admin-style.css') }}" rel="stylesheet">
    </head>
    <body>

        <div class="container">
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
        <script src=""></script>

        <script>
            function format ( d ) {
            // `d` is the original data object for the row
                return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+

                    '<tr>'+
                        '<td>Empresa</td>'+
                        '<td>'+d.empresa+'</td>'+
                    '</tr>'+

                    '<tr>'+
                        '<td>CUIT:</td>'+
                        '<td>'+d.cuit+'</td>'+
                    '</tr>'+

                    '<tr>'+
                        '<td>Localidad:</td>'+
                        '<td>'+d.localidad+'</td>'+
                    '</tr>'+

                    '<tr>'+
                        '<td>Teléfono:</td>'+
                        '<td>'+d.telefono+'</td>'+
                    '</tr>'+

                    '<tr>'+
                        '<td>Consulta:</td>'+
                        '<td>'+d.consulta+'</td>'+
                    '</tr>'+
                '</table>';
            }
        </script>
        <script>
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
                    "order": [[1, 'asc']],
                    "language": {
                        "lengthMenu": "Ver _MENU_ mensajes por pagina",
                        "zeroRecords": "No hay registros",
                        "info": "Mostrando página _PAGE_ de _PAGES_",
                        "infoEmpty": "No hay Registros con esa búsqueda",
                        "infoFiltered": "(filtrado entre _MAX_ total de registros)"
                    }
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
        </script>

</body>
</html>









