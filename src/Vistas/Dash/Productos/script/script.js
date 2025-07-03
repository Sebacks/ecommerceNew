$(document).ready(function() {
    $('input').val("")
    $('.link').click(function () {
        var elementId = $(this).attr('id');
        console.log(elementId);
        window.location.replace("../" + elementId + "/index.html");
    });
    $("#circleCollapse").click(function () {
        $("#side-bar-Id").toggleClass("side-bar-peque");
    })
    $("#buscarProducto").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#tableProductos tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    const slider = document.getElementById('descuentoInput');

    function updateSliderBackground() {
        const value = (slider.value - slider.min) / (slider.max - slider.min) * 100;
        slider.style.background = `linear-gradient(to right, #FFD9A0FF ${value}%, #ddd ${value}%)`;
    }
    slider.addEventListener('input', updateSliderBackground);
    updateSliderBackground(); // Llamada inicial para establecer el color al cargar
    $('#btnSwitchV').click(function (){
        $('#main-table').toggleClass("d-none");
        $('#add-productsV').toggleClass("d-none");
        var text = $(this).text() == 'Agregar Varios' ? 'Volver' : 'Agregar Varios';
        var text2 = $('#btnSwitchV').text() == 'Agregar' ? 'Volver' : 'Agregar';
        if($(this).text()=='Agregar Varios'){
            if(!$('#btnSwitchS').hasClass('btn-primary')){
                $('#main-table').toggleClass("d-none");
                $('#add-products').toggleClass("d-none");
                $('#btnSwitchS').toggleClass('btn-primary');
                $('#btnSwitchS').toggleClass('btn-secondary');
                $('#btnSwitchS').text(text2)
            }
            $('input').val("")
            radioFalse.checked=true;
            $("#descuentoInputCont").addClass('d-none');
            $('#descuentoInput').val(50);
            updateSliderBackground();
            $('#porcentajeShow').text($('#descuentoInput').val()+"%")
        }
        $('#btnSwitchV').toggleClass('btn-primary');
        $('#btnSwitchV').toggleClass('btn-secondary');
        $('#btnSwitchV').text(text)
    })
    $('#btnSwitchS').click(function (){
        $('#main-table').toggleClass("d-none");
        $('#add-products').toggleClass("d-none");
        var text = $(this).text() == 'Agregar' ? 'Volver' : 'Agregar';
        var text2 = $('#btnSwitchV').text() == 'Volver' ? 'Agregar Varios' : 'Agregar Varios';
        
        if($(this).text()=='Agregar'){
            if(!$('#btnSwitchV').hasClass('btn-primary')){
                $('#main-table').toggleClass("d-none");
                $('#add-productsV').toggleClass("d-none");
                $('#btnSwitchV').toggleClass('btn-primary');
                $('#btnSwitchV').toggleClass('btn-secondary');
                $('#btnSwitchV').text(text2)
            }
            $('input').val("")
            radioFalse.checked=true;
            $("#descuentoInputCont").addClass('d-none');
            $('#descuentoInput').val(50);
            updateSliderBackground();
            $('#porcentajeShow').text($('#descuentoInput').val()+"%")
        }
        $('#btnSwitchS').toggleClass('btn-primary');
        $('#btnSwitchS').toggleClass('btn-secondary');
        $('#btnSwitchS').text(text)
    })
    radioTrue.addEventListener("change", function() {
        if (radioTrue.checked) {
            $("#descuentoInputCont").removeClass('d-none');
        }
    });
    radioFalse.addEventListener("change", function() {
        if (radioFalse.checked) {
            $("#descuentoInputCont").addClass('d-none');
        }
    });
    $('#descuentoInput').on('input', function (){
        $('#porcentajeShow').text($('#descuentoInput').val()+"%")
    })
    $('.editBtn').click(function(event){
        var id = event.target.parentElement.parentElement.id
        $('#main-table').toggleClass("d-none");
        $('#add-products').toggleClass("d-none");
        var text = $('btnSwitchS').text() == 'Agregar' ? 'Agregar' : 'Volver';
        $('#nombreInput').val(id)
        if($("#btnSwitchS").text()=='Agregar'){
            radioFalse.checked=true;
            $("#descuentoInputCont").addClass('d-none');
            $('#descuentoInput').val(50);
            updateSliderBackground();
            $('#porcentajeShow').text($('#descuentoInput').val()+"%")
        }
        $('#btnSwitchS').toggleClass('btn-primary');
        $('#btnSwitchS').toggleClass('btn-secondary');
        $('#btnSwitchS').text(text);
    });
});