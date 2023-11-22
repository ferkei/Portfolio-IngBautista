<?PHP

$destino = "seguridad.jbh@gmail.com";
    	$Nombre = $_POST['Nombre'];
        $Email = $_POST['Email'];
        $Msg = $_POST ['Msg'];
	$contenido = "Nombre: " . $Nombre . "\n Email: " . $Email. "\n Msg: " . $Msg;
	mail($destino, "Contacto", $contenido);
	header("Location: contact.html");
?>