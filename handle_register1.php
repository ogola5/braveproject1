<?php
include "config.php";

if (isset($_POST["register1"])){
    // pick values
    $fullName=$_POST["fullName"];
    $emailAddress=$_POST["emailAddress"];
    $county=$_POST["county"];
    $sub_county=$_POST["sub_county"];
    $estate=$_POST["estate"];
    $landmark=$_POST["landmark"];
    $date=$_POST["date"];
    $password=$_POST["password"];
    $confirmPassword=$_POST["confirmPassword"];

    //password length
    if (strlen($password < 6)){
        $passwordError="password must be 6 characters";
        echo "password error";
    }else{
        $storePass=password_hash($password,PASSWORD_DEFAULT);
    }
    // matching password
    if ($confirmPassword!=$password){
        $conPassError="passwords dod not match";
        echo $confirmPassword;
    }
    if (empty($conPassError) and empty($passwordError)){

        $sql="INSERT INTO `rent2`( `fullName`, `emailAddress`, `county`, `sub_county`, `estate`, `landmark`, `password`, `date`) 
                 VALUES ('$fullName','$emailAddress','$county','$sub_county','$estate','$landmark','$storePass','$date')";

        $result=mysqli_query($link,$sql);

        if ($result){
            echo "you have registered";
            header("location:dlogin.php");
        }else{
            echo "error executing this query $sql".mysqli_error($link);
        }
    }
    // close my connection
    mysqli_close($link);

}
