<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario de Eventos</title>
</head>
<body>
  <h2>Registrar Evento</h2>
  <form action="insertar_evento.php" method="get">
    <!-- Campo oculto para id (AUTO_INCREMENT, no se carga manualmente) -->
    
    <label for="titulo">Título:</label><br>
    <input type="text" id="titulo" name="titulo" maxlength="100" required><br><br>
    
    <label for="fecha">Fecha:</label><br>
    <input type="date" id="fecha" name="fecha" required><br><br>
    
    <label for="hora">Hora:</label><br>
    <input type="time" id="hora" name="hora"><br><br>
    
    <label for="lugar">Lugar:</label><br>
    <input type="text" id="lugar" name="lugar" maxlength="191"><br><br>
    
    <label for="activo">Activo:</label><br>
    <select id="activo" name="activo" required>
      <option value="1" selected>Sí</option>
      <option value="0">No</option>
    </select><br><br>
    
    <input type="submit" value="Guardar">
  </form>
</body>
</html>
