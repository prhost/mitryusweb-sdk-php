<?php

namespace Mitryusweb\Endpoints;

use Mitryusweb\Classes\EndpointBase;
use \Mitryusweb\Model\Tamanhos as TamanhosModel;

class Tamanhos extends EndpointBase
{
    /**
     * @see https://www.mitryus.com.br:8191/MitryusReports/integracao.xhtml#ApiTamanhos
     *
     * @return DepartamentosModel
     */
    public function get(): TamanhosModel
    {
        $response = $this->request('GET', 'tamanhos')->getResponse();

        return new TamanhosModel($response);
    }
}