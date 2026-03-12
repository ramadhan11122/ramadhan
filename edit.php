<?php
include "index.php";

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM clients WHERE id='$id'");
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

$names = $_POST['names'];
$sex = $_POST['sex'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];

mysqli_query($conn,"UPDATE clients SET
names='$names',
sex='$sex',
address='$address',
phone='$phone',
email='$email'
WHERE id='$id'");

header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Client</title>
</head>
<body>

<h2>Edit Client</h2>

<form method="POST">

Names:<br>
<input type="text" name="names" value="<?php echo $row['names']; ?>"><br><br>

Sex:<br>
<input type="text" name="sex" value="<?php echo $row['sex']; ?>"><br><br>

Address:<br>
<input type="text" name="address" value="<?php echo $row['address']; ?>"><br><br>

Phone:<br>
<input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br><br>

Email:<br>
<input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>

<button type="submit" name="update">Update</button>

</form>

</body>
</html>