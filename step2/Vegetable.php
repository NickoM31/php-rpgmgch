<?php  
require_once 'Product.php';

class Vegetable extends Product{
	private $productorName;
	private $expiresAt;
	private $dateNow;
	
	function __construct($id, $productorName, $name, $expiresAt, $price)
	{
		$this->productorName = $productorName;
		$this->expiresAt = $expiresAt;
		parent::__construct($id, $name, $price);
	}

	public function getProductorName(){
		return $this->productorName;
	}
	public function getExpiresAt(){
		return $this->expiresAt ;
	}
	public function getDateNow(){
		return $this->dateNow;
	}

	function isFresh(){
		if ($expiresAt < $dateNow) {
			return true;
		}else{
			return "Date limite dépassée";
		}
	}

}