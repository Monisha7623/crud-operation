<?php
require 'config.php';
$id=$_GET["id"];
$query="DELETE FROM user WHERE id='$id'";
if(mysqli_query($conn,$query)){
    header('location: user.php');

}else{
    echo mysqli_error($conn);
}
?>