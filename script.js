$(document).ready(function() {
    var id, opcion;
    opcion = 4;

    tablaPersonas = $("#tablaPersonas").DataTable({
        "ajax": {
            //"serverSide": true, 
            "url": "bd/crud.php",
            "method": 'POST', //usamos el metodo POST
            "data": { opcion: opcion }, //enviamos opcion 4 para que haga un SELECT
            "dataSrc": ""
        },
        "columns": [
            { "data": "id" },
            { "data": "nombre" },
            { "data": "pais" },
            { "data": "edad" },
            { "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm btnEditar'><i class='material-icons'>edit</i></button><button class='btn btn-danger btn-sm btnBorrar'><i class='material-icons'>delete</i></button></div></div>" }
        ],
        //para cambiar el lenguaje a español
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Ultimo",
                "sNexr": "Siguientes",
                "sPrevious": "Anterior"
            },
            "sProcessing": "Procesando...",
        }

    });





    //  con jquery
    var fila; //captura la fila para editar o borrar el registro
    $("#formPersonas").submit(function(e) {
        e.preventDefault();
        //id = $.trim($("#id").val());
        nombre = $.trim($("#nombre").val());
        pais = $.trim($("#pais").val());
        edad = $.trim($("#edad").val());
        /*codigo para ajax */
        $.ajax({
            url: "bd/crud.php",
            type: "POST",
            datatype: "json",
            data: { id: id, nombre: nombre, pais: pais, edad: edad, opcion: opcion },
            success: function(data) {
                //var datos = JSON.parse(data);
                tablaPersonas.ajax.reload(null, false);
            }

        });
        $("#modalCRUD").modal("hide");
    });
    //para limpiar los campos antes de dar de Alta una Persona
    $("#btnNuevo").click(function() {
        opcion = 1; //alta           
        id = null;
        $("#formPersonas").trigger("reset");
        $(".modal-header").css("background-color", "#17a2b8");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Alta de Usuario");
        $('#modalCRUD').modal('show');
    });

    //boton editar
    $(document).on("click", ".btnEditar", function() {
        opcion = 2; //editar
        fila = $(this).closest("tr");
        id = parseInt(fila.find('td:eq(0)').text()); //capturo el id
        //alert(id);
        nombre = fila.find('td:eq(1)').text();
        pais = fila.find('td:eq(2)').text();
        edad = fila.find('td:eq(3)').text();

        $("#nombre").val(nombre);
        $("#pais").val(pais);
        $("#edad").val(edad);

        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "#ffffff");
        $(".modal-title").text("Editar persona");
        $("#modalCRUD").modal("show");
    });


    //boton borrar
    $(document).on("click", ".btnBorrar", function() {
        fila = $(this);
        id = parseInt($(this).closest("tr").find('td:eq(0)').text());
        opcion = 3; //borrar
        var respuesta = confirm("¿Esta seguro de eliminar el rergistro:" + id + "?");
        if (respuesta) {
            $.ajax({
                url: "bd/crud.php",
                type: "POST",
                datatype: "json",
                data: { opcion: opcion, id: id },
                success: function() {
                    tablaPersonas.row(fila.parents('tr')).remove().draw();
                }
            });
        }
    });




});