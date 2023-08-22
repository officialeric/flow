<?php
$conn = new mysqli('localhost','root','','flow');

if(!$conn){
    echo 'Something went wrong!';
}