<?
include("../connect/connect_mysql.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>โปรโมชั่น</title>
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
    <div class="box">
	  <h2></h2>
						<p align="center">โปรโมชั่น
						<center>
                        <form id="form2" name="form2" method="post" action="">
    	    <p>&nbsp;</p>
    	    <table width="865" border="1" align="center">
    	      <tr bgcolor="#FFFF33">
              	<td width="94" align="center">รหัสโปรโมชั่น</td>
    	        <td width="156" align="center">ชื่อโปรโมชั่น</td>
    	        <td width="323" align="center">รายละเอียด</td>
    	        <td width="166" align="center">กำหนดเวลา</td>
                <td width="38">แก้ไข</td>
                <td width="48">ยกเลิก</td>
   	          </tr>
    	       <?
    $sql = "
		SELECT *
		FROM promo
		where promo_status='1'
		ORDER BY promo_id
			
	";
	$result = mysql_query($sql) or die(mysql_error());
	while($data = mysql_fetch_array($result)){
	?>
    	      <tr>
              	<td bgcolor="#FFFFFF"><? echo $data["promo_id"]?></td>
    	        <td bgcolor="#FFFFFF"><? echo $data["promo_name"]?></td>
    	        <td bgcolor="#FFFFFF"><? echo $data["promo_des"]?></td>
    	        <td bgcolor="#FFFFFF"><? echo $data["promo_time"]?></td>
                <td bgcolor="#FFFFFF"><a href="promo_from_update.php?promo_id=<? echo $data["promo_id"]?>">แก้ไข</a></td>
                <td bgcolor="#FFFFFF"><a href="promo_sql_del.php?promo_id=<? echo $data["promo_id"]?>">ยกเลิก</a></td>
   	          </tr>
    	      <?
	}
	?>
  	      </table>
    	    <p>&nbsp;</p>
    	  </form><a href="promo_from_add.php?promo_id=<? echo $data["promo_id"]?>"><input type="button" value="เพิ่ม" /></a>
                        

	  </center></p>
	</div>
    <center></center>
  </div>
  <div id="footer"><p> @ Pongpat ngamsub | ComputerScience | 51122420113 @ </p></div>
</div>
</body>
</html>