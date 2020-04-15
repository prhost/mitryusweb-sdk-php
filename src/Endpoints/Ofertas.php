<?php

namespace Mitryusweb\Endpoints;

use Mitryusweb\Classes\EndpointBase;
use \Mitryusweb\Model\Ofertas as OfertasModel;

class Ofertas extends EndpointBase
{
    /**
     * @see https://www.mitryus.com.br:8191/MitryusReports/integracao.xhtml#ApiOfertas
     *
     * @return OfertasModel
     */
    public function get(): OfertasModel
    {
        $response = $this->request('GET', 'ofertas')->getResponse();

        return new OfertasModel($response);
    }
}