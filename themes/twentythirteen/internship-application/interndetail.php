<?php 
/*
Template Name: internship-application
*/
$wp_path = 'http://coloredcow.in/wp/wp-content/themes/twentythirteen/internship-application';
?>
<html>

<head>
<link rel="stylesheet" type="text/css" href="<?php echo "$wp_path";?>/internship.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="utf-8">
  <link rel="stylesheet" href="<?php echo "$wp_path";?>/bootstrap.min.css">
  <script src="<?php echo "$wp_path";?>/jquery.min.js"></script>
  <script src="<?php echo "$wp_path";?>/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head> 
     
     <div id="cow" class="">   
<h1  > Colored Cow </h1>      
    </div>
    
<div id="options" class="">
    
    <p id="detailtab"> <a id="det" href="#internshipdetails"> DETAILS</a> <a id="app" href="#application"> APPLY</a> </p>   
    
    </div>
    
    <div class="backgroundpage1" id="back1">
    <img src="<?php echo "$wp_path";?>/background.png" style="height: 100%; width:100%;" />
</div>
  
     
     <div class="row"></div>
     <div class="col-xs-2"> </div>
     <div id="heading1" class="col-xs-9">
          <a name="internshipdetails"> </a>
       <img id="internshiphead" src="<?php echo "$wp_path";?>/internshipdetails.png" class="internheading">
     </div> 
    
     <div class="row">  </div>
    <div class="col-xs-3"> </div>     
         
       <div id="page2content" class="col-xs-4 pg">
    
<p id="para1">Shout out to students for real world experience. ColoredCow is offering internship for one month

to ambitious students. We do this twice every year (June-July and Jan-Feb).You will build an application under our guidance. We will launch it for the world to use and you to show off.</p> <br> 
        
<h3> What’s in it for you :</h3><p> Active learning. A professional network. 
A shiny resume. Lessons from industry experts. Your Future Employers!</p>   
        
        
<h3>Who is it for :</h3><p> If you have a passion for programming and a craft of coding 
and you study in an engineering college, then hop onboard.</p>
        
<h3>How to apply :</h3> <p> Reaching us is just a form away. You can find it below. </p>  
        
        <p>Positions : 2 (or 3 for an unavoidable talent)</p>
 
    </div>  
    
      
   
     
     <div class="row"></div>
     <div class="col-xs-4"> </div>
     <div id="page3"  class="col-xs-8">
          <a name="application"> </a>
       <img id="applytab" src="<?php echo "$wp_path";?>/apply.png" class="applyheading">
     </div>
     
     
     
     
     
       <div class="row"></div>
 <div class="col-xs-3"> </div>
        <div id="internshipform" class="col-xs-4 pg" style="opacity:0.9;">
             <a name="application"> </a>
        <h3 id="awesomeness" class="formtag"> Fill in the form for one month of awesomeness</h3> <br>
         <form id='register' action='#' method='post' accept-charsest='UTF-8'>
             <label class="formfonts" class="form-control" id="fname"> Name </label> <br> <input class="formcontrol-name" type="text" name="first" id="first" required placeholder="John"><div></div><input class="formcontrol-name" type="text" name="last" id="last" placeholder="Doe">
    <label id="email" class="formfonts"> Email</label><br> <input class="form-control" type="email" name="mail" id="mail" required placeholder="me@johndoe.com"> <br>
    <label class="formfonts">College</label><br><input class="form-control" type="text" name=college id="colg" required placeholder="my college"><br>
    <label class="formfonts">City</label><br><input class="form-control" type="text" name=city id="City" required placeholder="my city"><br>
    <label class="formfonts">Why do you want to intern with us?</label><br><input class="form-control r" type="text"  name="internwithus"><br>
    <label class="formfonts">What do you hope to achieve with this internship</label><br><input class="form-control r" type="text"  name="hope2achieve"><br>
    <label class="formfonts">Why should we pick you?</label><br><input class="form-control r" type="text"  name="picku"><br>
      
    <input  type="submit" value="Submit" id="submit" name="submit">
    
    </form>   
            
        
        </div>
    </html>
         <?php
$link = mysqli_connect("localhost", "color6ha_wp563", "i92PI!S[2A", "color6ha_wp563");

$fname = $_POST['first'];
$lname = $_POST['last'];
$email = $_POST['mail'];
$college= $_POST['college'];
$city= $_POST['city'];
$internwithus= $_POST['internwithus'];
$hope2achieve= $_POST['hope2achieve'];
$picku= $_POST['picku'];




$sql = "INSERT INTO wp_intern (email, Firstname, Lastname,  college, city, whyInternWithUs, whatYouHopeToAchieve, whyPickyou) VALUES ('$email', '$fname', '$lname', '$college', '$city', '$internwithus', '$hope2achieve', '$picku')";
$res=mysqli_query($link, $sql);

if($res){
echo '<script language="javascript">';
echo 'alert("You have successfully applied for Internship:)")';
echo '</script>';
}
 
//close connection
mysqli_close($link);

?>
        
