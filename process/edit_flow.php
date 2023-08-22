<?php
include 'db_connect.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql = "SELECT * FROM content WHERE id=$id";
    $results = mysqli_query($conn,$sql);
    
    if($results){
        header('location:../index.php?flowid='.$id);
    }else{
        header('location:../index.php?error');
    }
    }