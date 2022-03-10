<?php
// check if the user ias logged in
if (!isset($_SESSION["loggedin"]) or  $_SESSION["loggedin"]!==true){
    header("location:dlogin.php");
    exit();
}

include "header.php";
include "config.php";

if (isset($_POST["update"]) and !empty($_POST["id"])){
    #update here

    // pick values
    $id=$_POST["id"];
    $up_fullName=$_POST["fullName"];
    $up_emailAddress=$_POST["emailAddress"];
    $up_county=$_POST["county"];
    $up_gender=$_POST["gender"];
    $up_date=$_POST["date"];

    // files

    $Housename=$_FILES["House"]["name"];
    $tempname=$_FILES["House"]["tmp_name"];
    $folder="uploads/.".$Housename;

    //rooms
    $Roomsname=$_FILES["Rooms"]["name"];
    $Roomsname=$_FILES["Rooms"]["tmp_name"];
    $Roomsfolder="uploads/.".$Roomsname;

    $up_sql="UPDATE `landlord` SET `fullName`='$up_fullName',`emailAddress`='$up_emailAddress',`date`='$up_date',`county`='$up_county',`gender`='$up_gender',`House`='$Housename',`Rooms`='$Roomsname' WHERE id=$id";


    $up_result=mysqli_query($link,$up_sql);

    if (move_uploaded_file($tempname,$folder)){
        echo "<p class='alert alert-success'> House has been updated</p>";
    }else{
        echo "Error uploading House";
    }
    if (move_uploaded_file($Roomsname,$Roomsfolder)){
        echo "<p class=' alert alert-warning'> Rooms have been updated </p>";
    }else{
        echo "Error uploading your Rooms";
    }
    if ($up_result) {
        echo "<p class='alert alert-danger'>Record updated successfully!</p>";
        echo  "<a href='customer.php' class='col-md-6 btn btn-primary'> BACK </a>";

    } else {
        echo "error updating record $up_sql" . mysqli_error($link);
    }
}else{
    if (isset($_GET["id"]) and !empty($_GET["id"])) {

        $id = $_GET["id"];

        $sql = "SELECT * FROM `landlord` WHERE id=$id";
        $result = mysqli_query($link, $sql);

        if ($result) {

            $data = mysqli_num_rows($result);

            if ($data == 1) {

                $row = mysqli_fetch_array($result);

                $fullName=$row["fullName"];
                $emailAddress=$row["emailAddress"];
                $county=$row["county"];
                $sub_county=$row["sub_county"];
                $estate=$row["estate"];
                $landmark=$row["landmark"];
                $date=$row["date"];
                $House=$row["House"];
                $Rooms=$row["Rooms"];

            }
?>

<div class="row m-2">
    <div class="card">
        <div class="card-header text-primary bg-white">UPDATE THE RECORD</div>
        <div class="card-body">
            <form action="update.php" method="post" enctype="multipart/form-data">
                <div class="row m-2 p-2">
                    <div class="col-md-6">
                        <label class="form-label grey">Full Name</label>
                        <input class="form-control" type="text" name="fullName" value="<?php echo $fullName; ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label grey">Email Address</label>
                        <input class="form-control" type="text" name="emailAddress"
                               value="<?php echo $emailAddress; ?>">
                    </div>

                </div>
                <div class="row m-2 p-2">
                    <div class="col-md-6">
                        <label class="form-label grey">county</label>
                        <input class="form-control" type="text" name="county" value="<?php echo $county; ?>">
                    </div>

                </div>
                <div class="row m-2 p-2">
                    <div class="col-md-6">
                        <label class="form-label grey">Date </label>
                        <input class="form-control" type="date" name="date" value="<?php echo $date; ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label grey">Gender</label>
                        <select class="form-control" name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="row m-2 p-2">
                        <div class="col-md-12">
                            <label class="form-label grey">Your House</label>
                            <input class="form-control" type="file" name="House">
                        </div>
                    </div>
                    <div class="row m-2 p-2">
                        <div class="col-md-12">
                            <label class="form-label grey">Your Rooms</label>
                            <input class="form-control" type="file" name="Rooms">

                        </div>
                    </div>
                    <div>
                        <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
                    </div>

                    <div class="row m-2 p-2">
                        <div class="col-md-6">
                            <input type="submit" name="update" class="col-md-8 btn btn-primary" value="UPDATE">
                        </div>
                        <div class="col-md-6">
                            <a href="customer.php" class="col-md-8 btn btn-danger">CANCEL</a>
                        </div>

                    </div>


                </div>
        </div>
    </div>
    <?php
    }


    } else {
        echo "Error executing query $sql" . mysqli_error($link);
    }


    }
    ?>
