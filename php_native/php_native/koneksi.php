<?php
$conn=mysqli_connect('localhost','root','','perpus_php_native');
if(mysqli_connect_errno()) {
    printf("connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>