<?php
include "config.php";
if (isset($_POST["addstudent.php"])){
    //pick values
    $fullName= $_POST["fullName"];
    $location=$_POST["location"];
    $emailAddress=$_POST["emailAddress"];
    $phone_number=$_POST["phone_number"];
    $gender=$_POST["gender"];
    $dob=$_POST["dob"];
    $photo=$_POST["photo"];
    $cv=$_POST["cv"];

    //files
    $photoname=$_FILES["photo"]["name"];
    $tempname=$_FILES["photo"]["tmp_name"];
    $folder="uploads/".$photoname;

    //cv
    $cvname=$_FILES["cv"]["name"];
    $cvtemp=$_FILES["cv"]["tmp_name"];
    $cvfolder="uploads/".$cvname;

    $sql="INSERT INTO `students`( `fullName`, `emailAddress`, `phone_number`, `location`, `dob`, `gender`, `photo`, `cv`) VALUES ('$fullName','$emailAddress','$phone_number','$location','$dob','$gender','$photo','$cv')";

    $result=mysqli_query($link,$sql);

    if (move_uploaded_file($tempname,$folder)){
        echo "image has been uploaded";
    }else{
        echo"error uploading image";
    }

    if (move_uploaded_file($tempname,$folder)){
        echo "image has been uploaded";
    }else{
        echo "error uploading cv";
    }
    if ($result){
        echo "Record added successfully";
        header("location:addstudent.php");
    }else{
        echo "error executing this query $sql".mysqli_error($link);

    }

}
