<?php include('navbar.php');
include '../model/driverModel.php';
$driver_object = new Driver($conn);
$getDrivers = $driver_object->readAllDrivers();


$response = isset($_GET['response']) ? $_GET['response'] : '';
require_once("../config/Database.php");
?>

<hr>
<section class="customerregister container ">
    <div class="row">
        <div class="col-6">
            <h3>Customer Register</h3>
            <h1><?php echo $response; ?></h1>
            <div class="row">
                <form style="background-color:#EEF2FF;border-radius:10%;" action="../controller/customerController.php?type=addNewCustomer" method="post" class="p-5">
                    <div class="mb-3">
                        <label for="username" class="form-label"><b>User Name</b></label>
                        <input type="text" class="form-control" name="username" aria-describedby="username" placeholder="Username" required>
                        <div id="username" class="form-text">We'll never share your username with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label"><b>Email</b></label>
                        <input type="email" class="form-control" name="email" aria-describedby="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="telephone" class="form-label"><b>Telephone Number</b></label>
                        <input type="text" class="form-control" name="telephone" aria-describedby="telephone" placeholder="Telephone number" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label"><b>Password</b></label>
                        <input type="password" class="form-control" name="password" required placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="col-6">
            <table class="table">
                <tr>
                    <th>Username</th>
                    <th>email</th>
                    <th>telephone Number</th>
                </tr>
                <?php
                $sql = "SELECT * FROM customers;";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["username"]  . "</td><td>" . $row["email"] . "</td><td>" . $row["telephone_number"] . "</td><tr>";
                    }
                } else {
                    echo "no result";
                }
                ?>
            </table>
        </div>
    </div>
</section>
<hr>
<section class="adminregister container ">
    <div class="row">
        <div class="col-6">
            <h3>Admin Register</h3>
            <h1><?php echo $response; ?></h1>
            <div class="row">
                <form style="background-color:#EEF2FF;border-radius:10%;" action="../controller/adminController.php?type=addNewAdmin" method="post" class="p-5">
                    <div class="mb-3">
                        <label for="username" class="form-label"><b>User Name</b></label>
                        <input type="text" class="form-control" name="adminName" aria-describedby="username" placeholder="Username" required>
                        <div id="username" class="form-text">We'll never share your username with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label"><b>Email</b></label>
                        <input type="email" class="form-control" name="adminEmail" aria-describedby="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="telephone" class="form-label"><b>Telephone Number</b></label>
                        <input type="text" class="form-control" name="adminTelephone" aria-describedby="telephone" placeholder="Telephone number" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label"><b>Password</b></label>
                        <input type="password" class="form-control" name="adminPassword" required placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="col-6">
            <table class="table">
                <tr>
                    <th>Username</th>
                    <th>email</th>
                    <th>telephone Number</th>
                </tr>
                <?php
                $sql = "SELECT * FROM admin;";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["username"]  . "</td><td>" . $row["email"] . "</td><td>" . $row["telephone_number"] . "</td><tr>";
                    }
                } else {
                    echo "no result";
                }
                ?>
            </table>
        </div>
    </div>
</section>
<hr>
<section class="driverregister container ">
    <div class="row">
        <div class="col-6">
            <h3>Driver Register</h3>
            <h1><?php echo $response; ?></h1>
            <div class="row">
                <form style="background-color:#EEF2FF;border-radius:10%;" action="../controller/driverController.php?type=addNewDriver" method="post" class="p-5">
                    <div class="mb-3">
                        <label for="username" class="form-label"><b>User Name</b></label>
                        <input type="text" class="form-control" name="driverName" aria-describedby="username" placeholder="Username" required>
                        <div id="username" class="form-text">We'll never share your username with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label"><b>Email</b></label>
                        <input type="email" class="form-control" name="driverEmail" aria-describedby="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="telephone" class="form-label"><b>Telephone Number</b></label>
                        <input type="text" class="form-control" name="driverTelephone" aria-describedby="telephone" placeholder="Telephone number" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label"><b>Password</b></label>
                        <input type="password" class="form-control" name="driverPassword" required placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="col-6">
            <table class="table">
                <tr>
                    <th>Username</th>
                    <th>email</th>
                    <th>telephone Number</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <?php
                // $sql = "SELECT * FROM driver;";
                // $result = $conn->query($sql);


                while ($row = $getDrivers->fetch_assoc()) { ?>

                    <tr>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['telephone_number']; ?></td>
                        <td><a href="edit_driver.php?driverId=<?php echo base64_encode($row["driver_id"]); ?>" class="btn btn-primary">Edit</a> &nbsp;</td>
                        <td><a href="../controller/driverController.php?type=deleteDriver&driverId=<?php echo base64_encode($row["driver_id"]); ?>" class="btn btn-primary">Delete</a> &nbsp;</td>
                    </tr>

                <?php } ?>
            </table>
        </div>
    </div>
</section>
<hr>


<?php include('footer.php') ?>