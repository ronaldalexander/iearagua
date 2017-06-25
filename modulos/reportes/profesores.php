<?php 

   include_once("../session.php");
	
    include_once ("../../dist/mpdf60/mpdf.php");
			 

    $html='
    
     <header class="clearfix">
      <div align="center">
      
        <img src="../../dist/img/logo.png">
      </div>
      
      </header>
      
    <caption><h2>REPORTE DE PROFESORES DEL INSTITUTO</h2><caption>
   
     
    <table border="0" cellspacing="0" cellpadding="0">
    
        <thead>
          <tr>
            <th class="no">Código</th>
            <th class="no">Cédula</th>
            <th class="no">Nombres</th>
            <th class="no">Apellidos</th>
             <th class="no">Teléfono</th>
            <th class="no">Email</th>
         
          </tr>
        </thead>';

        $tipo='Profesor';

	  	$query=$mysqli->query("SELECT * FROM usuarios WHERE tipo_usuario='$tipo' ORDER BY id_usuario ");	

                        
        while($row=$query->fetch_array()){
         

            $html .='<tr>
                        <td class="unit">'.$row['id_usuario'].'</center></td>
                        <td class="desc"><center>'.$row['cedula'].'</center></td>
                        <td class="unit">'.$row['primer_nombre'].'</center></td>
                        <td class="desc"><center>'.$row['segundo_nombre'].'</center></td>
                        <td class="unit">'.$row['numero_celular'].'</center></td>
                        <td class="desc"><center>'.$row['email'].'</center></td>
                        
                    </tr>'; 
    }
   
    $html .='</tbody>
        <tfoot>
          
        </tfoot>
      </table>
     
   
    <footer>
      <h5>Reporte del Instituto Educacional Aragua. 2017.</h5>
    </footer>';


    $mpdf = new mPDF('c', 'A4-L');



    $css = file_get_contents('../../dist/css/pdf.css');

    $mpdf->writeHTML($css, 1);

    $mpdf->writeHTML($html);

    $mpdf->Output('profesores.pdf', 'I');


?>