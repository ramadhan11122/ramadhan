<?php
include "connection.php";

if(isset($_POST['save'])){
$names = $_POST['names'];
$sex = $_POST['sex'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$sql = "INSERT INTO clients(names,sex,address,phone,email)
VALUES('$names','$sex','$address','$phone','$email')";

mysqli_query($conn,$sql);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>CLIENT MANAGEMENT</title>
</head>
<body>

<h2>ADD CLIENT</h2>

<form method="POST">

Names:<br>
<input type="text" name="names" required><br><br>

Sex:<br>
<select name="sex">
<option>Male</option>
<option>Female</option>
</select><br><br>

Address:<br>
<input type="text" name="address"><br><br>

Phone:<br>
<input type="text" name="phone"><br><br>

Email:<br>
<input type="email" name="email"><br><br>

<button type="submit" name="save">Save Client</button>

</form>

<hr>

<h2>CLIENT LIST</h2>

<table border="5" cellpadding="10">

<tr >
<th>ID</th>
<th>Names</th>
<th>Sex</th>
<th>Address</th>
<th>Phone</th>
<th>Email</th>
<th>Actions</th>
</tr>

<?php

$result = mysqli_query($conn,"SELECT * FROM clients");

while($row = mysqli_fetch_assoc($result)){

?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['names']; ?></td>
<td><?php echo $row['sex']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['email']; ?></td>

<td>

<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a> |
<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>

</td>

</tr>

<?php } ?>

</table>

</body>
</html>