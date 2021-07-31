<?php
    $connect = mysqli_connect('localhost','root','','registration');
    if (mysqli_connect_error()) {
        echo 'Failed to connect';
    }
?>