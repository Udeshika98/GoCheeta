<?php include('navbar.php');?>


<section class="container my-5">
    <div class="row" style="margin:0 30%;">
        <form style="background-color:#EEF2FF;border-radius:5%;" class="p-5" action="../controller/customerController.php?type=login" method="post">
            <div class="mb-3">
                <label for="username" class="form-label"><b>User Name</b></label>
                <input type="text" class="form-control" name="username" aria-describedby="username" required placeholder="Username...">
                <div id="username" class="form-text">We'll never share your username with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label"><b>Password</b></label>
                <input type="password" class="form-control" name="password" required placeholder="Password....">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</section>


<?php include('footer.php') ?>