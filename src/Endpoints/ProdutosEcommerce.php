<?php

namespace Mitryusweb\Endpoints;

use Mitryusweb\Classes\EndpointBase;
use \Mitryusweb\Model\ProdutosEcommerce as ProdutosEcommerceModel;

class ProdutosEcommerce extends EndpointBase
{
    /**
     * @see https://www.mitryus.com.br:8191/MitryusReports/integracao.xhtml#ApiProdutosEcommerce
     *
     * @return DepartamentosModel
     */
    public function get(): ProdutosEcommerceModel
    {
        $response = $this->request('GET', 'produtosecommerce')->getResponse();

        return new ProdutosEcommerceModel($response);
    }
}