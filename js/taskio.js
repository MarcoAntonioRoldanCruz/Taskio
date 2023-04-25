function AgregarTarea() {
    var tarea = $("#tarea").val();
    if (tarea == "") {
        alert("No ha colocado el nombre de la tarea");
        return;
    }
    var descripcion = $("#descripcion").val();
    if (descripcion == "") {
        alert("No ha colocado la descripción de la tarea");
        return;
    }
    var prioridad = $("#prioridad").val();
    if (prioridad == "") {
        alert("No ha colocado la prioridad de la tarea");
        return;
    }
    var fecha_entrega = $("#fecha_entrega").val();
    if (fecha_entrega == "") {
        alert("No ha colocado la fecha de entrega de la tarea");
        return;
    }
    var responsable = $("#responsable").val();
    if (responsable == "") {
        alert("No ha colocado la descripción de la tarea");
        return;
    }
    $.ajax({
        type: "post",
        url: "taskio_funciones.php",
        data: {
            tarea: tarea,
            descripcion: descripcion,
            prioridad: prioridad,
            fecha_entrega: fecha_entrega,
            responsable: responsable
        },
        dataType: "html",
        success: function(response) {
            console.log(response);
        },
        error: function(xhr) {
            console.log(xhr.responseText);
        }
    });
}