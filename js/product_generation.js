$(document).ready(function () {

    var category_id = '';

    var collection = $('.collection_id').attr('id');
    collection = collection.match(/\d+/);
    collection = Number.parseInt(collection);

    if (collection == 0){collection = ''};
    var price_min = Number.parseInt($('#min-price').val());
    var price_max = Number.parseInt($('#max-price').val());
    var title = '';
    var page = 1;

    GetProducts(category_id, collection, title, price_min, price_max, page);
    
    $('#seach').click(function () {

        $('.products').children().remove();
        var category_id = $('#category').attr('cat');
        category_id = ((category_id == "all")?"":Number.parseInt(category_id));
        var collection = $('.collection_id').attr('id');
        collection = collection.match(/\d+/);
        collection = Number.parseInt(collection);
        if (collection == 0){collection = ''};

        var price_min = Number.parseInt($('#min-price').val());
        var price_max = Number.parseInt($('#max-price').val());
        var title = $('#seach-title').val();

        GetProducts(category_id, collection, title, price_min, price_max, page);
        $('#filter').text('ФИЛЬТР: НАИМЕНОВАНИЕ:'+ ((title =="")?'Все':"%"+title+"%")+'.    КАТЕГОРИЯ: '+ ((category_id =="")?'Все':$('#category').text())+'.    ЦЕНА: '+'от '+$('#min-price').val()+'руб.'+' до '+$('#max-price').val()+'руб.');
        window.history.pushState(category_id, "Title", "?collection=" + collection + "&category_id=" + category_id); // подмена url
    });
    

    $('.pages-item').click(function () {

        $('.products').children().remove();
        var category_id = $('#category').attr('cat');
        category_id = ((category_id == "all")?"":Number.parseInt(category_id));
        var collection = $('.collection_id').attr('id');
        collection = collection.match(/\d+/);
        collection = Number.parseInt(collection);
        if (collection == 0){collection = ''};

        var price_min = Number.parseInt($('#min-price').val());
        var price_max = Number.parseInt($('#max-price').val());
        var title = $('#seach-title').val();
        page = Number.parseInt($(this).text());
    

        GetProducts(category_id, collection, title, price_min, price_max, page);
        $('#filter').text('ФИЛЬТР: НАИМЕНОВАНИЕ:'+ ((title =="")?'Все':"%"+title+"%")+'.    КАТЕГОРИЯ: '+ ((category_id =="")?'Все':$('#category').text())+'.    ЦЕНА: '+'от '+$('#min-price').val()+'руб.'+' до '+$('#max-price').val()+'руб.');
        window.history.pushState(category_id, "Title", "?collection=" + collection + "&category_id=" + category_id); // подмена url

    });


    
        if ($(this).attr('id') !== 'category_all') {
            var category_id = $(this).attr('id');
            category_id = category_id.match(/\d+/);
            category_id = Number.parseInt(category_id);
        } else {
            category_id = 0;
        }
        
        GetProducts(category_id, collection)
    });


});

function GetProducts(category, collection, title, price_min, price_max, page) {
    $.post('get_products.php', {
        category_id: category,
        collection: collection,
        title: title,
        price_min: price_min,
        price_max: price_max,
        page: page
    }, function (data) {
        var data = JSON.parse(data);
        console.log (data);
        var products = data.products;
        products.forEach(function (product) {
            $('.products').append(
                '<a href="../controllers/product.php?product_id=' + product.id + '" class="products-item">' +
                '<div class="products-item-photo" style="background-image: url(../images/picture/' + product.image + ')"></div>' +
                '<p class="products-item-title">' + product.title + '</p>' +
                '<p class="products-item-price">' + product.price + '</p>' +
                '</a>'
            );
        });

        if (products.length == 0) {
            $('.products').append(
            '<h2 class="no-goods"> Извините, товары не найдены...<h2>'
            );
        }
        
    });
}
