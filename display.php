<?php
require "connect.php";
$sql = "SELECT * FROM booking";
$execute = mysqli_query($connect, $sql);
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<a href = "LogIn.html">LOG OUT</a>

<head>
  <title>Booking Details</title>
</head>

<body>
  <br><br><br>
  <h1 align="center">List of Booking</h1>
  <div align="center">
    <br><br><br>
  </div>
  <table border="1" width="80%" align="center">
    <thead>
      <th>Booking ID</th>
      <th>Cat's Name</th>
      <th>Cat's Age</th>
      <th>Remark</th>
      <th>Phone Number (60+)</th>
      <th>Start Date</th>
      <th>End Date</th>
      <th>Service</th>
      <th>Actions</th>
    </thead>
    <?php while ($result = mysqli_fetch_array($execute)) { ?>
      <tr align="center">
        <td><?= $result['id'] ?></td>
        <td><?= $result['name'] ?></td>
        <td><?= $result['age'] ?></td>
        <td><?= $result['remark'] ?></td>
        <td><?= $result['num'] ?></td>
        <td><?= $result['dates']?></td>
        <td><?= $result['daten']?></td>
        <td><?= $result['service'] ?></td>
        <td>
          <a href="update.php?id=<?= $result['id'] ?>"><button class="button">Update</button></a>
          |
          <a href="delete.php?id=<?= $result['id'] ?>"><button class="button">Delete</button></a>
        </td>
      </tr>
    <?php } ?>
  </table>
</body>

</html>