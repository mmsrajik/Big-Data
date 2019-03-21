<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

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
.error{color:#FF0000}
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
var mail=function(){
              var s=document.getElementById('aemail').value;
			  var reg = /^([A-Za-z0-9_\-\.])+\@$/;
			  if(reg.test(s)==true)
			  {
    
    document.getElementById('aemail').value= s+'gmail.com';
  }

}
var hmail=function(){
              var s=document.getElementById('hemail').value;
			  var reg = /^([A-Za-z0-9_\-\.])+\@$/;
			  if(reg.test(s)==true)
			  {
    
    document.getElementById('hemail').value= s+'gmail.com';
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
 
   var email=document.forms["myForm"]["aemail"].value;
   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
     
            if (reg.test(email) == false) 
            {
                alert('Invalid Email Address');
                return (false); 
            }
			 var hemail=document.forms["myForm"]["hemail"].value;
   var hreg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
     
            if (hreg.test(hemail) == false) 
            {
                alert('Invalid hotel Email Address');
                return (false); 
            }
			var y = document.forms["myForm"]["hpincode"].value;
     var reg2=/^([0-9]{6})$/;
  if(reg2.test(y) == false)
  {
 
     alert("Not a valid pincode");
     return false;
  }
			
  var u = document.forms["myForm"]["hphoneno"].value;
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
<?php session_start();?>


  <h1>
    <div align="center" class="style1">
  <p class="style4"><span class="style5">Foodies</span> Feedback</p>
  </div>
</h1>  
<form  name="myForm" onsubmit="return validateForm()" enctype="multipart/form-data" method="post">
<div align="center">
  <table width="33%" border="0" align="center">
        <tr>
          <td>Hotel id
            <label></label></td>
          <td><input type="text" name="hid" id="hid" /></td>
        </tr>
        <tr>
          <td>Admin Name</td>
          <td><input type="text" name="aname"      required="required" /></td>
        </tr>
        <tr>
          <td>City</td>
          <td><input type="text" name="acity"    required="required"  /></td>
        </tr>
        <tr>
          <td>Admin email (ID)</td>
          <td><input type="text" name="aemail" id="aemail"  required="required" onkeyup="mail();" />
         
          </td>
          
        </tr>
        <tr>
          <td>Hotel Name</td>
          <td><input type="text" name="hname"    required="required"  /></td>
        </tr>
        <tr>
          <td>Hotel Address</td>
          <td><input type="text" name="haddress" required="required"  /></td>
        </tr>
        <tr>
          <td>Hotel City </td>
          <td><input type="text" name="hcity"    required="required"  /></td>
        </tr>
        <tr>
          <td>pincode </td>
          <td><input type="text" name="hpincode" required="required"  /></td>
        </tr>
        <tr>
          <td>Hotel email</td>
          <td><input type="text" name="hemail" id="hemail" required="required" onkeyup="hmail();"/> </td>
        </tr>
        <tr>
          <td>Phone no </td>
          <td><input type="text" name="hphoneno" required="required"  /></td>
        </tr>
          
      <tr>
    <td>HOTEL LOGO</td>
    <td><input type="file" name="upload" /></td>
  </tr>
  <tr>
    <td>HOTEL IMAGE</td>
    <td><input type="file" name="upload2" /></td>
  </tr>
        
        <tr>
          <td>Password</td>
          <td><input type="password" name="apassword" id="password"  required="required" /></td>
        </tr>
        <tr>
          <td>Confirm Password</td>
          <td><input type="password" name="aconfirmpassword"  id="cpassword" required="required" onkeyup="check();" />
          </td><tr><td><td><span id='message'></span></td></td></tr> 
        </tr>
        <tr>
          <td><input type="submit" name="asubmit"/></td>
          <td>&nbsp;</td>
        </tr>
      </table>
  </div>
    </form>
<table width="48%" border="0" align="center">
  <tr>
    <td height="75"><div align="center">
      <?php 
	
	if(isset($_POST['asubmit']))
	{	
		
		$my=new mysqli("localhost","root","","ff");
		
			$hid=$_POST['hid'];
			
			
			$aname=$_POST['aname'];
			$acity=$_POST['acity'];
			$aemail=$_POST['aemail'];
			$hname=$_POST['hname'];
			$haddress=$_POST['haddress'];
			$hcity=$_POST['hcity'];
			$hpincode=$_POST['hpincode'];
			$hemail=$_POST['hemail'];
			$hphoneno=$_POST['hphoneno'];
			$apassword=$_POST['apassword'];
			$aconfirmpassword=$_POST['aconfirmpassword'];
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
			$sqlnew="INSERT INTO aregister(hid,aname,acity,aemail,hname,haddress,hcity,hpincode,hemail,hphoneno,apassword,aconfirmpassword,logo,img)VALUES('$hid','$aname','$acity','$aemail','$hname','$haddress','$hcity','$hpincode','$hemail','$hphoneno','$apassword','$aconfirmpassword','$t','$t1')";
			
				 $result=$my->query($sqlnew);
			
		
		     if($result==true)
		{
				echo "<p style='color:green'><b>File has been successfully uploaded</b></p>";
				 echo "Account created";
			 ?>
      <input type="button" name="login" value="login"onclick="window.location.href='aindex.php'"/>
      <?php
			}
			else
			{
			echo "<p>A system error has been occured</p>";
			}
			}
			}
			else {echo "upload img";}
			
			}


	
	  	
	  ?>
    </div></td>
  </tr>
</table>
<p align="left">&nbsp;</p>
</body>

</html>
