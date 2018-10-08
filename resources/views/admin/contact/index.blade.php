@extends('admin.layout.admin')
@section('header')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')
    <h3 align="center">All Messages</h3>
    <br />
    <table id="data" class="table table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>created at</th>
            <th>Type</th>
            <th>State</th>
            <th>Control</th>

        </tr>
        </thead>
    </table>
@endsection


@section('footer')

    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

    <script type="text/javascript">
        var lastIdx = null;

        $('#data thead th').each( function () {
            if($(this).index()  != 6 ){
                var classname = $(this).index() == 6  ?  'date' : 'dateslash';
                var title = $(this).html();
                $(this).html( '<input type="text" style="width:70px;display:inline-block; float: left" class="' + classname + '" data-value="'+ $(this).index() +'" placeholder=" '+title+'" />' );
            }

        } );



        var table =  $('#data').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('ajaxMessages') }}",
            "columns":[
                { "data": "id" },
                { "data": "name" },
                { "data": "email" },
                { "data": "created_at" },
                { "data": "type" },
                { "data": "view" },
                { "data": "control" , name : "" }
            ],

            "stateSave": false,
            "responsive": true,
            "order": [[0, 'desc']],
            "pagingType": "full_numbers",
            aLengthMenu: [
                [25, 50, 100, 200, -1],
                [25, 50, 100, 200, "All"]
            ],
            iDisplayLength: 25,
            fixedHeader: true,
            "dom": '<"pull-left text-left" T><"pullright" i><"clearfix"><"pull-right text-right col-lg-6" f > <"pull-left text-left" l><"clearfix">rt<"pull-right text-right col-lg-6" pi > <"pull-left text-left" l><"clearfix"> '
            ,initComplete: function ()
            {
                var r = $('#data tfoot tr');
                r.find('th').each(function(){
                    $(this).css('padding', 8);
                });
                $('#data thead').append(r);
                $('#search_0').css('text-align', 'center');
            }
        });
        table.columns().eq(0).each(function(colIdx) {
            $('input', table.column(colIdx).header()).on('keyup change', function() {
                table
                    .column(colIdx)
                    .search(this.value)
                    .draw();
            });
        });
        table.columns().eq(0).each(function(colIdx) {
            $('select', table.column(colIdx).header()).on('change', function() {
                table
                    .column(colIdx)
                    .search(this.value)
                    .draw();
            });

            $('select', table.column(colIdx).header()).on('click', function(e) {
                e.stopPropagation();
            });
        });


        $('#data tbody')
            .on( 'mouseover', 'td', function () {
                var colIdx = table.cell(this).index().column;

                if ( colIdx !== lastIdx ) {
                    $( table.cells().nodes() ).removeClass( 'highlight' );
                    $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
                }
            } )
            .on( 'mouseleave', function () {
                $( table.cells().nodes() ).removeClass( 'highlight' );
            } );

    </script>
@endsection