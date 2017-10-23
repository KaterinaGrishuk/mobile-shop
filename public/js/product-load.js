$(document).ready(function () {
    $(document).on('click', '.pagination a', function (e) {
        // $('li').removeClass('active');
        // $(this).parent('li').addClass('active');
        event.preventDefault();

        var url = $(this).attr('href');
        getProduct(url);
        window.history.pushState("", "", url);
    })
});
function getProduct(url){
    $.ajax({
        url : url
    }).done(function (data) {
        $('.product_load').html(data);
    }).fail(function () {
        alert('Articles could not be loaded.');
    });
}