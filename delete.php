<script type="text/javascript">
  alert("Do you want to update");
</script>
<?php
$con=mysqli_connect('127.0.0.1','root');
mysqli_select_db($con,'Internship');
$id=$_GET['id'];
$del="DELETE FROM `registrations` WHERE id=$id";
$query=mysqli_query($con,$del);
mysqli_close($con);
header('location:deleted.html');
?>
