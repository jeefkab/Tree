<?
include("../connect/connect_mysql.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>สิทธิการใช้งาน</title>
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
      <div align="center">
        <p>สิทธิการใช้งาน</p>
      </div>
      <div align="center">
<table width="715" border="1" align="center">
    	      <tr bgcolor="#FFFF33">
    	        <td width="65" align="center">รหัส</td>
    	        <td width="156" align="center">ชื่อ</td>
                <td width="164" align="center">นามสกุล</td>
    	        <td width="119" align="center">สิทธิการใช้งาน</td>
                <td width="83" align="center">แก้ไข</td>
                <td width="88" align="center">ยกเลิก</td>
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
    	        <td bgcolor="#FFFFFF"><? echo $data["customer_id"]?></td>
    	        <td bgcolor="#FFFFFF"><? echo $data["customer_name"]?></td>
                <td bgcolor="#FFFFFF"><? echo $data["customer_lname"]?></td>
                <td bgcolor="#FFFFFF"><? echo $data["customer_status"]?></td>
                <td bgcolor="#FFFFFF"><a href="status_from_update.php?customer_id=<? echo $data["customer_id"]?>">แก้ไข</a></td>
                <td bgcolor="#FFFFFF"><a href="status_sql_del.php?customer_id=<? echo $data["customer_id"]?>">ยกเลิก</a></td>
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