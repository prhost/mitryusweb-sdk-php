<?php

namespace Mitryusweb\Endpoints;

use Mitryusweb\Classes\EndpointBase;
use \Mitryusweb\Model\PacoteDados as PacoteDadosModel;

class PacoteDados extends EndpointBase
{
    /**
     * @see https://www.mitryus.com.br:8191/MitryusReports/integracao.xhtml#ApiPacoteDados
     * @return PacoteDadosModel
     */
    public function get(bool $confirmar = false): PacoteDadosModel
    {
        $response = $this->request('GET', 'pacotedados')->getResponse();

        $model = new PacoteDadosModel($response);

        if ($confirmar) {
            $confirmacaoEndpoint = new Confirmacao();
            $confirmacaoEndpoint->confirm($model->codigo_confirmacao, true);
        }

        return $model;
    }
}