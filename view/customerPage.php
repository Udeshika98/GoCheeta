<?php include('navbar.php') ?>

<br>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 style="font-weight:bold;">Your Live Location 📌</h1><br>
            <div style="height:50vh; width:100%;" id="map"></div>

            <!-- leaflet js  -->
            <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
            <script>
                // Map initialization
                var map = L.map('map').setView([14.0860746, 100.608406], 5);

                //osm layer
                var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                });
                osm.addTo(map);

                if (!navigator.geolocation) {
                    console.log("Your browser doesn't support geolocation feature!")
                } else {
                    setInterval(() => {
                        navigator.geolocation.getCurrentPosition(getPosition)
                    }, 2000);
                }

                var marker, circle;

                function getPosition(position) {
                    // console.log(position)
                    var lat = position.coords.latitude
                    var long = position.coords.longitude
                    var accuracy = position.coords.accuracy

                    if (marker) {
                        map.removeLayer(marker)
                    }

                    if (circle) {
                        map.removeLayer(circle)
                    }

                    marker = L.marker([lat, long])
                    circle = L.circle([lat, long], {
                        radius: accuracy
                    })

                    var featureGroup = L.featureGroup([marker, circle]).addTo(map)

                    map.fitBounds(featureGroup.getBounds())

                    console.log("Your coordinate is: Lat: " + lat + " Long: " + long + " Accuracy: " + accuracy)
                }
            </script>
        </div>
        <div class="col-6"><br><br><br><br><br><br>
            <img src="https://images.unsplash.com/45/eDLHCtzRR0yfFtU0BQar_sylwiabartyzel_themap.jpg?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8bG9jYXRpb258ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="">
        </div>
    </div>

</div>

<section class="container">
    <hr><br>
    <div class="row">
        <div class="col-6">
            <br>
            <div id="map1">
                <h2>Waiting For Your Location...</h2><br>
            </div>
            <br>
        </div>
        <div class="col-6"><br>
            <input type="text" class="form-control" id="box1" placeholder="enter the distance (KM)">
            <small class="form-text text-muted">Enter The Number Of Kilometers Please.</small>
            <div class="input-group mb-3">
                <select class="custom-select" id="inputGroupSelect02">
                    <option selected>Select a vehicle type</option>
                    <option id="nonAc" value="50">Threewheel 🛺</option>
                    <option id="ac" value="500">Car 🚕</option>
                    <option id="nonAc" value="50">Van 🚐</option>
                </select>
                <div class="input-group-append">
                    <label class="input-group-text" for="inputGroupSelect02">kindly choose a vehicle type.</label>
                </div>
            </div>
            <div class="input-group mb-3">
                <select class="custom-select" id="inputGroupSelect02">
                    <option selected>A/C or Non-AC</option>
                    <option id="nonAc" value="50">A/C</option>
                    <option id="ac" value="500">Non-AC</option>
                </select>
                <div class="input-group-append">
                    <label class="input-group-text" for="inputGroupSelect02">vehicle type.</label>
                </div>
            </div>
            <small class="form-text text-muted">Please Enter the Type of Vehicle.</small>
            <input type="text" id="+" class="form-control" placeholder="Total Ride Cost" disabled>
            <small class="form-text text-muted">Be patient, please.</small><br>
            <input type="button" value="Get Cost" onclick="calcSum()" class="btn btn-outline-primary btn-lg btn-block">
        </div>
    </div>
</section>
<hr><br>
<section class="container">
    <div class="row">
        <div class="col-6">
            <input type="text" id="start" class="form-control" placeholder="Stating Location">
            <small class="form-text text-muted">Please Enter Your Stating Location Here.</small>
            <input type="text" id="end" class="form-control" placeholder="Destination">
            <small class="form-text text-muted">Please Enter Your Destination Here.</small>
            <button id="submit" class="btn btn-outline-primary btn-lg btn-block">Make Trip</button>
        </div>
        <div class="col-6">
            <img src="https://images.unsplash.com/photo-1610886023290-6ba32b20e354?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NzZ8fHRheGl8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="">
        </div>
    </div>


    <script>
        function calcSum() {
            let box1 = document.getElementById("box1").value;
            let ac = document.getElementById("ac").value;
            let sum = Number(box1) * Number(90) + Number(ac);

            document.getElementById("+").value = "RS" + "." + " " + sum + ".00";
        }
    </script>


    <script>
        $(document).ready(function() {

            $("#submit").on("click", function(e) {

                let start = $("#start").val() + ",LK";
                let end = $("#end").val() + ",LK";

                if (start != "" && end != "" && start !== end) {

                    let iframe = `<iframe width="100%" height="400" frameborder="0" style="border:0" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyB8Fj8TSzK3qnwj6QKjSSfx2nOT4AFBRIY&origin=${start}&destination=${end}&avoid=tolls|highways" allowfullscreen></iframe>`;

                    $("#map1").html(iframe);

                }

            })

        });
    </script>
</section>

<?php include('footer.php') ?>