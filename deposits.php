<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Go Green</title>

    <?php
    include 'header.php';
    ?>
</head>
<body>
<div class="container">
    <!-- Static navbar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color: green"><strong>Smart Bin Recycling</strong></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class=""><a href="index.php">Home</a></li>
                    <li class="active"><a href="deposits.php">My Deposits</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <br/>
                    <li class="active"><strong>Welcome Mr. Manju</strong></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
    </nav>
    <!-- Two columns -->
    <div class="row">
        <div class="col-md-12">
            <h2>My Recycle Deposit Transactions</h2>
            <hr/>
            <div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                                              data-toggle="tab">Current</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">History</a>
                    </li>
                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Rates</a>
                    </li>
                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Ranking</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home">
                        <div class="table-responsive">
                            <table class="table .table-hover" width="500">
                                <tr>
                                    <td><img src="images/paper.png" width="40" height="45"></td>
                                    <td class="active">5001g</td>
                                    <td>RM2.05</td>
                                </tr>
                                <tr>
                                    <td><img src="images/plastic.png" width="40" height="45"></td>
                                    <td class="active">203g</td>
                                    <td>RM8.05</td>
                                </tr>
                                <tr>
                                    <td><img src="images/glass.png" width="40" height="45"></td>
                                    <td class="active">4501g</td>
                                    <td>RM1.05</td>
                                </tr>
                                <tr>
                                    <td><img src="images/can.png" width="40" height="45"></td>
                                    <td class="active">210g</td>
                                    <td>RM11.05</td>
                                </tr>
                                <tr>
                                    <td><img src="images/battery.png" width="40" height="45"></td>
                                    <td class="active">3005g</td>
                                    <td>RM21.05</td>
                                </tr>
                                <tr class="active">
                                    <th colspan="2">Total</th>
                                    <th>RM43.36</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="profile">
                        <div class="table-responsive">
                            <table class="table .table-hover">
                                <table class="table .table-hover">
                                    <tr>
                                        <td rowspan="7">2015-08-24</td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/paper.png" width="40" height="45"></td>
                                        <td>5001g</td>
                                        <td>RM2.05</td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/plastic.png" width="40" height="45"></td>
                                        <td>203g</td>
                                        <td>RM8.05</td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/glass.png" width="40" height="45"></td>
                                        <td>4501g</td>
                                        <td>RM1.05</td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/can.png" width="40" height="45"></td>
                                        <td>210g</td>
                                        <td>RM 11.05</td>
                                    </tr>
                                    <tr>
                                        <td><img src="images/battery.png" width="40" height="45"></td>
                                        <td>3005g</td>
                                        <td>RM21.05</td>
                                    </tr>
                                    <tr class="active">
                                        <th colspan="2">Total</th>
                                        <th>RM43.36</th>
                                    </tr>
                                </table>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="messages">22</div>
                    <div role="tabpanel" class="tab-pane fade" id="settings">33</div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- /container -->
<?php
include_once 'footer.php';
?>
<script>
    var locations = [];
    var data = $.parseJSON(
        $.ajax({
            url: 'api/locations.php',
            dataType: "json",
            async: false
        }).responseText);

</script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.js"></script>
<script src="bin-types.js"></script>
<script>

    // Button click
    $("#get-location").click(function () {
        map.on('locationfound', onLocationFound);

        map.locate({setView: true, maxZoom: 16});
    });

    var map = L.map('map').setView([2.921318, 101.655935], 15);

    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6IjZjNmRjNzk3ZmE2MTcwOTEwMGY0MzU3YjUzOWFmNWZhIn0.Y8bhBaUMqFiPrDRW9hieoQ', {
        maxZoom: 18,
        attribution: '',
        id: 'mapbox.streets'
    }).addTo(map);


    L.marker([2.921318, 101.655935]).addTo(map)
        .bindPopup("<b>Welcome to Cyberjaya Smart City</b><br />").openPopup();


    // customizing the map
    // L.marker([2.92395, 101.667659], {icon: greenIcon}).addTo(map);
    $.each(data, function (i, item) {

        if (data[i].LATLONG && data[i].bin == true) {
            //console.log(data[i]);
            var partsOfStr = data[i].LATLONG.split(',');
            // greenIcon comes from bin-types.js
            L.marker([partsOfStr[0], partsOfStr[1]], {icon: greenIcon}).addTo(map).bindPopup(data[i].COMPANY);
        }
    });


    function onLocationFound(e) {
        var radius = e.accuracy / 2;

        L.marker(e.latlng).addTo(map)
            .bindPopup("You are within " + radius + " meters from this point").openPopup();

        L.circle(e.latlng, radius).addTo(map);
    }

    // map footer
    var popup = L.popup();

    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent("You clicked the map at " + e.latlng.toString())
            .openOn(map);
    }

    //map.on('click', onMapClick);

</script>
</body>
</html>
