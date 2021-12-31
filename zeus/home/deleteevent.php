<?php

$id = $_GET['id'];

include '../connect.php';

$qq = mysqli_query($connect, "SELECT * from events where id ='$id'");
while ($row = mysqli_fetch_assoc($qq)) {
    $image = $row['image'];
}
$filename = 'images/' . $image;
unlink($filename);
$query = mysqli_query($connect, "DELETE from events where id='$id'");


header('Location:index.php');
