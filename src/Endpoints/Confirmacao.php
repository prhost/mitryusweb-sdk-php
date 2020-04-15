<?php

namespace Mitryusweb\Endpoints;

use Mitryusweb\Classes\EndpointBase;
use \Mitryusweb\Model\PacoteDados as PacoteDadosModel;

class Confirmacao extends EndpointBase
{
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