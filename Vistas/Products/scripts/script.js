$('#addCartProdu').click(function () {
    document.getElementById('oscuro').style.display="block"
    document.getElementById('oscuro').style.width="100vw"
    $("#oscuro").click(()=>{
        cerrarSideMenu()
    })
    $("#sideMenu").css('display','block')
    $("#sideMenu").animate({width: '520px'});
})
function abrirSideMenu(){

}
function cerrarSideMenu(){
    $("#sideMenu").css('display','none')
    $("#sideMenu").css('width','0px');
    document.getElementById('oscuro').style.display="none"
}
$('.incrementSideMenu').on('click', function() {
    var sideMenuMealItem = $(this).closest('.sideMenuMealItem');
    var id = sideMenuMealItem.attr('id');
    var input = $('#'+id).find(".inputSideMenu")
    let currentValue = parseInt(input[0].value);
    input[0].value = currentValue + 1; // Incrementa el valor en 1
});
$('.decrementSideMenu').click(function() {
    var sideMenuMealItem = $(this).closest('.sideMenuMealItem');
    var id = sideMenuMealItem.attr('id');
    var input = $('#'+id).find(".inputSideMenu")
    let currentValue = parseInt(input[0].value);
    if(input[0].value>=2){
        input[0].value = currentValue - 1;
    }
});
$("#cartIcon").click(function () {

})