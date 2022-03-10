<?php
// check if the user is logged in.
session_start();
if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"]!==true){
    header("location:dlogin.php");
    exit();
}
include "header.php";

?>

    <div class="row m-2">
        <div class="col-6">
            <h4 class="grey">View customer</h4>
        </div>

        <div class="col-6">
            <a href="generatepdf.php"  class="btn btn-primary float-end">
                Download Report
            </a>
        </div>

    </div>

<?php
include "config.php";
// select query
$sql = "SELECT `id`, `fullName`, `emailAddress`, `date`, `county`, `gender`, `House`, `Rooms` FROM `landlord` ";
 $result= mysqli_query($link,$sql);

 if ($result){
     $data=mysqli_num_rows($result);
     if ($data>0){
         echo "<table class='table table-bordered table-striped bg-white'>";
         echo "<tr>";
         echo "<th>#</th>>";
         echo "<th>fullName</th>";
         echo "<th>emailAddress</th>";
         echo "<th>date</th>";
         echo "<th>county</th>";
         echo "<th>gender</th>";
         echo "<th>Actions</th>";
         echo "</tr>";


         while ($row=mysqli_fetch_array($result)){
             echo "<tr>";
             echo "<td>".$row['id']."</td>";
             echo "<td>".$row['fullName']."</td>";
             echo "<td>".$row['emailAddress']."</td>";
             echo "<td>".$row['date']."</td>";
             echo "<td>".$row['county']."</td>";
             echo "<td>".$row['gender']."</td>";
             echo "<td>
              <a href='delete.php?id=".$row['id']." ' class='m-2' ><i class='fa fa-trash'></i></a> 
              <a href='update.php?id=".$row['id']."' class='m-2' ><i class='fa fa-pencil'></i></a>  
              <a href='view.php?id=".$row['id']." ' class='m-2' ><i class='fa fa-eye'></i></a> 
               </td>";
             echo "<tr>";
         }

         echo "</table>";


     }else{
         echo "<em class='alert  alert-info'>No data found</em>";
     }
 }else {
     echo "<p class='alert alert-warning'>error executing your query $sql</p>" . mysqli_error($link);
 }

