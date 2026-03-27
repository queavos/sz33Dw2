//$fila= $rs->fetch_assoc()
<?php
include "../lib/conex.php"; // incluimos clase de conexion
include "../lib/Evento.php";
$db=new Conex(); //creamos la conexion (instanciamos)
$con=$db->conectar(); // conectamos a la db
//$sql="select * from eventos"; // creamos una consulta 
//$rs=$con->query($sql); // ejecutamos la consulta
$evento= new Evento($con);
if (isset($_GET['id']))
     {
    $rs=$evento->getByID($_GET['id']);
    print_r($fila= $rs->fetch_assoc());
     }   


?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario de Eventos</title>
</head>
<body>
  <h2>Registrar Evento</h2>
  <form action="actualizar.php" method="get">
    <!-- Campo oculto para id (AUTO_INCREMENT, no se carga manualmente) -->
    
    <label for="titulo">Título:</label><br>
    <input type="text" value='<?php echo $fila["titulo"]; ?>' id="titulo" name="titulo" maxlength="100" required><br><br>
    
    <label for="fecha">Fecha:</label><br> 
    <input type="date" value='<?php echo $fila["fecha"]; ?>' id="fecha" name="fecha" required><br><br>
    
    <label for="hora">Hora:</label><br>
    <input type="time"  value='<?php echo $fila["hora"]; ?>' id="hora" name="hora"><br><br>
    
    <label for="lugar">Lugar:</label><br>
    <input type="text"  value='<?php echo $fila["lugar"]; ?>' id="lugar" name="lugar" maxlength="191"><br><br>
    
    <label for="activo">Activo:</label><br>
    <select id="activo" name="activo" required>
      <option value="1" selected>Sí</option>
      <option value="0">No</option>
    </select><br><br>
    
    <input type="submit" value="Guardar">
  </form>
</body>
</html>