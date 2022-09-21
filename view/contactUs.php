<?php include('navbar.php') ?>
<style>
    .b1 {
        letter-spacing: 0.05rem;
    }

    .b1:hover {
        font-size: 1.05rem;
        color: blue;
        transform: translateY(-0.05em);
    }
</style>
<section class="container" style="margin-top: 4rem;">
    <div class="row">
        <div class="col-6">
            <h1>
                Hotlines
            </h1>
            <table style="width:150%;">
                <tr>
                    <td>General Inquiries</td>
                    <td>Business Inquiries</td>
                </tr>
                <tr>
                    <td>+9412333333</td>
                    <td>+9412313323</td>
                </tr>
                <tr>
                    <td>Careers</td>
                    <td>Inquiries on Affiliations</td>
                </tr>
                <tr>
                    <td>+9412333333</td>
                    <td>+9412313323</td>
                </tr>
            </table>
        </div>
        <div class="col-6">
            <h1>Get in touch</h1>
            <p>We would love to hear from you. Get in touch with us by email.</p>
            <form>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="button" class="btn btn-primary btn-lg ">Send</button>
            </form>
        </div>
    </div>
</section>
<section class="container">
    <h1>GoCheeta Head Office 🏠</h1>
    <p>Digital Mobility Solutions Lanka (Pvt) Ltd.
        No 309, High Level Road,
        Colombo 05, Sri Lanka.
    </p>
</section>

<?php include('footer.php') ?>