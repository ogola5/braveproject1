<?php
$link=mysqli_connect("localhost","root","","ogola");
if($link==false){
    die("Error connecting".mysqli_connect_error($link));
}