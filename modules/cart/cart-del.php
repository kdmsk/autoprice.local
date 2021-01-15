<?php
/*
1.добавить кнопку  удаления товара из корзины
2. Пройтись по всему масиву товаров
3. Проверить id товара и удалить товар
*/


//делаем проверку пришли ли данные чз POST методо	
if(isset($_POST) and $_SERVER["REQUEST_METHOD"] =="POST"){
	if(isset($_COOKIE['basket'])){
		//перелаем значение куки в переменную
		$basket = $_COOKIE['basket'];
		//преобразовываем полученные данные в json
		$basket = json_decode($_COOKIE['basket'],true);
		
		
		//проходимся по массиву товаров 
		for ($i=0; $i < count($basket['basket']); $i++) { 
			if ($basket['basket'][$i]['product_id'] == $_POST['id']) {
				unset($basket['basket'][$i]);
				sort($basket['basket']);
			}
		}
		// преобразовали массив в json
	$jsonProduct = json_encode($basket);
	
	//чистим куки товара в корзине
	setcookie("basket", "", 0 ,"/" );

	//добавляем куки товара в корзине
	 setcookie("basket", $jsonProduct, time() + 60*60 ,"/" );
	 
	//преобразовали массив количество в json
	 echo json_encode([

	 	"count" =>count($basket['basket'])
	 ]);
	 //выводим количество товара в корзине
	$countBasket = count($basket['basket']);
	//добавляем куки количества товаров  в корзине
	 setcookie("countBasket", $countBasket, time() + 60*60 ,"/" );
		
	}

}




 ?>