<?php


$server = "localhost";
$user = "root";
$pass = "";
$conn = new mysqli($server,$user,$pass);
if(!$conn)
    echo "connection to database failed";
$conn->select_db("STUDENT");
$ii = "15SS1A0557;'
$sql = "SELECT  imagecontent FROM studentreg where 'id'= $ii";
$result = $conn->query($sql);

$pic = mysqli_fetch_assoc($result);

echo $pic['.imagecontent.'];

?>