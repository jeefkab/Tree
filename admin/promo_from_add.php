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
                        <form action="promo_sql_add.php" method="post" enctype="multipart/form-data" name="form2" id="form2">
    	    <p>&nbsp;</p>
    	    <table width="400" border="1" align="center">
    	      <tr bgcolor="#99FF33">
    	        <td colspan="2" align="center">โปรโมชั่น</td>
  	        </tr>
    	      <tr>
    	        <td width="140" height="24" align="center" bgcolor="#99FF33">รหัสโปรโมชั่น</td>
    	        <td width="260" bgcolor="#FFFFFF"><input type="text" name="promo_id" id="promo_id" /></td>
  	        </tr>
            <tr>
    	        <td height="24" align="center" bgcolor="#99FF33">ชื่อโปรโมชั่น</td>
    	        <td bgcolor="#FFFFFF"><input type="text" name="promo_name" id="promo_name" /></td>
  	        </tr>
             <tr>
    	        <td align="center" bgcolor="#99FF33">รายละเอียด</td>
    	        <td bgcolor="#FFFFFF"><label>
    	          <textarea name="promo_des" id="promo_des" cols="45" rows="5"></textarea>
  	          </label></td>
  	        </tr>
            <tr>
    	        <td height="24" align="center" bgcolor="#99FF33">วันหมดเขต</td>
    	        <td bgcolor="#FFFFFF"><input type="text" name="promo_time" id="promo_time" />
    	        *ตัวอย่าง 2012-09-30</td>
  	        </tr>
    	      <tr>
    	        <td colspan="2" align="center" bgcolor="#FFFFFF"><input type="submit" name="Submit" id="Submit" value="ตกลง" /></td>
   	          </tr>
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