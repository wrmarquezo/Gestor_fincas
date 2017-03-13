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
      <center><h3>Ingresos/Egresos</h3></center>
    
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

       <!-- fecha movimiento -->        
        <div class = "form-group">
          <label for = "fecha_movimiento" class = "col-sm-2 control-label">Fecha de movimiento</label>    
          <div class = "col-sm-10">
             <input type = "date" class = "form-control" id = "fecha_movimiento" placeholder = "Fecha de movimiento">
          </div>          
        </div>

          <!-- actividad -->        
        <div class="form-group">
          <label for="actividad_productiva" class = "col-sm-2 control-label">Seleccione una actividad productiva:</label>
          <select class="form-control" id="actividad_productiva">
            <option>Bovinos Leche</option>
            <option>Bovinos Carne</option>
            <option>Porcinos</option>
            <option>Gallinas ponedoras</option>
            <option>Pollo de engorde</option>
            <option>Producción de maiz</option>
            <option>Producción de caña</option>
          </select>
        </div>
          <!-- tipo movimiento -->        
        <div class="form-group">
          <label for="tipo_movimiento" class = "col-sm-2 control-label">Seleccione un tipo de movimiento:</label>
          <select class="form-control" id="tipo_movimiento">
            <option>Venta animales</option>
            <option>Venta leche</option>
            <option>Venta huevos</option>
            <option>Visitas guiadas</option>
            <option>Venta cosecha</option>
            <option>Servicios ambientales</option>
            <option>Vacunas</option>
            <option>Insumos</option>
            <option>Servicios publicos</option>
            <option>Sueldos</option>
            <option>Gastos generales</option>
          </select>
        </div>

          <!-- Valor movimiento -->        
        <div class = "form-group">
          <label for="valor_movimiento" class="col-sm-2 control-label">Valor movimiento ($)</label>
            <div class="col-sm-10">
              <input type="number" step="0.01" class="form-control" id="valor_movimiento" placeholder="$$$$$">
            </div>          
        </div>

        <!-- Observaciones -->
        <div class="form-group">
          <label for="observaciones">Observaciones:</label>
          <textarea class="form-control" rows="5" id="observaciones" placeholder="Información adicional..."></textarea>
        </div>
          <!-- Boton aceptar -->
        <center><input type="submit" class="btn btn-info" value="Guardar movimiento"><input type="reset" class="btn btn-info" value="Limpiar campos"></center>
    </div>      



   
      </form>

    <!-- Pie de pagina-->
    <div class="panel-footer" align="center" style="background : #C0C0C0;" >Programacion de sitios web - UNAD <br> Willian Márquez <br> 2017</div>
  </div>
</div>

</body>
</html>








