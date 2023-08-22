<?php
include 'db_connect.php';

#erasing flow

    $id = $_GET['id'];

    $sql3 = "DELETE FROM content WHERE id=$id";
    $result = mysqli_query($conn,$sql3);

    if($result){
        header('location:../index.php?info=Flow deleted!');
    }else{
        echo 'error';
    }

