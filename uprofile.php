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
.style7 {	font-size: larger;
	font-style: italic;
	font-weight: bold;
}
-->
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif
}
.style6 {font-size: xx-large}
.style6 {	font-size: xx-large;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
-->
</style>
</head>

<body>
<table width="85%" border="0" align="center">
  <tr>
    <td width="31%" height="116"><div align="center" class="style1">
      <p class="style4 style6"><span class="style5">Way To</span> Eat</p>
    </div></td>
    <td width="69%"><table width="91%" border="0" align="center">
      <tr>
        <td width="90%"><ul class="MenuBarHorizontal style2 style3" id="MenuBar2">
          <li><a href="feedback.php"> FEEDBACK</a></li>
          <li><a href="ratings.php">RATINGS</a></li>
          <li><a href="uprofile.php">SETTINGS</a>
                  <ul>
                    <li><a href="uupdate.php">EDIT</a></li>
                    <li><a href="index.php">LOGOUT</a></li>
                  </ul>
          </li>
        </ul></td>
        <td width="3%"><span class="style7">
          <?php
		  session_start();
		  $u=$_SESSION['userid'];
		  $_SESSION['userid']=$u;
		 $you=new mysqli("localhost","root","","ff");
		 $yes="select img,uname from uregister where userid='$u'";
		$no=$you->query($yes);
		  while($go= mysqli_fetch_array($no))
	{
		$img = $go['img'];
		$name=$go['uname'];
			echo "<a href='uprofile.php'><p style='color:green'><b>".$name."</b></p></td></a>"."<td><a href='uprofile.php'><img src='".$img."' width='35' height='35' class='img_responsive' ></a>";
		}
		?>
        </span></td>
      </tr>
</table></td>
  </tr>
  <tr>
  </tr>
</table>
<div align="center"><?php echo "<td><center><img src='".$img."'width='200' height='200' border='10' class='img_responsive' ></center></br>"; ?></div>
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
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
</body>
<?php
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

