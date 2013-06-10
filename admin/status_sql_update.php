<?
include("../connect/connect_mysql.php");
$customer_status=$status;
$sql = "Update customer SET customer_status ='$customer_status' 
WHERE customer_id='$customerid' ";
mysql_query($sql) or die (mysql_error());
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="0;URL=status_from.php" />

<title>Add</title>
</head>

<body>
</body>
</html>
