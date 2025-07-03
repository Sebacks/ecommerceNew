$(document).ready(function() {
    $('input').val("")
    let isExpanded = true;
    $("#circleCollapse").click(function () {
        $("#side-bar-Id").toggleClass("side-bar-peque");
    })
    /*
        Busca la categoria usando un filter de jquery por lo que 
        busca en literal cualquier pedazo de texto que haya en la categoria
    */
    $("#buscarProducto").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#tableProductos tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

    /*Eventos del switch "Agregar"*/
    $('#btnSwitchS').click(function (){
        $('#main-table').toggleClass("d-none");
        $('#add-products').toggleClass("d-none");
        var text = $(this).text() == 'Agregar' ? 'Volver' : 'Agregar';
        if($(this).text()=='Agregar') $('input').val("")
            
        $('#idInput').val(null)
        $('#nombreInput').val("")
        $('#descripcionInput').val("")

        $('#btnSwitchS').toggleClass('btn-primary');
        $('#btnSwitchS').toggleClass('btn-secondary');
        $('#btnSwitchS').text(text)
    })
    /*Reemplaza la ventana actual cargando la categoria seleccionada en el form de agregar*/
    $('.editBtn').click(function(event){
        var id = event.target.parentElement.parentElement.id;
        var nombre = event.target.parentElement.parentElement.getElementsByTagName("td")[0].innerText;
        var desc = event.target.parentElement.parentElement.getElementsByTagName("td")[1].innerText;
        $('#main-table').toggleClass("d-none");
        $('#add-products').toggleClass("d-none");
        var text = $('btnSwitchS').text() == 'Agregar' ? 'Agregar' : 'Volver';
        $('#idInput').val(id)
        $('#nombreInput').val(nombre)
        $('#descripcionInput').val(desc)
        $('#btnSwitchS').toggleClass('btn-primary');
        $('#btnSwitchS').toggleClass('btn-secondary');
        $('#btnSwitchS').text(text);
    });
    $('.deactivateBtn').click(function(event){
        var id = event.target.parentElement.parentElement.id;
        nuevoBody = '<span>¿Esta seguro que desea desactivar la categoria?</span>';
        nuevoBody += '<span class="text-center">Se desactivarán todos los productos dentro de esta categoría</span>';
        $('.modal-body')[0].innerHTML = nuevoBody
        $('#idInputModal').val(id)
        $('#estadoInputModal').val("0")
    });
    $('.activateBtn').click(function(event){
        var id = event.target.parentElement.parentElement.id;
        nuevoBody = '<span>¿Esta seguro que desea volver a activar la categoria?</span>';
        nuevoBody += '<span class="text-center">Se activarán todos los productos dentro de esta categoría</span>';
        $('.modal-body')[0].innerHTML = nuevoBody
        $('#idInputModal').val(id)
        $('#estadoInputModal').val("1")
    });
});