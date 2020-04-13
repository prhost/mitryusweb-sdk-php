<?php

namespace Mitryusweb\Endpoints;

use Mitryusweb\Classes\EndpointBase;
use \Mitryusweb\Model\Departamentos as DepartamentosModel;

class Departamentos extends EndpointBase
{
    /**
     * @see https://www.mitryus.com.br:8191/MitryusReports/integracao.xhtml#ApiDepartamentos
     *
     * @return DepartamentosModel
     */
    public function get(): DepartamentosModel
    {
        $response = $this->request('GET', 'departamentos')->getResponse();

        return new DepartamentosModel($response);
    }
}