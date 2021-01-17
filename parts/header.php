<?php 

// подключим базу даных 
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>AutoPartShop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="assets/css/vendor/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/vendor/fontawesome.css">
    <link rel="stylesheet" href="assets/css/vendor/plaza-icon.css">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

    <!-- Plugin CSS Files -->
    <link rel="stylesheet" href="assets/css/plugin/swiper.min.css">
    <link rel="stylesheet" href="assets/css/plugin/material-scrolltop.css">
    <link rel="stylesheet" href="assets/css/plugin/price_range_style.css">
    <link rel="stylesheet" href="assets/css/plugin/in-number.css">
    <link rel="stylesheet" href="assets/css/plugin/venobox.min.css">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css"/>
    <link rel="stylesheet" href="assets/css/plugin/plugins.min.css"/>
    <link rel="stylesheet" href="assets/css/main.min.css"> -->

    <!-- Main Style CSS File -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <!-- ::::::  Start  Header Section  ::::::  -->
    <header>
        <!-- ::::::  Start Large Header Section  ::::::  -->
        <div class="header header--1">
            <!-- Start Header Top area -->
            <div class="header__top header__top--style-1">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="header__top-content">
                                <div class="header__top-content--left">
                                    <div class="contact_cms">
                                        <span class="cms1">Telephone Enquiry: </span>
                                        <span class="cms2">(012) 800 456 789 - 977</span>
                                    </div>
                                </div>
                                <div class="header__top-content--right">
                                    <div class="user-info user-set-role">
                                        <a class="user-set-role__button" href="#" data-toggle="dropdown" aria-haspopup="true">Setting <i class="fal fa-chevron-down"></i></a>
                                        <ul class="expand-dropdown-menu dropdown-menu">
                                            <li><a href="my-account.php">My account</a></li>
                                            <li><a href="wishlist.php">My wishlist</a></li>
                                            <li><a href="checkout.php">Checkout</a></li>
                                            <li><a href="login.php">Sign in</a></li>
                                        </ul>
                                    </div>
                                    <div class="user-currency user-set-role">
                                        <a class="user-set-role__button" href="#" data-toggle="dropdown" aria-haspopup="true">USD $<i class="fal fa-chevron-down"></i></a>
                                        <ul class="expand-dropdown-menu dropdown-menu">
                                            <li><a href="#">USD $</a></li>
                                            <li><a href="#">EURO €</a></li>
                                        </ul>
                                    </div>
                                    <div class="user-info user-set-role">
                                        <a class="user-set-role__button" href="#" data-toggle="dropdown" aria-haspopup="true"> <img src="assets/img/icon/flag/icon_usa.png" alt="">USA <i class="fal fa-chevron-down"></i></a>
                                        <ul class="expand-dropdown-menu dropdown-menu">
                                            <li><a href="#"><img src="assets/img/icon/flag/icon_usa.png" alt="">English</a></li>
                                            <li><a href="#"><img src="assets/img/icon/flag/icon_france.png" alt=""> Français</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- Start Header Top area -->

            <!-- Start Header Middle area -->
            <div class="header__middle header__top--style-1 p-tb-30">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="header__logo">
                                <a href="index.php" class="header__logo-link">
                                    <img src="assets/img/logo/logo1.jpg" alt="" class="header__logo-img">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="row align-items-center">
                                <div class="col-lg-10">
                                    <form class="header__search-form" action="#">
                                        <div class="header__search-category">
                                            <select class="bootstrap-select" name="poscats">
                                                <option value="0">All categories</option>
                                                
                                            </select>
                                        </div>
                                        <div class="header__search-input">
                                            <input type="search" placeholder="Enter your search key">
                                            <button class="btn btn--submit btn--blue btn--uppercase btn--weight " type="submit">Search</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-2">
                                    <div class="header__wishlist-box">
                                        <!-- Start Header Wishlist Box -->
                                        <div class="header__wishlist pos-relative">
                                            <a href="wishlist.php" class="header__wishlist-link">
                                                <i class="icon-heart"></i>
                                                <span class="wishlist-item-count pos-absolute">3</span>
                                            </a>
                                        </div> <!-- End Header Wishlist Box -->

                                        <?php

                                            if(isset($_COOKIE['countBasket'])){
                                                $countBasket = $_COOKIE['countBasket'];
                                            }else{
                                                $countBasket =0;
                                            }
                                        ?>

                                        <!-- Start Header Add Cart Box -->
                                        <div class="header-add-cart pos-relative m-l-40">
                                            <a id="go-basket" href="cart.php" class="">
                                                <i class="icon-shopping-cart"></i>
                                                <span class="wishlist-item-count pos-absolute"><?php echo $countBasket?></span>
                                            </a>
                                        </div> <!-- End Header Add Cart Box -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Header Middle area -->

            

            <!-- Start Header Menu Area -->
            <div class="header-menu">
                <div class="container">
                    <div class="row col-12">
                        <nav>
                            <ul class="header__nav">

