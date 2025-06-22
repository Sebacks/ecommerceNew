$(document).ready(function() {
    $('input').val("")
    var radioTrue = document.getElementById("true");
    var radioFalse = document.getElementById("false");
    radioFalse.checked=true;
    $('.link').click(function () {
        var elementId = $(this).attr('id');
        console.log(elementId);
        window.location.replace("dash" + elementId + ".html");
    });
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
    const slider = document.getElementById('descuentoInput');

    function updateSliderBackground() {
        const value = (slider.value - slider.min) / (slider.max - slider.min) * 100;
        slider.style.background = `linear-gradient(to right, #FFD9A0FF ${value}%, #ddd ${value}%)`;
    }
    slider.addEventListener('input', updateSliderBackground);
    updateSliderBackground(); // Llamada inicial para establecer el color al cargar

    $('#btnSwitch').click(function (){
        $('#main-table').toggleClass("d-none");
        $('#add-products').toggleClass("d-none");
        var text = $(this).text() == 'Agregar' ? 'Volver' : 'Agregar';
        if($(this).text()=='Agregar'){
            $('input').val("")
            radioFalse.checked=true;
            $("#descuentoInputCont").addClass('d-none');
            $('#descuentoInput').val(50);
            updateSliderBackground();
            $('#porcentajeShow').text($('#descuentoInput').val()+"%")
        }
        $('#btnSwitch').toggleClass('btn-primary');
        $('#btnSwitch').toggleClass('btn-secondary');
        $('#btnSwitch').text(text)
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
});
