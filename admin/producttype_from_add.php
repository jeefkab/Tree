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
    <form id="form1" name="form1" method="post" action="producttype_sql_add.php">
      <label>
      <br />
      <div align="center">
           	        <table width="413" border="1" align="center">
    	      <tr bgcolor="#99FF33">
            <td colspan="2" align="center" bgcolor="#99FF33">ประเภทของสินค้า</td>
          </tr>
          <tr>
            <td width="140" height="24" align="center" bgcolor="#99FF33">รหัสประเภทของสินค้า</td>
            <td width="260" bgcolor="#FFFFFF"><input type="text" name="producttype_id" id="product_id" /></td>
          </tr>
          <tr>
            <td height="24" align="center" bgcolor="#99FF33">ชื่อประเภทของสินค้า</td>
            <td bgcolor="#FFFFFF"><input type="text" name="producttype_name" id="product_name" /></td>
          </tr>
          <tr>
            <td colspan="2" align="center" bgcolor="#FFFFFF"><input type="submit" name="Submit" id="Submit" value="ตกลง" /></td>
          </tr>
        </table>
      </div>
      </label>
    </form>
    <center><a href="producttype_from_add.php"></a></center>
  </div>
  <div id="footer"><p> @ Pongpat ngamsub | ComputerScience | 51122420113 @ </p></div>
</div>
</body>
</html>