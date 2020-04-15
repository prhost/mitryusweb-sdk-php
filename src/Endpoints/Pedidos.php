<?php

namespace Mitryusweb\Endpoints;

use Mitryusweb\Classes\EndpointBase;
use Mitryusweb\Model\Pedido\Pedido;

class Pedidos extends EndpointBase
{
    /**
     * @see https://www.mitryus.com.br:8191/MitryusReports/integracao.xhtml#ApiPedidos
     */
    public function create(Pedido $pedido)
    {
        $response = $this->request('POST', 'pedido', [
            'body' => $pedido->toArray()
        ])->getResponse();

        return $response;
    }
}