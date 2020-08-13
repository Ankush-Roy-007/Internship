
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="displaystyle.css">
  </head>
  <body>
    <div>
      <table id="miyazaki">
  <caption>Registration List</caption>
  <thead>
  <tr><th>S No.</th><th>Name</th><th>E-mail</th><th>Phone No.</th><th>Date of Birth</th><th>Pin Code</th><th>Update</th><th>Delete</th>
  </thead>
  <tbody>
    <?php
        $con=mysqli_connect('127.0.0.1','root');
        mysqli_select_db($con,'Internship');
        $selecttable="select * from registrations";
        $query=mysqli_query($con,$selecttable);
  while($result=mysqli_fetch_assoc($query)){
     ?>
  <tr>
  <td><?php echo($result["id"]);?></td>
  <td><?php echo($result["Name"]);?></td>
  <td><?php echo($result["E-mail"]);?></td>
  <td><?php echo($result["Phone"]);?></td>
  <td><?php echo($result["DOB"]);?></td>
  <td><?php echo($result["Pin Code"]);?></td>
  <td><button id="update"><a href="update.php?id=<?php echo($result["id"]);?>" class="updel">Update</a></button></td>
  <td><button id="delete"><a href="delete.php?id=<?php echo($result["id"]);?>" class="updel">Delete</a></button></td>
  </tr>
  <?php
  }
   ?>
  </tbody>
  </table>
    </div>
    <br /><br />
<div id="gomain">
  <a href="index.html">Click to go Home</a>
</div>
  </body>
</html>
