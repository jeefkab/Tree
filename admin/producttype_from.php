<?
include("../connect/connect_mysql.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>การจัดการประเภทสินค้า</title>
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
           	        <table width="413" border="1" align="center">
    	      <tr bgcolor="#FFFF33">
    	        <td width="113" align="center">รหัสประเภทสินค้า</td>
    	        <td width="122" align="center">ชื่อประเภทสินค้า</td>
    	        <td width="82" align="center">แก้ไข</td>
                <td width="68" align="center">ยกเลิก</td>
   	          </tr>
    	      <?
    $sql = "
		SELECT *
		FROM producttype
		where producttype_status=1
		ORDER BY producttype_id 
			
	";
	$result = mysql_query($sql) or die(mysql_error());
	while($data = mysql_fetch_array($result)){
	?>
    	      <tr>
    	        <td bgcolor="#FFFFFF"><div align="center"><? echo $data["producttype_id"]?></div></td>
    	        <td bgcolor="#FFFFFF"><div align="center"><? echo $data["producttype_name"]?></div></td>
                <td bgcolor="#FFFFFF"><div align="center"><a href="producttype_from_update.php?producttype_id=<? echo $data["producttype_id"]?>">แก้ไข</a></div></td>
                <td bgcolor="#FFFFFF"><div align="center"><a href="producttype_sql_del.php?producttype_id=<? echo $data["producttype_id"]?>">ยกเลิก</a></div></td>
   	          </tr>
    	      <?
	}
	?>
        </table>
      </div>
      </label>
    </form>
    <center><a href="producttype_from_add.php"><input type="button" value="เพิ่ม" /></a></center>
  </div>
  <div id="footer"><p> @ Pongpat ngamsub | ComputerScience | 51122420113 @ </p></div>
</div>
</body>
</html>