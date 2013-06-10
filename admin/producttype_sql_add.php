<?
include("../connect/connect_mysql.php");
$sql = "
			INSERT INTO producttype  (producttype_id,producttype_name,producttype_status)
			VALUES ('$producttype_id','$producttype_name','1')	
";
mysql_query($sql) or die (mysql_error());
move_uploaded_file($pictype,"images/$pic");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="0;URL=producttype_from.php" />
<title>Add</title>
</head>

<body>
</body>
</html>
