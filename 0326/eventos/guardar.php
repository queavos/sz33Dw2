<?php
include "../lib/conex.php"; // incluimos clase de conexion
include "../lib/Evento.php";
$db=new Conex(); //creamos la conexion (instanciamos)
$con=$db->conectar(); // conectamos a la db
//$sql="select * from eventos"; // creamos una consulta 
//$rs=$con->query($sql); // ejecutamos la consulta
$evento= new Evento($con);

// $_REQUEST $_GET $_POST
 if(isset($_POST)) {
    print_r($_POST);
    $rs=$evento->insert($_POST);
 } else { echo "No llegaron valores por POST";}

?>