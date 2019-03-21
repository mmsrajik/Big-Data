<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {	font-family: Verdana, Arial, Helvetica, sans-serif
}
.style5 {color: #FF6600}
.style2 {	font-weight: bold;
	font-style: italic;
}
.style3 {font-family: Georgia, "Times New Roman", Times, serif}
-->
</style>

<style type="text/css">
<!--
.style9 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style8 {	color: #FF6600;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: x-large;
}
.style10 {font-size: x-large}
.style4 {	font-size: larger;
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
.style6 {	font-size: xx-large
}
-->
</style>
</head>

<body>
<table width="85%" border="0" align="center">
  <tr>
    <td width="31%" height="116"><div align="center" class="style1">
      <p class="style4 style6"><span class="style5">Foodies</span> Feedback</p>
    </div></td>
    <td width="69%"><table width="82%" border="0" align="center">
      <tr>
        <td width="96%"><ul class="MenuBarHorizontal style2 style3" id="MenuBar">
          <li><a href="feedback.php"> FEEDBACK</a></li>
          <li><a href="ratings.php">RATINGS</a></li>
          <li><a href="hotel.php">SETTINGS</a>
                  <ul>
                    <li><a href="uupdate.php">EDIT</a></li>
                    <li><a href="index.php">LOGOUT</a></li>
                  </ul>
          </li>
        </ul></td>
        <td width="4%"><span class="style4">
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
			echo "<a href='uprofile.php'><p style='color:green'><b>".$name."</b></p></td></a>"."<td><a href='uprofile.php'><img src='".$img."' width='35' height='35' border ='1'
			 class='img_responsive' ></a>";
		}
		?>
        </span></td>
      </tr>
</table></td>
  </tr>
  <tr> </tr>
 
</table>
<table width="52%" border="0" align="center">

  
  <?php
$hid=$_GET['hid'];

$my=new mysqli("localhost","root","","ff");
$sql="select * from aregister where hid='$hid'";
$res=$my->query($sql);
       while($a=$res->fetch_array())
	   { 
	   $v=$a[12]+1;
		$sq="update aregister set views='$v' where hid='$hid'";
	$re=$my->query($sq);
		  ?> 
	   
	   <tr>
    <td><div align="center"><img src="<?php echo $a[18]; ?>" class="img-responsive" /></div></td>
  </tr>
  
  <tr>
    <td>
      
      <div align="center"><?php echo "<b>".$a[4]."</b>"; ?></div></td>
  </tr>
  <tr>
    <td><div align="center"><?php echo $a[5]; ?></div></td>
  </tr>
  <tr>
    <td><div align="center"><?php echo $a[6]; ?></div></td>
  </tr>
  <tr>
    <td><div align="center"><?php echo$a[7]; ?></div></td>
  </tr>
  <tr>
    <td><div align="center"><?php echo $a[8]; ?></div></td>
  </tr>
  
  <tr>
    <td><div align="center"><?php echo $a[9]; ?></div></td>
  </tr>
  <tr>
    <td><div align="center">
      <p align="left"><span class="style5 style6 style1 style10">ME</span><span class="style9">NU:</span></p>
      <p align="left"><?php echo $a[15]; ?>&nbsp;</p>
    </div></td>
  </tr>
  <tr>
    <td><div align="left">
      <p><span class="style8">TRENDING</span> <span class="style9">TODAY:</span>(Offers)</p>
      <p><?php echo $a[14]; }?>&nbsp;</p>
      <p>&nbsp;</p>
    </div></td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
  </tr>

</table>
<p>&nbsp;</p>
<p>&nbsp;</p>

<script type="text/javascript">
<!--
var MenuBar = new Spry.Widget.MenuBar("MenuBar", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
</body>
</html>
