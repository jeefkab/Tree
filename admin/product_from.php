<?
include("../connect/connect_mysql.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>การจัดการข้อมูลสินค้า</title>
<link rel="stylesheet" type="text/css" href="../css/styles.css"/>
</head>

<body>
<div id="wrapper">
  <div id="header">
  </div>
  <div id="content">
<center>
  <form id="form2" name="form2" method="post" action="">
      	      <?
    $sql = "
		SELECT *
		FROM customer
		where customer_id='$customer_id'";
	$result = mysql_query($sql) or die(mysql_error());
	while($data = mysql_fetch_array($result)){
	?>
 ยินดีต้อนรับ Name [<? echo $data["customer_name"]?>] 
    <? } ?>
  </form>
      <a href="admin_index.php">
    <input type="submit" name="button" id="button" value="หน้าหลัก" />
    </a>
    <a href="#">
    <input type="submit" name="button2" id="button2" value="ออกจากระบบ" />
    </a>
</center>    
    <form id="form1" name="form1" method="post" action="">
      <label>
      <br />
      <div align="center">
           	        <table width="700" border="1" align="center">
    	      <tr bgcolor="#FFFF33">
    	        <td width="50" align="center">รหัสสินค้า</td>
    	        <td width="20" align="center">ชื่อสินค้า</td>
    	        <td width="30" align="center">ประเภท</td>
    	        <td width="40" align="center">รายละเอียด</td>
    	        <td width="40" align="center">ราคา</td>
    	        <td width="40" align="center">จำนวนคงเหลือ</td>
    	        <td width="30" align="center">รูปภาพ</td>
                <td width="10" align="center">แก้ไข</td>
                <td width="30" align="center">ยกเลิก</td>
   	          </tr>
    	      <?
    $sql = "
		SELECT *
		FROM product
		where product_status=1
		ORDER BY product_id 
			
	";
	$result = mysql_query($sql) or die(mysql_error());
	while($data = mysql_fetch_array($result)){
	?>
    	      <tr>
    	        <td bgcolor="#FFFFFF"><div align="center"><? echo $data["product_id"]?></div></td>
    	        <td bgcolor="#FFFFFF"><div align="center"><? echo $data["product_name"]?></div></td>
                <td bgcolor="#FFFFFF"><div align="center"><? echo $data["product_type"]?></div></td>
    	        <td bgcolor="#FFFFFF"><div align="center"><? echo $data["product_des"]?></div></td>
    	        <td bgcolor="#FFFFFF"><div align="center"><? echo $data["product_price"]?></div></td>
    	        <td bgcolor="#FFFFFF"><div align="center"><? echo $data["product_stock"]?></div></td>
    	        <td bgcolor="#FFFFFF"><div align="center"><img src="images/<? echo $data["product_picture"]?>" width="50" height="50" /></div></td>
                <td bgcolor="#FFFFFF"><div align="center"><a href="product_from_update.php?product_id=<? echo $data["product_id"]?>">แก้ไข</a></div></td>
                <td bgcolor="#FFFFFF"><div align="center"><a href="product_sql_del.php?product_id=<? echo $data["product_id"]?>">ยกเลิก</a></div></td>
   	          </tr>
    	      <?
	}
	?>
        </table>
      </div>
      </label>
    </form>
    <center><a href="product_from_add.php"><input type="button" value="เพิ่ม" /></a></center>
  </div>
  <div id="footer"><p> @ Pongpat ngamsub | ComputerScience | 51122420113 @ </p></div>
</div>
</body>
</html>