<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Go Green</title>

    <?php
    // header
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
                    <li class="active"><a href="#">Home</a></li>
                    <li class=""><a href="deposits.php">My Deposits</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <br>
                    <li class="active"><strong>Welcome Mr. Manju</strong></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
    </nav>
    <div>
        <button type="button" class="btn btn-success" id="get-location">Get recycle bins around me</button>
    </div>
    <!-- Two columns -->
    <div class="row">
        <div class="col-md-10">
            <div id="map" style="width: auto; height: 500px;"></div>
        </div>
        <?php
        include_once 'bin-types.php';
        ?>
    </div>
</div>
<!-- /container -->
<?php
    // footer
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

<!-- Type of bins are configured in an array for dynamic loading -->
<script src="bin-types.js"></script>

<script>
    // filter to select bin type
    var binType = "<?php echo $_REQUEST['bin']; ?>";

    // Button click (Get the current location)
    $("#get-location").click(function () {
        map.on('locationfound', onLocationFound);

        map.locate({setView: true, maxZoom: 16});
    });

    // leafletjs Map related
    var map = L.map('map').setView([2.921318, 101.655935], 15);

    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6IjZjNmRjNzk3ZmE2MTcwOTEwMGY0MzU3YjUzOWFmNWZhIn0.Y8bhBaUMqFiPrDRW9hieoQ', {
        maxZoom: 18,
        attribution: '',
        id: 'mapbox.streets'
    }).addTo(map);

    // Market set to Cyberjaya, Kuala Lumpur, Malaysia
    L.marker([2.921318, 101.655935]).addTo(map)
        .bindPopup("<b>Welcome to LeafletJs Map</b><br />").openPopup();


    // based on the bin type, lets put the markers on the map.
    switch (binType) {
        case "paper":
            $.each(data, function (i, item) {
                if (data[i].LATLONG && data[i].bin == true) {
                    //console.log(data[i]);
                    var partsOfStr = data[i].LATLONG.split(',');
                    // greenIcon comes from bin-types.js
                    L.marker([partsOfStr[0], partsOfStr[1]], {icon: paper[Math.floor((Math.random() * 4) + 1)]}).addTo(map).bindPopup(data[i].COMPANY);
                }
            });
            break;
        case "plastic":
            $.each(data, function (i, item) {
                if (data[i].LATLONG && data[i].bin == true) {
                    //console.log(data[i]);
                    var partsOfStr = data[i].LATLONG.split(',');
                    // greenIcon comes from bin-types.js
                    L.marker([partsOfStr[0], partsOfStr[1]], {icon: plastic[Math.floor((Math.random() * 4) + 1)]}).addTo(map).bindPopup(data[i].COMPANY);
                }
            });
            break;
        case "glass":
            $.each(data, function (i, item) {
                if (data[i].LATLONG && data[i].bin == true && data[i].bin_type == 1) {
                    //console.log(data[i]);
                    var partsOfStr = data[i].LATLONG.split(',');
                    // greenIcon comes from bin-types.js
                    L.marker([partsOfStr[0], partsOfStr[1]], {icon: glass[Math.floor((Math.random() * 4) + 1)]}).addTo(map).bindPopup(data[i].COMPANY + " <br/><span class='fa fa-car fa-2x'></span>");
                }
            });
            break;
        case "can":
            $.each(data, function (i, item) {
                if (data[i].LATLONG && data[i].bin == true) {
                    //console.log(data[i]);
                    var partsOfStr = data[i].LATLONG.split(',');
                    // greenIcon comes from bin-types.js
                    L.marker([partsOfStr[0], partsOfStr[1]], {icon: can[Math.floor((Math.random() * 4) + 1)]}).addTo(map).bindPopup(data[i].COMPANY);
                }
            });
            break;
        case "battery":
            $.each(data, function (i, item) {
                if (data[i].LATLONG && data[i].bin == true && data[i].bin_type == 1) {
                    //console.log(data[i]);
                    var partsOfStr = data[i].LATLONG.split(',');
                    // greenIcon comes from bin-types.js
                    L.marker([partsOfStr[0], partsOfStr[1]], {icon: battery[Math.floor((Math.random() * 4) + 1)]}).addTo(map).bindPopup(data[i].COMPANY + " <br/><span class='fa fa-car fa-2x'></span>");
                }
            });
            break;
        default:
            $.each(data, function (i, item) {
                if (data[i].LATLONG && data[i].bin == true) {
                    //console.log(data[i]);
                    var partsOfStr = data[i].LATLONG.split(',');
                    // greenIcon comes from bin-types.js
                    L.marker([partsOfStr[0], partsOfStr[1]], {icon: bin}).addTo(map).bindPopup(data[i].COMPANY);
                }
            });
    }


    // map footer
    var popup = L.popup();

    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent("You clicked the map at " + e.latlng.toString())
            .openOn(map);
    }

    // to get the current location
    function onLocationFound(e) {
        var radius = e.accuracy / 2;

        L.marker(e.latlng).addTo(map)
            .bindPopup("You are within " + radius + " meters from this point").openPopup();

        L.circle(e.latlng, radius).addTo(map);
    }

    // checkbox logic. Checkboxes TODO doesn't work.
    var bintypes = [];

    var getValue = function () {

        if (this.checked) {
            bintypes.push(this.value);
        } else {
            bintypes.pop(this.value);
        }

        console.log("Bin Types = " + jQuery.unique(bintypes));
    };

    // trigger checkbox click event
    $("input[type=checkbox]").on("click", getValue);
</script>
</body>
</html>
