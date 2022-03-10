<?php

include "config.php";

if (isset($_POST["submit"])){
    // pick values
    $fullName=$_POST["fullName"];
    $emailAddress=$_POST["emailAddress"];
    $county=$_POST["county"];
    $gender=$_POST["gender"];
    $date=$_POST["date"];

    // files

    $Housename=$_FILES["House"]["name"];
    $tempname=$_FILES["House"]["tmp_name"];
    $folder="uploads/.".$Housename;

    //rooms
    $Roomsname=$_FILES["Rooms"]["name"];
    $Roomsname=$_FILES["Rooms"]["tmp_name"];
    $Roomsfolder="uploads/.".$Roomsname;

    $sql="INSERT INTO `landlord`( `fullName`, `emailAddress`, `date`, `county`, `gender`, `House`, `Rooms`) 
            VALUES ('$fullName','$emailAddress','$county','$date','$gender','$Housename','$Roomsname')";


    $result=mysqli_query($link,$sql);
    if($result){
        echo "Student successfully added to the system";
    }else{
        echo "error executing this query $sql".mysqli_error($link);
    }

    if (move_uploaded_file($tempname,$folder)){
        echo "<p class='alert-success'>house image has been uploaded</p>";
        header("location:addrent1.php");

    }else{
        echo "Error uploading house image";
   }
   if (move_uploaded_file($Roomsname,$Roomsfolder)){
        echo "<p class='alert-success'>room image has been uploaded</p>";
    }else{
        echo"Error uploading house image";
    }

    if($result){
        echo "<p class='alert-success'>image uploaded successfully</p>";

    }else{
        echo"error executing this query $sql".mysqli_error($link);
    }
}