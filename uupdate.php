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
.style4 {
	font-size: larger;
	font-style: italic;
	font-weight: bold;
}
.style5 {
	color: #FF6600;
	font-size: xx-large;
}
-->
</style>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style2 {font-weight: bold;
	font-style: italic;
}
.style3 {font-family: Georgia, "Times New Roman", Times, serif}
.style6 {font-size: xx-large}
.style7 {color: #FF6600}
-->
</style>
</head>
<body>
<script>

 var check = function() {
  if (document.getElementById('password').value == document.getElementById('cpassword').value) 
  {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
function validateForm() 
	{
/*  var x = document.forms["myForm"]["uname"].value;
  var a=/^[A-Za-z_]{1,20}$/;
  if (a.test(x)==false)
  {
    alert("Name wrong");
    return false;
  }

   var y = document.forms["myForm"]["ucity"].value;
  if (a.test(y)==false) {
    alert("city wrong");
    return false;
  }*/
 
   var email=document.forms["myForm"]["uemail"].value;
   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
     
            if (reg.test(email) == false) 
            {
                alert('Invalid Email Address');
                return (false); 
            }
			
  var u = document.forms["myForm"]["uphoneno"].value;
     var reg1=/^([0-9]{10})$/;
  if(reg1.test(u) == false)
  {
     alert("Not a valid Phone Number");
     return false;
  }
  var pass=document.forms["myForm"]["unewpassword"].value;
  var cpass=document.forms["myForm"]["uconfirmpassword"].value;
  if(cpass!=pass)
  {
  alert ("incorrect password");
  return false;
  }
}
</script>
<span class="style5">  </span>
  <table width="85%" border="0" align="center">
    <tr>
      <td width="31%" height="116"><div align="center" class="style1">
          <p class="style4 style6"><span class="style7">Way To</span> Eat</p>
      </div></td>
      <td width="69%"><table width="91%" border="0" align="center">
          <tr>
            <td width="90%"><ul class="MenuBarHorizontal style2 style3" id="MenuBar3">
                <li><a href="feedback.php"> FEEDBACK</a></li>
              <li><a href="ratings.php">RATINGS</a></li>
      <li><a href="uupdate.php">SETTINGS</a>
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
		$my=new mysqli("localhost","root","","ff");	
	$sql="select * from uregister where(userid='$u')";
	$result=$my->query($sql);
		while($c=$result->fetch_array())
		{
				$u=$c[0];
				$uname=$c[1];
				$ucity=$c[2];
				$uemail=$c[3];
				$uphoneno=$c[4];
				$upass=$c[5];
				$cpass=$c[6];
				$img = $c[7];
				$_SESSION['userid']=$u;
			echo "<a href='uprofile.php'><p style='color:green'><b>".$uname."</b></p></td></a>"."<td><a href='uprofile.php'><img src='".$img."' width='35' height='35' border ='1' class='img_responsive' ></a>";
		}
		?>
            </span></td>
          </tr>
</table></td>
    </tr>
    <tr>  
    </tr>
  </table>
  <form id="myForm" name="myForm" onsubmit="return validateForm()" method="post" action="">
 
    <table width="50%" border="0" align="center">
      <tr>
      <td width="32%">Name</td>
        <th width="64%" scope="col"><div align="left">
          <input type="text" name="uname" id="uname"  value="<?php echo $uname;?>" />
        </div></th>
        
      </tr>
      <tr>
        <td>City </td>
        <td><input type="text" name="ucity" id="ucity" value="<?php echo $ucity;?>" /></td>
      </tr>
      <tr>
        <td>email</td>
        <td><input type="text" name="uemail" id="uemail" value="<?php echo $uemail;?>" /></td>
      </tr>
      <tr>
        <td>Phone no</td>
        <td><input type="text" name="uphoneno" id="uphoneno" value="<?php echo $uphoneno;?>"/></td>
      </tr>
      <tr>
        <td>New Password</td>
        <td><input type="text" name="unewpassword" id="password" value="<?php echo $upass;?>" /></td>
      </tr>
      <tr>
        <td>Confirm Password</td>
        <td><input type="password" name="uconfirmpassword" id="cpassword" value="<?php echo $cpass;?>" onkeyup="check();" />
        <span id='message'></span></td>
      </tr>
      <tr>
        <td height="80"><input type="submit" name="usubmit" id="usubmit" value="Submit"  onclick="val()"/></td>
        <td><?php
	if(isset($_POST['usubmit']))
	
	{
	$uemail=$_POST['uemail'];
	$uname=$_POST['uname'];
	$ucity=$_POST['ucity'];
	$uphoneno=$_POST['uphoneno'];
	$upass=$_POST['unewpassword'];
	$uconfirmpassword=$_POST['uconfirmpassword'];
		if($upass==$uconfirmpassword)
		{
$my=new mysqli("localhost","root","","ff");

$sql="update uregister set uname ='$uname', uemail='$uemail',ucity='$ucity',uphoneno='$uphoneno',upassword='$upass',uconfirmpassword='$uconfirmpassword' where userid='$u'";
	
$result = $my->query($sql);
	
if($result==true)
{
echo "Record updated successfully";
}
}
else
{
echo "Password mismatch";
}
	}
	?></td>
      </tr>
    </table>
    <p align="left"><label></label>
      <label></label>
      <label></label>
      <label></label>
      <label></label>
    </p>
    <table width="49%" border="0" align="center">
      <tr>
        <td><ul id="MenuBar1" class="MenuBarHorizontal">
          <li><a href="uupdate.php">Refresh</a> </li>
          <li><a href="feedback.php">Back</a></li>
        </ul></td>
      </tr>
    </table>
    <p align="left">
      <label><span id='message'></span>      </label>
    </p>
    <p align="left">
      <label></label>
    </p>
    <p align="center">&nbsp;</p>
  </form>
   <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
<p align="left">&nbsp;</p>

<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar3 = new Spry.Widget.MenuBar("MenuBar3", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
</body>

</html>
