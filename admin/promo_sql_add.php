<?
include("../connect/connect_mysql.php");
$promoid=$_POST['promo_id'];
$sql = "
			INSERT INTO promo  (promo_id,promo_name,promo_des,promo_time,promo_status)
			VALUES ('$promo_id','$promo_name','$promo_des','$promo_time','1')	
";
mysql_query($sql) or die (mysql_error());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="0;URL=promo_from.php" />
<title>Add</title>
</head>

<body>
</body>
</html>
