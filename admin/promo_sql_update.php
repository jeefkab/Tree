<?
include("../connect/connect_mysql.php");
$sql ="
          UPDATE promo
		  SET promo_id='$promo_id', promo_name='$promo_name', promo_des='$promo_des', promo_time='$promo_time'
		  WHERE promo_id = '$promo_id'
         ";
mysql_query($sql)  or die (mysql_error());

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="0;URL=promo_from.php" />
<title>Delete</title>
</head>

<body>
</body>
</html>