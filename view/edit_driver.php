<?php
require_once("../model/driverModel.php");
$driver_object = new Driver($conn);

$driverId = base64_decode($_GET["driverId"]);
$driverInfo = $driver_object->readDriver_by_driverId($driverId);
$row = $driverInfo->fetch_assoc();
include('navbar.php'); ?>

<section class="container my-5">

    <div class="row" style="margin:0 30%;">
        <form style="background-color:#EEF2FF;border-radius:10%;" action="../controller/driverController.php?type=editDriver" method="post" class="p-5">
            <div class="mb-3">
                <label for="username" class="form-label"><b>User Name</b></label>
                <input type="text" value="<?php echo $row['username'] ?>" class="form-control" name="driverName" aria-describedby="username" placeholder="Username" required>
                <div id="username" class="form-text">We'll never share your username with anyone else.</div>
                <input type="hidden" name="driverId" value="<?php echo $driverId ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label"><b>Email</b></label>
                <input type="email" value="<?php echo $row['email'] ?>" class="form-control" name="driverEmail" aria-describedby="email" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <label for="telephone" class="form-label"><b>Telephone Number</b></label>
                <input type="text" value="<?php echo $row['telephone_number'] ?>" class="form-control" name="driverTelephone" aria-describedby="telephone" placeholder="Telephone number" required>
            </div>
        
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</section>


<?php include('footer.php') ?>