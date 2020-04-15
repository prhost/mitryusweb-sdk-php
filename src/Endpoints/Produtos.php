<?php

namespace Mitryusweb\Endpoints;

use Mitryusweb\Classes\EndpointBase;
use \Mitryusweb\Model\Produtos as ProdutosModel;

class Produtos extends EndpointBase
{
    /**
     * @see https://www.mitryus.com.br:8191/MitryusReports/integracao.xhtml#ApiProdutos
     *
     * @return DepartamentosModel
     */
    public function get(): ProdutosModel
    {
        $response = $this->request('GET', 'produtos')->getResponse();

        return new ProdutosModel($response);
    }
}