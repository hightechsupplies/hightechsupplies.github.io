<!DOCTYPE html>
<html>
	<head>
		<title>High Tech Supplies</title>
		<meta name="author" content="Jesusangel Jimenez">
    <meta charset="UTF-8">
    <link href="imagenes/favicon.ico" rel="shortcut icon"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script src="js/angular.min.js"></script>
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/index.js"></script>
	</head>
	<body ng-app="hightech">
        <div id="contenedor">
            <div id="barra-idioma">
            </div>
            <header>
                <div class="centrador">
                    <img id="logo" src="imagenes/logo.png"/>
                </div>
            </header>
            <section>
                <div class="centrador">
                    <p><b>Choose Your Region:</b><br/>
                    <a href="home.php" class="north">North America</a> | <a href="#" class="central">Central America</a> | <a href="#" class="south">South America</a></p>

                    <img id="map" src="imagenes/mapas/worldmap.jpg" alt="map" usemap="#mapa">
                    <map name="mapa">
                        <area class="north" shape="rect" coords="160,0,410,45" alt="north" href="home.php">
                        <area class="north" shape="rect" coords="0,35,350,85" alt="north" href="home.php">
                        <area class="north" shape="rect" coords="80,85,290,125" alt="north" href="home.php">
                        <area class="north" shape="rect" coords="70,125,230,165" alt="north" href="home.php">
                        <area class="north" shape="rect" coords="120,165,190,185" alt="north" href="home.php">
                        <area class="central" shape="rect" coords="140,205,188,245" alt="central" href="#">
                        <area class="central" shape="rect" coords="165,185,250,225" alt="central" href="#">
                        <area class="south" shape="rect" coords="188,225,270,255" alt="central" href="#">
                        <area class="south" shape="rect" coords="170,255,325,315" alt="central" href="#">
                        <area class="south" shape="rect" coords="190,315,310,350" alt="central" href="#">
                        <area class="south" shape="rect" coords="212,350,285,455" alt="central" href="#">
                    </map>
                </div>
            </section>
            <footer>
                <div class="centrador">
                    <div id="contacto">
                        <h4><span>Contact</span> information</h4>
                    </div>
                    <div class="contacto">
                        <p><b>Address:</b><br>
                        12601 N.W. 115th AVE<br>
                        BLDG. A, UNIT 114<br>
                        MEDLEY, FL 33178</p>
                    </div>
                    <div class="contacto">
                        <p><b>Phone:</b> (305) 822-4077<br>
                        <b>Fax:</b> (305) 489-0289<br>
                        <b>Toll Free:</b> 1-866-263-8457</p>
                    </div>
                    <div class="contacto">
                        <p><b>General info:</b> <a href="mailto:info@hightech-ndt.com" target="_blank">info@hightech-ndt.com</a><br>
                        <b>Sales:</b> <a href="mailto:sales@hightech-ndt.com" target="_blank">sales@hightech-ndt.com</a><br>
                        <b>Support:</b> <a href="mailto:support@hightech-ndt.com" target="_blank">support@hightech-ndt.com</a></p>
                    </div>
                </div>
            </footer>
        </div>
	</body>
</html>