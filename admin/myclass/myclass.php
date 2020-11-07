<?php
class ecom 
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
	function new_query($sql)
	{
		$link=$this->connect();
		$ketqua=@mysqli_query($link,$sql);
		if($ketqua)
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	function upload($pathlocal,$pathserver)
	{
		move_uploaded_file($pathlocal,'../../../img/'.$pathserver);
		$link=$this->connect();
		$result=@mysqli_query($link,$sql);
		if($result)
		{
			return 1;	
		}
		else
		{
			return 0;	
		}
	}
	function getProducts()
	{
		$products = @mysqli_query(
			$this->connect(),
			"SELECT * FROM products"
		);
		return $products;
	}	
	public function getProductById ($id)
	{
		$result = @mysqli_query(
			$this->connect(),
			"SELECT * FROM products WHERE ID = '$id'"
		);
		$product = @mysqli_fetch_array($result);
		return $product;
	}
	

  }
?>
