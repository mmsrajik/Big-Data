<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IMAGE UPLOAD</title>
<style type="text/css">
<!--
.style4 {
	font-size: xx-large;
	font-style: italic;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style5 {color: #FF6600}
.style2 {	font-weight: bold;
	font-style: italic;
}
.style3 {font-family: Georgia, "Times New Roman", Times, serif}
-->
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div align="center" class="style1">
  <p class="style4"><span class="style5">Way To</span> Eat</p>
</div>
<table width="50%" border="0" align="center">
  <tr>
    <th scope="col"><div align="center">
      <ul class="MenuBarHorizontal style2 style3" id="MenuBar1">
        <li><a href="feedback.php"> FEEDBACK</a></li>
        <li><a href="ratings.php">RATINGS</a></li>
        <li><a href="profile.php">PROFILE</a></li>
        <li><a href="feedback.php" class="MenuBarItemSubmenu">SETTINGS</a>
              <ul>
                <li><a href="uupdate.php">EDIT</a></li>
                <li><a href="index.php">LOGOUT</a></li>
              </ul>
        </li>
      </ul>
    </div></th>
  </tr>
</table>
<form action=" " method="post" enctype="multipart/form-data">
  <table width="50%" border="0" align="center">
  <tr>
    <td>PROFILE PICTURE</td>
    <td><input type="file" name="upload" /></td>
  </tr>
  <tr>
    <td><input type="submit" name="upload" value="upload file" /></td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
</form>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
</body>
<?php
session_start();

$u=$_SESSION['userid'];
	
 
// check for form request method
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	if(isset($_FILES['upload']))
	{
		$file_name = $_FILES['upload']['name'];
		$file_type = $_FILES['upload']['type'];
		$file_tmp_name = $_FILES['upload']['tmp_name'];
		$file_size = $_FILES['upload']['size'];
		$target_dir = "uploads/";
		
		$t=$target_dir.$file_name;
		if(move_uploaded_file($file_tmp_name,$target_dir.$file_name))
		{
			$cdb = new mysqli('localhost','root','','ff');
			$q = "update uregister set img='$t' where userid='$u'";
			$m=$cdb->query($q);
			if($m==true)
			{
			echo"success";
			}
			else{echo "error";}
		}
		else
		{
			echo "File can not be uploaded";
		}
		
		
		
		
	}
}
?>
</html>

