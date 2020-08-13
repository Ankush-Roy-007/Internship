<?phP
$name=$_POST['name'];
$e_mail=$_POST['email'];
$phone_no=$_POST['telephone'];
$DOB=$_POST['date'];
$pin_code=$_POST['pin'];
$con=mysqli_connect('127.0.0.1','root');
mysqli_select_db($con,'Internship');
$q="INSERT INTO `registrations`(`Name`, `E-mail`, `Phone`, `DOB`, `Pin Code`) VALUES ('$name','$e_mail','$phone_no','$DOB','$pin_code')";
$i=mysqli_query($con,$q);
mysqli_close($con);
header('location:thankyou.php');
?>
