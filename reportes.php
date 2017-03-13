<!DOCTYPE html>
<html lang="es">
<head>
  <title>Gestor de fincas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body style="background : #8FBC8F;">

<nav class="navbar navbar-inverse navbar-fixed-top" >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="panel.php">GEG</a>
    </div>
    <!-- Barra de navegación -->
    <ul class="nav navbar-nav">
      <li><a href="panel.php">Inicio</a></li>
      <li><a href="granjas.php">Granjas</a></li>
      <li><a href="actividades.php">Actividades productivas</a></li>
      <li><a href="movimientos.php">Ingresos/Egresos</a></li>
      <li><a href="reportes.php">Reportes</a></li>
      <li><a href="info.php">Acerca de</a></li>
    </ul>
  </div>
</nav>
<!-- Contenedor -->

<div class="container" >

  <div class="panel panel-default">
  <!-- Cuerpo -->
    <div class="panel-header" style="height : 50px;">
    </div>
    <div class="panel-body" style="background : #F0FFF0;">
      <center><h3>Generador reportes</h3></center>
    
      <form class="form-horizontal" role = "form">
          <!-- nombre granja -->        
        <div class="form-group">
          <label for="granja" class = "col-sm-2 control-label">Seleccione una granja:</label>
          <select class="form-control" id="granja">
            <option>Santa rita</option>
            <option>Villa sofia</option>
            <option>San Patricio</option>
            <option>El amanecer</option>
          </select>
        </div>

          <!-- tipo reporte -->        
        <div class="form-group">
          <label for="tipo_reporte" class = "col-sm-2 control-label">Seleccione un tipo de reporte:</label>
          <select class="form-control" id="tipo_reporte">
            <option>General</option>
            <option>Ingresos</option>
            <option>Egresos</option>
            <option>Proyección</option>
          </select>
        </div>
        <!-- Periodo -->
        <div class = "form-group">
          <label for = "periodo" class="col-sm-2 control-label">Periodo</label>
          <div class="form-group row">
            <label for="fecha_inicial" class="col-sm-2 control-label">Fecha inicial</label>
            <div class="col-md-2">
              <input type="date" class="form-control" id="fecha_inicial" placeholder="fecha_inicial">
            </div>
            <label for="fecha_final" class="col-sm-2 control-label">Fecha final</label>
            <div class="col-md-2">
              <input type="date" class="form-control" id="fecha_final" placeholder="fecha_final">
            </div>
          </div>
        </div>
          <!-- Boton aceptar -->
        <center><input type="submit" class="btn btn-info" value="Generar reporte"></center>       
    </div>      



   
      </form>

    <!-- Pie de pagina-->
    <div class="panel-footer" align="center" style="background : #C0C0C0;" >Programacion de sitios web - UNAD <br> Willian Márquez <br> 2017</div>
  </div>
</div>

</body>
</html>








