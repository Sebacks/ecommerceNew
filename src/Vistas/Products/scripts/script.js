/*Sistema carrito*/

function actualizarTotales(){
    var itemsStorage = JSON.parse(localStorage.getItem('carrito'))
    var total = 0;
    var subtotal = 0;
    if(JSON.stringify(itemsStorage).indexOf('[')==-1){
        itemsStorage.precio = itemsStorage.precio.replace('CRC','')
        subtotal=(parseInt(itemsStorage.precio)*parseInt(itemsStorage.cantidad))
        console.log(parseInt(itemsStorage.precio)*parseInt(itemsStorage.cantidad))
        console.log(itemsStorage.precio)
        console.log(itemsStorage.cantidad)
    }
    else{
        itemsStorage.forEach(e => {
            e.precio = e.precio.replace('CRC','')
            subtotal+=(parseInt(e.precio)*parseInt(e.cantidad))
            var span = $('#'+e.id).find('.priceCont span')
            span.text('CRC'+parseInt(e.precio)*parseInt(e.cantidad))
        })
    }
    total=subtotal+(subtotal*0.13)
    total=Math.round(total)
    $('#SubtotalCarritoSpan').text('CRC'+subtotal);
    $('#TotalCarritoSpan').text('CRC'+total);
}


function cargarCarrito(){
    var itemsStorage = JSON.parse(localStorage.getItem('carrito'))
    if(itemsStorage!=null){
        var html = ''
        if(localStorage.getItem('carrito')==null)
            html = ''
        else if(localStorage.getItem('carrito').indexOf('[')==-1){
            var itemsStorage = JSON.parse(localStorage.getItem('carrito'))
            html = `<li class="sideMenuMealItem"id="`+itemsStorage.id+`">
                    <div class="contLeft">
                        <div class="contImg">
                            <img src="`+itemsStorage.urlImg+`" alt="">
                        </div>
                        <div class="contName">
                            <span>`+itemsStorage.nombre+`</span>
                            <div>
                                <button class="decrementSideMenu">-</button>
                                <input type="number" class="inputSideMenu" value=`+itemsStorage.cantidad+`>
                                <button class="incrementSideMenu">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="priceCont">
                        <button type="button" class="btn-close btn-deleteCarrito text-reset mx-0" aria-label="Close"></button>
                        <span>`+itemsStorage.precio+`</span>
                    </div>
                </li>`
        }else{
            var itemsStorage = JSON.parse(localStorage.getItem('carrito'))
            itemsStorage.forEach(e => {
                html+= `<li class="sideMenuMealItem"id="`+e.id+`">
                    <div class="contLeft">
                        <div class="contImg">
                            <img src="`+e.urlImg+`" alt="">
                        </div>
                        <div class="contName">
                            <span>`+e.nombre+`</span>
                            <div>
                                <button class="decrementSideMenu">-</button>
                                <input type="number" class="inputSideMenu" value=`+e.cantidad+`>
                                <button class="incrementSideMenu">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="priceCont">
                        <button type="button" class="btn-close btn-deleteCarrito text-reset mx-0" aria-label="Close"></button>
                        <span>`+e.precio+`</span>
                    </div>
                </li>`
            });
        }  
        $('#listaCarritoID').html(html);
        actualizarTotales()
    }
}


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
var idProdu=0;       
/*Obtiene el id del producto seleccionado*/
$('.singProdu').click(function(){
    var idSel = $(this).find(".idProductoModal");
    var id = parseInt(idSel[0].value);
    idProdu = id;
    /*la var id es el id del producto seleccionado*/
    var modalText = document.getElementById('textTitleModal');
    modalText.innerHTML=id;
});
function CartItem(nombre, id, cantidad, precio, urlImg){
    this.nombre=nombre;
    this.id=id;
    this.cantidad=cantidad;
    this.precio=precio;
    this.urlImg=urlImg;
}
$('.btnAgregarCarrito').click(function(){
    var precio = 870;
    var currentItem = new CartItem();
    var allItems = []
    currentItem.nombre = idProdu;
    currentItem.cantidad = 1;
    currentItem.precio = "CRC"+precio;
    currentItem.urlImg = "../assets/chocolate.png";
    currentItem.id=idProdu;
    if(localStorage.getItem('carrito')==null)
        localStorage.setItem('carrito',JSON.stringify(currentItem))
    else if(localStorage.getItem('carrito').indexOf('[')==-1){
        var itemStorage = JSON.parse(localStorage.getItem('carrito'))
        if(itemStorage.id==idProdu){
            itemStorage.cantidad++;
            localStorage.setItem('carrito',''+JSON.stringify(itemStorage))
        }else{
            allItems.push(currentItem)
            allItems.push(itemStorage)
            localStorage.setItem('carrito',JSON.stringify(allItems))
        }
        console.log('hp')
    }else{
        allItems=[]
        var retVal = true
        var itemsStorage = JSON.parse(localStorage.getItem('carrito'))
        itemsStorage.forEach(e => {
            if(e.id==idProdu){
                e.cantidad++;
                allItems.push(e);
                retVal=false
            }else{
                allItems.push(e);
            }
        });
        if(retVal){
            allItems.push(currentItem)
            
        }else{
            
        }
        console.log(allItems)
        localStorage.setItem('carrito',JSON.stringify(allItems))
    }   
    $("#modalAgregarProducto").modal('hide')
    var offcanvasElement = document.getElementById('modalCarrito');
    var offcanvas = new bootstrap.Offcanvas(offcanvasElement);
    offcanvas.show();
    cargarCarrito();
})



