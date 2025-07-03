//No me acuerdo pa que esta esto aca pero si lo quito no sirve
$('.link').click(function () {
    var elementId = $(this).attr('id');
    console.log(elementId);
    window.location.replace("dash" + elementId + ".html");
});
let isExpanded = true;
$("#circleCollapse").click(function () {
    $("#side-bar-Id").toggleClass("side-bar-peque");
})