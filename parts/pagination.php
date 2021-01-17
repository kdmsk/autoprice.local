<?php
// подключим базу даных 
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';

/////Функция pagePrint(), печатает ссылку на заданую страницу
function pagePrint($page, $title, $show, $active_class = 'page-pagination__link active btn btn--gray') {
    if($show) {
        echo '<a class="page-pagination__link btn btn--gray" href="?do=list&page=' . $page . '">' . $title . '</a>';
    } else {
        if(!empty($active_class)) $active = 'class="' . $active_class . '"';
        echo '<span ' . $active . '>' . $title . '</span>';
    }
    return false;
}

///Начальный конфиг

$page_setting = [
    'limit' => 10, // кол-во записей на странице
    'show'  => 5, // 5 до текущей и после
    'prev_show' => 0, // не показывать кнопку "предыдущая"
    'next_show' => 0, // не показывать кнопку "следующая"
    'first_show' => 0, // не показывать ссылку на первую страницу
    'last_show' => 0, // не показывать ссылку на последнюю страницу
    'prev_text' => '<i class="icon-chevron-left">Previous</i>',
    'next_text' => '<i class="icon-chevron-right">Next</i>',
    'class_active' => 'page-pagination__link active btn btn--gray',
    'separator' => ' ... ',
];

// Поверка, есть ли GET запрос
if (isset($_GET['page'])) {
    // Если да то переменной $page присваиваем его
    $page = (int) $_GET['page'];
} else { // Иначе
    // Присваиваем $pageno один
    $page = 1;
}

////выборки данных из базы
$start = ($page-1)*$page_setting['limit'];
$res = $conn->query("SELECT * FROM 	product LIMIT {$start},{$page_setting['limit']}");
while ( $row = mysqli_fetch_assoc($res) ) { 
    include $_SERVER['DOCUMENT_ROOT'] . "/parts/product-card.php";
}

//// Подсчет кол-ва страниц и проверка основных условий
$res = $conn->query("SELECT count(*) AS count FROM product");
$row = mysqli_fetch_assoc($res);
$page_count = ceil($row['count'] / $page_setting['limit']); // кол-во страниц
$page_left = $page - $page_setting['show']; // находим левую границу
$page_right = $page + $page_setting['show']; // находим правую границу
$page_prev = $page - 1; // узнаем номер предыдушей страницы
$page_next = $page + 1; // узнаем номер следующей страницы
if($page_left < 2) $page_left = 2; // левая граница не может быть меньше 2, так как 2 - первое целое число после 1
if($page_right > ($page_count - 1)) $page_right = $page_count - 1; // правая граница не может ровняться или быть больше, чем всего страниц
if($page > 1) $page_setting['prev_show'] = 1; // если текущая страница не первая, значит существует предыдущая
if($page != 1) $page_setting['first_show'] = 1; // показываем ссылку на первую страницу, если мы не на ней
if($page < $page_count) $page_setting['next_show'] = 1; // если текущая страница не последняя, значит существуюет следующая
if($page != $page_count) $page_setting['last_show'] = 1;
?>


<!-- //// Выводим на экран: кнопки пагинацыи -->
 <div class="page-pagination">
 	<div class="dropdown">
 		<input type="hidden" value="1" id="current-page">
		 <button  type="button" id="show-more"  aria-haspopup="true" aria-expanded="false">
		    показать ище товары 
		 </button>
		 
	</div>
    <ul class="page-pagination__list">
        <li  class="page-pagination__item">
        	<?php        	
        	 pagePrint($page_prev, $page_setting['prev_text'], $page_setting['prev_show']);
			?>
        </li>
        <li  class="page-pagination__item">
        	<?php 	
        	pagePrint(1, 1, $page_setting['first_show'], $page_setting['class_active']);
				if($page_left > 2) echo $page_setting['separator'];
				for($i = $page_left; $i <= $page_right; $i++) {
				$page_show = 1;
				if($page == $i) $page_show = 0;
				pagePrint($i, $i, $page_show, $page_setting['class_active']);
				}

				if($page_right < ($page_count - 1)) echo $page_setting['separator'];

				if($page_count != 1) pagePrint($page_count, $page_count, $page_setting['last_show'], $page_setting['class_active']);
        	?>
        </li>
        <li  class="page-pagination__item">
        	<?php 
				 pagePrint($page_next, $page_setting['next_text'], $page_setting['next_show']);
        	?>
        </li>

    </ul>
</div>