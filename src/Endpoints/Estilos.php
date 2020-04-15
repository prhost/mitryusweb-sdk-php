<?php

namespace Mitryusweb\Endpoints;

use Mitryusweb\Classes\EndpointBase;
use \Mitryusweb\Model\Estilos as EstilosModel;

class Estilos extends EndpointBase
{
    /**
     * @see https://www.mitryus.com.br:8191/MitryusReports/integracao.xhtml#ApiEstilos
     *
     * @return DepartamentosModel
     */
    public function get(): EstilosModel
    {
        $response = $this->request('GET', 'estilos')->getResponse();

        return new EstilosModel($response);
    }
}