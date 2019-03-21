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
.style6 {
	font-size: xx-large
}
-->
</style>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style8 {font-size: large}
.style9 {font-weight: bold}
-->
</style>
</head>

<body>
  <h1><div align="center" class="style1">
  <p class="style4 style6"><span class="style5">Way To</span> Eat</p>
  </div>
</h1>  
  <h2>
    <div align="center"></div>
</h2>
  <table width="63%" border="0" align="center">
    <tr>
      <td width="86%"><ul class="MenuBarHorizontal style2 style3" id="MenuBar1">
          <li><a href="afeedback.php"> FEEDBACK</a></li>
        <li><a href="aratings.php">RATINGS</a></li>
        <li><a href="aprofile.php">PROFILE</a></li>
        <li><a href="afeedback.php">SETTINGS</a>
              <ul>
                <li><a href="aupdate.php">EDIT</a></li>
                <li><a href="aindex.php">LOGOUT</a></li>
              </ul>
        </li>
      </ul></td>
      <td width="7%"><span class="style4">
        <?php
		  session_start();
		  $u=$_SESSION['hid'];
		  $_SESSION['hid']=$u;
		 $you=new mysqli("localhost","root","","ff");
		 $yes="select img,hname from aregister where hid='$u'";
		$no=$you->query($yes);
		  while($go= mysqli_fetch_array($no))
	{
		$img = $go['img'];
		$name=$go['hname'];
			echo "<p style='color:green'><b>".$name."</b></p></td>"."<td><img src='".$img."' width='35' height='35' class='img_responsive' >";
		}
		?>
      </span></td>
      <td width="4%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
    </tr>
    </table>
  <table width="63%" border="0" align="center">
    <tr>
      <td><li><span class="style5 style6 style8"><em><strong>FEEDBACK'S</strong></em></span><span class="style6 style8"><em><strong> FROM CUSTOMER:</strong></em></span>
      
        <p>
          <?php
		 $hn=$name;
		 $dis=new mysqli("localhost","root","","ff");
		 $display="select feed from feed where hname='$hn'";
		$resdis=$dis->query($display);
		  while($resdisplay= mysqli_fetch_array($resdis))
	{
		
		$feed=$resdisplay['feed'];
		echo "<h3>".$feed."</h3>";
			
		}
		?>
      </p>
      </td>
    </tr>
  </table>
  <p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
          <script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
</body>

</html>
