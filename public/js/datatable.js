
        function format ( d ) {
        // `d` is the original data object for the row
        return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
            '<tr>'+
                '<td>Full name:</td>'+
                '<td>'+d.name+'</td>'+
            '</tr>'+
            '<tr>'+
                '<td>Extension number:</td>'+
                '<td>'+d.nombre+'</td>'+
            '</tr>'+
            '<tr>'+
                '<td>Extra info:</td>'+
                '<td>'+d.consulta+'</td>'+
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
                                {"data": 'id'},
                                {"data": 'nombre'},
                                {"data": 'email'},
                        ],
                        "order": [[1, 'asc']]
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


