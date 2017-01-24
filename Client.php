<?php  require 'User.php';
require 'Product.php';


class Client extends User {
	private $billAmount;
	private	$cart = [];

	public function buy($product){
		$this->addProductToCart($product);
		$this->setBillAmount($product);
	}
	public function getBillAmount(){
		return $this->billAmount;
	}
	public function setBillAmount($product){
		$this->billAmount = $product->getPrice() + $this->billAmount;
	}
	public function getCart(){
		return $this->cart;
	}
	public function addProductToCart($product){
		return $this->cart[]= $product; 
	}

}