$(document).on('click', '.incrementSideMenu', function() {
    var sideMenuMealItem = $(this).closest('.sideMenuMealItem');
    var id = sideMenuMealItem.attr('id');
    var input = $('#'+id).find(".inputSideMenu");
    let currentValue = parseInt(input[0].value);
    var id = sideMenuMealItem.attr('id');
    var carrito = JSON.parse(localStorage.getItem('carrito'));
    var carritoString = localStorage.getItem('carrito')
    if(carritoString.indexOf('[')==-1){
        if(currentValue <= 2){
            input[0].value = currentValue + 1;
            carrito.cantidad = currentValue + 1;
        }
    }else{
        carrito.forEach(e=>{
            if(e.id==id){
                if(carrito.indexOf(e)>-1){
                    if(currentValue <= 99){
                        input[0].value = currentValue + 1;
                        carrito[carrito.indexOf(e)].cantidad = currentValue + 1;
                    }
                }
            }
        })
    }
    localStorage.setItem('carrito', JSON.stringify(carrito))
    actualizarTotales()
});

// Para los botones -
$(document).on('click', '.decrementSideMenu', function() {
    var sideMenuMealItem = $(this).closest('.sideMenuMealItem');
    var id = sideMenuMealItem.attr('id');
    var input = $('#'+id).find(".inputSideMenu");
    let currentValue = parseInt(input[0].value);
    var id = sideMenuMealItem.attr('id');
    var carrito = JSON.parse(localStorage.getItem('carrito'));
     var carritoString = localStorage.getItem('carrito')
    if(carritoString.indexOf('[')==-1){
        if(currentValue >= 2){
            input[0].value = currentValue - 1;
            carrito.cantidad = currentValue - 1;
        }
    }else{
        carrito.forEach(e=>{
            if(e.id==id){
                if(carrito.indexOf(e)>-1){
                    if(currentValue >= 2){
                        input[0].value = currentValue - 1;
                        carrito[carrito.indexOf(e)].cantidad = currentValue - 1;
                    }
                }
            }
        })
    }
    
    localStorage.setItem('carrito', JSON.stringify(carrito))
    actualizarTotales()
});
$(document).on('click', '.btn-deleteCarrito', function() {
    var sideMenuMealItem = $(this).closest('.sideMenuMealItem');
    var id = sideMenuMealItem.attr('id');
    var carrito = JSON.parse(localStorage.getItem('carrito'))
    var carritoString = localStorage.getItem('carrito')
    if(carritoString.indexOf('[')==-1){
        if(carrito.id==id){
            localStorage.clear();
        }
    }else{
        carrito.forEach(e=>{
            if(e.id==id){
                if(carrito.indexOf(e)>-1){
                    carrito.splice(carrito.indexOf(e),1);
                }
            }
        })
        localStorage.setItem('carrito', JSON.stringify(carrito))
    }
    cargarCarrito()
});
