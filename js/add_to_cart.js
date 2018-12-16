$(document).ready(function () {

    var product_id = getUrlVars()["product_id"];
    var size_id = $('.product__views-link:first-of-type').data('size-id');
    $('.product__views-link:first-of-type').addClass('product__link-size');

    function getUrlVars() {
        //извлекаем get параметр product_id
        var vars = {};
        var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {
            vars[key] = value;
        });
        return vars;
    }


    $('.product__views-link').click(function (e) {
        e.preventDefault();
        $('.product__views-link').siblings().removeClass('product__link-size');
        $(this).addClass('product__link-size');
        size_id = $(this).data('size-id'); // получаем size_id
    })

    console.log(size_id);

    $('.product__desc-button_link').click(function (event) {
        event.preventDefault();
        $.post('add_to_cart.php', {
            product_id: product_id,
            size_id: size_id
        }, function (data) {
            if (Request.readyState == 4) {
                alert('Товар добавлен в корзину');
            } else {
                alert('Что-то пошло не так...попробуйте ещё раз');
            }
        });
    }) // end click
})