<?php
    session_start();
    if(!isset($_SESSION['nombre_usuario'])) {
        // Si el usuario no ha iniciado sesión, redirigirlo al formulario de inicio de sesión.
        header('Location: ../login/index.php');
        exit(); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta | Creaciones Sibaritas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="icon" href="recursos/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <script src="js/javascript.js"></script>
</head>
<body>

    <!--Menú-->
    <div class="wrapperLogo">
        <h1 class="textoLogo">Carta</h1>
    </div>
    <div class="topnav" id="myTopnav">
        <a href="../index.php">INICIO</a>
        <a href="#entrantes">ENTRANTES</a>
        <a href="#pescados">PESCADOS</a>
        <a href="#carnes">CARNES</a>
        <a href="#postres">POSTRES</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        <a href="#carrito" class="icono" id="cartIcon" onclick="toggleCart()">  
            <i class="fa fa-shopping-cart"></i>
            <span id="cartCount">0</span> <!-- Aquí se muestra el número de elementos en el carrito -->
        </a>
    </div>

    <!--Sección de entrantes-->
    <section id=entrantes>
        <div class='titulo'><h1>Entrantes</h1></div>
        <div class='platos'>
            <div class='productos'>
                <div class='imgplato'><img src="../recursos/imgcarta/Entrantes/Entrante1.jpg" class='primero'></div>
                <div class='nombreplato'><h3 class='nombre1'>Duo de carabineros yaguacate, apio, tomate y menta.</h3></div>
                <div class='precio'><p>22.50€</p></div>
                <button class="addToCart" onclick="addToCart('Duo de carabineros yaguacate', 22.50)">Añadir al carrito</button> <!--botones para añadir al carrito-->
            </div>
            <div class='productos'>
                <div class='imgplato'><img src="../recursos/imgcarta/Entrantes/Entrante2.jpg" ></div>
                <div class='nombreplato'><h3>Láminas de presa ibérica atemperada sobre cuajada de foie-gras, tarama de ostra y helado de mostaza.</h3></div>
                <div class='precio'><p>23.50€</p></div>   
                <button class="addToCart" onclick="addToCart('Láminas de prensa ibérica', 23.50)">Añadir al carrito</button>
         
            </div>
            <div class='productos'>
                <div class='imgplato'><img src="../recursos/imgcarta/Entrantes/Entrante3.jpg" ></div>
                <div class='nombreplato' ><h3>Nuestra ensalada todo vegetal, pétalos, brotes y hierbas.</h3></div>
                <div class='precio'><p>22.00€</p></div>   
                <button class="addToCart" onclick="addToCart('Nuestra ensalada todo vegetal', 22.00)">Añadir al carrito</button>
         
            </div>
            <div class='productos'>
                <div class='imgplato'><img src="../recursos/imgcarta/Entrantes/Entrante4.jpg" ></div>
                <div class='nombreplato' ><h3>Ravioli de crustáceos y su esencia, burrata y Champagne.</h3></div>
                <div class='precio'><p>24.50€</p></div>
                <button class="addToCart" onclick="addToCart('Ravioli de crustáceos', 24.50)">Añadir al carrito</button>

            </div>
            <div class='productos'>
                <div class='imgplato'><img src="../recursos/imgcarta/Entrantes/Entrante5.jpg" ></div>
                <div class='nombreplato' ><h3>Risotto de hinojo, langosta y percebes.</h3></div>
                <div class='precio'><p>22.00€</p></div>
                <button class="addToCart" onclick="addToCart('Risotto de hinojo', 22.00)">Añadir al carrito</button>

            </div>
            <div class='productos'>
                <div class='imgplato'><img src="../recursos/imgcarta/Entrantes/Entrante6.jpg" ></div>
                <div class='nombreplato'><h3 >Zanahoria, piñones y verdura a la sal.</h3></div>
                <div class='precio'><p>22.00€</p></div>
                <button class="addToCart" onclick="addToCart('Xanahoria, piñones y verdura a la sal', 22.00)">Añadir al carrito</button>

            </div>
        </div>
    </section>

    <!--Sección de pesacdos-->
    <section id=pescados>
        <div class='titulo'><h1>Pescados</h1></div>
        <div class='platos'>
            <div class='productos'>
                <div class='imgplato'><img src="../recursos/imgcarta/Pescados/Pescado1.jpg" class='primero'></div>
                <div class='nombreplato'><h3 class='nombre1'>Besugo asado con ragu de cañaillas y berberechos en un fondo de nécora, crema fina de pistacho.</h3></div>
                <div class='precio'><p>26.00€</p></div>
                <button class="addToCart" onclick="addToCart('Besugo asado con ragu de cañaillas', 26.00)">Añadir al carrito</button>

            </div>
            <div class='productos'>
                <div class='imgplato'><img src="../recursos/imgcarta/Pescados/Pescado2.jpg" ></div>
                <div class='nombreplato'><h3>Rodaballo a la brasa con licuado de acelgas, achicoria y algas.</h3></div>
                <div class='precio'><p>24.00€</p></div>       
                <button class="addToCart" onclick="addToCart('Rodaballo a la brasa', 24.00)">Añadir al carrito</button>
    
            </div>
            <div class='productos'>
                <div class='imgplato'><img src="../recursos/imgcarta/Pescados/Pescado3.jpg" ></div>
                <div class='nombreplato' ><h3>Velouté de lenguado y limón amargo, guisantes lágrima y callos de bacalao .</h3></div>
                <div class='precio'><p>24.50€</p></div>          
                <button class="addToCart" onclick="addToCart('Velouté de lenguado', 24.50)">Añadir al carrito</button>
 
            </div>
          
        </div>
    </section>

    <!--Sección de carnes-->
    <section id=carnes>
        <div class='titulo'><h1>Carnes</h1></div>
        <div class='platos'>
            <div class='productos'>
                <div class='imgplato'><img src="../recursos/imgcarta/Carnes/Carne1.jpg" class='primero'></div>
                <div class='nombreplato'><h3 class='nombre1'>Lomo de corzo marinado, raíces a la trufa, crema de amarena, radicchio de Treviso y pimienta rosalimón amargo, guisantes lágrima y callos de bacalao.</h3></div>
                <div class='precio'><p>24.00€</p></div>
                <button class="addToCart" onclick="addToCart('Lomo de corzo marinado', 24.00)">Añadir al carrito</button>

            </div>
            <div class='productos'>
                <div class='imgplato'><img src="../recursos/imgcarta/Carnes/Carne2.jpg" ></div>
                <div class='nombreplato'><h3>Pichón de las Landas en su jugo, mermelada de naranja y calabaza con toques acidulados.</h3></div>
                <div class='precio'><p>23.50€</p></div>      
                <button class="addToCart" onclick="addToCart('Pichón de las Landas', 23.50)">Añadir al carrito</button>
     
            </div>
            <div class='productos'>
                <div class='imgplato'><img src="../recursos/imgcarta/Carnes/Carne3.jpg" ></div>
                <div class='nombreplato' ><h3>Solomillo de vaca al carbón, berza estofada, maíz ahumado y tubérculos con salsa de chalota al Oporto.</h3></div>
                <div class='precio'><p>25.00€</p></div>         
                <button class="addToCart" onclick="addToCart('Solomillo de vaca al carbón', 25.00)">Añadir al carrito</button>
  
            </div>
          
        </div>
    </section>

    <!--Sección de postres-->
    <section id=postres>
        <div class='titulo'><h1>Postres</h1></div>
        <div class='platos'>
            <div class='productos'>
                <div class='imgplato'><img src="../recursos/imgcarta/Postres/Postre1.jpg" class='primero'></div>
                <div class='nombreplato'><h3 class='nombre1'>Cacahuete, tamarindo, plátano y mantequilla tostada.</h3></div>
                <div class='precio'><p>19.00€</p></div>
                <button class="addToCart" onclick="addToCart('Cacahuete, tamarindo, plátano y mantequilla tostada', 19.00)">Añadir al carrito</button>

            </div>
            <div class='productos'>
                <div class='imgplato'><img src="../recursos/imgcarta/Postres/Postre2.jpg" ></div>
                <div class='nombreplato'><h3>Esferas de canela, mandarina y rosas.</h3></div>
                <div class='precio'><p>20.00€</p></div>        
                <button class="addToCart" onclick="addToCart('Esferas de canela, mandarina y rosas', 20.00)">Añadir al carrito</button>
   
            </div>
            <div class='productos'>
                <div class='imgplato'><img src="../recursos/imgcarta/Postres/Postre3.jpg"></div>
                <div class='nombreplato' ><h3>Pastel de chocolate caliente al 70% con helado de té Earl Grey.</h3></div>
                <div class='precio'><p>18.50€</p></div>           
                <button class="addToCart" onclick="addToCart('Pastel de chocolate caliente al 70%', 18.50)">Añadir al carrito</button>

            </div>
            <div class='productos'>
                <div class='imgplato'><img src="../recursos/imgcarta/Postres/Postre4.jpg"></div>
                <div class='nombreplato' ><h3>Sorbete de jengibre y fruta de la pasión, coco y zanahoria.</h3></div>
                <div class='precio'><p>19.00€</p></div>  
                <button class="addToCart" onclick="addToCart('Sorbete de jengibre y fruta de la pasión', 19.00)">Añadir al carrito</button>
         
            </div>
        </div>
    </section>

    <!--Botón para volver directamente a la parte del inicio de la página-->
    <a class="arriba" href="#myTopnav"><img class="centrar" src="../recursos\arrow-up.png"></a> 


    <!--Contenedor del carrito-->
    <div id="carrito">
    <h2>Carrito de compras</h2>
        <ul id="cartList">
            <!-- Aquí se mostrarán los elementos del carrito -->
        </ul>
        <p id="total">Total: €0.00</p>
        <button id="checkoutBtn" onclick='checkout()' >Realizar pedido</button>
      
    </div>

    
    
</body>
</html>
