<?php
include 'db_connect.php';

#Creating flow
if(isset($_POST['content'])){
    $input = $_POST['content'];
    
    if(!empty($input)){
    $sql = "INSERT INTO content(content) VALUES ('$input')";
    $result = mysqli_query($conn,$sql);

    if($result){
        header('location:../index.php?info=Flow created!');
    }else{
        echo 'error';
    }
}else{
    header('location:../index.php?error=Input field must not be empty!');
}
}

#displaying flows
$sql2 = "SELECT * FROM content";
$flows = mysqli_query($conn,$sql2);

#editing flow
