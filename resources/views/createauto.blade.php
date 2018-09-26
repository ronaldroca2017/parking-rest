<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar sesión</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
        <nav class="navbar navbar-inverse">
                <div class="container">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-4">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Registrar auto</a>
                  </div>
              
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="navbar-collapse-4">
                      <ul class="nav navbar-nav navbar-right">
                          
                          <!--<li><a href="#">Ofrecer un lugar</a></li>-->
                          <li><a href="buscarestacionamiento.html">¿Buscar estacionamiento?</a></li>
                          <li><a href="estacionamiento_horario.html">Ofrecer un lugar</a></li>
                          <li>
                              <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse4" aria-expanded="false" aria-controls="nav-collapse4">user01<i class=""></i> </a>
                            </li>
                          
                        </ul>
                        <ul class="collapse nav navbar-nav nav-collapse slide-down" role="search" id="nav-collapse4">
                          <!--<li><a href="registrarauto.html">Registrar auto</a></li>-->
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Configuración<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="#">Mi perfil</a></li>
                              <li><a href="registrarauto.html">Registrar auto</a></li>
                              <li><a href="#">Buscar estacionamiento</a></li>
                              <li><a href="#">Ofrecer un lugar</a></li>
                              <li class="divider"></li>
                              <li><a href="#">Logout</a></li>
                            </ul>
                          </li>
                        </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
              </nav><!-- /.navbar -->
        <div class="container">	
                <div class="row">
                <!--<h2><strong>Iniciar sesión </strong> <br/></h2><br/>-->
                    <!--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">-->
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                        <legend class="text-center header"><h3>Formulario de resgitro de auto</h3></legend>                                
                        <!-- Start form -->
                                <form class="form-horizontal" action="procesarpago.html">
                              	  <div class="input-group">
  										<span class="input-group-addon" id="nombre">Etiqueta auto</span>
 										<input type="text" class="form-control" placeholder="Ejemplo: Sedan negro" aria-describedby="basic-addon1">
								  </div>
                              	  <div class="input-group">
  										<span class="input-group-addon" id="marca">Marca</span>
 										<input type="text" class="form-control" placeholder="Ejemplo: Toyota" aria-describedby="basic-addon1">
								  </div>
                              	  <div class="input-group">
  										<span class="input-group-addon" id="modelo">Modelo</span>
 										<input type="text" class="form-control" placeholder="Ejemplo: Sedan" aria-describedby="basic-addon1">
								  </div>
                              	  <div class="input-group">
  										<span class="input-group-addon" id="placa">Placa</span>
 										<input type="text" class="form-control" placeholder="Ejemplo: AQX-000" aria-describedby="basic-addon1">
								  </div>
                              	  <div class="input-group">
  										<span class="input-group-addon" id="anio">Año</span>
 										<input type="text" class="form-control" placeholder="Ejemplo: 2000" aria-describedby="basic-addon1">
								  </div>
								  <div class="input-group">
  										<span class="input-group-addon" id="descripcion">Comentarios</span>
 										<input type="text" class="form-control" placeholder="Breve descrioción del auto" aria-describedby="basic-addon1">
								  </div>

                                  <div class="form-check">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                  </div>
                                  
                                </form>
            
            
                        <!-- End form -->
                        </div>
                        <div class="col-sm-3"></div>
                    <!--</div>-->

                </div>
            </div> 

            
</body>
</html>