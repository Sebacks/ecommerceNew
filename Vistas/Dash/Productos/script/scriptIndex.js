$('.link').click(function () {
    var elementId = $(this).attr('id');
    console.log(elementId);
    window.location.replace("dash" + elementId + ".html");
});
let isExpanded = true;
$("#circleCollapse").click(function () {
    $("#side-bar-Id").toggleClass("side-bar-peque");
})