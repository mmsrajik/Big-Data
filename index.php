<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php session_start();
ob_start();?>

<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
.style6 {	font-size: large
}
.style1 {	font-family: Verdana, Arial, Helvetica, sans-serif
}
.style4 {
	font-size: 36px;
	font-style: italic;
	font-weight: bold;
}
.style10 {color: #FF6600}
.style11 {	font-size: larger;
	font-style: italic;
	font-weight: bold;
}
.style12 {font-size: xx-large}
.style13 {color: #FF6600; font-size: xx-large; }
</style>
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

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
 <!--   <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>-->
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">LOGIN</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SIGNUP</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#" class="w3-bar-item w3-button">Merchandise</a>
        <a href="#" class="w3-bar-item w3-button">Extras</a>
        <a href="#" class="w3-bar-item w3-button">Media</a>
      </div>
    </div>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BAND</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">TOUR</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MERCH</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="uploads/2.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Los Angeles</h3>
      <p><b>We had the best time playing at Venice Beach!</b></p>   
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="uploads/1.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>New York</h3>
      <p><b>The atmosphere in New York is lorem ipsum.</b></p>    
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="uploads/3.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Chicago</h3>
      <p><b>Thank you, Chicago - A night we won't forget.</b></p>    
    </div>
  </div>

  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <div align="center" class="style1">
      <p class="style4"><span class="style10">Way To</span> Eat</p>
    </div>
    <h2 class="w3-wide">LOGIN</h2>
    <form id="form1" name="form1" method="post" action="">
      <div align="left">
        <table width="50%" border="0" align="center">
          <tr>
            <td><div align="left" class="style6">
              <p>Email orUser Name</p>
              </div></td>
            <td><input type="text" name="ulemail" id="ulemail"  onkeyup="mail();"/></td>
          </tr>
          <tr>
            <td><span class="style6">Password</span></td>
            <td><input type="password" name="ulpassword" id="ulpassword" /></td>
          </tr>
          <tr>
            <td><input type="submit"  class="w3-button w3-black w3-margin-bottom" name="submit" value="LOGIN" /></td>
              <!--   <input type="submit" name="UserRegister" id="UserRegister" value="UserSignup" /></td>-->
           <td>  <a href="#tour">don't have an account  ?</a></td>
          </tr>
        </table>
      </div>
    </form>
    <p class="w3-wide">&nbsp;</p>
    <p class="w3-wide">
      <?php
	/*  if(isset($_POST['UserRegister']))
			{
			header("location:usignup.php");
			}
	   */
		if(isset($_POST['submit']))
		{  
		 //   session_start();
		    $c=$_POST['ulemail'];
		   $d=$_POST['ulpassword'];
           
		  
     $my=new mysqli("localhost","root","","ff");
       $sqlnew="select * from uregister where (uemail='$c')or(uname='$c')and(upassword='$d')";
	   
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
		  $_SESSION['userid']=$u;
		  header("location:feedback.php");
		     
		   }
		 
		 
		}
        
   			
			?>
    </p>
    <p>&nbsp;</p>
  </div>
  <!-- The Tour Section -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <div align="center" class="style1">
        <p class="style11"><span class="style13"> Way To</span><span class="style12"> Eat</span></p>
      </div>
      <p class="w3-center w3-opacity"><em>Give feed Get feed...</em></p>
      <br>

      <ul class="w3-ul w3-border w3-white w3-text-grey">
     
     
        <form method="post" name="myForm" id="myForm" onsubmit="return validateForm()">
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
              <td><input type="text" name="uemail" id="uemail" required="required" onkeyup="mail();" /></td>
            </tr>
            <tr>
              <td>Phone no</td>
              <td><input type="text" name="uphoneno" required="required" /></td>
            </tr>
            <tr>
              <td>Password </td>
              <td><input type="password" name="upassword" id="password"  required="required" /></td>
            </tr>
            <tr>
              <td>Confirm Password </td>
              <td><input type="password" name="uconfirmpassword"  id="cpassword" required="required" onkeyup="check();"/>
              </td>
            </tr>
            <tr>
              <td><span id='message'></span></td>
            </tr>
            <tr>
              <td><input type="submit" class="w3-button w3-black w3-margin-bottom" value="REGISTER" name="usubmit"  /></td>
              <td>&nbsp;</td>
            </tr>
          </table>
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
		      //  echo "<script type='text/javascript'>alert('$msg'
			  echo "Account created successfully";
			  sleep(1);
               //   <input type="button" name="login" value="login"onclick="window.location.href='index.php'"/>
			   header("location:#band");
                  
		     }
			
	}
		
	  ?></td>
            </tr>
          </table>
          <p>&nbsp;</p>
        </form>
      </ul>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <div class="w3-container w3-white">
            <p><b>New York</b></p>
            <p class="w3-opacity">Fri 27 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <div class="w3-container w3-white">
            <p><b>Paris</b></p>
            <p class="w3-opacity">Sat 28 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <div class="w3-container w3-white">
            <p><b>San Francisco</b></p>
            <p class="w3-opacity">Sun 29 Nov 2016</p>
            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Ticket Modal -->
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">×</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
      </header>
      <div class="w3-container">
        <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
        <input class="w3-input w3-border" type="text" placeholder="How many?">
        <p><label><i class="fa fa-user"></i> Send To</label></p>
        <input class="w3-input w3-border" type="text" placeholder="Enter email">
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
      </div>
    </div>
  </div>

  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Fan? Drop a note!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Chicago, US<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
      </div>
      <div class="w3-col m6">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>
  
<!-- End Page Content -->
</div>

<!-- Image of location/map -->
<!--<img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%">-->

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>


