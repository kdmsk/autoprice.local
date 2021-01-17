<?php 

include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';

?>

<?php
// проверка ввода полей
    if(isset($_POST["username"]) && isset($_POST["password"]) && $_POST["username"] != "" && $_POST["password"] != "") {
        // формируем запрос поиска в БД по имейлу и паролю
        $sql = "SELECT * FROM admins WHERE name LIKE '" . $_POST["username"] . "' AND password LIKE '" . $_POST["password"] . "'";
        // выполняем запрос
        $result = mysqli_query($conn, $sql);
        // получаем количество совпадений по юзерам в БД
        $users_number = mysqli_num_rows($result);
        // если количество найденных юзеров равно 1, то авторизуем
        if($users_number == 1) {
            $user = mysqli_fetch_assoc($result); // создаем ассоциацию с юзером
            setcookie("admin_id", time() + 3600*24); // куки для хранения на сутки ID залогиненного юзера
            header("Location: http://autoprice.local/admin/index.php");
        } else {
        echo "<h2>Ошибка авторизации</h2>";
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
                                            <h4>АВТОРИЗАЦИЯ АДМИНА</h4>
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
                                                        <button class="btn btn--box btn--small btn--blue btn--uppercase btn--weight" type="submit">ВОЙТИ</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                <!-- login area end -->
               

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
