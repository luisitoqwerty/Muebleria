$(document).ready(function() {

    mostrarDatosTablaUsuarios();

    $('#btnAgregarUsuario').click(function() {
        $.ajax({
            type: "POST",
            data: $('#frmAgregaUsuario').serialize(),
            url: base_url + "/agregarUsuarios",
            success: function(respuesta) {

                console.log(respuesta);
                if (respuesta > 0) {
                    mostrarDatosTablaUsuarios();
                    swal(":)", "Genial agregado con exito!", "success");
                } else {
                    swal(":(", "No se pudo agregar!", "error");
                }
            }
        });

        return false;
    });
});

function mostrarDatosTablaUsuarios() {
    $.ajax({
        url: base_url + "/todosLosUsuario",
        dataType: "JSON",
        success: function(respuesta) {
            cadena = '<table class="table table-bordered" id="tablaUsuarios">' +
                '<thead>' +
                '<tr>' +
                '<th>nombre del mueble</th>' +
                '<th>tipo de madera</th>' +
                '<th>costo de venta</th>' +
                '<th>costo de compra</th>' +
                '<th>fecha en que fue agregado</th>' +
                '<th>Editar</th>' +
                '<th>Eliminar</th>' +
                '</tr>' +
                '</thead>' +
                '<tbody>';
            $.each(respuesta, function(i, item) {
                cadena = cadena + "<tr>" +
                    "<td>" + item.nombre + "</td>" +
                    "<td>" + item.tipo + "</td>" +
                    "<td>" + item.costov + "</td>" +
                    "<td>" + item.costoc + "</td>" +
                    "<td>" + item.fecha + "</td>" +
                    '<td>' +
                    '<span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalActualizarUsuario" ' +
                    ' onclick="obtenerIdUsuario(' + item.id_mueble + ')">' +
                    '<span class="fas fa-user-times"></span>' +
                    '<span>' +
                    '</td>' +
                    '<td>' +
                    '<span class="btn btn-danger btn-sm" onclick="eliminarUsuario(' + item.id_mueble + ')">' +
                    '<span class="fas fa-user-edit"></span>' +
                    '</span></td>' +
                    "</tr>";
            });
            cadena = cadena + "</tbody></table>";
            $('#tablaCargadaUsuarios').html(cadena);
            $("#tablaUsuarios").DataTable();
        }
    });

    return false;
}

function eliminarUsuario(id_mueble) {

    swal({
            title: "Estas seguro de esta accion?",
            text: "Una vez eliminado no podra ser recuperado!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: "POST",
                    dataType: "JSON",
                    data: "id_mueble=" + id_mueble,
                    url: base_url + "/eliminarUsuario",
                    success: function(respuesta) {
                        if (respuesta['status']) {
                            mostrarDatosTablaUsuarios();
                            swal(":)", "Genial agregado con exito!", "success");
                        } else {

                            swal(":(", "No se pudo eliminar!", "error");
                        }
                    }
                });
            }
        });

}

function obtenerIdUsuario(id_mueble) {
    $.ajax({
        type: "POST",
        data: "id_mueble=" + id_mueble,
        dataType: "JSON",
        url: base_url + "/obtenerUsuarioId",
        success: function(respuesta) {

            $.each(respuesta, function(i, item) {
                $('#nombreu').val(item.nombre);
                $('#tipou').val(item.tipo);
                $('#costovu').val(item.costov);
                $('#costocu').val(item.costoc);
                $('#fechau').val(item.fecha);
            });
        }
    });
}

function actualizarUsuario() {
    $.ajax({
        type: "POST",
        data: $('#frmAgregaUsuariou').serialize(),
        url: base_url + "/actualizarUsuario",
        success: function(respuesta) {

            console.log(respuesta);
            if (respuesta) {
                mostrarDatosTablaUsuarios();
                swal(":)", "Genial actualizado con exito!", "success");
            } else {
                swal(":(", "No se pudo actualizar!", "error");
            }
        }
    });

    return false;
}