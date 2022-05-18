<?php session_start();
if(isset($_SESSION['carrito'])){
    $carrito_mio = $_SESSION['carrito'];
}
if(isset($_SESSION['carrito'])){
    for ($i=0; $i <=count($carrito_mio)-1 ; $i++) { 
        if (isset($carrito_mio[si])) {
            if ($carrito_mio[si]!=NULL) {
                if (!isset($carrito_mio['cantidad'])) {
                    $carrito_mio['cantidad']='0';
                }else {
                    $carrito_mio['cantidad']= $carrito_mio['cantidad'];
                }
                $total_cantidad = $carrito_mio['cantidad'];
                $total_cantidad ++;
                if (!isset($total_cantidad)) {
                   $total_cantidad = '0';
                }else {
                    $total_cantidad = $total_cantidad;
                }
                $total_cantidad += $total_cantidad;
            }
        }
    }
}
if (!isset($total_cantidad)) {
    $total_cantidad ='';
}else {
    $total_cantidad = $total_cantidad;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    
    <title>Productos</title>
    <link rel="shortcut icon" href="img/logo Okara peq.png">
    <link rel="stylesheet" href="css/productos.css">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">   
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    
</head>

<body>
    <div> 
        <header class="headerIndex">
            <a href="login.html"target="blank"  style="color: white;">Iniciar Sesion</a> &nbsp;&nbsp;&nbsp;
            <a href="Registro.html"target="blank"  style="color: white;">Registro</a> &nbsp;&nbsp;&nbsp;
            <a href=""target="blank" style="color: white;"><?php echo $total_cantidad;?> Carrito</a> &nbsp;&nbsp;&nbsp;
        </header>
    </div>

    <div>
        <header> 
            <nav class="navegacion">
                <a href="index.html" style="color: black;">Inicio</a> &nbsp;&nbsp;&nbsp;
                <a href="okara.html" style="color: black;">Quienes Somos</a> &nbsp;&nbsp;&nbsp;
                <a href="productos.html" style="color: black;"> Productos</a> &nbsp;&nbsp;&nbsp;
                <a href="recetas.html" style="color: black;">Recetas</a>
            </nav>
        </header>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" id="img" src="img/imgcarru.jpeg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" id="img" src="img/prodCarru.jpeg" alt="Second slide">
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>
    <div class="container col-12">        
        <div class="row">
            <div class="listado col-12">
                <h1 id="list">Listado de Productos</h1>
            </div>
            <br>
            <div class="col-xs-1 col-sm-4 col-med-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center"><img id="img_obs" src="img/cuajadaDeSoya.jpeg"></h5>
                        <p class="card-text"><label id="desayuno">PRODUCTO</label><br>CUAJADA DE SOYA X 250G<br>La
                            cuajada de soya es...<br>
                            Precio: $9.700</p>
                        <p class="collapse" id="collapseExample">
                            La cuajada de soya es de consistencia blanda,empacado al vacío.
                            Tiene sabor y olor agradable, levemente afrijolado.
                            Bajo en sodio y sin lactosa.
                            Rico en proteínas, calcio, hierro y diversos nutrientes,
                            lo que lo hace un alimento de gran valor nutricional.
                            No contiene colorantes ni preservantes artificiales.
                        </p>
                        <p class="card-text text-right">
                            <a data-toggle="modal" data-target="#exampleModal3" href="#" class="btn btn-primary">Añadir
                                al Carrito</a>
                            <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                                aria-controls="collapseExample" href="#" class="btn bt-success">Más >></a>

                                <form id="formulario" name="formulario" method="post" action="cart.php"></form>
                                <button type="submit" class="btn btn-sm btn-outline-secondary">Añadir al carrito</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary"></button>
                                <input name="ref" type="hiden" id="ref" value="mu001">
                                <input name="precio" type="hiden" id="precio" value="200">
                                <input name="titulo" type="hiden" id="titulo" value="cuajada de soya">
                                <input name="cantidad" type="hiden" id="cantidad" value="1" class="p1-2">
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-1 col-sm-4 col-med-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center"><img id="img_obs" src="img/lecheSoya.png"></h5>
                        <p class="card-text"><label id="desayuno">PRODUCTO</label><br>LECHE DE SOYA<br>Leche de soya
                            100% natural...<br>
                            Precio: $5.150</p>
                        <p class="collapse" id="collapseExample2">
                            Leche de soya 100% natural. Tiene sabor y olor agradable, levemente afrijolado y color según
                            variedad. Baja en sodio y sin lactosa. Rica en proteínas, calcio, hierro y diversos
                            nutrientes, lo que lo hace un alimento de gran valor nutricional. No contiene colorantes ni
                            preservantes artificiales.
                            El producto debe mantenerse en su empaque original y refrigerado a temperatura máxima 10°
                            centígrados.
                            La presentación del producto es de un litro.
                        </p>
                        <p class="card-text text-right">
                            <a data-toggle="modal" data-target="#exampleModal3" href="#" class="btn btn-primary">Añadir
                                al Carrito</a>
                            <a data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false"
                                aria-controls="collapseExample" href="#" class="btn bt-success">Más >></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-2 col-sm-4 col-med-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center"><img id="img_obs" src="img/quesoFinasHierbas.jpg"></h5>
                        <p class="card-text"><label id="desayuno">PRODUCTO</label><br>QUESO TOFU FINAS HIERBAS X
                            250G<br>Tofu de consistencia semidura y...<br>
                            Precio: $9.700</p>
                        <p class="collapse" id="collapseExample3">
                            Tofu de consistencia semidura y con un agradable sabor de especias.
                            Empacado al vacío. Bajo en sodio y sin lactosa. Rico en proteínas,
                            calcio, hierro y diversos nutrientes, lo que lo hace un alimento de gran valor nutricional.
                            No contiene colorantes ni preservantes artificiales
                        </p>
                        <p class="card-text text-right">
                            <a data-toggle="modal" data-target="#exampleModal3" href="#" class="btn btn-primary">Añadir
                                al Carrito</a>
                            <a data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false"
                                aria-controls="collapseExample" href="#" class="btn bt-success">Más >></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-2 col-sm-4 col-med-4">
                <div class="card ">
                    <div class="card-body">
                        <h5 class="card-title text-center"><img id="img_obs" src="img/quesoTofu.jpg"></h5>
                        <p class="card-text"><label id="desayuno">PRODUCTO</label><br>QUESO TOFU FINAS HIERBAS X
                            500G<br>Tofu de consistencia semidura y...<br>
                            Precio: $17.550</p>
                        <p class="collapse" id="collapseExample4">
                            Tofu de consistencia semidura y con un agradable sabor de especias.
                            Empacado al vacío. Bajo en sodio y sin lactosa.
                            Rico en proteínas, calcio, hierro y diversos nutrientes, lo que lo hace un alimento de gran
                            valor nutricional.
                            No contiene colorantes ni preservantes artificiales.
                        </p>
                        <p class="card-text text-right">
                            <a data-toggle="modal" data-target="#exampleModal3" href="#" class="btn btn-primary">Añadir
                                al Carrito</a>
                            <a data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false"
                                aria-controls="collapseExample" href="#" class="btn bt-success">Más >></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-2 col-sm-4 col-med-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center"><img id="img_obs" src="img/quesoNatural.jpg"></h5>
                        <p class="card-text"><label id="desayuno">PRODUCTO</label><br>QUESO TOFU NATURAL X 250G<br>Tofu
                            de consistencia...<br>
                            Precio: $8.050</p>
                        <p class="collapse" id="collapseExample5">
                            Tofu de consistencia semidura ,empacado al vacío.
                            Tiene sabor y olor agradable, levemente afrijolado.
                            Bajo en sodio y sin lactosa.
                            Rico en proteínas, calcio, hierro y diversos nutrientes, lo que lo hace un alimento de gran
                            valor nutricional.
                            No contiene colorantes ni preservantes artificiales.
                        </p>
                        <p class="card-text text-right">
                            <a data-toggle="modal" data-target="#exampleModal3" href="#" class="btn btn-primary">Añadir
                            al Carrito</a>
                            <a data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false"
                            aria-controls="collapseExample" href="#" class="btn bt-success">Más >></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-2 col-sm-4 col-med-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center"><img id="img_obs" src="img/quesoTofuS.png"></h5>
                        <p class="card-text"><label id="desayuno">PRODUCTO</label><br>QUESO TOFU X 500G<br>Tofu de
                        consistencia semidura...<br>
                        Precio: $14.950</p>
                        <p class="collapse" id="collapseExample6">
                        Tofu de consistencia semidura ,empacado al vacío.
                        Tiene sabor y olor agradable, levemente afrijolado.
                        Bajo en sodio y sin lactosa. Rico en proteínas, calcio, hierro y diversos nutrientes,
                        lo que lo hace un alimento de gran valor nutricional.
                        No contiene colorantes ni preservantes artificiales
                        </p>
                        <p class="card-text text-right">
                        <a data-toggle="modal" data-target="#exampleModal3" href="#" class="btn btn-primary">Añadir
                        al Carrito</a>
                        <a data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false"
                        aria-controls="collapseExample" href="#" class="btn bt-success">Más >></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Contacto de Clientes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-primary alert-dismissible fade show text-left" role="alert">
                        <strong>Info!</strong> Si tienes alguna pregunta no dudes en contactarnos. Estaremos atentos a
                        responder cualquier inquietud que tengas.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <h6>Nombre Completo</h6>
                    <div class="input-group mb-3">

                        <div class="input-group-prepend">

                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="text" id="nombre" class="form-control" placeholder="Nombres Apellidos"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <h6>Email</h6>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">

                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                        </div>
                        <input type="email" id="mail" class="form-control" placeholder="Correo Electrónico"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <h6>Mensaje</h6>
                    <div class="input-group">
                        <textarea class="form-control" id="campo" aria-label="With textarea"></textarea>
                    </div>
                </div>
                <div id="boton" class="modal-footer text-left">

                    <input type="submit" value="Contactar" id="contactar" class="btn btn-primary"
                        data-dismiss="modal" />
                </div>
            </div>
        </div>
    </div>

    <footer>
        Dirección: Cr 18 # 9-43, La Ceja Antioquia, Colombia - 
        Celular: 310 4107856 <br>
        e-mail: okaratofu@gmail.com <br> <br>
        <a href="https://wa.me/5104107856" target="blank"> <img src="img/waplogo.png" alt="WhatsApp" width="2%"></a> &nbsp;&nbsp;&nbsp;
        <a href="https://www.instagram.com/okaraalimentosveganos/" target="blank"> <img src="img/iglogo.png" alt="Instagram" width="2%"></a> &nbsp;&nbsp;&nbsp;
        <a href="https://www.facebook.com/OkaraAlimentosVeganos" target="blank"> <img src="img/fblogo.png" alt="Facebook" width="2%"></a>
    </footer>


    <div class="modal fade" id="">

    </div>



    <script src="https://cdn.jsdelievr.net/npm/@popperjs.core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelievr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

</body>
</html>