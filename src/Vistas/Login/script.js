$('#btnSwitch').text('Registrarse')
$('#btnSwitch').click(function (){
    $('#registroForm').toggleClass("d-none");
    $('#loginForm').toggleClass("d-none");

    if($(this).text()=="Registrarse")
        $(this).text("Iniciar Sesion");
    else
        $(this).text("Registrarse");
    $('#btnSwitch').toggleClass('btn-primary');
    $('#btnSwitch').toggleClass('btn-secondary');
})
$("#btnSwitch").click(function (){
    window.location.reload("../dashboard/dashIndex.html");
})
