
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Registration</title>
  <script type="text/javascript" src="normalvalidation.js"></script>
  <link rel="stylesheet" href="stylesheet.css">
</head>

<body>
  <form onsubmit="return val()" method="post">
<?php
$con=mysqli_connect('127.0.0.1','root');
mysqli_select_db($con,'Internship');
$id=$_GET['id'];
$sql="SELECT * FROM `registrations` WHERE id=$id";
$query=mysqli_query($con,$sql);
$result=mysqli_fetch_assoc($query);
?>



    <lable id="title">Registration Form</lable>
    <table>
      <tbody>
        <tr>
          <td class="lbl">Name:</td>
          <td><input type="text" name="name" id="name" class="textbox" value="<?php echo($result["Name"]);?>" />
        </tr>
        <tr>
          <td></td>
          <td>
            <lable class="help">Maximum 30 characters</lable>
          </td>
        </tr>
        <tr>
          <td class="lbl">E-mail:</td>
          <td><input type="email" name="email" id="email" class="textbox" value="<?php echo($result["E-mail"]);?>" />
        </tr>
        <tr>
          <td></td>
          <td>
            <lable class="help">abcd@efgh.ij</lable>
          </td>
        </tr>
        <tr>
          <td class="lbl">Mobile No.:</td>
          <td><input type="tel" name="telephone" id="telephone" class="textbox" value="<?php echo($result["Phone"]);?>" />
        </tr>
        <tr>
          <td></td>
          <td>
            <lable class="help">Max 10 digit</lable>
          </td>
        </tr>
        <tr>
          <td class="lbl">Date of Birth:</td>
          <td><input type="date" name="date" id="date" class="textbox" value="<?php echo($result["DOB"]);?>" />
        </tr>
        <tr>
          <td></td>
          <td>
            <lable class="help">Date-Month-Year</lable>
          </td>
        </tr>
        <tr>
          <td class="lbl">PIN code:</td>
          <td><input type="tel" name="pin" id="pin" class="textbox" value="<?php echo($result["Pin Code"]);?>" />
        </tr>
        <tr>
          <td></td>
          <td>
            <lable class="help">Max 6 digit</lable>
          </td>
        </tr>
        </tbody>
    </table>
    <input type="submit" id="submit" value="Update" name="update" />

    <br />
    <br />
    <p id="demo">
    </p>
  </form>
</body>
</html>

<?phP
if(isset($_POST['update'])){
$name=$_POST['name'];
$e_mail=$_POST['email'];
$phone_no=$_POST['telephone'];
$DOB=$_POST['date'];
$pin_code=$_POST['pin'];
$q="UPDATE `registrations` SET `Name`='$name',`E-mail`='$e_mail',`Phone`='$phone_no',`DOB`='$DOB',`Pin Code`='$pin_code' WHERE id=$id";
$i=mysqli_query($con,$q);
mysqli_close($con);
header('location:updatedsuccessfully.html');
}
?>
