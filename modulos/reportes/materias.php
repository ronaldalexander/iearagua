<?php 

   include_once("../session.php");
	
    include_once ("../../dist/mpdf60/mpdf.php");
			 

    $html='
    
     <header class="clearfix">
      <div align="center">
      
        <img src="../../dist/img/logo.png">
      </div>
      
      </header>
      
    <caption><h2>REPORTE DE MATERIAS DICTADAS POR EL INSTITUTO</h2><caption>
   
     
    <table border="0" cellspacing="0" cellpadding="0">
    
        <thead>
          <tr>
            <th class="no">Código</th>
            <th class="no">Materia</th>
         
          </tr>
        </thead>';

	  	$query=$mysqli->query("SELECT * FROM materias ORDER BY id_materia");	

                        
        while($row=$query->fetch_array()){
         

            $html .='<tr>
                        <td class="unit">'.$row['id_materia'].'</center></td>
                        <td class="desc"><center>'.$row['nombre_materia'].'</center></td>
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

    $mpdf->Output('materias.pdf', 'I');


?>