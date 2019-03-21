<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
<meta name="20" content="" />
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif
}
-->
</style>

<style type="text/css">
<!--
.style2 {
	font-weight: bold;
	font-style: italic;
}
.style3 {font-family: Georgia, "Times New Roman", Times, serif}
-->
</style>

<style type="text/css">
<!--
.style4 {
	font-size: larger;
	font-style: italic;
	font-weight: bold;
}
.style5 {color: #FF6600}
-->
</style>

<style type="text/css">
<!--
.style6 {font-size: xx-large}
-->
</style>


<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style8 {font-size: xx-large}
.style8 {	font-size: xx-large;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style9 {	font-size: xx-large;
	font-style: italic;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style10 {font-size: xx-large}
.style10 {font-size: xx-large;
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
            <td width="90%"><ul class="MenuBarHorizontal style2 style3" id="MenuBar">
                <li><a href="feedback.php"> FEEDBACK</a></li>
              <li><a href="ratings.php">RATINGS</a></li>
              <li><a href="uprofile.php">SETTINGS</a>
                    <ul>
                      <li><a href="uupdate.php">EDIT</a></li>
                      <li><a href="index.php">LOGOUT</a></li>
                    </ul>
              </li>
            </ul></td>
            <td width="3%"><span class="style4">
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
			echo "<a href='uprofile.php'><p style='color:green'><b>".$name."</b></p></td></a>"."<td><a href='uprofile.php'><img src='".$img."' width='35' height='35' border ='1' class='img_responsive' ></a>";
		}
		?>
            </span></td>
          </tr>
</table></td>
    </tr>
   
   
  </table>
  <p>&nbsp;</p>
<p>rating</p>
<p>&nbsp;</p>
  


<script type="text/javascript">
<!--
var MenuBar = new Spry.Widget.MenuBar("MenuBar", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
</body>

</html>
