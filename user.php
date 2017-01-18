<?php 

class User{
	private $_email;
	private $_id;
	private $_createdAt;


	public function __construct($email,$id,$createdAt){
		$this->_email = $email;
		$this->_id = $id;
		$this->_createdAt = $createdAt;

	}
	
	public function getEmail(){
		return $this->_email;
	}
	
	public function getId(){
		return $this->_id;
	}
	
	public function getCreatedAt(){
		return $this->_createdAt;
	}
	
}






