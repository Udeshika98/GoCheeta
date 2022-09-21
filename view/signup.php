<?php include('navbar.php'); ?>

<section class="container my-5">
    <div class="row">
        <div class="col-5">
            <form style="background-color:#EEF2FF;border-radius:5%;" action="../controller/customerController.php?type=addNewCustomer" method="post" class="p-5">
                <div class="mb-3">
                    <label for="username" class="form-label"><b>User Name</b></label>
                    <input type="text" class="form-control" name="username" aria-describedby="username" placeholder="Username" required>
                    <div id="username" class="form-text">We'll never share your details with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label"><b>Email</b></label>
                    <input type="email" class="form-control" name="email" aria-describedby="email" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <label for="telephone" class="form-label"><b>Telephone Number</b></label>
                    <input type="text" class="form-control" name="telephone" aria-describedby="telephone" placeholder="Telephone number" required>
                </div>
                <!-- <div class="mb-3">
                <label for="username" class="form-label"><b>User Name</b></label>
                <input type="text" class="form-control" id="username" aria-describedby="username">
                <div id="username" class="form-text">We'll never share your username with anyone else.</div>
            </div> -->
                <div class="mb-3">
                    <label for="password" class="form-label"><b>Password</b></label>
                    <input type="password" class="form-control" name="password" required placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-2">

        </div>
        <div class="col-5">
            <p>Where it all began! GoCheeta Ride-Hailing is a seamless transport solution that arrives within minutes to wherever you are, featuring the best rates and the largest fleet of vehicles in Sri Lanka including Tuk-Tuks, Flex, Minis, Cars, Minivans, and Vans offering you comfort and safety throughout the journey.</p>
            <h3>Benefits 🚕</h3>
            <ul class="mx-4">
                <li>Simultaneous multiple ride bookings</li>
                <li>Live location share</li>
                <li>In-app SOS function</li>
                <li>Schedule and book later function</li>
                <li>Multiple drops</li>
                <li>24x7 customer support</li>
            </ul>
        </div>
    </div>
</section>


<?php include('footer.php') ?>