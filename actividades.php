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
      <center><h3>Actividades productivas</h3></center>
    
      <form class="form-horizontal" role = "form">
          <!-- nombre actividad -->        
        <div class = "form-group">
          <label for = "nombre_actividad" class = "col-sm-2 control-label">Nombre actividad productiva</label>    
          <div class = "col-sm-10">
             <input type = "text" class = "form-control" id = "nombre_actividad" placeholder = "Nombre de actividad">
          </div>          
        </div>
        <!-- Tipo actividad -->
        <div class="form-group">
          <label for = "tipo_actividad" class = "col-sm-2 control-label">Seleccione tipo de actividad</label>
          <label class="radio-inline"><input type="radio" name="opttipo">Agricola</label>
          <label class="radio-inline"><input type="radio" name="opttipo">Pecuaria</label>
          <label class="radio-inline"><input type="radio" name="opttipo">Ecoturismo</label>
          <label class="radio-inline"><input type="radio" name="opttipo">Mixta</label>
        </div>
        <!-- Tipo ingresos -->
        <div class="form-group">
          <label for="tipo_ingresos" >Tipo ingresos (mantenga presionado control para seleccionar varios) </label>
          <select multiple class="form-control" id="tipo_ingresos">
            <option>Venta animales</option>
            <option>Venta leche</option>
            <option>Venta huevos</option>
            <option>Visitas guiadas</option>
            <option>Venta cosecha</option>
            <option>Servicios ambientales</option>
          </select>
        </div>
        <!-- Tipo egresos -->
        <div class="form-group">
          <label for="tipo_egresos" >Tipo egresos (mantenga presionado control para seleccionar varios) </label>
          <select multiple class="form-control" id="tipo_egresos">
            <option>Vacunas</option>
            <option>Insumos</option>
            <option>Servicios publicos</option>
            <option>Sueldos</option>
            <option>Gastos generales</option>
          </select>
        </div>

        <!-- Observaciones -->
        <div class="form-group">
          <label for="observaciones">Observaciones:</label>
          <textarea class="form-control" rows="5" id="observaciones" placeholder="Información adicional..."></textarea>
        </div>

          <!-- Boton aceptar -->
        <div><br>
        <center><input type="submit" class="btn btn-info" value="Guardar actividad"><input type="reset" class="btn btn-info" value="Limpiar campos"></center> 
        </div>    
      </form>
    </div>

    <!-- Pie de pagina-->
    <div class="panel-footer" align="center" style="background : #C0C0C0;" >Programacion de sitios web - UNAD <br> Willian Márquez <br> 2017
    </div>
  </div>
</div>

</body>
</html>








