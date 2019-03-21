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

<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style7 {font-size: x-large}
-->
</style>
</head>

<body>
<?php session_start();?>
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
 
   var email=document.forms["myForm"]["auemail"].value;
   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
     
            if (reg.test(email) == false) 
            {
                alert('Invalid Email Address');
                return (false); 
            }
			 var hemail=document.forms["myForm"]["huemail"].value;
   var hreg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
     
            if (hreg.test(hemail) == false) 
            {
                alert('Invalid hotel Email Address');
                return (false); 
            }
			var y = document.forms["myForm"]["hupincode"].value;
     var reg2=/^([0-9]{6})$/;
  if(reg2.test(y) == false)
  {
 
     alert("Not a valid pincode");
     return false;
  }
			
  var u = document.forms["myForm"]["huphoneno"].value;
     var reg1=/^([0-9]{10})$/;
  if(reg1.test(u) == false)
  {
 
     alert("Not a valid Phone Number");
     return false;
  }
    var pass=document.forms["myForm"]["apassword"].value;
  var cpass=document.forms["myForm"]["aconfirmpassword"].value;
  if(cpass!=pass)
  {
  alert ("incorrect password");
  return false;
  }
 
 
  
}


</script>
<h1>
    <div align="center" class="style1">
  <p class="style4 style7"><span class="style5">Foodies</span> Feedback</p>
</div>
</h1>  
  <table width="63%" border="0" align="center">
    <tr>
      <td width="86%"><ul class="MenuBarHorizontal style2 style3" id="MenuBar2">
          <li><a href="afeedback.php"> FEEDBACK</a></li>
        <li><a href="aratings.php">RATINGS</a></li>
        <li><a href="aprofile.php">PROFILE</a></li>
    <li><a href="aupdate.php">SETTINGS</a>
              <ul>
                <li><a href="aupdate.php">EDIT</a></li>
                <li><a href="aindex.php">LOGOUT</a></li>
              </ul>
        </li>
      </ul></td>
      <td width="7%"><span class="style4">
        <?php
		
		$u=$_SESSION['hid'];
		$_SESSION['hid']=$u;
		$my=new mysqli("localhost","root","","ff");	
	$sql="select * from aregister where(hid='$u')";   
	$result=$my->query($sql);
	
	  
		while($c=$result->fetch_array())
		{
				$h=$c[0];
				$aname=$c[1];
				$acity=$c[2];
				$aemail=$c[3];
				$hname=$c[4];
				$hadd=$c[5];
				$hcity=$c[6];
				$hpin=$c[7];
				$hemail=$c[8];
				$hphoneno=$c[9];
				$apass=$c[10];
				$cpass=$c[11];
				
				$img = $c['18'];
			echo "<p style='color:green'><b>".$hname."</b></p></td>"."<td><img src='".$img."' width='35' height='35' class='img_responsive' >";
		}
		?>
      </span></td>
      <td width="4%">&nbsp;</td>
      <td width="3%">&nbsp;</td>
    </tr>
    </table>
  <form  name="myForm" onsubmit="return validateForm()" method="post" action="">
    <table width="35%" border="0" align="center">
      <tr>
        <td height="36">Admin Name
        <label></label></td>
        <td><input type="text" name="auname" id="auname" value="<?php echo $aname; ?>"/></td>
      </tr>
      <tr>
        <td height="33">City</td>
        <td><input type="text" name="aucity" id="aucity" value="<?php echo $acity; ?>"/></td>
      </tr>
      <tr>
        <td height="42">Admin email (ID)</td>
        <td><input type="text" name="auemail" id="auemail" value="<?php echo $aemail; ?>"/></td>
      </tr>
      <tr>
        <td height="37">Hotel Name</td>
        <td><input type="text" name="huname" id="huname" value="<?php echo $hname; ?>"/></td>
      </tr>
      <tr>
        <td>Hotel Address
          <label></label></td>
        <td><input type="text" name="huaddress" id="huaddress" value="<?php echo $hadd; ?>"/></td>
      </tr>
      <tr>
        <td height="37">City</td>
        <td><input type="text" name="hucity" id="hucity" value="<?php echo $hcity; ?>"/></td>
      </tr>
      <tr>
        <td height="35">pincode
        <label></label></td>
        <td><input type="text" name="hupincode" id="hupincode" value="<?php echo $hpin;?>"/></td>
      </tr>
      <tr>
        <td height="33">Hotel email</td>
        <td><input type="text" name="huemail" id="huemail" value="<?php echo $hemail;?>"/></td>
      </tr>
      <tr>
        <td height="32">Phone no:</td>
        <td><input type="text" name="huphoneno" id="huphoneno" value="<?php echo $hphoneno;?>"/></td>
      </tr>
      <tr>
        <td height="33">New Password
        <label></label></td>
        <td><input type="password" name="aunewpassword" id="password" value="<?php echo $apass;?>"/></td>
      </tr>
      <tr>
        <td height="32">Confirm Password</td>
        <td><input type="password" name="auconfirmpassword" id="cpassword"value="<?php echo $cpass;?>" onkeyup="check();"/></td>
      </tr><tr><td><td><span id='message'></span></td></td></tr>
      <tr>
        <td height="50"><input type="submit" name="ausubmit" id="ausubmit"  /></td>
        <td><?php
	if(isset($_POST['ausubmit']))
	
	{
	            $aname=$_POST['auname'];
				$acity=$_POST['aucity'];
				$aemail=$_POST['auemail'];
				$hname=$_POST['huname'];
				$hadd=$_POST['huaddress'];
				$hcity=$_POST['hucity'];
				$hpin=$_POST['hupincode'];
				$hemail=$_POST['huemail'];
				$hphoneno=$_POST['huphoneno'];
				$apass=$_POST['aunewpassword'];
	$aconfirmpassword=$_POST['auconfirmpassword'];
		if($apass==$aconfirmpassword)
		{
		
$my=new mysqli("localhost","root","","ff");

$sql="update aregister set aname ='$aname', aemail='$aemail',acity='$acity',hname ='$hname', hemail='$hemail',hcity='$hcity',hphoneno='$hphoneno',apassword='$apass' ,hpincode='$hpin',haddress='$hadd',aconfirmpassword='$aconfirmpassword' where hid='$u'";
	
$result = $my->query($sql);
	
if($result==true)
{
echo "Record updated successfully";
}
}
else
{echo "password mismatch";}
	}
	?></td>
      </tr>
  </table>
    <p align="left">
      <label></label>
    </p>
</form>
   <table width="27%" border="0" align="center">
     <tr>
       <td><ul id="MenuBar1" class="MenuBarHorizontal">
           <li><a href="aupdate.php">Refresh</a> </li>
         <li><a href="afeedback.php">Back</a></li>
       </ul></td>
     </tr>
</table>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="left">&nbsp;</p>

<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
</body>

</html>
