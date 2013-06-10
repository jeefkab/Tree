<?
include("../connect/connect_mysql.php");
$pic=$_FILES['product_picture']['name'];
$pictype=$_FILES["product_picture"]["tmp_name"];
$productid=$_POST['product_id'];
$sql ="
          UPDATE product
		  SET 
		  
		  product_id='$product_id', 
		  product_name='$product_name', 
		  product_type='$product_type', 
		  product_des='$product_des',
		  product_price='$product_price', 
		  product_stock='$product_stock', 
		  product_picture='$pic'
		  
		  WHERE product_id = '$product_id'
         ";
mysql_query($sql)  or die (mysql_error());
move_uploaded_file($pictype,"images/$pic");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="0;URL=product_from.php" />
<title>UPDATE</title>
</head>

<body>
</body>
</html>