<?
include("../connect/connect_mysql.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>รายงานการขายสินค้า</title>
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
        <p>รายงานการขายสินค้า</p>
        <p align="left">วันที่
          <label>
            <select name="select2" id="select2">
            </select>
          </label>
เดือน
<label>
  <select name="select2" id="select3">
  </select>
</label>
พ.ศ.
<label>
  <select name="select3" id="select4">
  </select>
</label>
-
        วันที่
<label>
  <select name="select4" id="select5">
  </select>
</label>
เดือน
<label>
  <select name="select4" id="select6">
  </select>
</label>
พ.ศ.
<label>
  <select name="select4" id="select7">
  </select>
</label>
        </p>
        <p align="left">ชื่อสินค้า
          <label>
            <select name="select" id="select">
            </select>
          </label>
          ประเภทสินค้า
<label>
            <select name="select5" id="select8">
            </select>
          </label>
          ราคาสินค้า
<label>
          <input type="text" name="textfield" id="textfield" />
        </label>
        </p>
        <p>
          <label>
            <center><input type="submit" name="button5" id="button5" value="ค้นหา" />
              <input type="submit" name="button3" id="button3" value="ค้นหาทั้งหมด" />
            </center>
          </label>
        </p>
      </div>
      <div align="center">
<table width="644" border="1" align="center">
    	      <tr bgcolor="#FFFF33">
    	        <td width="76" align="center">รหัสสินค้า</td>
    	        <td width="93" align="center">ชื่อสินค้า</td>
    	        <td width="123" align="center">ประเภทสินค้า</td>
                <td width="107" align="center">ราคาสินค้า/หน่วย</td>
                <td width="78" align="center">จำนวนสินค้า</td>
                <td width="127" align="center">ราคารวมสินค้า</td>
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
    	        <td bgcolor="#FFFFFF">&nbsp;</td>
    	        <td bgcolor="#FFFFFF">&nbsp;</td>
                <td bgcolor="#FFFFFF">&nbsp;</td>
                <td bgcolor="#FFFFFF">&nbsp;</td>
                <td bgcolor="#FFFFFF">&nbsp;</td>
                <td bgcolor="#FFFFFF">&nbsp;</td>
          </tr>
    	      <?
	}
	?>
        </table>
     
      </div>
      </label>
    </form>
          <table width="646" border="1" align="center">
        <tr>
          <td width="494" bgcolor="#FFFFFF"><div align="right">รวมราคาทั้งหมด</div></td>
          <td width="121" bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
      </table>
    <center></center>
  </div>
  <div id="footer"><p> @ Pongpat ngamsub | ComputerScience | 51122420113 @ </p></div>
</div>
</body>
</html>