<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/parts/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/configs/settings.php';
?>
    
   <!-- ::::::  Start  Breadcrumb Section  ::::::  -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="page-breadcrumb__menu">
                        <li class="page-breadcrumb__nav"><a href="#">Главная</a></li>
                        <li class="page-breadcrumb__nav active">Страница регистрации</li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->

<?php
// проверка ввода полей
    if(isset($_POST["username"]) && isset($_POST["password"]) && $_POST["username"] != "" && $_POST["password"] != "") {
        // формируем запрос поиска в БД по имейлу и паролю
        $sql1 = "SELECT * FROM user WHERE name LIKE '" . $_POST["username"] . "' AND password LIKE '" . $_POST["password"] . "'";
        // выполняем запрос
        $result = mysqli_query($conn, $sql1);
        // получаем количество совпадений по юзерам в БД
        $users_number = mysqli_num_rows($result);
        // если количество найденных юзеров равно 1, то авторизуем
        if($users_number == 1) {
            $user = mysqli_fetch_assoc($result); // создаем ассоциацию с юзером
            setcookie("user_id", time() + 3600*24); // куки для хранения на сутки ID залогиненного юзера
            header("Location: /");
        } else {
            echo "<h2>Ошибка</h2>";
        }
    }
?>

    <!-- ::::::  Start  Main Container Section  ::::::  -->
    <main id="main-container" class="main-container">
        <div class="container">
            <div class="row">
               <div class="col-12">
                <!-- login area start -->
                <div class="login-register-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                                <div class="login-register-wrapper">
                                    <div class="login-register-tab-list nav">
                                        <a class="active" data-toggle="tab" href="#lg1">
                                            <h4>АВТОРИЗАЦИЯ</h4>
                                        </a>
                                        <a data-toggle="tab" href="#lg2">
                                            <h4>РЕГИСТРАЦИЯ</h4>
                                        </a>
                                    </div>
                                    <div class="tab-content">
                                        <div id="lg1" class="tab-pane active">
                                            <div class="login-form-container">
                                                <div class="login-register-form">
                                                    <form action="login.php" method="POST">
                                                        <div class="form-box__single-group">
                                                            <input type="text" name="username" placeholder="Имя пользователя">
                                                        </div>
                                                        <div class="form-box__single-group">
                                                            <input type="password" name="password" placeholder="Ввести пароль">
                                                        </div>
                                                        <div class="d-flex justify-content-between flex-wrap m-tb-20">
                                                            <label for="account-remember">
                                                                <input type="checkbox" name="remember" id="account-remember">
                                                                <span>ЗАПОМНИТЬ</span>
                                                            </label>
                                                            <a class="link--gray" href="">ЗАБЫЛИ ПАРОЛЬ?</a>
                                                        </div>
                                                        <button class="btn btn--box btn--small btn--blue btn--uppercase btn--weight" type="submit">ВОЙТИ</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

