<?
include("../connect/connect_mysql.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>รายงานข้อมูลลูกค้า</title>
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
           	        <table width="868" border="1" align="center">
    	      <tr bgcolor="#FFFF33">
    	        <td width="61" align="center">รหัสลูกค้า</td>
    	        <td width="70" align="center">ชื่อ</td>
    	        <td width="70" align="center">นามสกุล</td>
    	        <td width="51" align="center">ชื่อผู้ใช้</td>
    	        <td width="53" align="center">รหัสผ่าน</td>
    	        <td width="56" align="center">เพศ</td>
    	        <td width="71" align="center">อีเมล์</td>
                <td width="64" align="center">ที่อยู่</td>
                <td width="66" align="center">เบอร์โทร</td>
    	        <td width="67" align="center">อาชีพ</td>
    	        <td width="75" align="center">รูปภาพ</td>
                <td width="40" align="center">สิทธิ</td>
                <td width="42" align="center">สถานะ</td>
   	          </tr>
    	      <?
    $sql = "
		SELECT *
		FROM customer
		ORDER BY customer_id 
			
	";
	$result = mysql_query($sql) or die(mysql_error());
	while($data = mysql_fetch_array($result)){
	?>
    	      <tr>
    	        <td bgcolor="#FFFFFF"><div align="center"><? echo $data["customer_id"]?></div></td>
    	        <td bgcolor="#FFFFFF"><div align="center"><? echo $data["customer_name"]?></div></td>
                <td bgcolor="#FFFFFF"><div align="center"><? echo $data["customer_lname"]?></div></td>
    	        <td bgcolor="#FFFFFF"><div align="center"><? echo $data["customer_username"]?></div></td>
    	        <td bgcolor="#FFFFFF"><div align="center"><? echo $data["customer_password"]?></div></td>
    	        <td bgcolor="#FFFFFF"><div align="center"><? echo $data["customer_sex"]?></div></td>
    	        <td bgcolor="#FFFFFF"><div align="center"><? echo $data["customer_email"]?></div></td>
                <td bgcolor="#FFFFFF"><div align="center"><? echo $data["customer_address"]?></div></td>
                <td bgcolor="#FFFFFF"><div align="center"><? echo $data["customer_tell"]?></div></td>
                <td bgcolor="#FFFFFF"><div align="center"><? echo $data["customer_career"]?></div></td>
                <td bgcolor="#FFFFFF"><div align="center"><img src="images/<? echo $data["customer_picture"]?>" alt="" width="50" height="50" /></div></td>
                <td bgcolor="#FFFFFF"><div align="center"><? echo $data["customer_status"]?></div></td>
                <td bgcolor="#FFFFFF"><div align="center"><? echo $data["id_status"]?></div></td>
   	          </tr>
    	      <?
	}
	?>
        </table>
      </div>
      </label>
    </form>
    <center></center>
  </div>
  <div id="footer"><p> @ Pongpat ngamsub | ComputerScience | 51122420113 @ </p></div>
</div>
</body>
</html>