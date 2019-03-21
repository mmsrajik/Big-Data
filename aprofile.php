<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style type="text/css">
<!--
.style4 {
	font-size: xx-large;
	font-style: italic;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style5 {color: #FF6600}
.style6 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: x-large;
}
.style8 {
	color: #FF6600;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: x-large;
}
.style2 {	font-weight: bold;
	font-style: italic;
}
.style3 {font-family: Georgia, "Times New Roman", Times, serif}
-->
</style>
<style type="text/css">
<!--
.style9 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style11 {	font-size: larger;
	font-style: italic;
	font-weight: bold;
}
-->
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
</head>

<body>


<div align="center" class="style1">
  <p class="style4"><span class="style5">Foodies</span> Feedback</p>
</div>
<table width="63%" border="0" align="center">
  <tr>
    <td width="86%"><ul class="MenuBarHorizontal style2 style3" id="MenuBar1">
      <li><a href="afeedback.php"> FEEDBACK</a></li>
      <li><a href="aratings.php">RATINGS</a></li>
      <li><a href="aprofile.php">PROFILE</a></li>
      <li><a href="aprofile.php">SETTINGS</a>
            <ul>
              <li><a href="aupdate.php">EDIT</a></li>
              <li><a href="aindex.php">LOGOUT</a></li>
            </ul>
      </li>
    </ul></td>
    <td width="7%"><span class="style11"><?php 
	session_start();
 $hid=$_SESSION['hid'];		
			$my2=new mysqli("localhost","root","","ff");
			$dn="select timing,offers,menu,img,hname from aregister where hid='$hid'";
			$seen=$my2->query($dn);
			while($ps= mysqli_fetch_array($seen)){
			$tim=$ps['timing'];
			$men=$ps['menu'];
			$offer=$ps['offers'];
			$img = $ps['img'];
		$name=$ps['hname'];
		$_SESSION['hid']=$hid;
					echo "<p style='color:green'><b>".$name."</b></p></td>"."<td><img src='".$img."' width='35' height='35' class='img_responsive' >";			}
?></span></td>
    <td width="4%">&nbsp;</td>
    <td width="3%">&nbsp;</td>
  </tr>
</table>
<table width="50%" border="0" align="center">
  <tr>
    <td><p>&nbsp;</p>
      <p><span class="style8">DISPLAY</span><span class="style9">PICTURE:</span></p>
      <form action=" " method="post" enctype="multipart/form-data">
        <table width="69%" border="0" align="center">
          <tr>
            <td>HOTEL LOGO</td>
            <td><input type="file" name="upload" /></td>
          </tr>
          <tr>
            <td>HOTEL IMAGE</td>
            <td><input type="file" name="upload2" /></td>
          </tr>
          <tr>
            <td><input type="submit" name="upload2" value="upload file" /></td>
            <td><?php

if($_SERVER['REQUEST_METHOD'] == "POST")
{

	if(isset($_FILES['upload']))
	{

		$file_name = $_FILES['upload']['name'];
		$file_type = $_FILES['upload']['type'];
		$file_tmp_name = $_FILES['upload']['tmp_name'];
		$file_size = $_FILES['upload']['size'];
        $file_name1 = $_FILES['upload2']['name'];
		$file_type1 = $_FILES['upload2']['type'];
		$file_tmp_name1= $_FILES['upload2']['tmp_name'];
		$file_size1= $_FILES['upload2']['size'];
		
		
		$target_dir = "uploads/";
		$t=$target_dir.$file_name;
		$t1=$target_dir.$file_name1;
		if(move_uploaded_file($file_tmp_name,$target_dir.$file_name))
		{
		  if(move_uploaded_file($file_tmp_name1,$target_dir.$file_name1))
		  {
			$cdb = mysqli_connect('localhost','root','','ff') or die("Sorry could not connect to database");
		$q = "update aregister set logo='$t',img='$t1' where hid='$hid'";
			$r = mysqli_query($cdb,$q);
			
			if(mysqli_affected_rows($cdb) == 1)
			{
				echo "<p style='color:green'><center><b>update sucssefull</b></center></p>";
			}
			else
			{
			echo "<p style='color:green'><b>error</b></p>".mysqli_error($cdb);
			}
			}
			
			else {echo "upload img";}
			
		}
		else
		{
			echo "File can not be uploaded";
		}
		
		
		
		
	}
}
?></td>
          </tr>
        </table>
      </form>
      <form id="form1" name="form1" method="post" action="">
        <p><span class="style5 style6">ME</span><span class="style9">NU:</span></p>
        <table width="50%" border="0" align="center">
          <tr>
            <td><label>
              <textarea name="menu" id="menu" cols="80" rows="5" ><?php echo $men;?></textarea>
            </label></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <p><span class="style8">TRENDING</span> <span class="style9">TODAY:</span>(daily updates)</p>
        <table width="46%" height="218" border="0" align="center">
          <tr>
            <td width="22%" height="35">TIMINGS</td>
            <td width="78%"><label>
              <input type="text" name="time" id="time" value="<?php echo $tim;?>"/>
            </label></td>
          </tr>
          <tr>
            <td height="62"><p>STATUS</p>
            </td>
            <td><label>
            <select name="status" id="status2">
                <option value="available">available</option>
                <option value="unavailable">unavailable</option>
              </select>
            </label></td>
          </tr>
          <tr>
            <td height="35">OFFERS</td>
            <td><label>
              <textarea name="offers" id="offers2" cols="45" rows="5"><?php echo $offer;?></textarea>
            </label></td>
          </tr>
          <tr>
            <td><label>
              <input type="submit" name="update" id="offers" value="update"/>
            </label></td>
            <td><label>
            <?php
			if(isset($_POST['update']))
			{
			$menu=$_POST['menu'];
			$timing=$_POST['time'];
			$status=$_POST['status'];
			$offers=$_POST['offers'];
			
			$my1=new mysqli("localhost","root","","ff");
			$d="update aregister set timing='$timing',status='$status',offers='$offers',menu='$menu' where hid='$hid'";
			$see=$my1->query($d);
			
			if($see==true)
            {
            echo "<p style='color:green'><b>Record updated successfully<b></p>";
            }
          
           else
           {
			echo "cant update";
			}
	
			}
			 
			?>
              
            </label></td>
           
          </tr>
        </table>
        <p>&nbsp;</p>
      </form>
    <p></p></td>
  </tr>
</table>
<p>&nbsp;</p>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
</body>
</html>

