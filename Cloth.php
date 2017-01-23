<?php  require_once 'Product.php';


class Cloth extends Product{	
	private $brand;
	
	function __construct($id, $brand, $name, $price)
	{
		$this->brand = $brand;
		parent::__construct($id, $name, $price);
	}
	public function getBrand(){
		return $this->brand ;
	}
	function try(){

	}
}