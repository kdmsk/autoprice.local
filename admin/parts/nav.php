<ul class="nav">
     <li class="nav-item <?php if($page == "home"){ echo 'active'; } ?>">
     <a class="nav-link" href="/admin">
     <i class="nc-icon nc-chart-pie-35"></i>
     <p>Главная</p>
     </a>
     </li>
     <li class="nav-item <?php if($page == "users"){ echo 'active'; } ?>">
     <a class="nav-link" href="users.php">
     <i class="nc-icon nc-circle-09"></i>
     <p>Пользователи</p>
     </a>
     </li>
     <li class="nav-item <?php if($page == "orders"){ echo 'active'; } ?>">
     <a class="nav-link" href="orders.php">
     <i class="nc-icon nc-cart-simple"></i>
     <p>Заказы</p>
     </a>
     </li>
     <li class="nav-item <?php if($page == "products"){ echo 'active'; } ?>">
     <a class="nav-link" href="products.php">
     <i class="nc-icon nc-app"></i>
     <p>Товары</p>
     </a>
     </li>
     <li class="nav-item <?php if($page == "categories"){ echo 'active'; } ?>">
     <a class="nav-link" href="category.php">
     <i class="nc-icon nc-bullet-list-67"></i>
     <p>Категории</p>
     </a>
     </li>
     <li class="nav-item">
     <a class="nav-link" href="http://autoprice.local/admin/logout.php">
     <i class="nc-icon nc-key-25"></i>
     <p>Выход</p>
     </a>
     </li>
</ul>