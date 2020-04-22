<?php
  
  include("connect.php");

  //$sel_user = "SELECT `id`, `first_name`, `last_name`, `email`, `password`, `datetime` FROM `user`";
  //$res_user = mysqli_query($conn,$sel_user);

  $res_user = json_decode(file_get_contents('php://input'), true);


?>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<table class="table">
  <tr>
    <td>First Name</td>
    <td>Last Name</td>
    <td>Email</td>
    <!-- <td>Action</td> -->
  </tr>
  <?php 
    foreach ($res_user as $key => $value) {
  ?>
  <tr>
    <td><?php echo $value['first_name'] ?></td>
    <td><?php echo $value['last_name'] ?></td>
    <td><?php echo $value['email'] ?></td>
    <?php /* <td><a href="insert.php?id=<?php echo $value['id']; ?>"> Edit </a>  |  <a href="delete.php?id=<?php echo $value['id']; ?>"> Delete </a></td> */ ?>
  </tr>
  <?php
    }

  ?>

</table>
</body>
</html>