<?php
                    // Если существует переменная $_COOKIE["user_id"] (Пользователь в системе)
                    if(isset($_COOKIE["user_id"])) {
                        $sql = "SELECT * FROM user WHERE id =" . $_COOKIE["user_id"];
                        // выполнить sql запрос в базе данных
                        $result = $conn->query($sql);
                        $user = mysqli_fetch_assoc($result);
                    ?>
                        <!--Создаем ссылку на выход из профиля -->
                        <a href="logout.php" type="button" class="btn btn-light ml-2"><?php echo $user["name"]; ?> &#187;</a>
                    <?php
                    } else {
                    ?>
                        <!--Иначе создаем ссылку в Меню на окно Авторизации -->
                        <a href="login.php" type="button" class="btn btn-primary ml-2">Вход</a>
                    <?php

                    }
                    ?>
                                
                                <!--Start Single Nav link-->
                                <li class="header__nav-item pos-relative">
                                    <a href="#" class="header__nav-link">Home <i class="icon-chevron-down"></i></a>
                                    <!--Single Dropdown Menu-->
                                    <ul class="dropdown__menu pos-absolute">
                                        <li class="dropdown__list"><a href="index.php" class="dropdown__link">Home 1</a></li>
                                    </ul>
                                    <!--Single Dropdown Menu-->
                                </li> <!-- End Single Nav link-->

                                <!--Start Single Nav link-->
                                <li class="header__nav-item pos-relative">
                                    <a href="#" class="header__nav-link">Pages <i class="icon-chevron-down"></i></a>
                                    <!--Single Dropdown Menu-->
                                    <ul class="dropdown__menu pos-absolute">
                                        <li class="dropdown__list"><a href="about.php" class="dropdown__link">About</a></li>
                                        <li class="dropdown__list"><a href="cart.php" class="dropdown__link">Cart</a></li>
                                        <li class="dropdown__list"><a href="checkout.php" class="dropdown__link">Checkout</a></li>
                                        <li class="dropdown__list"><a href="compare.php" class="dropdown__link">Compare</a></li>
                                        <li class="dropdown__list"><a href="empty-cart.php" class="dropdown__link">Empty Cart</a></li>
                                        <li class="dropdown__list"><a href="wishlist.php" class="dropdown__link">Wishlist</a></li>
                                        <li class="dropdown__list"><a href="my-account.php" class="dropdown__link">My Account</a></li>
                                        <li class="dropdown__list"><a href="login.php" class="dropdown__link">Login</a></li>
                                    </ul>
                                    <!--Single Dropdown Menu-->
                                </li> <!-- End Single Nav link-->

                                <!--Start Single Nav link-->
                                <li class="header__nav-item pos-relative">
                                    <a href="all-products.php" class="header__nav-link">Все категории <i class="icon-chevron-down"></i></a>
                                    <!-- Megamenu Menu-->
                                    <ul class="mega-menu pos-absolute">
                                        <li class="mega-menu__box">
                                            <!--Single Megamenu Item Menu-->
                                            <div class="mega-menu__item-box">
                                                <span class="mega-menu__title">Категории товаров</span>
                                                <ul class="mega-menu__item">
                                                <?php 
                                                    // выводим  все категори товаров 
                                                        $sql = "SELECT * FROM cat";
                                                        $result = $conn->query($sql);   
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                        <li class="menu-item">
                                                            <a href="cat.php?id=<?php echo $row['id']; ?>"><?php echo $row['title'];?></a>
                                                        </li>
                                                        <?php
                                                        }
                                                    ?>
                                                </ul>
                                            </div>
                                            <!--Single Megamenu Item Menu-->

                                            <!--Single Megamenu Item Menu-->
                                            
                                        </li>
                                        <!--Megamenu Item Banner-->
                                        <li class="mega-menu__banner">
                                            <a href="shop-1.php" class="mega-menu__banner-link">
                                                <img src="assets/img/banner/menu-banner.jpg" alt="" class="mega-menu__banner-img">
                                            </a>
                                        </li>
                                        <!--Megamenu Item Banner-->
                                    </ul>
                                    <!-- Megamenu Menu-->
                                </li> <!-- Start Single Nav link-->

                                <!--Start Single Nav link-->
                                <li class="header__nav-item pos-relative">
                                    <a href="#" class="header__nav-link">Custom Block <i class="icon-chevron-down"></i></a>
                                    <!-- Megamenu Menu-->
                                    <ul class="mega-menu pos-absolute">
                                        <li class="mega-menu__box">
                                            <!--Single Megamenu Item Menu-->
                                            <div class="mega-menu__item-box">
                                                <span class="mega-menu__title">Women Is Clothes & Fashion</span>
                                                <ul class="mega-menu__item">
                                                    <li><p>Shop Women Is Clothing And Accessories And Get Inspired By The Latest Fashion Trends.</p></li>
                                                </ul>
                                            </div>
                                            <!--Single Megamenu Item Menu-->

                                            <!--Single Megamenu Item Menu-->
                                            <div class="mega-menu__item-box">
                                                <span class="mega-menu__title">Simple Style</span>
                                                <ul class="mega-menu__item">
                                                    <li><p>A New Flattering Style With All The Comfort Of Our Linen.</p></li>
                                                </ul>
                                            </div>
                                            <!--Single Megamenu Item Menu-->

                                            <!--Single Megamenu Item Menu-->
                                            <div class="mega-menu__item-box">
                                                <span class="mega-menu__title">Easy Layers</span>
                                                <ul class="mega-menu__item">
                                                    <li><p>Endless Styling Possibilities In A Collection Full Of Versatile Pieces.</p></li>
                                                </ul>
                                            </div>
                                            <!--Single Megamenu Item Menu-->

                                        </li>
                                        <!--Megamenu Item Banner-->
                                        <li class="mega-menu__banner">
                                            <a href="shop-1.php" class="mega-menu__banner-link">
                                                <img src="assets/img/banner/menu-banner.jpg" alt="" class="mega-menu__banner-img">
                                            </a>
                                        </li>
                                        <!--Megamenu Item Banner-->
                                    </ul>
                                    <!-- Megamenu Menu-->
                                </li> <!-- Start Single Nav link-->

                                <!--Start Single Nav link-->
                                <li class="header__nav-item pos-relative">
                                    <a href="#" class="header__nav-link">Blog<i class="icon-chevron-down"></i></a>
                                    <!--Single Dropdown Menu-->
                                    <ul class="dropdown__menu pos-absolute">
                                        <li class="dropdown__list">
                                            <a href="#" class="dropdown__link">Blog Grid</a>
                                            <ul class="dropdown__submenu pos-absolute">
                                                <li class="dropdown__submenu-list"><a href="blog-grid-left-sidebar.php" class="dropdown__submenu-link"> Blog Grid Left Sidebar</a></li>
                                                <li class="dropdown__submenu-list"><a href="blog-grid-right-sidebar.php" class="dropdown__submenu-link"> Blog Grid Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown__list">
                                            <a href="#" class="dropdown__link">Blog List</a>
                                            <ul class="dropdown__submenu pos-absolute">
                                                <li class="dropdown__submenu-list"><a href="blog-list-left-sidebar.php" class="dropdown__submenu-link"> Blog List Left Sidebar</a></li>
                                                <li class="dropdown__submenu-list"><a href="blog-list-right-sidebar.php" class="dropdown__submenu-link"> Blog List Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown__list">
                                            <a href="#" class="dropdown__link">Blog Single</a>
                                            <ul class="dropdown__submenu pos-absolute">
                                                <li class="dropdown__submenu-list"><a href="blog-single-left-sidebar.php" class="dropdown__submenu-link"> Blog Single Left Sidebar</a></li>
                                                <li class="dropdown__submenu-list"><a href="blog-single-right-sidebar.php" class="dropdown__submenu-link"> Blog Single Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!--Single Dropdown Menu-->
                                </li> <!-- End Single Nav link-->

                                <!--Start Single Nav link-->
                                <li class="header__nav-item pos-relative">
                                     <a href="contact.php" class="header__nav-link">Contact Us</a>
                                </li> <!-- End Single Nav link-->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div> <!-- End Header Menu Area -->
        </div> <!-- ::::::  Start Large Header Section  ::::::  -->
        
        <!-- ::::::  Start Mobile Header Section  ::::::  -->
        <div class="header__mobile mobile-header--1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Start Header Mobile Top area -->
                        <div class="header__mobile-top">
                            <div class="mobile-header__logo">
                                <a href="index.php" class="mobile-header__logo-link">
                                    <img src="assets/img/logo/logo-color.jpg" alt="" class="mobile-header__logo-img">
                                </a>
                            </div>
                            <div class="header__wishlist-box">
                                <!-- Start Header Wishlist Box -->
                                <div class="header__wishlist pos-relative">
                                    <a href="wishlist.php" class="header__wishlist-link">
                                        <i class="icon-heart"></i>
                                        <span class="wishlist-item-count pos-absolute">3</span>
                                    </a>
                                </div> <!-- End Header Wishlist Box -->

                                <!-- Start Header Add Cart Box -->
                                <div class="header-add-cart pos-relative m-l-20">
                                    <a href="#offcanvas-add-cart__box" class="header__wishlist-link offcanvas--open-checkout offcanvas-toggle">
                                        <i class="icon-shopping-cart"></i>
                                        <span class="wishlist-item-count pos-absolute">3</span>
                                    </a>
                                </div> <!-- End Header Add Cart Box -->

                                <a href="#offcanvas-mobile-menu" class="offcanvas-toggle m-l-20"><i class="icon-menu"></i></a>

                            </div>
                        </div> <!-- End Header Mobile Top area -->

                        <!-- Start Header Mobile Middle area -->
                        <div class="header__mobile-middle header__top--style-1 p-tb-10">
                            <form class="header__search-form" action="#">
                                <div class="header__search-category header__search-category--mobile">
                                    <select class="bootstrap-select">
                                        <option value="0">All</option>
                                        <option value="12">
                                            Fashion
                                        </option>
                                        <option value="27">
                                            - - Women
                                        </option>
                                        <option value="30">
                                            - - - - Dresses
                                        </option>
                                        <option value="31">
                                            - - - - Shirts &amp; Blouses
                                        </option>
                                        <option value="32">
                                            - - - - Blazers
                                        </option>
                                        <option value="33">
                                            - - - - Lingerie
                                        </option>
                                        <option value="34">
                                            - - - - Jeans
                                        </option>
                                        <option value="28">
                                            - - Men
                                        </option>
                                        <option value="35">
                                            - - - - Shorts
                                        </option>
                                        <option value="36">
                                            - - - - Sportswear
                                        </option>
                                        <option value="37">
                                            - - - - Swimwear
                                        </option>
                                        <option value="38">
                                            - - - - Jackets &amp; Suits
                                        </option>
                                        <option value="39">
                                            - - - - T-shirts &amp; Tank Tops
                                        </option>
                                        <option value="29">
                                            - - Kids
                                        </option>
                                        <option value="40">
                                            - - - - Trousers
                                        </option>
                                        <option value="41">
                                            - - - - Shirts &amp; Tops
                                        </option>
                                        <option value="42">
                                            - - - - Knitwear
                                        </option>
                                        <option value="43">
                                            - - - - Jackets
                                        </option>
                                        <option value="44">
                                            - - - - Sandals
                                        </option>
                                        <option value="13">
                                            Electronics
                                        </option>
                                        <option value="45">
                                            - - Cameras
                                        </option>
                                        <option value="49">
                                            - - - - Cords and Cables
                                        </option>
                                        <option value="50">
                                            - - - - gps accessories
                                        </option>
                                        <option value="51">
                                            - - - - Microphones
                                        </option>
                                        <option value="52">
                                            - - - - Wireless Transmitters
                                        </option>
                                        <option value="46">
                                            - - Audio
                                        </option>
                                        <option value="53">
                                            - - - - Other Accessories
                                        </option>
                                        <option value="54">
                                            - - - - Portable Audio
                                        </option>
                                        <option value="55">
                                            - - - - Satellite Radio
                                        </option>
                                        <option value="56">
                                            - - - - Visual Accessories
                                        </option>
                                        <option value="47">
                                            - - Cell Phones
                                        </option>
                                        <option value="57">
                                            - - - - iPhone
                                        </option>
                                        <option value="58">
                                            - - - - Samsung Galaxy
                                        </option>
                                        <option value="59">
                                            - - - - SIM Cards
                                        </option>
                                        <option value="60">
                                            - - - - Prepaid Cell Phones
                                        </option>
                                        <option value="48">
                                            - - TV &amp; Video
                                        </option>
                                        <option value="61">
                                            - - - - 4K Ultra HDTVs
                                        </option>
                                        <option value="62">
                                            - - - - All TVs
                                        </option>
                                        <option value="63">
                                            - - - - Refurbished TVs
                                        </option>
                                        <option value="64">
                                            - - - - TV Accessories
                                        </option>
                                        <option value="14">
                                            Toys &amp; Hobbies
                                        </option>
                                        <option value="65">
                                            - - Books &amp; Board Games
                                        </option>
                                        <option value="67">
                                            - - - - Arts &amp; Crafts
                                        </option>
                                        <option value="68">
                                            - - - - Baby &amp; Toddler Toys
                                        </option>
                                        <option value="69">
                                            - - - - Electronics for Kids
                                        </option>
                                        <option value="70">
                                            - - - - Dolls &amp; Accessories
                                        </option>
                                        <option value="66">
                                            - - Baby Dolls
                                        </option>
                                        <option value="71">
                                            - - - - Baby Alive Dolls
                                        </option>
                                        <option value="72">
                                            - - - - Barbie
                                        </option>
                                        <option value="73">
                                            - - - - Baby Annabell
                                        </option>
                                        <option value="74">
                                            - - - - Bratz
                                        </option>
                                        <option value="15">
                                            Sports &amp; Outdoors
                                        </option>
                                        <option value="16">
                                            Smartphone &amp; Tablets
                                        </option>
                                        <option value="17">
                                            Health &amp; Beauty
                                        </option>
                                        <option value="18">
                                            Computers &amp; Networking
                                        </option>
                                        <option value="19">
                                            Accessories
                                        </option>
                                        <option value="20">
                                            Jewelry &amp; Watches
                                        </option>
                                        <option value="21">
                                            Flashlights &amp; Lamps
                                        </option>
                                        <option value="22">
                                            Cameras &amp; Photo
                                        </option>
                                        <option value="23">
                                            Holiday Supplies &amp; Gifts
                                        </option>
                                        <option value="24">
                                            Automotive
                                        </option>
                                        <option value="25">
                                            cosmetic
                                        </option>
                                    </select>
                                </div>
                                <div class="header__search-input header__search-input--mobile">
                                    <input type="search" placeholder="Enter your search">
                                    <button class="btn btn--submit btn--blue btn--uppercase btn--weight" type="submit"><i class="fal fa-search"></i></button>
                                </div>
                            </form>
                        </div> <!-- End Header Mobile Middle area -->

                    </div>
                </div>
            </div>
        </div> <!-- ::::::  Start Mobile Header Section  ::::::  -->

        <!-- ::::::  Start Mobile-offcanvas Menu Section  ::::::  -->
        <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
            <button class="offcanvas__close offcanvas-close">&times;</button>
            <div class="offcanvas-inner">
                <div class="offcanvas-userpanel m-b-30">
                    <ul>
                        <li class="offcanvas-userpanel__role">
                            <a href="#">Setting</a>
                            <ul class="user-sub-menu">
                                <li><a href="my-account.php">My account</a></li>
                                <li><a href="wishlist.php">My wishlist</a></li>
                                <li><a href="checkout.php">Checkout</a></li>
                                <li><a href="login.php">Sign in</a></li>
                            </ul>
                        </li>
                        <li class="offcanvas-userpanel__role">
                            <a href="#">USD $</a>
                            <ul class="user-sub-menu">
                                <li><a href="#">USD $</a></li>
                                <li><a href="#">EURO €</a></li>
                            </ul>
                        </li>
                        <li class="offcanvas-userpanel__role">
                            <a href="#"><img src="assets/img/icon/flag/icon_usa.png" alt="">English </a>
                            <ul class="user-sub-menu">
                                <li><a href="#"><img src="assets/img/icon/flag/icon_usa.png" alt="">English</a></li>
                                <li><a href="#"><img src="assets/img/icon/flag/icon_france.png" alt=""> Français</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                
                <div class="offcanvas-menu m-b-30">
                    <h4>Menu</h4>
                    <ul>
                        <li>
                            <a href="#"><span>Home</span></a>
                            <ul class="sub-menu">
                                <li><a href="index.php"><span class="menu-text">Home 1</span></a></li>
                                <li><a href="index-2.php"><span class="menu-text">Home 2</span></a></li>
                                <li> <a href="index-3.php"><span class="menu-text">Home 3</span></a></li>
                                <li><a href="index-4.php"><span class="menu-text">Home 4</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span>Pages</span></a>
                            <ul class="sub-menu">
                                <li><a href="about.php">About</a></li>
                                <li><a href="cart.php">Cart</a></li>
                                <li><a href="checkout.php">Checkout</a></li>
                                <li><a href="compare.php">Compare</a></li>
                                <li><a href="empty-cart.php">Empty Cart</a></li>
                                <li><a href="wishlist.php">Wishlist</a></li>
                                <li><a href="my-account.php">My Account</a></li>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="404-page.php">404 Page</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span>Shop</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Shop Grid</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-1.php">Shop Default</a></li>
                                        <li><a href="shop-4-grid.php">Shop 4grid</a></li>
                                        <li><a href="shop-5-grid.php">Shop 5grid</a></li>
                                        <li><a href="shop-grid-left-sidebar.php">Shop Left Sidebar</a></li>
                                        <li><a href="shop-grid-right-sidebar.php">Shop Right Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Shop List</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-list.php">Shop List</a></li>
                                        <li><a href="shop-list-left-sidebar.php">Shop Left Sidebar</a></li>
                                        <li><a href="shop-list-right-sidebar.php">Shop Right Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Product Single</a>
                                    <ul class="sub-menu">
                                        <li><a href="single-1.php">Single</a></li>
                                        <li><a href="single-variable.php">Variable</a></li>
                                        <li><a href="single-left-tab.php">Left Tab</a></li>
                                        <li><a href="single-right-tab.php">Right Tab</a></li>
                                        <li><a href="single-slider.php">Single Slider</a></li>
                                        <li><a href="single-gallery-left.php">Gallery Left</a></li>
                                        <li><a href="single-gallery-right.php">Gallery Right</a></li>
                                        <li><a href="single-sticky-left.php">Sticky Left</a></li>
                                        <li><a href="single-sticky-right.php">Sticky Right</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span>Blogs</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">Blog Grid</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-grid-left-sidebar.php"> Blog Grid Left Sidebar</a></li>
                                        <li><a href="blog-grid-right-sidebar.php"> Blog Grid Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Blog List</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-list-left-sidebar.php"> Blog List Left Sidebar</a></li>
                                        <li><a href="blog-list-right-sidebar.php"> Blog List Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="">Blog Single</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-single-left-sidebar.php"> Blog List Left Sidebar</a></li>
                                        <li><a href="blog-single-right-sidebar.php"> Blog List Right Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="offcanvas-buttons m-b-30">
                    <a href="my-account.php" class="user"><i class="icon-user"></i></a>
                    <a href="wishlist.php"><i class="icon-heart"></i></a>
                    <a href="cart.php"><i class="icon-shopping-cart"></i></a>
                </div>
                <div class="offcanvas-social">
                    <span>Stay With Us</span>
                    <ul>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> <!-- ::::::  End Mobile-offcanvas Menu Section  ::::::  -->

        <div class="offcanvas-overlay"></div>
    </header> <!-- ::::::  End  Header Section  ::::::  -->