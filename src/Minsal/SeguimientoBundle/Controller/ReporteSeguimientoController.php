<?php

namespace Minsal\SeguimientoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Minsal\Util\JasperReport\JasperClient as JasperClient;

include_once (__DIR__ . '/../../Util/JasperReport/_jasperserverreports.php');

class ReporteSeguimientoController extends Controller {

    /**
     * @Route("/hoja/ingreso/egreso/{report_name}/{report_format}", name="hoja_ingreso_egreso", options={"expose"=true})
     */
    public function hojaIngresoEgresoAction($report_name, $report_format) {
        $jasper_url = JASPER_URL;
        $jasper_username = JASPER_USER;
        $jasper_password = JASPER_PASSWORD;
        $report_unit = "/reports/siaps/seguimiento/" . $report_name;

        $request = $this->getRequest();
        $id_paciente = $request->get('paciente');
        $report_params = array('id_paciente' => $id_paciente);

        $client = new JasperClient($jasper_url, $jasper_username, $jasper_password);

        $contentType = (($report_format == 'HTML') ? 'text' : 'application') .
                '/' . strtolower($report_format);

        $result = $client->requestReport($report_unit, $report_format, $report_params);

        $response = new Response();
        $response->headers->set('Content-Type', $contentType);
        $response->setContent($result);

        return $response;
    }
    
}

?>