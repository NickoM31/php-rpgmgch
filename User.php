<?php 

class User{
	private $email;
	private $id;
	private $createdAt;


	public function __construct($email,$id,$createdAt){
		$this->email = $email;
		$this->id = $id;
		$this->createdAt = $createdAt;

	}
	
	public function getEmail(){
		return $this->email;
	}
	
	public function getId(){
		return $this->id;
	}
	
	public function getCreatedAt(){
		return $this->createdAt;
	}
	
}






