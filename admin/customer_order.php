<?
include("../connect/connect_mysql.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>รายงานการสั้งซื้อสินค้า</title>
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
        <p>รายงานการสั้งซื้อสินค้า</p>
        <p align="left">วันที่ 
          <label>
            <select name="select" id="select">
            </select>
          </label>
        เดือน
        <label>
          <select name="select2" id="select2">
          </select>
        </label>
        พ.ศ.
        <label>
          <select name="select3" id="select3">
          </select>
        </label>
        -
        วันที่ 
          <label>
            <select name="select4" id="select4">
            </select>
          </label>
เดือน
<label>
  <select name="select4" id="select5">
  </select>
</label>
พ.ศ.
<label>
  <select name="select4" id="select6">
  </select>
</label>
        </p>
        <p align="left">ชื่อ
          <label>
            <select name="select7" id="select7">
            </select>
          </label>
          <label>
            <input type="submit" name="button3" id="button3" value="ทั้งหมด" />
          </label>
        </p>
        <p align="left">ที่อยู่</p>
      </div>
      <div align="center">
           	        <table width="893" border="1" align="center">
    	      <tr bgcolor="#FFFF33">
    	        <td width="34" align="center">ลำดับ</td>
    	        <td width="89" align="center">เลขที่ใบสั่งซื้อ</td>
    	        <td width="123" align="center">สถานะการชำระเงิน </td>
                <td width="100" align="center">วันที่สั่งสินค้า</td>
                <td width="108" align="center">กำหนดส่งสินค้า</td>
    	        <td width="82" align="center">ประเภทสินค้า</td>
                <td width="62" align="center">รหัสสินค้า</td>
                <td width="81" align="center">ชื่อสินค้า</td>
    	        <td width="78" align="center">จำนวนสินค้า</td>
    	        <td width="72" align="center">ราคา</td>
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
    <center></center>
  </div>
  <div id="footer"><p> @ Pongpat ngamsub | ComputerScience | 51122420113 @ </p></div>
</div>
</body>
</html>