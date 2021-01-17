<?php 
// подключим базу даных 
include $_SERVER['DOCUMENT_ROOT']."/configs/db.php";
// помещаем а переменую $page Id страницы с GET запроса
$page = $_GET['page'];
// $offset  смищения количества выводимых карточек 
$offset = $page * 5;
// выбрать все поля с таб. продукты 6 шт. + количество смещения Id1*6=6; Id2*6=12; Id3*6=18; и так дале 
$sql = "SELECT * FROM product LIMIT 5 OFFSET " . $offset;
$result = $conn->query($sql);
// выводим полученый результат  через цыкл 
while ($row = mysqli_fetch_assoc($result)) {
			include $_SERVER['DOCUMENT_ROOT']."/parts/product-card.php";
		}

?>