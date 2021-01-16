<?php 

// подключим базу даных 
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
//  подключаем шапку сайта 
include $_SERVER['DOCUMENT_ROOT'] . '/parts/header.php';


?>

<!-- ::::::  Start  Breadcrumb Section  ::::::  -->
<div class="page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="page-breadcrumb__menu">
                    <li class="page-breadcrumb__nav"><a href="#">Главная</a></li>
                    <li class="page-breadcrumb__nav active">Вывести Title категори</li>
                </ul>
            </div>
        </div>
    </div>
</div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

<!-- ::::::  Start  Main Container Section  ::::::  -->
<main id="main-container" class="main-container">
    <div class="container">
        <div class="row">
                <!-- Start Rightside - Content -->
            <div class="col-12">
                <!-- ::::::  Start Sort Box Section  ::::::  -->
                <div class="sort-box m-tb-30">
                    <!-- Start Sort Left Side -->
                    <div class="sort-box__left">
                        <div class="sort-box__tab">
                            <ul class="sort-box__tab-list nav">
                                <li><a class="sort-nav-link active" data-toggle="tab" href="#sort-grid"><i class="icon-grid"></i>  </a></li>
                                <li><a class="sort-nav-link" data-toggle="tab" href="#sort-list"><i class="icon-list"></i></a></li>
                            </ul>
                        </div>
                        <span>There Are 13 Products.</span>
                    </div> <!-- Start Sort Left Side -->

                    <div class="sort-box__right">
                        <span>Sort By:</span>
                        <div class="sort-box__option">
                            <label class="select-sort__arrow">
                                <select name="select-sort" class="select-sort">
                                    <option value="1">Relevance</option>
                                    <option value="2">Name, A to Z</option>
                                    <option value="3"> Name, Z to A </option>
                                    <option value="4"> Price, low to high</option>
                                    <option value="5">Price, high to low</option>
                                </select>
                            </label>
                        </div>
                    </div>
                </div> <!-- ::::::  Start Sort Box Section  ::::::  -->

                <div class="product-tab-area">
                    <div class="tab-content ">
                        <div class="tab-pane show active clearfix" id="sort-grid">
                        <?php
                            // получить из базы данных все продукты, в которых category_id= id выбранной категории
                            $sql = "SELECT * FROM product WHERE cat_id=" . $_GET['id'];
                            // делаем запрос
                            $result = $conn->query($sql);
                            // получаем данные в цикле
                            while($row = mysqli_fetch_assoc($result)) {

                            // подключаем карточку с товаром -->
                            include $_SERVER['DOCUMENT_ROOT'] . "/parts/product-card.php";

                            }
                            ?>
                                
                        </div>
                    </div>
                </div>

                <div class="page-pagination">
                    <span>Showing 1-12 of 13 item(s)</span>
                    <ul class="page-pagination__list">
                        <li class="page-pagination__item">
                            <a class="page-pagination__link btn btn--gray"  href="#"><i class="icon-chevron-left"></i> Previous</a>
                        </li>
                        <li class="page-pagination__item"><a class="page-pagination__link active btn btn--gray"  href="#">1</a></li>
                        <li class="page-pagination__item"><a class="page-pagination__link btn btn--gray"  href="#">2</a></li>
                        <li class="page-pagination__item">
                            <a class="page-pagination__link btn btn--gray"  href="#">Next<i class="icon-chevron-right"></i></a>
                        </li>
                        </ul>
                </div>
            </div>  <!-- Start Rightside - Content -->
        </div>
    </div>
</main> <!-- ::::::  End  Main Container Section  ::::::  -->
<!-- Start Modal Add cart -->
<div class="modal fade" id="modalAddCart" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title text-center">Product Successfully Added To Your Shopping Cart</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="modal__product-img">
                                        <img class="img-fluid" src="assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <span class="modal__product-title">SonicFuel Wireless Over-Ear Headphones</span>
                                    <span class="modal__product-price m-tb-15">$31.59</span>
                                    <ul class="modal__product-info ">
                                        <li>Size:<span> S</span></li>
                                        <li>Quantity:<span>3</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 modal__border">
                            <span class="modal__product-cart-item">There are 3 items in your cart.</span>
                            <ul class="modal__product-shipping-info m-tb-15">
                                <li>Total products:<span>$94.78</span></li>
                                <li>Total shipping:<span>$7.00</span></li>
                                <li>Taxes:<span>$0.00</span></li>
                                <li>Total: <span>$101.78 (tax excl.)</span></li>
                            </ul>
                            
                            <div class="modal__product-cart-buttons">
                                <a href="#" class="btn btn--box btn--large btn--blue btn--uppercase btn--weight" data-dismiss="modal">Continue Shopping</a>
                                <a href="checkout.php" class="btn btn--box btn--large btn--blue btn--uppercase btn--weight">Process to checkout</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div> <!-- End Modal Add cart -->
<?php
 include $_SERVER['DOCUMENT_ROOT'] . "/parts/footer.php";
 
 ?>
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

