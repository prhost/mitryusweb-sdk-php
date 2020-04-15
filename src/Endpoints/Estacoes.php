<?php

namespace Mitryusweb\Endpoints;

use Mitryusweb\Classes\EndpointBase;
use \Mitryusweb\Model\Estacoes as EstacoesModel;

class Estacoes extends EndpointBase
{
    /**
     * @see https://www.mitryus.com.br:8191/MitryusReports/integracao.xhtml#ApiEstacoes
     *
     * @return EstacoesModel
     */
    public function get(): EstacoesModel
    {
        $response = $this->request('GET', 'estacoes')->getResponse();

        return new EstacoesModel($response);
    }
}