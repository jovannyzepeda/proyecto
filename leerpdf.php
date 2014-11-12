<?php
	class materias{
			function materianueva(){
              if ($_FILES["file"]["error"] > 0){
                     echo "Problema al guardar el archivo " . $_FILES["file"]["error"] . " en el servidor<br/>";
              }
              else{
  				move_uploaded_file($_FILES['file']['tmp_name'],"pdf/" . $_FILES['file']['name']);
  				$archivo="pdf/" . $_FILES['file']['name'];
  				$materia=$_POST['materia'];
  				$aula = $_POST['aula'];
  				$horario=$_POST['horario'];
				$con = mysqli_connect('localhost','muno','muno','muno');
				mysqli_query($con,"INSERT INTO materia(materia,aula,horario,pdf) VALUES 
					('$materia','$aula','$horario','$archivo')");
				}
			}
		}$uno= new materias();
			$uno->materianueva();

?>