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
      <center><h3>Registro de granjas</h3></center>
    
      <form class="form-horizontal" role = "form">
          <!-- nombre granja -->        
        <div class = "form-group">
          <label for = "nombre" class = "col-sm-2 control-label">Nombre granja</label>    
          <div class = "col-sm-10">
             <input type = "text" class = "form-control" id = "nombre" placeholder = "Nombre de la granja">
          </div>          
        </div>
          <!-- fecha registro -->        
        <div class = "form-group">
          <label for = "fecha_registro" class = "col-sm-2 control-label">Fecha de registro</label>    
          <div class = "col-sm-10">
             <input type = "date" class = "form-control" id = "fecha_registro" placeholder = "Fecha de registro">
          </div>          
        </div>
          <!-- nombre propietario -->        
        <div class = "form-group">
          <label for = "propietario" class = "col-sm-2 control-label">Nombre propietario</label>    
          <div class = "col-sm-10">
             <input type = "text" class = "form-control" id = "propietario" placeholder = "Nombre del propietario">
          </div>          
        </div>
          <!-- Ubicación -->
        <div class = "form-group">
          <label for = "ubicacion" class="col-sm-2 control-label">Ubicación</label>
          <div class="form-group row">
            <label for="latitud" class="col-sm-2 control-label">Latitud</label>
            <div class="col-md-2">
              <input type="number" step="0.000000001" class="form-control" id="latitud" placeholder="latitud">
            </div>
            <label for="longitud" class="col-sm-2 control-label">Longitud</label>
            <div class="col-md-2">
              <input type="number" step="0.000000001" class="form-control" id="longitud" placeholder="longitud">
            </div>
          </div>
        </div>
          <!-- Unidad productiva -->
        <div class = "form-group">
          <label for = "areas" class="col-sm-2 control-label">Areas granja</label>
          <div class="form-group row">
            <label for="area_total" class="col-sm-2 control-label">Area total (ha)</label>
            <div class="col-md-2">
              <input type="number" step="0.01" class="form-control" id="area_total" placeholder="area total">
            </div>
            <label for="area_cultivada" class="col-sm-2 control-label">Area cultivada (ha)</label>
            <div class="col-md-2">
              <input type="number" step="0.01" class="form-control" id="area_cultivada" placeholder="area cultivada">
            </div>
          </div>
        </div>
          <!-- Capital inicial -->        
        <div class = "form-group">
          <label for="capital_inicial" class="col-sm-2 control-label">Capital inicial ($)</label>
            <div class="col-sm-10">
              <input type="number" step="0.01" class="form-control" id="capital_inicial" placeholder="$$$$$">
            </div>          
        </div>
        <!-- Actividades productivas -->
        <div class="form-group">
          <label for="actividades" >Actividades productivas (mantenga presionado control para seleccionar varias) </label>
          <select multiple class="form-control" id="actividades">
            <option>Bovinos Leche</option>
            <option>Bovinos Carne</option>
            <option>Porcinos</option>
            <option>Gallinas ponedoras</option>
            <option>Pollo de engorde</option>
            <option>Producción de maiz</option>
            <option>Producción de caña</option>
          </select>
        </div>
        <!-- Observaciones -->
        <div class="form-group">
          <label for="observaciones">Observaciones:</label>
          <textarea class="form-control" rows="5" id="observaciones" placeholder="......."></textarea>
        </div>

          <!-- Boton aceptar -->
        <center><input type="submit" class="btn btn-info" value="Aceptar y registrar"> <input type="reset" class="btn btn-info" value="Limpiar campos"></center>
    </div>      



   
      </form>

    <!-- Pie de pagina-->
    <div class="panel-footer" align="center" style="background : #C0C0C0;" >Programacion de sitios web - UNAD <br> Willian Márquez <br> 2017</div>
  </div>
</div>

</body>
</html>








