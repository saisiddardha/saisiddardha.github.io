<?php
$host = 'localhost';
$user = 'root';
$pass = ' ';

$conn =new mysqli($host, $user, $pass);

$conn->select_db("demo");


$imagename=$_FILES["myimage"]["name"];

//Get the content of the image and then add slashes to it
$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));

//Insert the image name and image content in image_table
$insert_image="INSERT INTO image_table VALUES('$imagetmp','$imagename')";

mysqli_query($insert_image);

$select_image="select * from image_table where imagename='$name'";

$var=mysqli_query($select_image);

if($row=mysqli_fetch_array($var))
{
    $image_name=$row["imagename"];
    $image_content=$row["imagecontent"];
}
echo $image;


?>
