<?php 
include_once ROOT .'/models/Category.php';
include_once ROOT .'/models/Product.php';
include_once ROOT .'/models/Cart.php';

class CartController
{
	public function actionAdd($id)
	{
		Cart::addProduct($id);
		$referrer = $_SERVER['HTTP_REFERER'];
		header("Location: $referrer");
	}
}