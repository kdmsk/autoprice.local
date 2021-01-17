<?php 

// подключим базу даных 
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';

?>


<!-- Start Single Default Product -->
<div class="product__box product__box--default product__box--border-hover text-center float-right float-5">
    <div class="product__img-box">
        <a href="single-1.php?id=<?php echo $row["id"]; ?>" class="product__img--link">
            <img class="product__img" src="img_product/<?php echo $row["photo"] ?>" alt="">
        </a>
        <span class="product__tag product__tag--discount">-12%</span>
        <a href="wishlist.php" class="product__wishlist-icon"><i class="icon-heart"></i></a>
    </div>
    <div class="product__price m-t-10">
        <span class="product__price-del">$11.90</span>
        <span class="product__price-reg">$<?php echo $row["prise"] ?></span>
    </div>
    <a href="single-1.php?id=<?php echo $row["id"]; ?>" class="product__link product__link--underline product__link--weight-light m-t-15">
        <?php echo $row["title"] ?>
    </a>
    <a href="#modalAddCart" data-toggle="modal" data-dismiss="modal" onclick="addToCart(this)" data-id="<?php echo $row["id"] ?>" class="btn btn--box btn--small btn--gray btn--uppercase btn--weight btn--hover-zoom ">В корзину</a>
</div> <!-- End Single Default Product -->
        


