<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?
include("../connect/connect_mysql.php");
$pic=$_FILES['product_picture']['name'];
$pictype=$_FILES["product_picture"]["tmp_name"];
$productid=$_POST['product_id'];

$sql ="
          UPDATE producttype
		  SET 
		  
		  producttype_id='$producttype_id', 
		  producttype_name='$producttype_name'
		  
		  WHERE producttype_id = '$producttype_id'
         ";
		 //echo $sql; exit;
mysql_query($sql)  or die (mysql_error());
move_uploaded_file($pictype,"images/$pic");
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="0;URL=producttype_from.php" />
<title>UPDATE</title>
</head>

<body>



</body>
</html>