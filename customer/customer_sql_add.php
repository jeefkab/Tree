<?
include("../connect/connect_mysql.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="refresh" content="0;URL=../customer.php" /><!--ไปหน้าที่ต้องการ-->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?   $sql= "insert INTO  customer
(customer_id,customer_name,customer_lname,customer_username,customer_password,customer_sex,customer_email,customer_address,
 customer_tell,customer_career,customer_status,customer_picture,id_status)
		VALUES ('$customer_id','$customer_name','$customer_lname','$customer_username','$customer_password','$customer_sex','$customer_email',
				'$customer_address','$customer_tell','$customer_career','1','$product_picture','1')	
		";
		mysql_query($sql) or die (mysql_error()); 
?>
	<script type="text/javascript">
		alert("คุณได้สมัครสมาชิกแล้วครับ 'กรุณาเข้าสู่ระบบ'");
		parent.location="../index.php";
	</script>
</body>
</html>