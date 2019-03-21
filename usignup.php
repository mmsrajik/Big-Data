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
var mail=function(){
              var s=document.getElementById('uemail').value;
			  var reg = /^([A-Za-z0-9_\-\.])+\@$/;
			  if(reg.test(s)==true)
			  {
    document.getElementById('uemail').value= s+'gmail.com';
  }

}
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
  var pass=document.forms["myForm"]["upassword"].value;
  var cpass=document.forms["myForm"]["uconfirmpassword"].value;
  if(cpass!=pass)
  {
  alert ("incorrect password");
  return false;
  }
 
  
}


</script>
<h1>
  <div align="center" class="style1">
    <p class="style4"><span class="style5"> Foodies</span> Feedback</p>
  </div>
</h1>
<form name="myForm" onsubmit="return validateForm()" method="post">
  <p>&nbsp;</p>
  <table width="40%" border="0" align="center">
    <tr>
      <th scope="col"><div align="left">UserId</div>
        <label></label></th>
      <th scope="col"><div align="left">
        <input type="text" name="userid" required="required" />
      </div></th>
    </tr>
    <tr>
      <td>Name </td>
      <td><input type="text" name="uname" required="required" /></td>
    </tr>
    <tr>
      <td>City </td>
      <td><input type="text" name="ucity"required="required" /></td>
    </tr>
    <tr>
      <td>email</td>
      <td><input type="text" name="uemail" id="uemail" required="required" onkeyup="mail();"></td>
    </tr>
    <tr>
      <td>Phone no</td>
      <td><input type="text" name="uphoneno" required="required"></td>
    </tr>
    <tr>
      <td>Password </td>
      <td><input type="password" name="upassword" id="password"  required="required"></td>
    </tr>
    <tr>
      <td>Confirm Password </td>
      
      <td><input type="password" name="uconfirmpassword"  id="cpassword" required="required" onkeyup="check();"/>
    </td><tr><td> <span id='message'></span></td></tr>
      
    
      <td><input type="submit" name="usubmit"  /></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>  


  <p align="left">&nbsp;  </p>

  <table width="36%" border="0" align="center">
    <tr>
      <td><?php
	  
	  	if(isset($_POST['usubmit']))
		{    
		  
			$my=new mysqli("localhost","root","","ff");
			$uid=$_POST['userid'];
			$uname=$_POST['uname'];
			$ucity=$_POST['ucity'];
			$uemail=$_POST['uemail'];
			$uphoneno=$_POST['uphoneno'];
			$unewpassword=$_POST['upassword'];
			$uconfirmpassword=$_POST['uconfirmpassword'];
			$sqlnew="insert into uregister(userid,uname,ucity,uemail,uphoneno,upassword,uconfirmpassword)values('$uid','$uname','$ucity','$uemail','$uphoneno','$unewpassword','$uconfirmpassword')";
			 $result=$my->query($sqlnew);
		 
		   if($result==false)
		 	    {
			 echo "check program";
			  
	        }
		    else
		     {
		       echo "Account created";?>
        <input type="button" name="login" value="login"onclick="window.location.href='index.php'"/>
        <?php
		     }
			
	}
		
	  ?></td>
    </tr>
  </table>
  <p align="left">&nbsp;</p>
<p align="left">&nbsp;</p>
<p align="left">&nbsp;</p>
    <p align="center">&nbsp;</p>
  
  
 
<p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
<p align="left">&nbsp;</p>
</body>

</html>

