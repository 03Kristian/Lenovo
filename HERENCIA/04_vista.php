<?php
//requiere llama al nombre del archivo para ser cargado en memoria RAM
    require_once ( "01_cliente.php" );
    require_once ( "02_Usuario.php" );
    require_once ( "03_vista.php" );

    //nuevo = hacer una instancia de una clase
    $objusuario = new Cliente(3468759, "Carlos Perez", 2500000)

//captador de metodo = Mostrar
//establecedor de método = Asignar
    //echo  $objusuario-> getCedula (). "<br>" ;
    //$objusuario-> setCédula ( 20001001 );
    //echo  "CAMBIO DE CEDULA: " . $ objPersona -> getCedula (). "<br>" ;
    //echo  "<h2> DATOS DE LA CLASE CLIENTE</h2>" . "<br>" ;

?>