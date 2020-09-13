<?php 
include ('dbconfig.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>List of Users</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Users Data</h2>
  <a href="index.php" style="float: right;">New Registration</a>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Sr.No</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Designation</th>
        <th>Photo</th>
        <th>Course</th>
        <th>Address</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $data ="SELECT * FROM registration";
      $result =mysqli_query($conn,$data);
      $i=0;
      while ($row =mysqli_fetch_assoc($result)) {
      $i++;
      $id =$row['id'];
      ?>
      <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['dob']; ?></td>
          <td><?php echo $row['photo']; ?></td>
          <td><?php echo $row['course']; ?></td>
          <td><?php echo $row['address']; ?></td>
          <td><a href="edit.php?rowid=<?php echo base64_encode($id);?>" class="action-icon"> <i class="fa fa-edit"></i></a></td>
          <td><a href="delete.php?rowid=<?php echo base64_encode($id);?>"><i class="fa fa-close"></i></a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
