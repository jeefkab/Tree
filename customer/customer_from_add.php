<?
include("../connect/connect_mysql.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>สมาชิก</title>
<link rel="stylesheet" type="text/css" href="../css/styles.css"/>
</head>

<body>
<div id="wrapper">
	<div id="header">
    </div>    
    	<div id="navbar">
                	<ul><li><a href="#">ติดต่อเรา</a></li>
                    	<li><a href="#">กระดานสนทนา</a></li>
						<li><a href="customer_from_add.php">สมาชิก</a> </li>
                      	<li><a href="#">สินค้า</a></li>
                      	<li><a href="../index.php">หน้าแรก</a></li>
					</ul>
        </div>

<div id="content">
  <div id="right">
    <form id="form1" name="form1" method="post" action="customer_sql_add.php">
      <table width="400" border="1">
        <tr bgcolor="#99ff33">
          <td colspan="2"><center>
            ข้อมูลสมาชิก
          </center></td>
        </tr>
        <tr>
          <td width="200" bgcolor="#99ff33">ชื่อผู้ใช้</td>
          <td><input type="text" name="customer_username" id="customer_username" /></td>
        </tr>
        <tr>
          <td bgcolor="#99ff33">รหัสผ่าน</td>
          <td><input type="text" name="customer_password" id="customer_password" />
          *6-10 หลัก</td>
        </tr>
        <tr>
          <td bgcolor="#99ff33">ชื่อ</td>
          <td><input type="text" name="customer_name" id="customer_name" /></td>
        </tr>
        <tr>
          <td bgcolor="#99ff33">นามสกุล</td>
          <td><input type="text" name="customer_lname" id="customer_lname" /></td>
        </tr>
        <tr>
          <td bgcolor="#99ff33">เพศ</td>
          <td><input type="text" name="customer_sex" id="customer_sex" /></td>
        </tr>
        <tr>
          <td bgcolor="#99ff33">ที่อยู่</td>
          <td><textarea name="customer_address" id="customer_address" cols="35" rows="5"></textarea></td>
        </tr>
        <tr>
          <td bgcolor="#99ff33">เบอร์โทรศัพย์</td>
          <td><input type="text" name="customer_tell" id="customer_tell" /></td>
        </tr>
        <tr>
          <td bgcolor="#99ff33">อีเมล์</td>
          <td><input type="text" name="customer_email" id="customer_email" /></td>
        </tr>
        <tr>
          <td bgcolor="#99ff33">อาชีพ</td>
          <td><input type="text" name="customer_career" id="customer_career" /></td>
        </tr>
        <tr>
          <td bgcolor="#99ff33">รูปภาพ</td>
          <td><input type="file" name="product_picture" id="product_picture" /></td>
        </tr>
      </table>
      <p><center>
        <input type="submit" name="button" id="button" value="ลบ" />
        <input type="submit" name="button2" id="button2" value="บันทึก" />
      </center></p>
    </form>
  <p><center>
  </center>
  </p>
  </div>
  </div>
    <div id="footer"><p> @ Pongpat ngamsub | ComputerScience | 51122420113 @ </p></div>
</div>
</body>
</html>