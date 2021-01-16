
<?php 

// подключим базу даных 
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
//  подключаем шапку сайта 
include $_SERVER['DOCUMENT_ROOT'] . '/parts/header.php';
?>

    <!-- ::::::  Start  Main Container Section  ::::::  -->
    <main id="main-container" class="main-container m-t-30">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3 col-xl-3">
                    <!-- menu content -->
                    <div class="header-menu-vertical d-lg-block d-none">
                        <h4 class="menu-title link--icon-left"><i class="far fa-align-left"></i> Все категори</h4>
                        <ul class="menu-content">
                             <?php 
                             // выводим  все категори товаров 
                                $sql = "SELECT * FROM cat";
                                $result = $conn->query($sql);   
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <li class="menu-item">
                                   <a href="cat.php?id= <?php echo $row['id']; ?>"><?php echo $row['title'];?></a>
                                </li>
                                   <?php
                                }
                             ?>
                        </ul>
                        
                    </div>
                    <!-- ::::::  Start Product-Style - Counter Section  ::::::  -->
                    <div class="product product--1 swiper-outside-arrow-hover">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-content section-content--border">
                                        <h5 class="section-content__title ">Hot Deals Products</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="swiper-outside-arrow-fix pos-relative">
                                        <div class="product-counter-slider-1grid overflow-hidden m-t-50">
                                            <div class="swiper-wrapper">
                                                <!-- Start Single Counter Product -->
                                                <div class="product__box product__box--counter product__box--border-hover swiper-slide text-center">
                                                    <div class="product__img-box">
                                                        <a href="single-1.php" class="product__img--link">
                                                            <img class="product__img" src="assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                                        </a>

                                                        <div class="product__counter-box">
                                                            <div class="product__counter-item" data-countdown="2021/03/01"></div>
                                                        </div>
                                                        <span class="product__tag product__tag--new">New</span>
                                                        <a href="wishlist.php" class="product__wishlist-icon"><i class="icon-heart"></i></a>
                                                    </div>
                                                    <div class="product__price m-t-10">
                                                        <span class="product__price-del">$11.90</span>
                                                        <span class="product__price-reg">$10.71</span>
                                                    </div>
                                                    <a href="single-1.php" class="product__link product__link--underline product__link--weight-regular m-t-15">
                                                        SonicFuel Wireless Over-Ear Headphones
                                                    </a>
                                                </div> <!-- End Single Counter Product -->
                                            </div>
                                            <div class="swiper-buttons">
                                                <!-- Add Arrows -->
                                                <div class="swiper-button-next default__nav default__nav--next"><i class="fal fa-chevron-right"></i></div>
                                                <div class="swiper-button-prev default__nav default__nav--prev"><i class="fal fa-chevron-left"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- ::::::  End Product-Style - Counter Section  ::::::  -->

                    <!-- ::::::  Start  Product Style - Segment Section  ::::::  -->
                    <div class="product product--1">
                        <div class="row">
                            <!-- Start Single Segment Area -->
                            <div class="col-12">
                                <div class="swiper-outside-arrow-hover">
                                    <div class="section-content section-content--border">
                                        <h5 class="section-content__title">New Arrivals</h5>
                                    </div>

                                    <div class="swiper-outside-arrow-fix pos-relative">
                                        <div class="product-segment-slider-2 overflow-hidden  m-t-50">
                                            <div class="swiper-wrapper">
                                                <!-- Start Single Segment Product -->
                                                <div class="product__box product__box--segment  swiper-slide">
                                                    <div class="row">
                                                        <div class="col-xl-5 col-lg-12">
                                                            <div class="product__img-box">
                                                            <a href="single-1.php" class="product__img--link">
                                                                <img class="product__img" src="assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        </div>
                                                        <div class="col-xl-7 col-lg-12">
                                                            <div class="product__price m-t-10">
                                                                <span class="product__price-del">$11.90</span>
                                                                <span class="product__price-reg">$10.71</span>
                                                            </div>
                                                            <a href="single-1.php" class="product__link product__link--underline product__link--weight-light m-t-15">
                                                                SonicFuel Wireless Over-Ear Headphones
                                                            </a>

                                                            <ul class="product__review m-t-15 m-b-20">
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--blank"><i class="icon-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div> <!-- Start Single Segment Product -->
                                                <!-- Start Single Segment Product -->
                                                <div class="product__box product__box--segment  swiper-slide">
                                                    <div class="row">
                                                        <div class="col-xl-5 col-lg-12">
                                                            <div class="product__img-box">
                                                            <a href="single-1.php" class="product__img--link">
                                                                <img class="product__img" src="assets/img/product/size-normal/product-home-1-img-2.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        </div>
                                                        <div class="col-xl-7 col-lg-12">
                                                            <div class="product__price m-t-10">
                                                                <span class="product__price-del">$11.90</span>
                                                                <span class="product__price-reg">$10.71</span>
                                                            </div>
                                                            <a href="single-1.php" class="product__link product__link--underline product__link--weight-light m-t-15">
                                                                SonicFuel Wireless Over-Ear Headphones
                                                            </a>

                                                            <ul class="product__review m-t-15 m-b-20">
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--blank"><i class="icon-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div> <!-- Start Single Segment Product -->
                                                <!-- Start Single Segment Product -->
                                                <div class="product__box product__box--segment  swiper-slide">
                                                    <div class="row">
                                                        <div class="col-xl-5 col-lg-12">
                                                            <div class="product__img-box">
                                                            <a href="single-1.php" class="product__img--link">
                                                                <img class="product__img" src="assets/img/product/size-normal/product-home-1-img-3.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        </div>
                                                        <div class="col-xl-7 col-lg-12">
                                                            <div class="product__price m-t-10">
                                                                <span class="product__price-del">$11.90</span>
                                                                <span class="product__price-reg">$10.71</span>
                                                            </div>
                                                            <a href="single-1.php" class="product__link product__link--underline product__link--weight-light m-t-15">
                                                                SonicFuel Wireless Over-Ear Headphones
                                                            </a>

                                                            <ul class="product__review m-t-15 m-b-20">
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--blank"><i class="icon-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div> <!-- Start Single Segment Product -->
                                                <!-- Start Single Segment Product -->
                                                <div class="product__box product__box--segment  swiper-slide">
                                                    <div class="row">
                                                        <div class="col-xl-5 col-lg-12">
                                                            <div class="product__img-box">
                                                            <a href="single-1.php" class="product__img--link">
                                                                <img class="product__img" src="assets/img/product/size-normal/product-home-1-img-4.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        </div>
                                                        <div class="col-xl-7 col-lg-12">
                                                            <div class="product__price m-t-10">
                                                                <span class="product__price-del">$11.90</span>
                                                                <span class="product__price-reg">$10.71</span>
                                                            </div>
                                                            <a href="single-1.php" class="product__link product__link--underline product__link--weight-light m-t-15">
                                                                SonicFuel Wireless Over-Ear Headphones
                                                            </a>

                                                            <ul class="product__review m-t-15 m-b-20">
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--blank"><i class="icon-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div> <!-- Start Single Segment Product -->
                                                <!-- Start Single Segment Product -->
                                                <div class="product__box product__box--segment  swiper-slide">
                                                    <div class="row">
                                                        <div class="col-xl-5 col-lg-12">
                                                            <div class="product__img-box">
                                                            <a href="single-1.php" class="product__img--link">
                                                                <img class="product__img" src="assets/img/product/size-normal/product-home-1-img-5.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        </div>
                                                        <div class="col-xl-7 col-lg-12">
                                                            <div class="product__price m-t-10">
                                                                <span class="product__price-del">$11.90</span>
                                                                <span class="product__price-reg">$10.71</span>
                                                            </div>
                                                            <a href="single-1.php" class="product__link product__link--underline product__link--weight-light m-t-15">
                                                                SonicFuel Wireless Over-Ear Headphones
                                                            </a>

                                                            <ul class="product__review m-t-15 m-b-20">
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--blank"><i class="icon-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div> <!-- Start Single Segment Product -->
                                                <!-- Start Single Segment Product -->
                                                <div class="product__box product__box--segment  swiper-slide">
                                                    <div class="row">
                                                        <div class="col-xl-5 col-lg-12">
                                                            <div class="product__img-box">
                                                            <a href="single-1.php" class="product__img--link">
                                                                <img class="product__img" src="assets/img/product/size-normal/product-home-1-img-6.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        </div>
                                                        <div class="col-xl-7 col-lg-12">
                                                            <div class="product__price m-t-10">
                                                                <span class="product__price-del">$11.90</span>
                                                                <span class="product__price-reg">$10.71</span>
                                                            </div>
                                                            <a href="single-1.php" class="product__link product__link--underline product__link--weight-light m-t-15">
                                                                SonicFuel Wireless Over-Ear Headphones
                                                            </a>

                                                            <ul class="product__review m-t-15 m-b-20">
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--blank"><i class="icon-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div> <!-- Start Single Segment Product -->
                                                <!-- Start Single Segment Product -->
                                                <div class="product__box product__box--segment  swiper-slide">
                                                    <div class="row">
                                                        <div class="col-xl-5 col-lg-12">
                                                            <div class="product__img-box">
                                                            <a href="single-1.php" class="product__img--link">
                                                                <img class="product__img" src="assets/img/product/size-normal/product-home-1-img-7.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        </div>
                                                        <div class="col-xl-7 col-lg-12">
                                                            <div class="product__price m-t-10">
                                                                <span class="product__price-del">$11.90</span>
                                                                <span class="product__price-reg">$10.71</span>
                                                            </div>
                                                            <a href="single-1.php" class="product__link product__link--underline product__link--weight-light m-t-15">
                                                                SonicFuel Wireless Over-Ear Headphones
                                                            </a>

                                                            <ul class="product__review m-t-15 m-b-20">
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--blank"><i class="icon-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div> <!-- Start Single Segment Product -->
                                                <!-- Start Single Segment Product -->
                                                <div class="product__box product__box--segment  swiper-slide">
                                                    <div class="row">
                                                        <div class="col-xl-5 col-lg-12">
                                                            <div class="product__img-box">
                                                            <a href="single-1.php" class="product__img--link">
                                                                <img class="product__img" src="assets/img/product/size-normal/product-home-1-img-8.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        </div>
                                                        <div class="col-xl-7 col-lg-12">
                                                            <div class="product__price m-t-10">
                                                                <span class="product__price-del">$11.90</span>
                                                                <span class="product__price-reg">$10.71</span>
                                                            </div>
                                                            <a href="single-1.php" class="product__link product__link--underline product__link--weight-light m-t-15">
                                                                SonicFuel Wireless Over-Ear Headphones
                                                            </a>

                                                            <ul class="product__review m-t-15 m-b-20">
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--blank"><i class="icon-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div> <!-- Start Single Segment Product -->
                                                <!-- Start Single Segment Product -->
                                                <div class="product__box product__box--segment  swiper-slide">
                                                    <div class="row">
                                                        <div class="col-xl-5 col-lg-12">
                                                            <div class="product__img-box">
                                                            <a href="single-1.php" class="product__img--link">
                                                                <img class="product__img" src="assets/img/product/size-normal/product-home-1-img-9.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        </div>
                                                        <div class="col-xl-7 col-lg-12">
                                                            <div class="product__price m-t-10">
                                                                <span class="product__price-del">$11.90</span>
                                                                <span class="product__price-reg">$10.71</span>
                                                            </div>
                                                            <a href="single-1.php" class="product__link product__link--underline product__link--weight-light m-t-15">
                                                                SonicFuel Wireless Over-Ear Headphones
                                                            </a>

                                                            <ul class="product__review m-t-15 m-b-20">
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--fill"><i class="icon-star"></i></li>
                                                                <li class="product__review--blank"><i class="icon-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div> <!-- Start Single Segment Product -->
                                            </div>
                                            <div class="swiper-buttons">
                                                <!-- Add Arrows -->
                                                <div class="swiper-button-next default__nav default__nav--next"><i class="fal fa-chevron-right"></i></div>
                                                <div class="swiper-button-prev default__nav default__nav--prev"><i class="fal fa-chevron-left"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- End Single Segment Area -->
                        </div>
                    </div> <!-- ::::::  Start  Product Style - Segment Section  ::::::  -->

                </div>

                <div class="col-lg-9 col-xl-9">
                    <!-- ::::::  Start Hero Section  ::::::  -->
                    <div class="hero hero-slider hero---2">
                        <div class="swiper-wrapper">
                            <!-- Топ придложения слайд 1 -->
                            <?php
                            // для управления Топ придложениям №1 изменить переменную $TopApps_1
                            $TopApps_1 = 8;
                                 $sql = "SELECT * FROM product WHERE id= " . $TopApps_1; 
                                 $result = $conn->query($sql);
                                 $product = mysqli_fetch_assoc($result);                
                            ?>
                            <div class="hero-img hero-img--2 swiper-slide" style="background-image: url(<?php echo $product['photo']; ?>);">
                                <div class="hero__content">
                                    <div class="row">
                                        <div class="col-9 offset-1">
                                            <div class="title title--normal title--thin text-danger">Акцыя</div>
                                            <div class="title title--normal title--regular text-info"><?php
                                                echo $product['title'];
                                              ?></div>
                                            <div class="title title--description text-danger">Скидка<span class="text-danger"> -20% </span> Только на етой неделе</div>
                                            <a href="single-1.php?id= <?php echo $product['id']; ?> " class="btn btn--box btn--large btn--blue btn--uppercase btn--weight text-success ">Приобрести</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Топ придложения слайд 1 -->
                            <!-- Топ придложения слайд 2 -->
                            <?php
                            // для управления Топ придложениям №2 изменить переменную $TopApps_2
                            $TopApps_2 = 10;
                                 $sql = "SELECT * FROM product WHERE id= " . $TopApps_2; 
                                 $result = $conn->query($sql);
                                 $product = mysqli_fetch_assoc($result);                
                            ?>
                            <div class="hero-img hero-img--2  swiper-slide" style="background-image: url(<?php echo $product['photo']; ?>);">
                                <div class="hero__content">
                                    <div class="row">
                                        <div class="col-9 offset-1">
                                            <div class="title title--normal title--white title--thin text-danger">Акцыя</div>
                                            <div class="title title--normal title--white title--regular text-info"><?php
                                                echo $product['title'];
                                              ?>   
                                            </div>
                                            <div class="title title--description title--white text-danger">Скидка <span class="title--white text-danger">-30% </span> При покупке в комплекте с колодками</div>
                                            <a href="single-1.php?id= <?php echo $product['id']; ?> " class="btn btn--box btn--border btn--large btn--uppercase btn--weight text-success ">Приобрести</a>
                                        </div>
                                    </div>
                                </div> <!-- Топ придложения слайд 2 -->
                            </div>
                            <!-- Топ придложения слайд 3 -->
                            <?php
                            // для управления Топ придложениям №3 изменить переменную $TopApps_3
                            $TopApps_3 = 18;
                                 $sql = "SELECT * FROM product WHERE id= " . $TopApps_3; 
                                 $result = $conn->query($sql);
                                 $product = mysqli_fetch_assoc($result);                
                            ?>
                            <div class="hero-img hero-img--2 swiper-slide" style="background-image: url(<?php echo $product['photo']; ?>);">
                                <div class="hero__content">
                                    <div class="row">
                                        <div class="col-9 offset-1">
                                            <div class="title title--normal title--white title--thin text-danger">Выгодний комплек </div>
                                            <div class="title title--normal title--white title--regular text-info"><?php
                                                echo $product['title'];
                                              ?>
                                            </div>
                                            <div class="title title--description title--white text-danger">При покупке комплекта вы економите  <span class="title--white text-danger">40% </span> Идеальное решения для вашего автомобиля </div>
                                            <a href="single-1.php?id= <?php echo $product['id']; ?>" class="btn btn--box btn--large btn--blue btn--uppercase btn--weight text-success ">Приобрести</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Топ придложения слайд 3 -->

                            <!-- Add Pagination -->
                            <div class="swiper-pagination hero__dots hero__dots--2"></div>
                            <!-- Add Arrows -->
                            <div class="swiper-buttons">
                                <!-- Add Arrows -->
                                <div class="swiper-button-next hero__nav hero__nav--next"><i class="far fa-chevron-right"></i></div>
                                <div class="swiper-button-prev hero__nav hero__nav--prev"><i class="far fa-chevron-left"></i></div>
                            </div>
                        </div> <!-- ::::::  End Hero Section  ::::::  -->
                    </div> <!-- ::::::  ENd Hero Section  ::::::  -->

                    <!-- ::::::  Start  Product Style - Default Section [2column]  ::::::  -->
                    <div class="product product--1 swiper-outside-arrow-hover">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-content section-content--border d-md-flex align-items-center justify-content-between">
                                    <h5 class="section-content__title">ТОВАРИ</h5>
                                    <a href="single-1.php">Show All Products <i class="icon-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="swiper-outside-arrow-fix pos-relative">
                                    <div class="product-default-slider-4grid-2row overflow-hidden  m-t-50">
                                        <div class="swiper-wrapper">
                                             <!-- ОСНОВНОЙ СЛАЙДЕР С ТОВАРАМИ  -->
                                            <!-- Start Single Default Product -->
                                            <div class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                                <div class="product__img-box">
                                                    <a href="single-1.php" class="product__img--link">
                                                        <img class="product__img" src="assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                                    </a>

                                                    <a href="#modalAddCart" data-toggle="modal" class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add to cart</a>
                                                    <span class="product__tag product__tag--discount">-12%</span>
                                                    <a href="wishlist.php" class="product__wishlist-icon"><i class="icon-heart"></i></a>
                                                </div>
                                                <div class="product__price m-t-10">
                                                    <span class="product__price-del">$11.90</span>
                                                    <span class="product__price-reg">$10.71</span>
                                                </div>
                                                <a href="single-1.php" class="product__link product__link--underline product__link--weight-light m-t-15">
                                                    SonicFuel Wireless Over-Ear Headphones
                                                </a>
                                            </div> <!-- End Single Default Product -->
                                            <!-- /ОСНОВНОЙ СЛАЙДЕР С ТОВАРАМИ КОНЕЦ -->
                                         
                                        </div>
                                        <div class="swiper-buttons">
                                            <!-- Add Arrows -->
                                            <div class="swiper-button-next default__nav default__nav--next"><i class="fal fa-chevron-right"></i></div>
                                            <div class="swiper-button-prev default__nav default__nav--prev"><i class="fal fa-chevron-left"></i></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div> <!-- ::::::  End  Product Style - Default Section [2column]  ::::::  -->

                    <!-- ::::::  Start banner Section  ::::::  -->
                    <div class="banner banner--1">
                        <div class="row">
                            <div class="col-12">
                                <div class="banner__box">
                                    <a href="single-1.php" class="banner__link">
                                        <img src="assets/img/banner/banner-home-4-img-1.jpg" alt="" class="banner__img">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- ::::::  End banner Section  ::::::  -->

                    <!-- ::::::  Start  Product Style - Default Section  ::::::  -->
                    <div class="product product--1 swiper-outside-arrow-hover">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-content section-content--border d-flex  align-items-center justify-content-between">
                                    <h5 class="section-content__title">Featured Products </h5>
                                    <a href="single-1.php">Show All Products <i class="icon-chevron-right"></i></a>
                                </div>

                                <div class="swiper-outside-arrow-fix pos-relative">
                                    <div class="product-default-slider-4grid overflow-hidden  m-t-50">
                                        <div class="swiper-wrapper">
                                            <!-- Start Single Default Product -->
                                            <div class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                                <div class="product__img-box">
                                                    <a href="single-1.php" class="product__img--link">
                                                        <img class="product__img" src="assets/img/product/size-normal/product-home-1-img-1.jpg" alt="">
                                                    </a>

                                                    <a href="#modalAddCart" data-toggle="modal" class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add to cart</a>
                                                    <span class="product__tag product__tag--discount">-12%</span>
                                                    <a href="wishlist.php" class="product__wishlist-icon"><i class="icon-heart"></i></a>
                                                </div>
                                                <div class="product__price m-t-10">
                                                    <span class="product__price-del">$11.90</span>
                                                    <span class="product__price-reg">$10.71</span>
                                                </div>
                                                <a href="single-1.php" class="product__link product__link--underline product__link--weight-light m-t-15">
                                                    SonicFuel Wireless Over-Ear Headphones
                                                </a>
                                            </div> <!-- End Single Default Product -->
                                            <!-- Start Single Default Product -->
                                            <div class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                                <div class="product__img-box">
                                                    <a href="single-1.php" class="product__img--link">
                                                        <img class="product__img" src="assets/img/product/size-normal/product-home-1-img-2.jpg" alt="">
                                                    </a>

                                                    <a href="#modalAddCart" data-toggle="modal" class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add to cart</a>
                                                    <span class="product__tag product__tag--new">New</span>
                                                    <a href="wishlist.php" class="product__wishlist-icon"><i class="icon-heart"></i></a>
                                                </div>
                                                <div class="product__price m-t-10">
                                                    <span class="product__price-reg">$10.71</span>
                                                </div>
                                                <a href="single-1.php" class="product__link product__link--underline product__link--weight-light m-t-15">
                                                    SonicFuel Wireless Over-Ear Headphones
                                                </a>
                                            </div> <!-- End Single Default Product -->
                                            <!-- Start Single Default Product -->
                                            <div class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                                <div class="product__img-box">
                                                    <a href="single-1.php" class="product__img--link">
                                                        <img class="product__img" src="assets/img/product/size-normal/product-home-1-img-3.jpg" alt="">
                                                    </a>

                                                    <a href="#modalAddCart" data-toggle="modal" class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add to cart</a>
                                                    <span class="product__tag product__tag--discount">-12%</span>
                                                    <a href="wishlist.php" class="product__wishlist-icon"><i class="icon-heart"></i></a>
                                                </div>
                                                <div class="product__price m-t-10">
                                                    <span class="product__price-del">$11.90</span>
                                                    <span class="product__price-reg">$10.71</span>
                                                </div>
                                                <a href="single-1.php" class="product__link product__link--underline product__link--weight-light m-t-15">
                                                    SonicFuel Wireless Over-Ear Headphones
                                                </a>
                                            </div> <!-- End Single Default Product -->
                                            <!-- Start Single Default Product -->
                                            <div class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                                <div class="product__img-box">
                                                    <a href="single-1.php" class="product__img--link">
                                                        <img class="product__img" src="assets/img/product/size-normal/product-home-1-img-4.jpg" alt="">
                                                    </a>

                                                    <a href="#modalAddCart" data-toggle="modal" class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add to cart</a>
                                                    <span class="product__tag product__tag--new">New</span>
                                                    <a href="wishlist.php" class="product__wishlist-icon"><i class="icon-heart"></i></a>
                                                </div>
                                                <div class="product__price m-t-10">
                                                    <span class="product__price-reg">$10.71</span>
                                                </div>
                                                <a href="single-1.php" class="product__link product__link--underline product__link--weight-light m-t-15">
                                                    SonicFuel Wireless Over-Ear Headphones
                                                </a>
                                            </div> <!-- End Single Default Product -->
                                            <!-- Start Single Default Product -->
                                            <div class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                                <div class="product__img-box">
                                                    <a href="single-1.php" class="product__img--link">
                                                        <img class="product__img" src="assets/img/product/size-normal/product-home-1-img-5.jpg" alt="">
                                                    </a>

                                                    <a href="#modalAddCart" data-toggle="modal" class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add to cart</a>
                                                    <span class="product__tag product__tag--discount">-12%</span>
                                                    <a href="wishlist.php" class="product__wishlist-icon"><i class="icon-heart"></i></a>
                                                </div>
                                                <div class="product__price m-t-10">
                                                    <span class="product__price-del">$11.90</span>
                                                    <span class="product__price-reg">$10.71</span>
                                                </div>
                                                <a href="single-1.php" class="product__link product__link--underline product__link--weight-light m-t-15">
                                                    SonicFuel Wireless Over-Ear Headphones
                                                </a>
                                            </div> <!-- End Single Default Product -->
                                            <!-- Start Single Default Product -->
                                            <div class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                                <div class="product__img-box">
                                                    <a href="single-1.php" class="product__img--link">
                                                        <img class="product__img" src="assets/img/product/size-normal/product-home-1-img-6.jpg" alt="">
                                                    </a>

                                                    <a href="#modalAddCart" data-toggle="modal" class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add to cart</a>
                                                    <span class="product__tag product__tag--new">New</span>
                                                    <a href="wishlist.php" class="product__wishlist-icon"><i class="icon-heart"></i></a>
                                                </div>
                                                <div class="product__price m-t-10">
                                                    <span class="product__price-reg">$10.71</span>
                                                </div>
                                                <a href="single-1.php" class="product__link product__link--underline product__link--weight-light m-t-15">
                                                    SonicFuel Wireless Over-Ear Headphones
                                                </a>
                                            </div> <!-- End Single Default Product -->
                                            <!-- Start Single Default Product -->
                                            <div class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                                <div class="product__img-box">
                                                    <a href="single-1.php" class="product__img--link">
                                                        <img class="product__img" src="assets/img/product/size-normal/product-home-1-img-7.jpg" alt="">
                                                    </a>

                                                    <a href="#modalAddCart" data-toggle="modal" class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add to cart</a>
                                                    <span class="product__tag product__tag--discount">-12%</span>
                                                    <a href="wishlist.php" class="product__wishlist-icon"><i class="icon-heart"></i></a>
                                                </div>
                                                <div class="product__price m-t-10">
                                                    <span class="product__price-del">$11.90</span>
                                                    <span class="product__price-reg">$10.71</span>
                                                </div>
                                                <a href="single-1.php" class="product__link product__link--underline product__link--weight-light m-t-15">
                                                    SonicFuel Wireless Over-Ear Headphones
                                                </a>
                                            </div> <!-- End Single Default Product -->
                                            <!-- Start Single Default Product -->
                                            <div class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                                <div class="product__img-box">
                                                    <a href="single-1.php" class="product__img--link">
                                                        <img class="product__img" src="assets/img/product/size-normal/product-home-1-img-8.jpg" alt="">
                                                    </a>

                                                    <a href="#modalAddCart" data-toggle="modal" class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add to cart</a>
                                                    <span class="product__tag product__tag--new">New</span>
                                                    <a href="wishlist.php" class="product__wishlist-icon"><i class="icon-heart"></i></a>
                                                </div>
                                                <div class="product__price m-t-10">
                                                    <span class="product__price-reg">$10.71</span>
                                                </div>
                                                <a href="single-1.php" class="product__link product__link--underline product__link--weight-light m-t-15">
                                                    SonicFuel Wireless Over-Ear Headphones
                                                </a>
                                            </div> <!-- End Single Default Product -->
                                            <!-- Start Single Default Product -->
                                            <div class="product__box product__box--default product__box--border-hover swiper-slide text-center">
                                                <div class="product__img-box">
                                                    <a href="single-1.php" class="product__img--link">
                                                        <img class="product__img" src="assets/img/product/size-normal/product-home-1-img-9.jpg" alt="">
                                                    </a>

                                                    <a href="#modalAddCart" data-toggle="modal" class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom product__upper-btn">Add to cart</a>
                                                    <span class="product__tag product__tag--discount">-12%</span>
                                                    <a href="wishlist.php" class="product__wishlist-icon"><i class="icon-heart"></i></a>
                                                </div>
                                                <div class="product__price m-t-10">
                                                    <span class="product__price-del">$11.90</span>
                                                    <span class="product__price-reg">$10.71</span>
                                                </div>
                                                <a href="single-1.php" class="product__link product__link--underline product__link--weight-light m-t-15">
                                                    SonicFuel Wireless Over-Ear Headphones
                                                </a>
                                            </div> <!-- End Single Default Product -->
                                        </div>
                                        <div class="swiper-buttons">
                                            <!-- Add Arrows -->
                                            <div class="swiper-button-next default__nav default__nav--next"><i class="fal fa-chevron-right"></i></div>
                                            <div class="swiper-button-prev default__nav default__nav--prev"><i class="fal fa-chevron-left"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- ::::::  End  Product Style - Default Section  ::::::  -->

                    <!-- ::::::  Start banner Section  ::::::  -->
                    <div class="banner banner--1">
                        <div class="row">
                            <div class="col-12">
                                <div class="banner__box">
                                    <a href="single-1.php" class="banner__link">
                                        <img src="assets/img/banner/banner-home-4-img-2.jpg" alt="" class="banner__img">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- ::::::  End banner Section  ::::::  -->
                </div>
                
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- ::::::  Start CMS Section  ::::::  -->
                    <div class="cms cms--1">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-12">
                                <!-- Start Single CMS box -->
                                <div class="cms__content">
                                    <div class="cms__icon">
                                        <img class="cms__icon-img" src="assets/img/icon/cms/icon1.png" alt="">
                                    </div>
                                    <div class="cms__text">
                                        <h6 class="cms__title">Free Delivery</h6>
                                        <span class="cms__des">For all oders over $99</span>
                                    </div>
                                </div>
                            </div> <!-- End Single CMS box -->
                            <!-- Start Single CMS box -->
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="cms__content">
                                    <div class="cms__icon">
                                        <img class="cms__icon-img" src="assets/img/icon/cms/icon2.png" alt="">
                                    </div>
                                    <div class="cms__text">
                                        <h6 class="cms__title">Safe Payment</h6>
                                        <span class="cms__des">100% secure payment</span>
                                    </div>
                                </div>
                            </div> <!-- End Single CMS box -->
                            <!-- Start Single CMS box -->
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="cms__content">
                                    <div class="cms__icon">
                                        <img class="cms__icon-img" src="assets/img/icon/cms/icon3.png" alt="">
                                    </div>
                                    <div class="cms__text">
                                        <h6 class="cms__title">Shop With Confidence</h6>
                                        <span class="cms__des">If goods have problems</span>
                                    </div>
                                </div>
                            </div> <!-- End Single CMS box -->
                            <!-- Start Single CMS box -->
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="cms__content">
                                    <div class="cms__icon">
                                        <img class="cms__icon-img" src="assets/img/icon/cms/icon4.png" alt="">
                                    </div>
                                    <div class="cms__text">
                                        <h6 class="cms__title">24/7 Help Center</h6>
                                        <span class="cms__des">Dedicated 24/7 support</span>
                                    </div>
                                </div>
                            </div> <!-- End Single CMS box -->
                        </div>
                    </div> <!-- ::::::  End CMS Section  ::::::  -->
                </div>
            </div>
        </div>
    </main> <!-- ::::::  End  Main Container Section  ::::::  -->

    

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

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
    include $_SERVER['DOCUMENT_ROOT'] . '/parts/footer.php';
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
</body>

</html>
