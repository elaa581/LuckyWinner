<?php
$conn = mysqli_connect('localhost','root','','win');
if(!$conn){
    echo 'ERROR :'.mysqli_connect_error();
}
?>