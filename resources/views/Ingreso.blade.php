

<!DOCTYPE html>
<html>
<head>
    <title>Ingreso</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.17/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.17/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body class="bg-dark">
 <div class="container">
   <div class="row">
     <div class="col-md-12">
       <div class="card mt-5">
         <div class="card-header">
            <div class="col-md-12">
                <h4 class="card-title">Lista de ingresos </h4>
            </div>
         </div>
         <div class="card-body">
           <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Id visitante</th>
                        <th>Id elemento</th>
                        <th>Id usuario</th>
                        <th>Id vehiculo</th>
                        <th>Fecha y hora de entrada</th>
                        <th>Fecha y hora de salida</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        
     </div>
   </div>
 </div>
</body>
<script type="text/javascript">
  $(function () {
     
    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('ingresos.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'Id_vis', name: 'Id_vis'},
            {data: 'Id_ele', name: 'Id_ele'},
            {data: 'Id_usu', name: 'Id_usu'},
            {data: 'Id_veh', name: 'Id_veh'},
            {data: 'Fecha_y_hora_de_entrada', name: 'Fecha_y_hora_de_entrada'},
            {data: 'Fecha_y_hora_de_salida', name: 'ResponFecha_y_hora_de_salida'},
            

        ], 
        
    language: {
        sProcessing:    "Procesando...",
        sLengthMenu:    "Ingresos",
        sZeroRecords:   "No se encontraron resultados",
        sEmptyTable:    "Ningún dato disponible en esta tabla",
        sInfo:          "",
        sInfoEmpty:     "Mostrando registros del 0 al 0 de un total de 0 registros",
        sInfoFiltered:  "(filtrado de un total de MAX registros)",
        sInfoPostFix:   "",
        sSearch:        "Buscar:",
        sUrl:           "",
        sInfoThousands:  ",",
        sLoadingRecords: "Cargando...",
        oPaginate: {
            sFirst:    "Primero",
            sLast:    "Último",
            sNext:    "Siguiente",
            sPrevious: "Anterior"
        },
        oAria: {
            sSortAscending:  ": Activar para ordenar la columna de manera ascendente",
            sSortDescending: ": Activar para ordenar la columna de manera descendente"
        }
    }

        
    });
     
    
    
    
    
    
    
        
    
    
}); 
  
</script>
</html>

