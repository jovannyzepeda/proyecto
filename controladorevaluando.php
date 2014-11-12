<?php

class controlador_evaluando{

	function eliminar_evaluando(){
		var $id = $_POST['id'];
		$con=mysqli_connect("localhost","user","password","data_base");
			if (mysqli_connect_errno()) {
  				echo "Error al conectarse a la base de datos: " . mysqli_connect_error();
			}
			mysqli_query($con,"DELETE FROM auxiliar WHERE idevaluando = $id");
			mysqli_close($con);
	}
	

}

?>