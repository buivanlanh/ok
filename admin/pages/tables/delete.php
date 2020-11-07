<?php
include('../../myclass/myclass.php');
$p = new ecom();
$id=$_GET['id'];
$p->new_query("DELETE FROM products WHERE ID = '$id'");
echo '<script language="javascript">
                alert("Đã Xóa Sản Phẩm");
                window.location="data.php";
            </script>';	
?>