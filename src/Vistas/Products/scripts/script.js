/*$('#addCartProdu').click(function () {
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
});*/

/*Sistema de categorias*/
var list = [];
var palabras='-';
$('.categoria').click(function(){
    var catSelected = $(this).closest('.categoria');
    if($(catSelected).hasClass('selected')){
        var text = $(catSelected).find("span")
        var texto = text[0];
        if(palabras.includes(texto.innerText)){
            palabras = palabras.replace(texto.innerText+'-', '');
        }
        $(catSelected).removeClass('selected');
        if(palabras){
            $(".productCont .singProduCont").filter(function () {
                var toggle = $(this).text().trim().indexOf(palabras) == -1
                if((!toggle && $(this)[0].classList.contains('singProduCont'))){
                    $(this).css('display','flex');
                }
            });
        }
        else{
            $(".productCont div").filter(function () {
                if($(this).css('display')=='none'){
                    $(this).toggle()
                }
            });
        }
    }
    else
    {
        var text = $(catSelected).find("span")
        var texto = text[0];
        palabras = palabras + texto.innerText+'-';
        var indices = [];
        for(var i=0; i<palabras.length;i++) {
            if (palabras[i] === "-") indices.push(i+1);
        }
        var words=[]
        for(var i=0; i<indices.length; i++){
            words.push(palabras.substring(indices[i],indices[i+1]).replace('-',''));
            words = words.sort()
        };
        palabras='-'
        for(var i=0; i<words.length; i++){
            if(words[i]!='')
                palabras = palabras+words[i]+'-'
            else
                continue;
        };
        $(catSelected).addClass('selected');
        if(palabras){
            $(".productCont .singProduCont").filter(function () {
                var toggle = $(this).text().trim().indexOf(palabras) == -1
                if(!(!toggle && $(this)[0].classList.contains('singProduCont'))){
                    $(this).css('display','none');
                }
            });
        }
        else{
            $(".productCont div").filter(function () {
                if($(this).css('display')=='none'){
                    $(this).toggle()
                }
            });
        }
    }
})

/*Buscar productos*/
$("#busquedaProductos").on("keyup", function () {
    var value = $(this).val().toLowerCase();
    $("#contenedorProductosGeneral div").filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
    if($('.categoria').hasClass('selected')){ 
        $('.categoria').removeClass('selected');
    }
    /*Esto de aca es para quitar las categorias buscadas*/
    palabras='-'
    var indices = [];
    for(var i=0; i<palabras.length;i++) {
        if (palabras[i] === "-") indices.push(i+1);
    }
    var words=[]
    console.log(indices)
    for(var i=0; i<indices.length; i++){
        words.push(palabras.substring(indices[i],indices[i+1]).replace('-',''));
        words = words.sort()
    };
});                 
                            
/*Obtiene el id del producto seleccionado*/
$('.singProdu').click(function(){
    var idSel = $(this).find(".idProductoModal");
    var id = parseInt(idSel[0].value);
    /*la var id es el id del producto seleccionado*/
    var modalText = document.getElementById('textTitleModal');
    modalText.innerHTML=id;
})

