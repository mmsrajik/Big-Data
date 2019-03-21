<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

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


 <script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>




<!--<script type="text/javascript">
        function addTextArea(){
            var div = document.getElementById('div_quotes');
            div.innerHTML += "<textarea name='new_quote[]' />";
            div.innerHTML += "\n<br />";
        }
    </script>-->

<style type="text/css">
<!--
.style6 {
	font-size: xx-large
}
-->
</style>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
</head>

<body>


<table width="85%" border="0" align="center">
  <tr>
    <td width="31%" height="116"><div align="center" class="style1">
      <p class="style4 style6"><span class="style5">Way To</span> Eat</p>
    </div></td>
    <td width="69%"><table width="91%" border="0" align="center">
      <tr>
        <td width="90%"><ul class="MenuBarHorizontal style2 style3" id="MenuBar3">
          <li><a href="feedback.php"> FEEDBACK</a></li>
          <li><a href="ratings.php">RATINGS</a></li>
          <li><a href="feedback.php">SETTINGS</a>
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
			echo "<a href='uprofile.php'><p style='color:green'><b>".$name."</b></p></td></a>"."<td><a href='uprofile.php'><img src='".$img."' width='35' height='35' class='img_responsive' ></a>";
		}
		?>
        </span></td>
      </tr>
</table></td>
  </tr>
  <tr>
   
  </tr>
</table>
<table width="40%" border="0" align="center">
<tr>

         
      <th scope="col"><form id="form1" name="form1" method="post" action=""> 
      <input type="text" name="search" placeholder="search by city" />
         <input type="submit" name="submit"  value="search" />
          <?php
		
		  $my=new mysqli("localhost","root","","ff");
    $sqlnew="select hname,hcity,haddress,hpincode,hemail,hphoneno,hid,views,status,timing,logo,img from aregister";
    if(isset($_POST['submit']))
		  {   
		  
		 	  
		  $search=$_POST['search'];
		  $_SESSION['search']=$search;
		  header("location:feedback1.php");
		  
		//    $sqlnew="select hname,hcity,haddress,hpincode,hemail,hphoneno,hid,views,status,timing,logo,img from aregister where hcity='$search'";
			
		 }	
   $result=$my->query($sqlnew);
          if($result->num_rows>0)
       {
	   while($f=$result->fetch_array())
	   {
		  ?>
        </div>
          <tr>
            <td>
              
              <div align="left">
                <?php 
		   echo "</br></br>"."<img src='".$f[10]."' width='105' height='74' class='img_responsive' >"."</br><b>".$f[0]." </br></b>". $f[1]." </br>".$f[2]."</br> ".$f[3]."</br> ".$f[4]." </br>".$f[5]." </br><b>(".$f[9].")</b>"; $na=$f[0]; $x=$f[1];  ?>
                </br>
            <a href="hotel.php?hid=<?php  echo $f[6]; ?>" >View details </a><?php echo " :) "."<b>(".$f[7].") </b>";?><?php $c="available"; if($f[8]==$c){ echo "<p style='color:green'><b>".$f[8]."</b></p>";}else{echo "<p style='color:red'><b>".$f[8]."</b></p>";}?></div></td>
            </tr>
              
        <div align="left">
          <?php
		  echo "</br>";
		  $xa=$na;
		  ?>
        </div>
                <tr>
            <td>
              
              <div align="left">
              <input type="submit"  name='<?php echo $xa?>'  value='feed' />
              </div></td>
		   </tr>
       
        <div align="left">
          <?php 
	
		  if(isset($_POST[$xa]))
		      {
			 
		  	?>
        </div>
                <tr>
            <td height="83">
              
                <div align="left">
                      <textarea name="text"   cols="45" rows="5"></textarea>
                  </br>
                      <input type="submit" name='<?php echo $x.$na;?>' value="submit"/>
                </div></td>
            </tr>
            
            
          <div align="left">
            <?php
	  }
		 if(isset($_POST[$x.$na])) 
		      {
			   $fe=$_POST['text'];
		       $my1=new mysqli("localhost","root","","ff");

$sqlnew1="insert into feed(hname,feed)values('$xa','$fe')";	
		  $result1=$my->query($sqlnew1);
		 
		   if($result1==false)
		 	    {
			 echo "check program";
			  
	            }
			}
			
		 }
		  $_SESSION['userid']=$u;
		 
		
	}
   		else
   			{
   			echo "not available";
   			}
		?>
        </div>
      </form>      </th>
    </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>



<script type="text/javascript">
<!--
var MenuBar3 = new Spry.Widget.MenuBar("MenuBar3", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
</body>

</html>
