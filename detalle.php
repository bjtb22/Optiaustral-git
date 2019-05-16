<?php require "conec.php";?>
                        <?php
                        $consulta="SELECT * from lenses_description where id_lens_description=16";
                        $resultado=mysqli_query($conexion, $consulta) or die ("no se pudo realizar la consulta por ".mysql_error());
                        while($columna=mysqli_fetch_array($resultado)){?>
<!DOCTYPE html>
<html class="no-js" lang="es"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>OptiAustral</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="site.webmanifest">
  <!-- Favicon -->
  <link rel="icon" href="http://optiaustral.cl/wp-content/uploads/2017/12/cropped-optiaustra-favicon-32x32.png" sizes="32x32">
  <!-- Google Fonts -->
  <link href="css/css.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="css/font-awesome.css" rel="stylesheet">
  <!-- Grid Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- Styles CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Header -->
    <header>
        <!-- Top Menu -->
        <div class="top">
            <div class="container">
                <ul class="top-menu">
                    <li><a href="#">Horario de 9:00 am a 19:00 pm</a></li>
                </ul>
                <ul class="top-menu">
                    <li><a href="tel:6004509000" class="call"><i class="fa fa-phone"></i> + 56 2 27282469</a></li>
                </ul>
                <ul class="top-menu">
                    <li><a href="tel:6004509000">Ayuda</a></li>
                    <li><a href="#">Mi Cuenta</a></li>
                    <li><a href="#">Ordenes</a></li>
                    <li>
                        <a href="javascript:void(0)" class="favorites">
                            <i class="fa fa-heart-o"></i>
                            <i class="fa fa-heart"></i>
                            <div class="message1">
                                Añadido a Favoritos
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="cart">
                            <i class="fa fa-shopping-cart"></i>
                            <div class="message2">
                                Añadido al Carrito
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Navbar -->
        <div class="navbar">
                <div class="container">
                <a href="index.html" class="logo">
                    <img src="img/logo.png" alt="">
                </a>
                <span class="fa fa-bars menu-toggle"></span>
                <!-- Menu -->
                <nav class="menu">
                    <li><a href="index.html">Inicio</a></li>
                    <li class="products-dropdown">
                        <a href="javascript:void(0)">Productos</a>
                        <ul class="p-dropdown">
                            <a href="hombres.html">Lentes de Hombre</a>
                            <a href="mujer.html">Lentes de Mujes</a>
                        </ul>
                    </li>
                    <li class="services-dropdown">
                        <a href="javascript:void(0)">Servicios</a>
                        <ul class="s-dropdown">
                            <a href="#">Servicios a Empresas</a>
                        </ul>
                    </li>
                    <li><a href="tel:6004509000">Contacto</a></li>
                    <li class="ubicanos-dropdown">
                        <a href="javascript:void(0)">Ubicanos</a>
                        <ul class="u-dropdown">
                            <a href="https://goo.gl/maps/DkdLXekpWCH2">Santiago</a>
                            <a href="https://goo.gl/maps/aSRdbhqvpB82">Quilpué</a>
                        </ul>
                    </li>
                    <li>
                        <!-- Search bar -->
                        <div class="search">
                            <input type="text" placeholder="Buscar..">
                            <i class="fa fa-search"></i>
                        </div>
                    </li>
                </nav>
            </div>
        </div>
    </header>

    <main>
     

        <section class="glass">
            <div class="container">
                <div class="glass-colors">
                    <div class="glass-change">
                        <span class="glass-change-left">
                            <div class="glass-profile glass-zoom" style="position: relative; overflow: hidden;">
                                <img <?php echo "src='".$columna['img_frontal']."'"; ?>>
                                <p>Frontal</p>
                            <img role="presentation" alt="" <?php echo "src='".$columna['img_frontal']."'"; ?> class="zoomImg" style="position: absolute; top: -401.982px; left: -685.047px; opacity: 0; width: 864px; height: 864px; border: medium none; max-width: none; max-height: none;"></div>
                            <div class="glass-profile glass-zoom" style="position: relative; overflow: hidden;">
                                <img <?php echo "src='".$columna['img_diagonal']."'"; ?>>
                                <p id="glass2">Trasera</p>
                            <img role="presentation" alt="" <?php echo "src='".$columna['img_diagonal']."'"; ?> class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 864px; height: 864px; border: medium none; max-width: none; max-height: none;"></div>
                            <div class="glass-profile glass-zoom" style="position: relative; overflow: hidden;">
                                <img <?php echo "src='".$columna['img_lateral']."'"; ?> id="glass3">
                                <p id="glass3">Lateral</p>
                            <img role="presentation" alt="" <?php echo "src='".$columna['img_lateral']."'"; ?> class="zoomImg" style="position: absolute; top: -235.382px; left: -219.481px; opacity: 0; width: 864px; height: 864px; border: medium none; max-width: none; max-height: none;"></div>
                        </span>
                      
                        <span>
                            <div class="glass-photo" id="users"> 
                                <form id="form1" runat="server" class="flex justify-content-between align-items-center">
                                    <div class="glass-user" id="img_contain">
                                        <img src="img/user-1.png" id="userImg">
        
                                        <div class="glass-move">
                                            <img src="img/glass-move.png" style="position: relative;" class="ui-draggable ui-draggable-handle">
                                        </div>
                                    </div>
                                </form>
                                <div class="glass-users">
                                    <div class="glass-users-item" id="user-1">
                                        <img src="img/user-2.png" id="blah">
                                    </div>
                                    <div class="glass-users-item" id="user-2">
                                        <img src="img/user-1.png">
                                    </div>
                                    <div class="glass-users-item" id="user-3">
                                        <img src="img/user-3.png">
                                    </div>
                                </div>
                            </div>
                            <div class="glass-photo" id="photo">
                                <div class="glass-profile glass-zoomBig" style="position: relative; overflow: hidden;">
                                    <img src="img/glass-thumb1.png" alt="">
                                <img role="presentation" alt="" src="img/glass-thumb1.png" class="zoomImg" style="position: absolute; top: -50.4845px; left: -616.884px; opacity: 0; width: 1296px; height: 1296px; border: medium none; max-width: none; max-height: none;"></div>
                            </div>
                        </span>
                    </div>
                    <div class="glass-controls">
                        <div style="display: flex;flex-direction: column;width: 250px;">
                            <span class="glass-trial">
                                <label class="glass-uplaod" for="inputGroupFile01">
                                    <i class="fa fa-upload"></i>
                                    Cargar Imagen
                                    <input type="file" id="inputGroupFile01" class="imgInp custom-file-input">
                                </label>
                            </span>
                            <span class="glass-trial" id="try"><i class="fa fa-camera"></i>Pruebatelo</span>
                            <span class="glass-trial" id="notTry"><i class="fa fa-eye"></i>Ver Lente</span>
                        </div>
                        <div class="glass-cartInfo">
                            <li>
                                <div class="glass-votes">
                                    <div class="glass-labelStar">
                                        <p class="glasss1">0</p>
                                        <p>5</p>
                                        <p>10</p>
                                        <p>15</p>
                                        <p>20</p>
                                    </div>
                                    <div class="rating" data-rate-value="6" style="width: 116.583px; height: 39.2px; position: relative; cursor: default; -moz-user-select: none;"><div class="rate-base-layer" style="width: 100%; height: 39.2px; overflow: hidden; position: absolute; top: 0px; display: block; white-space: nowrap;"><span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span></div><div class="rate-select-layer" style="width: 120%; height: 39.2px; overflow: hidden; position: absolute; top: 0px; display: block; white-space: nowrap;"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div><div class="rate-hover-layer" style="width: 50%; height: 39.2px; overflow: hidden; position: absolute; top: 0px; display: none; white-space: nowrap;"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div></div>
                                    <p>Excelente</p>
                                </div>
                            </li>
                            <li>
                                <div style="font-size: 18px;">
                                    <span><?php $columna["codigo"];?></span>
                                </div>
                            </li>
                            <li>
                                <div style="display: flex;flex-direction: column;">
                                    <div class="glass-price">
                                        <p>Precio</p>
                                        <h4>$95.00</h4>
                                    </div>
                                    <a href="#" class="glass-trial">Comprar</a>
                                </div>
                            </li>
                        </div>  
                    </div>
                </div>
                <sidebar class="glass-description">
                    <h3>Descripcion del Producto</h3>
                    <article>
                        <h4>Marcas y Medidas</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur 
adipisicing elit. Ab nostrum eaque illo commodi quia explicabo facilis 
quaerat provident eveniet delectus.</p>


                        <ul>
                            <li>Detalles</li>
                            <?php echo "<li>Talla: <span>".$columna['talla']."</span></li>";?>
                            <?php echo "<li>Material: <span>".$columna['mterial']."</span></li>"?>
                            <?php echo "<li>Forma: <span>".$columna['forma']."</span></li>"?>
                            <?php echo "<li>Bisagras de primavera: <span>Si</span></li>"?>
                            <?php echo "<li>Color: <span>".$columna['color']."</span></li>"?>
                        </ul>
                        <ul>
                            <li>Medidas</li>
                            <?php echo "<li><img src='img/model-front-y.png'>Altura: <span>".$columna['altura']."mm</span></li>";?>
                            <?php echo "<li><img src='img/model-front-x.png'>Anchura: <span>".$columna['ancho']."mm</span></li>";?>
                            <?php echo "<li><img src='img/model-space.png'>Puente: <span>".$columna['puente']."mm</span></li>";?>
                            <?php echo "<li><img src='img/model-profile.png'>Templo: <span>".$columna['varilla']."mm</span></li>";?>
                        </ul>
                        <?php }?>
                    </article>
                </sidebar>
            </div>
        </section>

        <div class="offerts">
            <div class="container">
                <h3>Conoce todos nuestros <span>Productos</span></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing 
