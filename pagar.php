<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';
?>

<?php
if($_POST){
    $total=0;
    $SID=session_id();
    $Correo="uhperezoscar@gmail.com";
    foreach($_SESSION['CARRITO'] as $indice=>$producto){


        $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);
    }
    $sentencia=$pdo->prepare("INSERT INTO `tblventas` (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`) 
    VALUES (NULL,:ClaveTransaccion, '', NOW(), :Correo, :Total, 'pendiente');");
    $sentencia->bindParam(":ClaveTransaccion",$SID);
    $sentencia->bindParam(":Correo",$Correo);
    $sentencia->bindParam(":Total",$total);
    $sentencia->execute();

    echo "<h3>".$total."</h3>";

    
}
?>

<?php include 'templates/pie.php';?>