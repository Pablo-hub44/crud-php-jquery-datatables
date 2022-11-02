

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabla de datos crud</title>

        <!--otra manera de bootstrap solo poniento el link y hasta abajo los css
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">-->
    	<!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="bootstrap-4.5.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <!--datatables css basico-->
        <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
        <!--datatables estilo bootstrap 4 css-->
        <link rel="stylesheet" href="DataTables/DataTables-1.10.23/css/dataTables.bootstrap4.min.css">
        <!--google icons-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
        <!--font awesome-->
        <script src="https://kit.fontawesome.com/69ea92256c.js" crossorigin="anonymous"></script>


    </head>
    <body>
        
        <header class="titulo">
            <h3 class="text-center text-light titulo">Bienvenido</h3>
            <h4 class="text-center text-light subtitulo">CRUD con DATATABLES</h4>
        </header>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                        <button class="btn btn-info" id="btnNuevo" type="button" data-toggle="modal"><i class="material-icons">library_add</i></button>
                        <!--<button class="btn btn-success" type="button" data-toggle="modal" extends="excelHtml5"><i class="fas fa-file-excel"></i></button>-->
                </div>
            </div>
        </div><br>


        <div class="container caja">
            <div class="row">
                <div class="col-lg-12">
                        <div class="table-responsive">
                            <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                                <thead class="text-center">
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Pais</th>
                                        <th>Edad</th>
                                        <th>Acciones</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <!--aqui fueron borradas cosas de php-->
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>


        <!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formPersonas">    
            <div class="modal-body">
                <div class="form-group">
                <label for="nombre" class="col-form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre">
                </div>
                <div class="form-group">
                <label for="pais" class="col-form-label">Pais:</label>
                <input type="text" class="form-control" id="pais">
                </div>                
                <div class="form-group">
                <label for="edad" class="col-form-label">Edad:</label>
                <input type="number" class="form-control" id="edad">
                </div>            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div> 



        <!--Jquery, popper.js, bootstrap.js-->
        <script src="jquery/jquery-3.3.1.min.js"></script>
        <script src="popper/popper.min.js"></script>
        <script src="bootstrap-4.5.3/js/bootstrap.min.js"></script>

        <!--datatables js-->
        <script type="text/javascript" src="DataTables/datatables.min.js"></script>
        
        <!--codigo js propio-->
        <script src="script.js"></script>

        <!-- para usar botones en datatables JS -->  
        <script src="DataTables/Buttons-1.6.5/js/dataTables.buttons.min.js"></script>  
        <script src="DataTables/JSZip-2.5.0/jszip.min.js"></script>    
        <script src="DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>    
        <script src="DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
        <script src="DataTables/Buttons-1.6.5/js/buttons.html5.min.js"></script>

    <!-- BOOTSTRAP JAVASCRIPTS -->
   <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>-->
    </body>
</html>
