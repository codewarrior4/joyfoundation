<?php 

$id=$_GET['id'];

include '../connect.php';

$qq=mysqli_query($connect,"SELECT title from gallery where id ='$id'");
$top = mysqli_fetch_array($qq);
$title = $top['title'];
$image = $top['image'];

$query = mysqli_query($connect,"select * from gallery where title ='$title'");

$arrimg =array();
while($fetch =mysqli_fetch_array($query)){
    array_push($arrimg,$fetch['description']);
}

foreach($arrimg as $img) {
    @unlink("gallery/".$img);
}
 $filename = 'images/' . $image;
@unlink($filename);
$delete = mysqli_query($connect,"DELETE from gallery where title ='$title'");


header('Location:index.php');
