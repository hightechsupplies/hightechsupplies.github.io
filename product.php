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
    <link rel="stylesheet" type="text/css" href="css/product.css">
    <link rel="stylesheet" type="text/css" href="css/store.css">
    <script src="js/angular.min.js"></script>
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/product.js"></script>
	</head>
	<body ng-app="hightech">
        <a id="top"></a>
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
                          <a href="#" class="active">Products<span class="caret"></span></a>
                          <ul class="dropdown-menu menu" menu></ul>
                        </li>
                        <li><a href="quote.php">Get a quote</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                    </ul>
                    <div class="input-group buscador">
                        <input type="text"  class="form-control input-buscador" name="finicial">
                        <span class="input-group-addon"><img src="imagenes/search.png"></span>
                    </div>
                </div>
            </nav>
            <section>
                <div class="centrador">
                    <div id="pbar">
                        <div><a>Non Destructive Testing</a> > <a>Ultrasonic</a> > <b>Flaw Detectors</b></div>
                        <div><a class="btn btn-white"><img src="imagenes/cart.png"/> Check Cart <span class="badge">888</span></a><a class="btn btn-white">Get a Quote</a></div>
                    </div>
                    <div class="product">
                        <div class="cont-imgs">
                            <div class="cont-img-small active">
                                <img class="image" src="fotos/00c636e00bee0ba03b364841363f738b.jpg"/>
                            </div>
                            <div class="cont-img-small">
                                <img class="image" src="fotos/00d9b1e39f02d57be65ad2a9a6eaa3b8.jpg"/>
                            </div>
                            <div class="cont-img-small">
                                <img class="image" src="fotos/00c636e00bee0ba03b364841363f738b.jpg"/>
                            </div>
                            <div class="cont-img-small">
                                <img class="image" src="fotos/0fcccca5b510e5bb86a94045046d252d.jpg"/>
                            </div>
                            <div class="cont-img-small">
                                <img class="image" src="fotos/0d7764695c55c5d1c3edadce4a2a2cb9.jpg"/>
                            </div>
                            <div class="cont-img-small">
                                <img class="image" src="fotos/00d9b1e39f02d57be65ad2a9a6eaa3b8.jpg"/>
                            </div>
                        </div>
                        <div class="cont-img-big"><img class="image" src="fotos/00c636e00bee0ba03b364841363f738b.jpg"/></div>
                        <div class="cont-info">
                            <h2>Coaxial Cable</h2>
                            <hr>
                            <div>
                                <p>Is a type of cable that has an inner conductor surrounded by a tubular insulating layer, surrounded by a tubular conducting shield. Many coaxial cables also have an insulating outer sheath or jacket. The term coaxial comes from the inner conductor and the outer shield sharing a geometric axis.</p>
                                <p>Quantity:<input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button></p>
                                <button class="btn quote">Get a quote of this product only</button>
                            </div>
                        </div>
                        <div class="cont-adit">
                            <table>
			<tr>
				<th colspan="2">
					<h3>Product specifications</h3>
				</th>
			</tr>
			<tr>
				<td colspan="2">
					<h3>High voltage</h3>
				</td>
			</tr>
			<tr>
				<td><b>Adjustment range</b></td>
				<td>50 - 200&nbsp;kV</td>
			</tr>
			<tr>
				<td><b>Adjustment increments</b></td>
				<td>+/- 1 kV/step</td>
			</tr>
			<tr>
				<td colspan="2">
					<h3>Tube current</h3>
				</td>
			</tr>
			<tr>
				<td><b>Adjustment range</b></td>
				<td>0.5 -&nbsp;4.5 mA</td>
			</tr>
			<tr>
				<td><b>Adjustment increments</b></td>
				<td>+/- 0.1 mA/step</td>
			</tr>
			<tr>
				<td><b>Max. power</b></td>
				<td>600 W</td>
			</tr>
			<tr>
				<td><b>Focal spot acc. EN12543</b></td>
				<td>0.4 x 4.0mm</td>
			</tr>
			<tr>
				<td><b>Beam angle</b></td>
				<td>40&deg; x 360&deg;</td>
			</tr>
			<tr>
				<td><b>Inherent filtration</b></td>
				<td>0.4mm&nbsp;Fe/Ni/Co</td>
			</tr>
			<tr>
				<td><b>Additional filters</b></td>
				<td>3mm Al</td>
			</tr>
			<tr>
				<td><b>Duty cycle at max. power</b></td>
				<td>100% at 20&deg;C</td>
			</tr>
			<tr>
				<td><b>Anode cooling</b></td>
				<td>air</td>
			</tr>
			<tr>
				<td colspan="2">
					<h3>Mechanical data</h3>
				</td>
			</tr>
			<tr>
				<td><b>Tube head:</b></td>
				<td></td>
			</tr>
			<tr>
				<td><b>Dimensions (l x d) incl. hand rings</b></td>
				<td>295mm x 672mm</td>
			</tr>
			<tr>
				<td><b>Weight, incl. hand rings</b></td>
				<td>27 kg</td>
			</tr>
			<tr>
				<td><b>Control unit:</b></td>
				<td></td>
			</tr>
			<tr>
				<td><b>Dimensions (w x h x d)</b></td>
				<td>464mm x 322mm x 164mm</td>
			</tr>
			<tr>
				<td><b>Weight</b></td>
				<td>11.5 kg</td>
			</tr>
		</table>
                        </div>
                    </div>
                    
                </div>
            </section>
            <footer>
                <div class="centrador">
                    <div class="contacto">
                        <p><b>
                        <a href="home.php">Home</a><br/>
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