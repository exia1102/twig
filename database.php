<?php 

class database{

	private $pdo;
	
	private function getInstance(){
		if(!$this->pdo){
			$this->pdo = new PDO('mysql:host=localhost;dbname=bookstore;charset=utf8mb4','root','root');
		}
			return $this->pdo;//checkself order dont need else{}
	}
	

	public function getAllCategories(){
		$stmt=$this->getInstance()->query("SELECT * from category");
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	

	public function getAllBook(){
		$stmt=$this->getInstance()->query("SELECT * from book");
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getBook($bid){
		$stmt=$this->getInstance()->prepare("SELECT * from book where bid=:bid");
		$stmt->execute(
			array(
				":bid"=>$bid,
			)
		);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	public function getCategory($bid){
		$stmt=$this->getInstance()->prepare("SELECT cid from book_is_category where bid=:bid");
		$stmt->execute(
			array(
				":bid"=>$bid,
			)
		);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}


}






 ?>