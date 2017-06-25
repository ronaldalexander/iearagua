
       <?php 

include_once("../../session.php");
session_start();
if(isset($_SESSION["user"]))
{
          
            $estudiante = $_POST['estudiante'];
            $profesor = $_POST['profesor'];
            $materia = $_POST['materia'];
            $grado = $_POST['grado'];
            $seccion = $_POST['seccion'];
            $evaluacion = $_POST['evaluacion'];
            $nota = $_POST['nota'];
            $lapso = $_POST['lapso'];
            $id = $_GET['id'];
           
    
    
            $sql = "UPDATE notas SET estudiantes_id_estudiante='$estudiante', usuarios_id_usuario='$profesor', materias_id_materia='$materia', grados_id_grado='$grado', secciones_id_seccion='$seccion', evaluaciones_id_evaluacion='$evaluacion', nota_evaluacion='$nota', lapsos_id_lapso='$lapso' WHERE id_nota='$id'";
    
              $result = $mysqli->query($sql);
    
        	if($result!=null){
				print "<script>alert(\"Editado Exitosamente.\");window.location='index.php';</script>";
			}else{
				print "<script>alert(\"No se pudo editar.\");window.location='index.php';</script>";

			}
        

            }?>