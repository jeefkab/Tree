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
    <p align="center">ยินดีต้อนรับ Name _____ 
      <input type="submit" name="button" id="button" value="ออกจากระบบ" />
    </p>
    <div align="center">
      <form action="product_sql_update.php" method="post" enctype="multipart/form-data" name="form2" id="form2">
                              <?  $sql="SELECT *
						FROM product
						where product_id='$product_id'";
						$result= mysql_query ($sql) or die(mysql_error());
						while ($data = mysql_fetch_array($result)){
						?>
        <p>&nbsp;</p>
        <table width="400" border="1" align="center">
          <tr bgcolor="#99FF33">
            <td colspan="2" align="center">สินค้า และประเภทของสินค้าได้</td>
          </tr>
          <tr>
            <td width="140" height="24" align="center" bgcolor="#99FF33">รหัสสินค้า</td>
            <td width="260" bgcolor="#FFFFFF"><? echo $data["product_id"]?></td>
          </tr>
          <tr>
            <td height="24" align="center" bgcolor="#99FF33">ชื่อสินค้า</td>
            <td bgcolor="#FFFFFF"><input type="text" name="product_name" id="product_name" value="<? echo $data["product_name"]?>"/></td>
          </tr>
          <tr>
            <td height="24" align="center" bgcolor="#99FF33">ประเภท</td>
            <td bgcolor="#FFFFFF"><input type="text" name="product_type" id="product_type" value="<? echo $data["product_type"]?>"/></td>
          </tr>
          <tr>
            <td align="center" bgcolor="#99FF33">รายละเอียด</td>
            <td bgcolor="#FFFFFF"><label>
              <textarea name="product_des" id="product_des" cols="45" rows="5"></textarea>
            </label></td>
          </tr>
          <tr>
          <td height="24" align="center" bgcolor="#99FF33">ราคา</td>
          <td bgcolor="#FFFFFF"><input type="text" name="product_price" id="product_price" value="<? echo $data["product_price"]?>"/></td>
          </tr>
          <tr>
          <td height="24" align="center" bgcolor="#99FF33">จำนวนคงเหลือ</td>
          <td bgcolor="#FFFFFF"><input type="text" name="product_stock" id="product_stock" value="<? echo $data["product_stock"]?>"/></td>
          </tr>
          <tr>
            <td align="center" bgcolor="#99FF33">รูปภาพ</td>
            <td bgcolor="#FFFFFF"><label>
              <input type="file" name="product_picture" id="product_picture" value="<? echo $data["product_picture"]?>" />
            </label></td>
          </tr>
          <tr>
            <td colspan="2" align="center" bgcolor="#FFFFFF"><input type="submit" name="Submit" id="Submit" value="ตกลง" /></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <? } ?>
      </form>
    </div>
    <p>&nbsp;</p>
</div>
  <div id="footer"><p> @ Pongpat ngamsub | ComputerScience | 51122420113 @ </p></div>
</div>
</body>
</html>