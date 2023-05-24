<?php
// consumo de api 
$Urldatosindicadores = "https://mindicador.cl/api";
$datos_indicadores = file_get_contents($Urldatosindicadores);
$datosindicadores = json_decode($datos_indicadores);
// extracción de datos api
$uf = $datosindicadores->uf->valor;
$utm = $datosindicadores->utm->valor;
$euro = $datosindicadores->euro->valor;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wallibrary.com</title>
        <!-- Librerias Js-->
        <script src="js/jquery/jquery.min.js"></script>
    <script src="js/funciones.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Librerias Css-->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    
</head>
<body id="fondo"> 
    <header id="titulo">
        <h1>Wallibrary</h1>
        <p>El mundo digital de la literatura</p>
    </header>
    <!--  menu boostrap cambiar titulos-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Logo Wallibrary</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registro.html">Registrate</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
        </div>
      </nav>
    <!-- fin menu -->
    <div id="menu"> <!--|Seguir usuario cuando baje|-->
        <hr>
        <div class="col-6">
            <div class="alert alert-success" role="alert">
              <b>Valor del Dolar Hoy : </b><span id="valor_dolar">0</span>
              <b>Valor del Euro Hoy : </b><span id="valor_euro">0</span>
            </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id='busqueda' placeholder="Tu libro te espera" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                    <button  class="btn btn-outline-secondary" type="button" id="buscar_libros" name="buscar_libros" onclick="catura_txt_busqueda()">Buscar</button>
                    </div>
                </div>
               
        </div>
        <!-- <label class="Buscar" for="busqueda">Buscar</label> <input id='busqueda' placeholder="Tu libro te espera"/> <input type="button" class="btn btn-primary" id="buscar_libros" name="buscar_libros" onclick="catura_txt_busqueda()" value="Buscar"> -->
        <div class="col-6">
            <a href="login.html"> Registrate </a>
            <!--|llevar usuario arriba de la pagina|-->
            <a href="">Carrito</a>
            <a href="contacto.html">Contacto</a>
        </div>
        
        <hr>
    </div>

    <section id="contexto">
        <h3 class="subtitulo">¡Bienvenido!</h3>
        <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, rerum hic tenetur culpa quaerat consequuntur placeat iusto animi nesciunt aspernatur repellendus, fuga, corrupti quibusdam. Ducimus maiores eaque quasi eius consequuntur?</P>
        
    </section>

    <section id="dos">
    <!-- Carrusel Agregar imagenes en SRC-->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="..." class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
      </div>
      </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>

    <section id="tres">

    </section>

    <footer id="bajos">
        <div class="alert alert-primary" role="alert">
            llegaste tan lejos
            <a href="https://youtu.be/dQw4w9WgXcQ"> GALLETAS GRATIS</a> 
            <a href="contacto.html">Contacto</a>
        </div>
    </footer>
</body>
</html>
<script>
////////////////// Funionalidad Inicia Automaticamente despues de que la pagina DOM carga 
$(document).ready(function(){
  var suma =  suma_dos_numeros(1,2);
  var resta =  suma_dos_numeros(1,2);
  
  datos_api();
  console.log(suma);
});
////////////////////////////////////////////////////////////////////////////////
catura_txt_busqueda = function(){

    var buscar = $('#busqueda').val();
    if(buscar.trim()==''){
        alert('Campo buscar no puede ser en blanco');
    }else{
        alert('Espere por favor buscando libros');  
    }
    console.log(buscar);
}
datos_api=function(){

  var uf = "<?php echo $uf; ?>";
  var euro = "<?php echo $euro; ?>";

   $('#valor_dolar').html(uf);
   $('#valor_euro').html(euro);
}
</script>