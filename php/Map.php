
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SPOC Data Portal</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS Files-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/custom.css" />
    <link rel="stylesheet" type="text/css" href="../orbtrak/orbtrak.css" />
    <script src="../orbtrak/predictlib.js" type="text/javascript"></script>
    <script src="../orbtrak/tle.js" type="text/javascript"></script>
    <script src="../orbtrak/orbtrak.js" type="text/javascript"></script>
    <script type="text/javascript">
        function load()
        {
                // Pass in latitude and longitude of the ground station (your location).
                Orb.startTracking(document.getElementById('map-div'), 33.952, -83.358);
                Orb.generateTable(document.getElementById('passes'));
        }
    </script>

    <!-- Javascript Files -->
    <script src="../Js/LoginPage.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body onload="load()">
    <nav id="map-nav" class="navbar fixed-top">
        <div class="container-fluid " id="TopHeader">
            <div class="navbar-header">
				<img id="brand-pic" src="../img/SPOC_patch.png">
                <a class="navbar-brand" href="../php/Index.php">UGA SSRL</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="../php/Map.php">
                        <span class="glyphicon glyphicon-map-marker"></span>
                        Map
                    </a>
                </li>
                <li>
                    <a href="../php/AboutUs.php">
                        <span class="glyphicon glyphicon-info-sign"></span>
                        About
                    </a>
                </li>
                <li>
                    <a href="../php/Login.php">
                        <span class="glyphicon glyphicon-user"></span>
                        Log in
                    </a>
                </li>
            </ul>
        </div>
    </nav>
<div  id="map-div"></div>
<div> MAP </div>
<h3 id="pass-title" class="title-3 text-center">UGA Ground Station Passes</h3>
<div id="passes">
</div>
<!--<div id="spoc-data-container" class="card">
	<div id="spoc-data-top" class="card-header collapsed" data-toggle="collapse" href="#collapseSpoc">
		<a class="card-title">
			SPOC
		</a>
	</div>
	<div id="collapseSpoc" class="card-body collapse">
		test
	</div>-->
</div>



<?php include("../html/bottom.html"); ?>
