<?php

	 ob_start();
	session_start();
	/* Connect To Database*/
include "../../../core/autoload.php";
include "../../../core/app/model/Proceso_valpData.php";
include "../../../core/app/model/Persona_valpData.php";
include "../../../core/app/model/User_valpData.php";
include "../../../core/app/model/ProcesoVenta_valpData.php";
include "../../../core/app/model/Habitacion_valpData.php";
include "../../../core/app/model/Producto_valpData.php";
include "../../../core/app/model/Caja_valpData.php";
include "../../../core/app/model/Sueldo_valpData.php";
include "../../../core/app/model/ProcesoSueldo_valpData.php";
include "../../../core/app/model/Venta_valpData.php";


	require_once(dirname(__FILE__).'/../html2pdf.class.php');
    
     include(dirname('__FILE__').'/reporte_kardex_todo/reporte_kardex_todo_html_valp.php');
    $content = ob_get_clean();

    try
    {
        // init HTML2PDF
        $html2pdf = new HTML2PDF('L', 'LETTER', 'es', true, 'UTF-8', array(0, 0, 0, 0));
        // display the full page
        $html2pdf->pdf->SetDisplayMode('fullpage');
        // convert
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        // send the PDF
        $html2pdf->Output('reporte_kardex_valp.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
 