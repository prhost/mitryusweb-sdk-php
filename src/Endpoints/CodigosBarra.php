<?php

namespace Mitryusweb\Endpoints;

use Mitryusweb\Classes\EndpointBase;
use \Mitryusweb\Model\CodigosBarra as CodigosBarraModel;

class CodigosBarra extends EndpointBase
{
    /**
     * @see https://www.mitryus.com.br:8191/MitryusReports/integracao.xhtml#ApiCodigosBarra
     *
     * @return CodigosBarraModel
     */
    public function get(): CodigosBarraModel
    {
        $response = $this->request('GET', 'codigosbarra')->getResponse();

        return new CodigosBarraModel($response);
    }
}