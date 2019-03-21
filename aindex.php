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
              var s=document.getElementById('alemail').value;
			  var reg = /^([A-Za-z0-9_\-\.])+\@$/;
			  if(reg.test(s)==true)
			  {
    
    document.getElementById('alemail').value= s+'gmail.com';
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
.style6 {
	font-size: large;
	font-weight: bold;
}
.style7 {font-size: xx-large}
-->
</style>
</head>

<body>
<h1><div align="center" class="style1">
  <p class="style4 style7"><span class="style5">Way To</span> Eat</p>
  </div>
</h1>  
  <h2 align="center">&nbsp;</h2>
  <form id="form" name="form"  method="post" >
    <table width="50%" border="0" align="center">
      <tr>
        <td width="36%" height="31"><span class="style6">Email or Admin name</span></td>
        <td width="64%"><input type="text" name="alemail" id="alemail" onkeyup="mail();" /></td>
      </tr>
      <tr>
        <td height="44"><span class="style6">Password</span></td>
        <td><input type="password" name="alpassword" id="alpassword"  /></td>
      </tr>
      <tr>
        <td height="49"><input type="submit"  name="submit" value="submit" /> </td>
        <td><input type="submit" name="asignup" id="asignup" value="HotelSignup" /></td>
      </tr>
    </table>
    <p align="center">
      <label></label>
    </p>
    <p align="center">
      <label></label>
      <label></label>
    </p>
    <p align="center">
      <label></label>
    </p>
    <p align="center">
      <label></label>
      <label></label>
    </p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
  </form>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="left">
  <?php
         if(isset($_POST['asignup']))
		 {
		 header("location:asignup.php");
		 }
   
       
		if(isset($_POST['submit']))
		{  
		    session_start();
		    $c=$_POST['alemail'];
		   $d=$_POST['alpassword'];
           
		  
     $my=new mysqli("localhost","root","","ff");
       $sqlnew="select * from aregister where (hemail='$c')or (aname='$c')and(apassword='$d')";
	   
          $result=$my->query($sqlnew);
	
		
          if($result->num_rows==0)
         {
		 echo "</br> ". "Wrong password or invalid email";
		 }
		 else
		 {
		  
		  while($f=$result->fetch_array())
		  {
          
		    $u=$f[0];
		  }
		  $_SESSION['hid']=$u;
		   header("location:afeedback.php");
		     
		   }
		 
		 
		}
        
   			
			?>
</p>
</body>

</html>
