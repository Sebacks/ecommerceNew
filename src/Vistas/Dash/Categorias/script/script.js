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
        $('#btnSwitchS').toggleClass('btn-primary');
        $('#btnSwitchS').toggleClass('btn-secondary');
        $('#btnSwitchS').text(text)
    })
    $('#descuentoInput').on('input', function (){
        $('#porcentajeShow').text($('#descuentoInput').val()+"%")
    })
    $('.editBtn').click(function(event){
        var id = event.target.parentElement.parentElement.id
        $('#main-table').toggleClass("d-none");
        $('#add-products').toggleClass("d-none");
        var text = $('btnSwitchS').text() == 'Agregar' ? 'Agregar' : 'Volver';
        $('#nombreInput').val(id)
        $('#btnSwitchS').toggleClass('btn-primary');
        $('#btnSwitchS').toggleClass('btn-secondary');
        $('#btnSwitchS').text(text);
    });
});