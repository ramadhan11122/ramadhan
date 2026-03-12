<?php
include "index.php";

$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM clients WHERE id='$id'");

header("Location:index.php");
?>