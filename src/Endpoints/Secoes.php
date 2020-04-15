<?php

namespace Mitryusweb\Endpoints;

use Mitryusweb\Classes\EndpointBase;
use \Mitryusweb\Model\Secoes as SecoesModel;

class Secoes extends EndpointBase
{
    /**
     * @see https://www.mitryus.com.br:8191/MitryusReports/integracao.xhtml#ApiSecoes
     *
     * @return DepartamentosModel
     */
    public function get(): SecoesModel
    {
        $response = $this->request('GET', 'secoes')->getResponse();

        return new SecoesModel($response);
    }
}