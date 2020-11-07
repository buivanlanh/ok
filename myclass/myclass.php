
<?php
class Ecom 
{
	function connect()
	{
		$con=@mysqli_connect("localhost","root","","webtmdt");
		if(!$con)
		{
			die("không thể kết nối csdl");
			exit();
		}
		else
		{
			@mysqli_set_charset($con,'utf8');
			return $con;	
		}
	}
	function getCategories()
	{
		$categories=@mysqli_query(
			$this->connect(),
			"SELECT * FROM category"
		);
		return $categories;
	}
	function getProducts()
	{
		$products = @mysqli_query(
			$this->connect(),
			"SELECT * FROM products  "
		);
		return $products;
	}	
	public function getProductById ($id)
	{
		$result = @mysqli_query(
			$this->connect(),
			"SELECT * FROM products WHERE CategoryID = '$id'"
		);
		$product = @mysqli_fetch_array($result);
		return $product;
	}
	public function Getcategory ($id)
	{
		$result = @mysqli_query(
			$this->connect(),
			"SELECT * FROM products WHERE ID = '$id'"
		);
		$product = @mysqli_fetch_array($result);
		return $product;
	}
	function getcategorys()
	{
		$category = @mysqli_query(
			$this->connect(),
			"SELECT * FROM category"
		);
		return $category;
	}	
	function export_cart($id){
		$connect=$this->connect();
		$sql="SELECT * FROM products WHERE ID='$id'";
		$result=mysqli_query($connect,$sql);
		if(!$result){
			die('Không thể thực hiện');
		}else{
			return mysqli_fetch_assoc($result);
		}
}
	function getProductss()
	{
		$productss = @mysqli_query(
			$this->connect(),
			"SELECT * FROM products WHERE CategoryID=1"
		);
		return $productss;
	}
	function getProductby($id)
	{
		$products = @mysqli_query(
			$this->connect(),
			"SELECT * FROM products WHERE CategoryID='$id'"
		);
		return $products;
	}	
	function getProductnike()
	{
		$nike = @mysqli_query(
			$this->connect(),
			"SELECT * FROM products WHERE CategoryID=10"
		);
		return $nike;
	}	
	function getProductadidas()
	{
		$adidas = @mysqli_query(
			$this->connect(),
			"SELECT * FROM products WHERE CategoryID=11"
		);
		return $adidas;
	}	
	function getProductjordan()
	{
		$jordan = @mysqli_query(
			$this->connect(),
			"SELECT * FROM products WHERE CategoryID=13"
		);
		return $jordan;
	}	
	function getProductbalenciaga()
	{
		$balenciaga = @mysqli_query(
			$this->connect(),
			"SELECT * FROM products WHERE CategoryID=3"
		);
		return $balenciaga;
	}	
	


}

?>
