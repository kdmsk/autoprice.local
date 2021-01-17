<?php 
//Подключаем файл БД
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/parts/header.php';
?>

   <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="/">Главная</a></li>
                        <li class="page-breadcrumb__nav active">Корзина</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

    <!-- ::::::  Start  Main Container Section  ::::::  -->
    <main id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-content">
                        <h5 class="section-content__title">Your cart items</h5>
                    </div>
                    <!-- Start Cart Table -->
                    <div class="table-content table-responsive cart-table-content m-t-30">
                        <table>
                            <thead class="gray-bg" >
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Until Price</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                // Если существует переменная $_COOKIE["basket"]
                                if(isset($_COOKIE["basket"])) {
                                    // Помещаем в переменную $basket декодированую строку JSON
                                    $basket = json_decode($_COOKIE["basket"], true);
                                    
                                    // Переменная i = 0; пока переменная i меньше кол-ва товаров в корзине; увеличиваем значение $i++
                                    for($i = 0; $i < count($basket["basket"]); $i++) {
                                        // Выбираем все поля из таблицы products где id = значению $basket["basket"]["$i"]
                                        $sql = "SELECT * FROM product WHERE id=" . $basket["basket"][$i]["product_id"];
                                        // Выполняем sql запрос
                                        $result = $conn->query($sql);
                                        // Преобразовываем полученные данные в массив
                                        $product = mysqli_fetch_assoc($result);
                                                
                            ?>
                                        
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img class="img-fluid" src="img_product/<?php echo $product["photo"] ?>" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#"><?php echo $product["title"] ?></a></td>
                                            <td class="product-price-cart"><span class="amount">$<?php echo $product["prise"] ?></span></td>
                                            <td class="product-quantities">
                                                <div class=" d-inline-block">
                                                    <input type="text"  name="count" oninput="changeCount(this, <?php echo $product['id']; ?>, <?php echo $product['prise']; ?>)" 
                                                        value="<?php echo $basket["basket"][$i]["count"]; ?>">
                                                </div>
                                            </td>
                                            <td class="<?php echo "price" . $product['id']; ?>">$<?php echo $basket["basket"][$i]["count"] * $product['prise']; ?></td>
                                            <td class="product-remove">
                                                <a href=""><i class="fa fa-pencil-alt"></i></a>
                                                <a onclick="deleteProductBasket(this, <?php echo $product['id']; ?>)" href=""><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                            <?php
                                            
                                    }
                                } 
                                       
                            ?>
                                 
                            </tbody>
                        </table>
                    </div>  <!-- End Cart Table -->
                     <!-- Start Cart Table Button -->
                    <div class="cart-table-button m-t-10">
                        <div class="cart-table-button--left">
                            <a href="#" class="btn btn--box btn--large btn--gray btn--uppercase btn--weight m-t-20">CONTINUE SHOPPING</a>
                        </div>
                        <div class="cart-table-button--right">
                            <a href="#" class="btn btn--box btn--large btn--gray btn--uppercase btn--weight m-t-20 m-r-20">UPDATE SHOPPING CART</a>
                            <a href="#" class="btn btn--box btn--large btn--blue btn--uppercase btn--weight m-t-20">Clear Shopping Cart</a>
                        </div>
                    </div>  <!-- End Cart Table Button -->
                </div>
                
            </div>
            <div class="row">
                
                <div class="col-lg-4 col-md-6">
                    <div class="sidebar__widget gray-bg m-t-40">
                        <div class="sidebar__box">
                            <h5 class="sidebar__title">Cart Total</h5>
                        </div>
                        <h6 class="total-cost">Total products Price<span>$260.00</span></h6>
                        <div class="total-shipping">
                            <span>Total shipping</span>
                            <ul class="shipping-cost m-t-10">
                                <li>
                                    <label for="ship-standard">
                                        <input type="radio" class="shipping-select" name="shipping-cost" value="Standard" id="ship-standard" checked><span>Standard</span>
                                    </label>
                                    <span class="ship-price">$20.00</span>
                                </li>
                                <li>
                                    <label for="ship-express">
                                        <input type="radio" class="shipping-select" name="shipping-cost" value="Express" id="ship-express"><span>Express</span>
                                    </label>
                                    <span class="ship-price">$30.00</span>
                                </li>
                            </ul>
                        </div>
                        <h4 class="grand-total m-tb-25">Grand Total <span>$260.00</span></h4>
                        <a href="checkout.php" class="btn btn--box btn--small btn--blue btn--uppercase btn--weight" type="submit">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->

    <?php
    include $_SERVER['DOCUMENT_ROOT'] . '/parts/footer.php';
    ?>

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>
    

    <!-- ::::::::::::::All Javascripts Files here ::::::::::::::-->

    <!-- Vendor JS Files -->
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.js"></script>

    <!-- Plugins JS Files -->
    <script src="assets/js/plugin/swiper.min.js"></script>
    <script src="assets/js/plugin/jquery.countdown.min.js"></script>
    <script src="assets/js/plugin/material-scrolltop.js"></script>
    <script src="assets/js/plugin/price_range_script.js"></script>
    <script src="assets/js/plugin/in-number.js"></script>
    <script src="assets/js/plugin/jquery.elevateZoom-3.0.8.min.js"></script>
    <script src="assets/js/plugin/venobox.min.js"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugin/plugins.min.js"></script> -->

    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="assets/js/main.js"></script>
</body>

</html>
