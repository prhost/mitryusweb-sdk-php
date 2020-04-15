<?php

namespace Mitryusweb\Endpoints;

use Mitryusweb\Classes\EndpointBase;
use \Mitryusweb\Model\SubGrupos as SubGruposModel;

class SubGrupos extends EndpointBase
{
    /**
     * @see https://www.mitryus.com.br:8191/MitryusReports/integracao.xhtml#ApiSubGrupos
     *
     * @return DepartamentosModel
     */
    public function get(): SubGruposModel
    {
        $response = $this->request('GET', 'subgrupos')->getResponse();

        return new SubGruposModel($response);
    }
}