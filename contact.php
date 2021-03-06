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
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <script src="js/angular.min.js"></script>
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/contact.js"></script>
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
                        <li><a href="quote.php">Get a quote</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="#" class="active">Contact us</a></li>
                    </ul>
                </div>
            </nav>
            <section>
                <div class="centrador">
                    <div id="izquierda">
                        <div id="contacto">
                            <h3><span>Contact</span> information</h3>
                        </div>
                        <h4>HIGH TECH SUPPLIES</h4>
                        <div class="contacto">

                            <span>Address:</span><br/>
                            12601 N.W. 115th AVE<br/>
                            BLDG. A, UNIT 114<br/>
                            MEDLEY, FL 33178<br/><br/><br/>
                            <span>Phone:</span><br/>(305) 822-4077<br/><br/>
                            <span>Fax:</span><br/>(305) 489-0289<br/><br/>
                            <span>Toll Free:</span><br/>1-866-263-8457<br/><br/><br/>
                            <span>General info:</span><br/><a href="mailto:info@hightech-ndt.com" target="_blank">info@hightech-ndt.com</a><br/><br/>
                            <span>Sales:</span><br/><a href="mailto:sales@hightech-ndt.com" target="_blank">sales@hightech-ndt.com</a><br/><br/>
                            <span>Support:</span><br/><a href="mailto:support@hightech-ndt.com" target="_blank">support@hightech-ndt.com</a>
                        </div>
                    </div>
                    <div id="derecha">
                        <form>
                            <span class="legend">Contact Us</span>
                            <div class="line"></div><br/>
                            <div class="form-group">
                                <label>Contact Company</label><br>
                                <div class="compania" data-toggle="tooltip" data-placement="right" title="Please select which company you want to receive your inquiries">
                                    <div class="btn-group" data-toggle="buttons">
                                      <label class="btn btn-primary active">
                                        <input type="radio" name="compania" id="option1" checked> High Tech Supplies
                                      </label>
                                      <label class="btn btn-primary">
                                        <input type="radio" name="compania" id="option2" > Suplitec
                                      </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Name</label><br>
                                <input type="text" class="form-control input-formulario">
                            </div>
                            <div class="form-group">
                                <label>Email</label><br>
                                <input type="email" class="form-control input-formulario">
                            </div>
                            <div class="form-group">
                                <label>Company Name</label><br>
                                <input type="text" class="form-control input-formulario">
                            </div>
                            <div class="form-group">
                                <label>To</label><br>
                                <select class="form-control input-formulario">
                                    <option value="">Please Select a Department</option>
                                    <option value="sales@hightech-ndt.com">Sales</option>
                                    <option value="support@hightech-ndt.com">Support</option>
                                    <option value="info@hightech-ndt.com">Info</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Your Message</label>
                                <textarea class="form-control input-formulario"></textarea>
                            </div>
                            <div id="buttons">
                                <input type="submit" class="btn btn-success" value="Submit">
                                <input type="reset" class="btn btn-danger" value="Reset">
                            </div>
                        </form>
                        <span class="legend">Find us on Google Maps</span>
                        <div class="line"></div><br/>
                        <iframe class="mapa" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=12601+N.W.+115th+AVE+BLDG.+A,+UNIT+114+MEDLEY,+FL+3317&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=53.345014,135.263672&amp;ie=UTF8&amp;hq=&amp;hnear=12601+NW+115th+Ave+%23114,+Medley,+Florida+33178&amp;z=14&amp;ll=25.889819,-80.384335&amp;output=embed"></iframe>
                        <br>
                    </div>
                </div>
            </section>
        </div>
	</body>
</html>