
       <?php 

include_once("../../session.php");
session_start();
if(isset($_SESSION["user"]))
{
            $cedula = $_POST['cedula'];
            $nombres = $_POST['nombre'];
            $apellidos = $_POST['apellido'];
            $genero = $_POST['genero'];
            $email = $_POST['email'];
            $fecha_nacimiento = $_POST['fecha_nacimiento'];
            $numero_celular = $_POST['numero_celular'];
            $fecha_matricula = $_POST['fecha_matricula'];
          
    
            $sql = "UPDATE estudiantes SET primer_nombre='$nombres', segundo_nombre='$apellidos', genero='$genero', email='$email', fecha_nacimiento='$fecha_nacimiento', numero_celular='$numero_celular', fecha_matricula='$fecha_matricula' WHERE cedula=$cedula";
    
              $result = $mysqli->query($sql);
    
        	if($result!=null){
				print "<script>alert(\"Editado Exitosamente.\");window.location='index.php';</script>";
			}else{
				print "<script>alert(\"No se pudo editar.\");window.location='index.php';</script>";

			}
        

            }?>