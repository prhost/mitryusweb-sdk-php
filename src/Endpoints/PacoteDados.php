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
            $this->confirm($model->codigo_confirmacao, true);
        }

        return $model;
    }

    /**
     * @see https://www.mitryus.com.br:8191/MitryusReports/integracao.xhtml#ApiConfirmacao
     * @param int $codigo_confirmacao
     * @param bool $status
     */
    public function confirm(int $codigo_confirmacao, bool $status = true): void
    {
        $status = $status ? 'true' : 'false';
        $this->request('GET', "confirmacao/$codigo_confirmacao/$status")->getResponse();
    }
}