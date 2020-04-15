<?php

namespace Mitryusweb\Endpoints;

use Mitryusweb\Classes\EndpointBase;
use \Mitryusweb\Model\Cores as CoresModel;

class Cores extends EndpointBase
{
    /**
     * @see https://www.mitryus.com.br:8191/MitryusReports/integracao.xhtml#ApiCores
     *
     * @return DepartamentosModel
     */
    public function get(): CoresModel
    {
        $response = $this->request('GET', 'cores')->getResponse();

        return new CoresModel($response);
    }
}