elit. Accusamus architecto minus at doloribus dolores, ratione pariatur 
mollitia numquam delectus voluptatem!</p>
                <div href="detalle.html" class="offerts-items">
                    <a class="offerts-item">
                        <span>13% Offert</span>
                        <img src="img/glass-1.png" alt="">
                        <div></div>
                        <h4 class="offerts-price">200$</h4>
                    </a>
                    <a href="detalle.html" class="offerts-item">
                        <span>13% Offert</span>
                        <img src="img/glass-2.png" alt="">
                        <h4 class="offerts-price">200$</h4>
                    </a>
                    <a href="detalle.html" class="offerts-item">
                        <span>13% Offert</span>
                        <img src="img/glass-3.png" alt="">
                         <h4 class="offerts-price">200$</h4>
                    </a>
                    <a href="detalle.html" class="offerts-item">
                        <span>13% Offert</span>
                        <img src="img/glass-4.png" alt="">
                         <h4 class="offerts-price">200$</h4>
                        
                    </a>
                    <a href="detalle.html" class="offerts-item">
                        <span>13% Offert</span>
                        <img src="img/glass-5.png" alt="">
                         <h4 class="offerts-price">200$</h4>
                    </a>
                    <a href="detalle.html" class="offerts-item">
                        <span>13% Offert</span>
                        <img src="img/glass-1.png" alt="">
                        <h4 class="offerts-price">200$</h4>&gt;
                    </a>
                </div>
            </div>
        </div>
        <div class="question">
            <div class="container">
        
                <h3>1. Para que usted utiliza sus vidrios?</h3>
                <div class="question-body">
                    <div class="question-item">
                        <h4>Vision Unica</h4>
                        <p>Distancia</p>
                        <span>Incluida</span>
                    </div>
                    <div class="question-item">
                        <h4>Vision Cercana</h4>
                        <p>Lectura</p>
                        <span>Incluida</span>
                    </div>
                    <div class="question-item">
                        <h4>Progresivo</h4>
                        <p>Distancia</p>
                        <span>$ 55</span>
                    </div>
                    <div class="question-item">
                        <h4>Bifocal</h4>
                        <p>Distancia y lectura</p>
                        <span>$ 88</span>
                    </div>
                    <div class="question-item">
                        <h4>Sin Prescripcion</h4>
                        <p>Moda</p>
                        <span>Incluida</span>
                    </div>
                </div>
        
            </div>
        </div>

        <div class="prescription">
            <div class="container">
                <h3>2. Ingrese su prescripcion</h3>
                <div class="prescription-body">
                    <div class="prescription-tabs">
                        <li class="is-active">LLenalo En linea</li>
                        <li>Cargar o enviar mas tarde</li>
                        <li>Usar mi receta guardada</li>
                    </div>
                    <div class="prescription-content">
                        <div class="row align-items-lg-center mb-4">
                            <div class="col-lg">
                                <div class="prescription-item">
                                    <p class="prescription-label">Derecha <b>(OD)</b></p>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="prescription-item">
                                    <p class="prescription-label mb-3">Esfera (SPH)<i class="fa fa-question-circle-o"></i></p>
                                    <div class="select">
                                        <span class="placeholder">Nada</span>
                                        <ul>
                                            <li data-value="en">Option 1</li>
                                            <li data-value="es">Option 2</li>
                                        </ul>
                                        <input type="hidden" name="changeme">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="prescription-item">
                                    <p class="prescription-label mb-3">Cilindro (CYL)<i class="fa fa-question-circle-o"></i></p>
                                    <div class="select">
                                        <span class="placeholder">Nada</span>
                                        <ul>
                                            <li data-value="en">Option 1</li>
                                            <li data-value="es">Option 2</li>
                                        </ul>
                                        <input type="hidden" name="changeme">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="prescription-item">
                                    <p class="prescription-label mb-3">Eje (AXI)<i class="fa fa-question-circle-o"></i></p>
                                    <div class="select">
                                        <span class="placeholder">Nada</span>
                                        <ul>
                                            <li data-value="en">Option 1</li>
                                            <li data-value="es">Option 2</li>
                                        </ul>
                                        <input type="hidden" name="changeme">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="prescription-item">
                                    <p class="prescription-label mb-3">Anadir<i class="fa fa-question-circle-o"></i></p>
                                    <div class="select">
                                        <span class="placeholder">Nada</span>
                                        <ul>
                                            <li data-value="en">Option 1</li>
                                            <li data-value="es">Option 2</li>
                                        </ul>
                                        <input type="hidden" name="changeme">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-lg-center mb-4">
                            <div class="col-lg">
                                <div class="prescription-item">
                                    <p class="prescription-label">Izquierda <b>(OS)</b></p>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="prescription-item">
                                    <div class="select">
                                        <span class="placeholder">Nada</span>
                                        <ul>
                                            <li data-value="en">Option 1</li>
                                            <li data-value="es">Option 2</li>
                                        </ul>
                                        <input type="hidden" name="changeme">
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-lg">
                                <div class="prescription-item">
                                    <div class="select">
                                        <span class="placeholder">Nada</span>
                                        <ul>
                                            <li data-value="en">Option 1</li>
                                            <li data-value="es">Option 2</li>
                                        </ul>
                                        <input type="hidden" name="changeme">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="prescription-item">
                                    <div class="select">
                                        <span class="placeholder">Nada</span>
                                        <ul>
                                            <li data-value="en">Option 1</li>
                                            <li data-value="es">Option 2</li>
                                        </ul>
                                        <input type="hidden" name="changeme">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="prescription-item">
                                    <div class="select">
                                        <span class="placeholder">Nada</span>
                                        <ul>
                                            <li data-value="en">Option 1</li>
                                            <li data-value="es">Option 2</li>
                                        </ul>
                                        <input type="hidden" name="changeme">
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="hr"></div>
                        
                        <div class="row align-items-lg-center mb-4">
                            <div class="col-lg-2">
                                <div class="prescription-item">
                                    <p class="prescription-label">PD<i class="fa fa-question-circle-o"></i></p>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="prescription-item">
                                    <div class="select">
                                        <span class="placeholder">Nada</span>
                                        <ul>
                                            <li data-value="en">Option 1</li>
                                            <li data-value="es">Option 2</li>
                                        </ul>
                                        <input type="hidden" name="changeme">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="prescription-item flex">
                                    <input type="checkbox" name="" class=" mr-2">
                                    <p class="prescription-label">Tengo 2 numeros para mi PD</p>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row align-items-lg-center">
                            <div class="col-lg-2">
                                <div class="prescription-item">
                                    <p class="prescription-label">Cerca PD<i class="fa fa-question-circle-o"></i></p>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="prescription-item">
                                    <div class="select">
                                        <span class="placeholder">Nada</span>
                                        <ul>
                                            <li data-value="en">Option 1</li>
                                            <li data-value="es">Option 2</li>
                                        </ul>
                                        <input type="hidden" name="changeme">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <p>2019 Opti Austral, Salud Visual, Opticas en Santiago y Quilpe Sitio Web diseñado y desarrollado por SHAADES DIGITAL SERVICE</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="css/jquery.js"></script>
    <!-- jQuery Bxslider -->
    <script src="css/jquery_003.js"></script>
    <script src="css/jquery_002.js"></script>
    <script src="css/jquery-ui.js"></script>
    <script src="css/rater.js"></script>
    <!-- Scripts -->
    <script src="css/app.js"></script>


  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <!-- <script src="https://www.google-analytics.com/analytics.js" async defer></script> -->


</body></html>