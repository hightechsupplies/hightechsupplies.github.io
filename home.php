<?php
    session_start();
    if(!empty($_GET["lan"]))
    {
        if($_GET["lan"] == "es" || $_GET["lan"] == "en")
        $_SESSION["lan"] = $_GET["lan"];
    }

    if($_SESSION["lan"] == "en")
    {
        $menu = array( "Home","Products","Get a quote","About us","Contact us");
    }

    if($_SESSION["lan"] == "es") 
    {
        $menu = array( "Inicio","Productos","Cotizar","Nosotros","Contacto");
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>High Tech Supplies</title>
		<meta name="author" content="Jesusangel Jimenez">
    <meta charset="UTF-8">
    <link href="imagenes/favicon.ico" rel="shortcut icon"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <script src="js/angular.min.js"></script>
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/home.js"></script>
	</head>
	<body ng-app="hightech">
        <div id="contenedor">
            <header>
                <div class="centrador">
                    <div class="region">
                        <a href="index.html">Select Region</a>
                    </div>
                    <div class="idiomas">
                        <a href="?lan=en">English</a>
                        <a href="?lan=es">Español</a>
                    </div>
                </div>
            </header>
            <nav>
                <div class="centrador">
                    <a href="#" class="logo"><img id="logo" src="imagenes/logon.png"></a>
                    <ul class="nav ">
                        <li><a href="#" class="active">Home</a></li>
                        <li class="dropdown">
                          <a href="products.php">Products<span class="caret"></span></a>
                          <ul class="dropdown-menu menu" menu></ul>
                        </li>
                        <li><a href="quote.php">Get a quote</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                    </ul>
                </div>
            </nav>
            <section>
                <div class="centrador">
                    <div id="principal">
                        <div class="fader" id="fader1"></div> 
                        <div class="fader" id="fader2"></div> 
                    </div>
                    <div id="centro">
                        <div class="checkea">
                            <h3>Check our best selling products</h3>
                            <div class="line"></div>
                        </div>
                        <div class="products"><a href="products.php">
                            <img src="imagenes/medidor.png">
                            <p>Non Destructive Testing</p>
                        </a></div>
                        <div class="products"><a href="products.php">
                            <img src="imagenes/casco.png">
                            <p>Welding</p>
                        </a></div>
                        <div class="products"><a href="products.php">
                            <img src="imagenes/casco2.png">
                            <p>Industrial Safety Products</p>
                        </a></div>
                    </div>
                </div>
            </section>
            <footer>
                <div class="centrador">
                    <div class="contacto">
                        <p><b>
                        <a href="#">Home</a><br/>
                        <a href="products.php">Products</a><br/>
                        <a href="quote.php">Get a quote</a><br/>
                        <a href="about.php">About us</a><br/>
                        <a href="contact.php">Contact us</a></b></p>
                    </div>
                    <div class="contacto">
                        <div></div>
                        <p>Address:<br>
                        12601 N.W. 115th AVE<br>
                        BLDG. A, UNIT 114<br>
                        MEDLEY, FL 33178</p>
                    </div>
                    <div class="contacto">
                        <div></div>
                        <p>Phone: (305) 822-4077<br>
                        Fax: (305) 489-0289<br>
                        Toll Free: 1-866-263-8457</p>
                    </div>
                    <div class="contacto">
                        <div></div>
                        <p>General info: <a href="mailto:info@hightech-ndt.com" target="_blank">info@hightech-ndt.com</a><br>
                        Sales: <a href="mailto:sales@hightech-ndt.com" target="_blank">sales@hightech-ndt.com</a><br>
                        Support: <a href="mailto:support@hightech-ndt.com" target="_blank">support@hightech-ndt.com</a></p>
                    </div>
                </div>
            </footer>
        </div>
	</body>
</html>