 <?php
$link = mysqli_connect("localhost", "root", "password", "internshipdata");

$fname = $_GET['fname'];
$lname = $_GET['lname'];
$email = $_GET['email'];
$college= $_GET['college'];
$city= $_GET['city'];
$internwithus= $_GET['whyInternWithUs'];
$hope2achieve= $_GET['hopeToAchieve'];
$picku= $_GET['whyPickYou'];




$sql = "INSERT INTO intern (email, Firstname, Lastname,  college, city, whyInternWithUs, whatYouHopeToAchieve, whyPickyou) VALUES ('$email', '$fname', '$lname', '$college', '$city', '$internwithus', '$hope2achive', '$picku')";
$res=mysqli_query($link, $sql);

if($res){
echo "Applied Successfully";
//$message = "You have successfully applied for the internship";
//echo "<script type='text/javascript'>alert('$message');</script>";
}
 
//close connection
mysqli_close($link);

?>
  
