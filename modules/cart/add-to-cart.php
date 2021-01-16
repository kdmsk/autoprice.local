<?php 
//Подключаем файл БД
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';

//делаем проверку пришли ли данные чз POST методом
if(isset($_POST) and $_SERVER["REQUEST_METHOD"] =="POST"){
	//создаем запрос в БД
	$sql =" SELECT * FROM product WHERE id = " .$_POST['id'] ;
	//выполняем запрос
	$result = $conn->query($sql);
	//переводим полученные данные в переменную
	$product = mysqli_fetch_assoc($result);

	//если присутствуют файлы Куки баскет то 
	if(isset($_COOKIE['basket'])){
		//переводим значения Куки в перменную
		$basket = $_COOKIE['basket'];
		//преобразовываем полученные данные в json
		$basket = json_decode($_COOKIE['basket'],true);

		$issetProduct =0;	
		for ($i=0; $i < count($basket['basket']); $i++) { 
			//помещаем значение product['id'] в масив basket
			if( $basket["basket"][$i]["product_id"] == $product['id'] ) {
				$basket["basket"][$i]["count"]++;
				$issetProduct = 1;
			}
		}	
		if($issetProduct != 1){
			$basket["basket"][] =
					            [
								"product_id" => $product['id'],
								"count" => 1						
						     	
							    ];
		}

				

	}else{//если корзина пуста
		//помещаем значение product['id'] в масив basket
		$basket = ["basket" =>
					    [       
							["product_id" => $product['id'],
							"count" => 1
							]	
						]				     	
				  ];
			
	}

	// преобразовали массив в json
	$jsonProduct = json_encode($basket);
	
	//чистим куки товара в корзине
	setcookie("basket", "", 0 ,"/" );

	//добавляем куки товара в корзине
	 setcookie("basket", $jsonProduct, time() + 60*60 ,"/" );
	 //выводим $jsonProduct
	 //echo $jsonProduct;
	 	 	
	//преобразовали массив количество в json
	 echo json_encode([

	 	"count" =>count($basket['basket'])
	 ]);
	//выводим количество товара в корзине
	$countBasket = count($basket['basket']);
	//добавляем куки количества товаров  в корзине
	 setcookie("countBasket", $countBasket, time() + 60*60 ,"/" );
}




?>