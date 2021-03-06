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
    <link rel="stylesheet" type="text/css" href="css/quote.css">
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
                        <li><a href="home.php">Home</a></li>
                        <li class="dropdown">
                          <a href="products.php">Products<span class="caret"></span></a>
                          <ul class="dropdown-menu menu" menu></ul>
                        </li>
                        <li><a href="#" class="active">Get a quote</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                    </ul>
                </div>
            </nav>
            <section>
                <div class="centrador">
                    <h2>Get a quote</h2>
                    <h4>Request quote or more information about products or services.</h4>
                    <p>Please, let us know your needs in detail and one of our executives will contact you shorty.</p><br/>
                    <form>
                        <span class="legend">Company</span>
                        <div class="line"></div><br/>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control input-formulario">
                        </div>
                        <div class="form-group">
                            <label>Contact Name</label>
                            <input type="text" class="form-control input-formulario">
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control input-formulario">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control input-formulario">
                        </div>
                        <span class="legend">Address</span>
                        <div class="line"></div><br/>
                        <div class="form-group">
                            <label>Street Address</label>
                            <input type="text" class="form-control input-formulario">
                        </div>
                        <div class="form-group">
                            <label>Street Address (optional)</label>
                            <input type="text" class="form-control input-formulario">
                        </div>
                        <div class="form-group">
                            <label>State</label>
                            <input type="text" class="form-control input-formulario">
                        </div>
                        <div class="form-group">
                            <label>Zip or Postal Code</label>
                            <input type="text" class="form-control input-formulario">
                        </div>

                        <span class="legend">Message</span>
                        <div class="line"></div><br/>
                        <div class="form-group">
                            <div><label>Comment</label></div>
                            <div><textarea class="form-control input-formulario"></textarea></div>
                        </div>
                        <div id="buttons">
                            <input type="submit" class="btn btn-success" value="Submit">
                            <input type="reset" class="btn btn-danger" value="Reset">
                        </div>
                    </form>
                </div>
            </section>
            <footer>
                <div class="centrador">
                    <div class="contacto">
                        <p><b>
                        <a href="home.php">Home</a><br/>
                        <a href="products.php">Products</a><br/>
                        <a href="#">Get a quote</a><br/>
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