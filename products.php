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
    <link rel="stylesheet" type="text/css" href="css/products.css">
    <link rel="stylesheet" type="text/css" href="css/store.css">
    <script src="js/angular.min.js"></script>
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
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
                    <div id="izquierda">
                        <p>
                            <b>Categories</b><br>
                            <a href="#">Non Destructive Testing</a><br/>
                            <a href="#">Welding</a><br/>
                            <a href="#">Industrial Safety Products</a><br/>
                            <hr class="hrizq">
                            <b>Ultrasonic</b><br>
                            <a href="#">Flaw Detectors</a><br/>
                            <a href="#">Thickness Gauges</a><br/>
                            <a href="#">Transducers</a><br/>
                            <a href="#">Wedges</a><br/>
                            <a href="#">Cables & Adapters</a><br/>
                            <a href="#">Couplants</a><br/>
                            <a href="#">Calibration Blocks</a><br/>
                            <a href="#">Other Accesories</a>
                        </p>
                    </div>
                    <div id="derecha">
                        <div id="pbar">
                            <div><a>Non Destructive Testing</a> > <a>Ultrasonic</a> > <b>Flaw Detectors</b></div>
                            <div><a class="btn btn-white"><img src="imagenes/cart.png"/> Check Cart <span class="badge">888</span></a><a class="btn btn-white">Get a Quote</a></div>
                        </div>
                        <div class="productos">
                            <a href="#"><img src="fotos/00c636e00bee0ba03b364841363f738b.jpg"/></a>
                            <a href="#">Cable Coaxial</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <div class="productos">
                            <a href="#"><img src="fotos/00d9b1e39f02d57be65ad2a9a6eaa3b8.jpg"/></a>
                            <a href="#">Multimetro</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <div class="productos">
                            <a href="#"><img src="fotos/0d7764695c55c5d1c3edadce4a2a2cb9.jpg"/></a>
                            <a href="#">Soldador</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <hr class="tres">
                        <div class="productos">
                            <a href="#"><img src="fotos/0fcccca5b510e5bb86a94045046d252d.jpg"/></a>
                            <a href="#">Baterias</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <hr class="cuatro">
                        <div class="productos">
                            <a href="#"><img src="fotos/00c636e00bee0ba03b364841363f738b.jpg"/></a>
                            <a href="#">NEWSTONE 450 Grams (1 Lbs) Sodium Polyacrylate - Superabsorbent Diaper Polymer Made in Japan</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <hr class="cinco">
                        <div class="productos">
                            <a href="#"><img src="fotos/00d9b1e39f02d57be65ad2a9a6eaa3b8.jpg"/></a>
                            <a href="#">Multimetro</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <hr class="tres">
                        <div class="productos">
                            <a href="#"><img src="fotos/0d7764695c55c5d1c3edadce4a2a2cb9.jpg"/></a>
                            <a href="#">Soldador</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <div class="productos">
                            <a href="#"><img src="fotos/0fcccca5b510e5bb86a94045046d252d.jpg"/></a>
                            <a href="#">Baterias</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <hr class="cuatro">
                        <div class="productos">
                            <a href="#"><img src="fotos/00c636e00bee0ba03b364841363f738b.jpg"/></a>
                            <a href="#">Cable Coaxial</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <hr class="tres">
                        <div class="productos">
                            <a href="#"><img src="fotos/0fcccca5b510e5bb86a94045046d252d.jpg"/></a>
                            <a href="#">Baterias</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <hr class="cinco">
                        <div class="productos">
                            <a href="#"><img src="fotos/00c636e00bee0ba03b364841363f738b.jpg"/></a>
                            <a href="#">Cable Coaxial</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <div class="productos">
                            <a href="#"><img src="fotos/00d9b1e39f02d57be65ad2a9a6eaa3b8.jpg"/></a>
                            <a href="#">Multimetro</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <hr class="tres cuatro">
                        <div class="productos">
                            <a href="#"><img src="fotos/0d7764695c55c5d1c3edadce4a2a2cb9.jpg"/></a>
                            <a href="#">Soldador</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <div class="productos">
                            <a href="#"><img src="fotos/0fcccca5b510e5bb86a94045046d252d.jpg"/></a>
                            <a href="#">Baterias</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <div class="productos">
                            <a href="#"><img src="fotos/00c636e00bee0ba03b364841363f738b.jpg"/></a>
                            <a href="#">Cable Coaxial</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <hr class="tres cinco">
                        <div class="productos">
                            <a href="#"><img src="fotos/00d9b1e39f02d57be65ad2a9a6eaa3b8.jpg"/></a>
                            <a href="#">Multimetro</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <hr class="cuatro">
                        <div class="productos abajo">
                            <a href="#"><img src="fotos/0fcccca5b510e5bb86a94045046d252d.jpg"/></a>
                            <a href="#">Baterias</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <div class="productos abajo">
                            <a href="#"><img src="fotos/00c636e00bee0ba03b364841363f738b.jpg"/></a>
                            <a href="#">Cable Coaxial</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <hr class="tres">
                        <div class="productos abajo">
                            <a href="#"><img src="fotos/00d9b1e39f02d57be65ad2a9a6eaa3b8.jpg"/></a>
                            <a href="#">Multimetro</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <div class="productos abajo">
                            <a href="#"><img src="fotos/0d7764695c55c5d1c3edadce4a2a2cb9.jpg"/></a>
                            <a href="#">Soldador</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <hr class="cuatro cinco">
                        <div class="productos abajo">
                            <a href="#"><img src="fotos/0fcccca5b510e5bb86a94045046d252d.jpg"/></a>
                            <a href="#">Baterias</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <hr class="tres">
                        <div class="productos abajo">
                            <a href="#"><img src="fotos/00c636e00bee0ba03b364841363f738b.jpg"/></a>
                            <a href="#">Cable Coaxial</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <div class="productos abajo">
                            <a href="#"><img src="fotos/00d9b1e39f02d57be65ad2a9a6eaa3b8.jpg"/></a>
                            <a href="#">Multimetro</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <div class="productos abajo">
                            <a href="#"><img src="fotos/0d7764695c55c5d1c3edadce4a2a2cb9.jpg"/></a>
                            <a href="#">Soldador</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <hr class="tres cuatro">
                        <div class="productos abajo">
                            <a href="#"><img src="fotos/0fcccca5b510e5bb86a94045046d252d.jpg"/></a>
                            <a href="#">Baterias</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <hr class="cinco">
                        <div class="productos abajo">
                            <a href="#"><img src="fotos/00c636e00bee0ba03b364841363f738b.jpg"/></a>
                            <a href="#">Cable Coaxial</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <div class="productos abajo">
                            <a href="#"><img src="fotos/00d9b1e39f02d57be65ad2a9a6eaa3b8.jpg"/></a>
                            <a href="#">Multimetro</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <hr class="tres">
                        <div class="productos abajo">
                            <a href="#"><img src="fotos/0d7764695c55c5d1c3edadce4a2a2cb9.jpg"/></a>
                            <a href="#">Soldador</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <hr class="cuatro">
                        <div class="productos abajo">
                            <a href="#"><img src="fotos/0fcccca5b510e5bb86a94045046d252d.jpg"/></a>
                            <a href="#">Baterias</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <div class="productos abajo">
                            <a href="#"><img src="fotos/00c636e00bee0ba03b364841363f738b.jpg"/></a>
                            <a href="#">Cable Coaxial</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <hr class="tres cinco">
                        <div class="productos abajo">
                            <a href="#"><img src="fotos/00d9b1e39f02d57be65ad2a9a6eaa3b8.jpg"/></a>
                            <a href="#">Multimetro</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <div class="productos abajo">
                            <a href="#"><img src="fotos/0d7764695c55c5d1c3edadce4a2a2cb9.jpg"/></a>
                            <a href="#">Soldador</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <hr class="cuatro">
                        <div class="productos abajo">
                            <a href="#"><img src="fotos/0fcccca5b510e5bb86a94045046d252d.jpg"/></a>
                            <a href="#">Baterias</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <hr class="tres">
                        <div class="productos abajo">
                            <a href="#"><img src="fotos/00c636e00bee0ba03b364841363f738b.jpg"/></a>
                            <a href="#">Cable Coaxial</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <div class="productos abajo">
                            <a href="#"><img src="fotos/00d9b1e39f02d57be65ad2a9a6eaa3b8.jpg"/></a>
                            <a href="#">Multimetro</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <hr class="cinco">
                        <div class="productos abajo">
                            <a href="#"><img src="fotos/0d7764695c55c5d1c3edadce4a2a2cb9.jpg"/></a>
                            <a href="#">Soldador</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <hr class="tres cuatro">
                        <div class="productos abajo">
                            <a href="#"><img src="fotos/0fcccca5b510e5bb86a94045046d252d.jpg"/></a>
                            <a href="#">Baterias</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <div class="productos abajo">
                            <a href="#"><img src="fotos/00c636e00bee0ba03b364841363f738b.jpg"/></a>
                            <a href="#">Cable Coaxial</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <div class="productos abajo">
                            <a href="#"><img src="fotos/00d9b1e39f02d57be65ad2a9a6eaa3b8.jpg"/></a>
                            <a href="#">Multimetro</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <hr class="tres">
                        <div class="productos abajo">
                            <a href="#"><img src="fotos/0d7764695c55c5d1c3edadce4a2a2cb9.jpg"/></a>
                            <a href="#">Soldador</a><br>
                            <input type="number" class="form-control cantidad" value="0"><button class="btn quote">Add to Quote</button>
                        </div>
                        <div class="paginador">
                            <ul class="pagination pag-white">
                                <li class="disabled"><a>First</a></li>
                                <li class="disabled"><a>Prev</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li class="active"><a>3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">Next</a></li>
                                <li><a href="#">Last</a></li>
                            </ul>
                            <ul class="pagination pag-white up">
                                <li><a href="#top" class="btn">UP</a></li>
                            </ul>
                            
                        </div>
                    </div>
            </section>
            <footer>
                <div class="centrador">
                    <div class="contacto">
                        <p><b>
                        <a href="home.php">Home</a><br/>
                        <a href="#">Products</a><br/>
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