<?php 
    if(
    isset($_POST["email"]) && isset($_POST["password"])
    && $_POST["email"] != "" && $_POST["password"] != ""
) {
       
    $sql = "INSERT INTO user (name, email, password) VALUES ('" . $_POST["username"] . "','" . $_POST["email"] . "', '" . $_POST["password"] . "')";
    if(mysqli_query($conn, $sql)) {
        echo " Удачная регистрация ";
    } {
            echo "<h2>Ошибка</h2>";
        }
}
?>

                                        <div id="lg2" class="tab-pane">
                                            <div class="login-form-container">
                                                <div class="login-register-form">
                                                    <form action="login.php" method="POST">
                                                        <div class="form-box__single-group">
                                                            <input type="text" name="username" placeholder="Имя пользователя">
                                                        </div>
                                                        <div class="form-box__single-group">
                                                            <input type="email" name="email" placeholder="Ввести почту">
                                                        </div>
                                                        <div class="form-box__single-group m-b-20">
                                                            <input type="password" name="password" placeholder="Ввести пароль">
                                                        </div>
                                                        <button class="btn btn--box btn--small btn--blue btn--uppercase btn--weight" type="submit">СОЗДАТЬ</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- login area end -->
               </div>
            </div>
        </div>
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->

    <!-- ::::::  Start  Footer Section  ::::::  -->
    <footer class="footer">
        <div class="footer__top gray-bg p-tb-100 m-t-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="footer__about">
                            <div class="footer__logo">
                                <a href="index.php" class="footer__logo-link">
                                    <img src="assets/img/logo/logo-color.jpg" alt="" class="footer__logo-img">
                                </a>
                            </div>
                            <div class="footer__text">
                                <p>We are a team of designers & developers that create high quality Magento, Prestashop, Opencart.</p>
                            </div>
                            <ul class="footer__address">
                                <li class="footer__address-item"><span>Address:</span> The Barn, Ullenhall, Henley in Arden B578 5C, England.</li>
                                <li class="footer__address-item"><span>Call us: </span> <a href="tel:+(012)-800-456-789-987">+(012) 800 456 789 - 987</a> </li>
                                <li class="footer__address-item"><span>Call us: </span> <a href="mailto:yourname@mail.com">yourname@mail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-6 col-12">
                        <div class="footer__menu">
                            <h4 class="footer__nav-title">Products</h4>
                            <ul class="footer__nav">
                                <li class="footer__list"><a href="" class="footer__link">Prices drop</a></li>
                                <li class="footer__list"><a href="" class="footer__link">New products</a></li>
                                <li class="footer__list"><a href="" class="footer__link">Best sales</a></li>
                                <li class="footer__list"><a href="" class="footer__link">Contact us</a></li>
                                <li class="footer__list"><a href="" class="footer__link">Sitemap</a></li>
                                <li class="footer__list"><a href="" class="footer__link">Login</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-6 col-12">
                        <div class="footer__menu">
                            <h4 class="footer__nav-title">Our Company</h4>
                            <ul class="footer__nav">
                                <li class="footer__list"><a href="" class="footer__link">Delivery</a></li>
                                <li class="footer__list"><a href="" class="footer__link">Legal Notice</a></li>
                                <li class="footer__list"><a href="" class="footer__link">About us</a></li>
                                <li class="footer__list"><a href="" class="footer__link">Secure payment</a></li>
                                <li class="footer__list"><a href="" class="footer__link">Sitemap</a></li>
                                <li class="footer__list"><a href="" class="footer__link">Stores</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 col-12">
                        <div class="footer__menu">
                            <h4 class="footer__nav-title">Follow Us</h4>
                            <ul class="footer__social-nav">
                                <li class="footer__social-list"><a href="#" class="footer__social-link"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="footer__social-list"><a href="#" class="footer__social-link"><i class="fab fa-twitter"></i></a></li>
                                <li class="footer__social-list"><a href="#" class="footer__social-link"><i class="fab fa-youtube"></i></a></li>
                                <li class="footer__social-list"><a href="#" class="footer__social-link"><i class="fab fa-google-plus-g"></i></a></li>
                                <li class="footer__social-list"><a href="#" class="footer__social-link"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="footer__form">
                            <h4 class="footer__nav-title">Join Our Newsletter Now</h4>
                            <form action="#" class="footer__form-box">
                                <input type="email" placeholder="Your email address">
                                <button class="btn btn--submit btn--blue btn--uppercase btn--weight " type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="footer__quick-nav p-t-50">
                            <a class="footer__quick-link" href="#">Online Shopping</a>
                            <a class="footer__quick-link" href="#">Promotions</a>
                            <a class="footer__quick-link" href="#">My Orders</a>
                            <a class="footer__quick-link" href="#">Help</a>
                            <a class="footer__quick-link" href="#">Customer Service</a>
                            <a class="footer__quick-link" href="#">Support</a>
                            <a class="footer__quick-link" href="#">Most Populars</a>
                            <a class="footer__quick-link" href="#">New Arrivals</a>
                            <a class="footer__quick-link" href="#">Special Products</a>
                            <a class="footer__quick-link" href="#">Manufacturers</a>
                            <a class="footer__quick-link" href="#">Our Stores</a>
                            <a class="footer__quick-link" href="#">Shipping</a>
                            <a class="footer__quick-link" href="#">Payments</a>
                            <a class="footer__quick-link" href="#">Warantee</a>
                            <a class="footer__quick-link" href="#">Refunds</a>
                            <a class="footer__quick-link" href="#">Checkout</a>
                            <a class="footer__quick-link" href="#">Discount</a>
                            <a class="footer__quick-link" href="#">Terms & Conditions</a>
                            <a class="footer__quick-link" href="#">Policy</a>
                            <a class="footer__quick-link" href="#">Shipping</a>
                            <a class="footer__quick-link" href="#">Payments</a>
                            <a class="footer__quick-link" href="#">Returns</a>
                            <a class="footer__quick-link" href="#">Refunds</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-12">
                        <div class="footer__copyright-text">
                            <p>Copyright <a href="https://hasthemes.com/">HasTheme</a>. All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="footer__payment">
                            <a href="https://hasthemes.com/" class="footer__payment-link">
                                <img src="assets/img/company-logo/payment.png" alt="" class="footer__payment-img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> <!-- ::::::  End  Footer Section  ::::::  -->

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
