<?php
	require 'myclass/myclass.php';
	$p=new Ecom();
	session_start();
	$id= isset($_GET['id']) ? (int)$_GET['id'] : '';
	$product=$p->export_cart($id);
	if($product){
		if(isset($_SESSION['cart'])){
			if(isset($_SESSION['cart'][$id])){
				$_SESSION['cart'][$id]['qty'] += 1;
			}else{
				$_SESSION['cart'][$id]['qty'] = 1;
				$_SESSION['cart'][$id]['ProductName'] = $product['ProductName'];
				if($product['UnitSale'] !=0){
					$_SESSION['cart'][$id]['gia'] = $product['UnitSale'];
				}else{
					$_SESSION['cart'][$id]['gia'] = $product['UnitPrice'];
				}
				$_SESSION['cart'][$id]['img'] = $product['avatar'];
			}
				
				echo '<script>
					window.location="checkout.php";
				</script>';
			exit();
		}else{
			$_SESSION['cart'][$id]['qty'] = 1;
			$_SESSION['cart'][$id]['ProductName'] = $product['ProductName'];
			if($product['UnitSale'] !=0){
					$_SESSION['cart'][$id]['gia'] = $product['UnitSale'];
				}else{
					$_SESSION['cart'][$id]['gia'] = $product['UnitPrice'];
				}
			$_SESSION['cart'][$id]['img'] = $product['avatar'];
			echo '<script>
					window.location="checkout.php";
				</script>';
			exit();
		}
	}else{

	}
	
?>