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
        $('#btnSwitchS').toggleClass('btn-primary');
        $('#btnSwitchS').toggleClass('btn-secondary');
        $('#btnSwitchS').text(text)
    })
    /*Reemplaza la ventana actual cargando la categoria seleccionada en el form de agregar*/
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