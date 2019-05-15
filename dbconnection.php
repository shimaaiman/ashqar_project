<?php
/**
 * 
 */
class DbConnection
{
	private $connection;
	private static $DbConnection;
	private function __construct()
	{
		$this->connection = new mysqli('localhost','root','','shopping')
		or die('Error Connection');
	}

	public static function getDbConnection(){
		if(!isset(self::$DbConnection))
			self::$DbConnection = new self();
		return self::$DbConnection;
	}

	public function verifyUser($userName, $password){
		$rs = $this->connection->query("Select * From admin Where userName='$userName' And password='$password'");
		if(mysqli_num_rows($rs))
			return true;
		else
			return false;
	}

	public function addproduct($product){
		$name = $product->getName();
		$type = $product->gettype();
		$id = $product->getid();
		$color = $product->getcolor();
		$numberofpices = $product->getnumberofpices();
		$price = $product->getprice();
		
		$this->connection->query("Insert Into products(name,type,id,numberofpices,price,color) 
			values('$name','$type','$id','$numberofpices','$price','$color')");

	}

	public function updateproduct($product){
		$name = $product->getName();
		$type = $product->gettype();
		$id = $product->getid();
		$color = $product->getcolor();
		$numberofpices = $product->getnumberofpices();
		$price = $product->getprice();
		
		$this->connection->query("Update products set name = '$name', type = '$type', color = '$color', 
			numberofpices = $numberofpices , price = $price where id = $id");

	}

	public function deleteproduct($product){
		$id = $product->getid();
		$this->connection->query("Delete from products where id = $id");

	}

	public function viewcatogary(){
		$view = $this->connection->query("Select * From products where categoryId='2'");
		return($view);
	}

	// public function viewproducts(){
	// 	$view = $this->connection->query("Select * From products where categoryId='2'");
	// 	return($view);
	// }
}


?>