$(document).ready(function() {
    $('input').val("")
    let isExpanded = true;
    $("#circleCollapse").click(function () {
        $("#side-bar-Id").toggleClass("side-bar-peque");
    })
    $("#buscarProducto").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#tableProductos tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
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
    $('#descuentoInput').on('input', function (){
        $('#porcentajeShow').text($('#descuentoInput').val()+"%")
    })
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