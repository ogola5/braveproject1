<?php
include "header.php";
include "config.php";
if (isset($_GET["id"]) and !empty($_GET["id"])) {

    $id = $_GET["id"];

    $sql = "SELECT * FROM `landlord` WHERE id=$id";

    $result = mysqli_query($link, $sql);

    if ($result) {

        $data = mysqli_num_rows($result);

        if ($data == 1) {

            $row = mysqli_fetch_array($result);

            $fullName = $row['fullName'];
            $emailAddress = $row['emailAddress'];
            $county = $row['county'];
            $date = $row['date'];
            $gender = $row['gender'];
            $House = $row['House'];
            $Rooms = $row['Rooms'];

            $filepath="uploads/$House";
            ?>
            <div class="row m-2">
                <div class="text-center">
                    <p><?php echo "<img class='rounded-circle' src='$filepath' width='100' height='100'>";?> </p>
                </div>
            </div>
            <div class="row m-2">
                <div class="card col-md-5 m-2 p-2">
                    <div class="card-body">

                        <div class="text-center">
                            <div>
                                <label class="form-label h5">fullName</label>
                                <p><?php echo $fullName; ?></p>
                            </div>
                            <hr>
                            <div>
                                <label class="form-label h5">emailAddress </label>
                                <p><?php echo $emailAddress ; ?></p>
                            </div>
                            <hr>

                            <hr>
                        </div>

                    </div>
                </div>
                <div class="card col-md-5 m-2 p-2">
                    <div class="card-body">
                        <div class="text-center">
                            <div>
                                <label class="form-label h5">county </label>
                                <p><?php echo $county ; ?></p>
                            </div>
                            <hr>
                            <div>
                                <label class="form-label h5">date  </label>
                                <p><?php echo $date; ?></p>
                            </div>
                            <hr>
                            <div>
                                <label class="form-label h5">gender </label>
                                <p><?php echo $gender ; ?></p>
                            </div>
                            <hr>

                        </div>

                    </div>
                </div>


            </div>





<?php
        }
    }else{
        echo "Error executing query $sql".mysqli_error($link);
    }
}
