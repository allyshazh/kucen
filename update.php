<?php
require "connect.php";
$id = $_GET['id'];
$sql_read = "SELECT * FROM booking WHERE id='$id'";
$exe_read = mysqli_query($connect, $sql_read);
$res_read = mysqli_fetch_assoc($exe_read);

if (isset($_POST['update'])) {
  $val_id = $_POST['id_input'];
  $val_name = $_POST['name_input'];
  $val_age = $_POST['age_input'];
  $val_remark = $_POST['remark_input'];
  $val_num = $_POST['num_input'];
  $val_dates = $_POST['dates_input'];
  $val_daten = $_POST['daten_input'];
  $val_service = $_POST['service_input'];

  $sql = "UPDATE booking SET
    id = '$val_id',
    name = '$val_name',
    age = '$val_age',
    remark = '$val_remark',
    num = '$val_num',
    dates = '$val_dates',
    daten = '$val_daten',
    service = '$val_service' WHERE id='$id'";

  $execute = mysqli_query($connect, $sql);

  if ($execute) {
    header('Location:display.php');
  } 
  else {
    echo "Updating data failed.";
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Updating</title>
</head>

<body>
  <br><br><br>
  <div align="center">
    <h1>Update Section</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
      <table border="1">
        <tr>
          <td><label>Booking ID</label></td>
          <td><input type="text" name="id_input" value="<?=$res_read['id']?>"></td>
        </tr>
        <tr>
          <td> <label>Cat's Name</label> </td>
          <td> <input type="text" name="name_input" value="<?=$res_read['name']?>"> </td>
        </tr>
        <tr>
          <td> <label>Cat's Age</label> </td>
          <td> <input type="text" name="age_input" value="<?=$res_read['age']?>"> </td>
        </tr>
        <tr>
          <td> <label>Remark</label> </td>
          <td> <input type="text" name="remark_input" value="<?=$res_read['remark']?>"> </td>
        </tr>
        <tr>
          <td> <label>Phone Number (60+)</label> </td>
          <td> <input type="text" name="num_input" value="<?=$res_read['num']?>"> </td>
        </tr>
        <tr>
          <td><label>Start Date</label></td>
          <td><input type="date" name="dates_input" value="<?=$res_read['dates']?>"></td>
        </tr>
        <tr>
          <td><label>End Date</label></td>
          <td><input type="date" name="daten_input" value="<?=$res_read['daten']?>"></td>
        </tr>
        <tr>
          <td> <label>Service</label> </td>
          <td> <input type="text" name="service_input" value="<?=$res_read['service']?>"> </td>
        </tr>
        <tr>
          <td colspan="2" align="center"> <input type="submit" name="update" value="Update"> </td>
        </tr>
      </table>
    </form>
  </div>
</body>

</html>