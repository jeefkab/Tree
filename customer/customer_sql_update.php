<?
include("../connect/connect_mysql.php");
$sql ="
          UPDATE customer
		  SET customer_id='$customer_id', customer_name='$customer_name', customer_lname='$customer_lname', customer_username='$customer_username',customer_password='$customer_password', customer_sex='$customer_sex', customer_email='$customer_email', customer_address='$customer_address', customer_tell='$customer_tell',
customer_career='$customer_career', customer_status='$customer_status', customer_picture='$customer_picture',id_status='$id_status'
		  
         ";
mysql_query($sql)  or die (mysql_error());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="0;URL=customer_from_update.php" />
<title>UPDATE</title>
</head>

<body>
</body>
</html>