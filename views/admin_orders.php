<?php 
    $admin_page_title = 'Заказы';
?>
<?php require_once "../templates/admin_header.php" 
?> 


       
       
       
       
        <h1 class="text-center mt-4 mb-4">Заказы</h1>
        
       

        <?php 
            foreach ($orders as $key => $order) {
            
            echo(
            '<div class="container alert alert-success mb-4" id="orders">
            <div class="orders-item">
                <h2 class="text-center"><span id="order-date">2018-10-01</span>/<span id="order-time">17:03</span></h2>
                <h3 class="text-center mb-3" id="order-user_name">Сергей Дмитренко</h3>
                <div class="d-flex justify-content-center align-items-center mt-3">
                    <p>Статус заказа: <span id="order-status">'.(($order->status == 0) ? 'Ожидается подтверждение' : 'Заказ подтвержден').'</span></p>
                    <p>Адрес заказа: <span id="order-status">'.$order->address.'</span></p>
                    <p>Комментарии: <span id="order-status">'.(($order->comment == "") ? 'Нет комментариев' : $order->comment).'</span></p>
                </div>
                <div id="order-basket">
                   <!-- 1 товар -->
                    <div id="order-basket-item" class="d-flex mb-2">
                        <img src="https://avatars.mds.yandex.net/get-marketpic/247272/market_kTg0zTRNgRz1ZWI_uyY05A/orig" id="product-img">
                        <div id="product-description" class="d-flex row text-center container-fluid">
                            <p id="product-name" class="col-sm-8 text-left mb-0">Мужские зимние ботинки</p>
                            <p id="product-size" class="col-sm-1 mb-0">39</p>
                            <p id="product-cost" class="col-sm-3 mb-0">2000 руб.</p>
                        </div>
                    </div>
                    <!-- 2 товар -->
                    <div id="order-basket-item" class="d-flex">
                        <img src="https://yandex.ru/images/ELgA649W1/849af3HWDQzQ/1aTORUWcftvr7LNnbkrIFjFs9NDLI0I2W_mBwl6e2Caflns2uyWQNSOfa-vrvDUnxZCJsjl6mfa056hD4g644WFVSsWVWWrYC1-nx8r7DdcxA" id="product-img">
                        <div id="product-description" class="d-flex row text-center container-fluid">
                            <p id="product-name" class="col-sm-8 text-left mb-0">Синяя куртка N103</p>
                            <p id="product-size" class="col-sm-1 mb-0">S</p>
                            <p id="product-cost" class="col-sm-3 mb-0">5990 руб.</p>
                        </div>
                    </div>
                </div>
                <div id="order-status-select" class="d-flex justify-content-center align-items-center mt-3">
                </div>
            </div>
        </div>'
            );
            }

        ?>
                                    
       
            <!-- <div class="container alert alert-success mb-4" id="orders">
            <div class="orders-item">
                <h2 class="text-center"><span id="order-date">2018-10-01</span>/<span id="order-time">17:03</span></h2>
                <h3 class="text-center mb-3" id="order-user_name">Сергей Дмитренко</h3>
                <div class="d-flex justify-content-center align-items-center mt-3">
                    <p>Статус заказа: <span id="order-status">Ожидается подтверждение</span></p>
                </div>
                <div id="order-basket">
                   
                    <div id="order-basket-item" class="d-flex mb-2">
                        <img src="https://avatars.mds.yandex.net/get-marketpic/247272/market_kTg0zTRNgRz1ZWI_uyY05A/orig" id="product-img">
                        <div id="product-description" class="d-flex row text-center container-fluid">
                            <p id="product-name" class="col-sm-8 text-left mb-0">Мужские зимние ботинки</p>
                            <p id="product-size" class="col-sm-1 mb-0">39</p>
                            <p id="product-cost" class="col-sm-3 mb-0">2000 руб.</p>
                        </div>
                    </div>
                    
                    <div id="order-basket-item" class="d-flex">
                        <img src="https://yandex.ru/images/ELgA649W1/849af3HWDQzQ/1aTORUWcftvr7LNnbkrIFjFs9NDLI0I2W_mBwl6e2Caflns2uyWQNSOfa-vrvDUnxZCJsjl6mfa056hD4g644WFVSsWVWWrYC1-nx8r7DdcxA" id="product-img">
                        <div id="product-description" class="d-flex row text-center container-fluid">
                            <p id="product-name" class="col-sm-8 text-left mb-0">Синяя куртка N103</p>
                            <p id="product-size" class="col-sm-1 mb-0">S</p>
                            <p id="product-cost" class="col-sm-3 mb-0">5990 руб.</p>
                        </div>
                    </div>
                </div>
                <div id="order-status-select" class="d-flex justify-content-center align-items-center mt-3">
                    <p class="mb-0 mr-2">Статус заказа: </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Статус заказа
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Ожидается подтверждение</a>
                            <a class="dropdown-item" href="#">В пути</a>
                            <a class="dropdown-item" href="#">Доставлен</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
 
        
<?php require_once "../templates/admin_footer.php" ?> 
