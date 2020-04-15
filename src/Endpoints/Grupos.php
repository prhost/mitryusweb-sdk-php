<?php

namespace Mitryusweb\Endpoints;

use Mitryusweb\Classes\EndpointBase;
use \Mitryusweb\Model\Grupos as GruposModel;

class Grupos extends EndpointBase
{
    /**
     * @see https://www.mitryus.com.br:8191/MitryusReports/integracao.xhtml#ApiGrupos
     *
     * @return DepartamentosModel
     */
    public function get(): GruposModel
    {
        $response = $this->request('GET', 'grupos')->getResponse();

        return new GruposModel($response);
    }
}