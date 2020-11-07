<?php 
	session_start();
	if(!isset($_SESSION['cart'])){
		header('location: index.php');
	}
	$key = isset($_GET['id']) ? (int) $_GET['id'] : '';
	if($key){
		if(array_key_exists($key, $_SESSION['cart'])){
			unset($_SESSION['cart'][$key]);
		}
	}
	echo '<script>
			history.back();
		</script>';
?>