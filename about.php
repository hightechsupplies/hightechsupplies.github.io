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
        $info = array( "has become a leader in providing high quality and advance technology products to the Non Destructive Testing, Welding and Safety areas.",
        "Our strategic location (South Florida) is easily accessed by both, Domestic and Latin American markets.",
        "Our Company offers excellent service supplying a wide range of equipment and materials, which are competitive in pricing with prompt delivery time.",
        "In addition to our product lines, we have knowledgeable and certified personnel who can assist you, not only with training and consulting, but also, with technical on site support.",
        "As a result, a quick and correct decision of products can be achieved.");
    }

    if($_SESSION["lan"] == "es") 
    {
        $menu = array( "Inicio","Productos","Cotizar","Nosotros","Contacto");
        $info = array( "se ha convertido en un líder en el suministro de alta calidad y productos de tecnología de antelación a la Ensayos No Destructivos , Soldadura y zonas de seguridad . " ,
        "Nuestra ubicación estratégica ( sur de Florida ) es de fácil acceso tanto , los mercados nacionales y de América Latina. " ,
        "Nuestra compañía ofrece un servicio excelente suministro de una amplia gama de equipos y materiales , que son competitivos en precio con el tiempo de entrega rápida . " ,
        "Además de nuestras líneas de productos , contamos con personal capacitado y certificado que puede ayudarle , no sólo con la formación y la consultoría, sino también , con el apoyo técnico sobre el sitio. " ,
        "Como resultado , una decisión rápida y correcta de los productos se puede lograr. ");
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
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <script src="js/angular.min.js"></script>
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
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
                    <a href="home.php" class="logo"><img id="logo" src="imagenes/logon.png"></a>
                    <ul class="nav ">
                        <li><a href="home.php"><?php echo $menu[0]?></a></li>
                        <li class="dropdown">
                          <a href="products.php"><?php echo $menu[1]?><span class="caret"></span></a>
                          <ul class="dropdown-menu menu" menu></ul>
                        </li>
                        <li><a href="quote.php"><?php echo $menu[2]?></a></li>
                        <li><a href="#" class="active"><?php echo $menu[3]?></a></li>
                        <li><a href="contact.php"><?php echo $menu[4]?></a></li>
                    </ul>
                </div>
            </nav>
            <section>
                <div class="centrador">
                        <h3>About us</h3>
                        <div class="line"></div>
                    <h4><b>HIGH TECH SUPPLIES, INC.,</b></h4>
                    <blockquote>
                        <img src="imagenes/logo.jpg">
                        <p><?php echo $info[0] ?></p>
                        <p><?php echo $info[1] ?></p>
                        <p><?php echo $info[2] ?></p>
                        <p><?php echo $info[3] ?></p>
                        <p><?php echo $info[4] ?></p>
                    </blockquote>
                </div>
            </section>
            <footer>
                <div class="centrador">
                    <div class="contacto">
                        <p><b>
                        <a href="home.php">Home</a><br/>
                        <a href="products.php">Products</a><br/>
                        <a href="quote.php">Get a quote</a><br/>
                        <a href="#">About us</a><br/>
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