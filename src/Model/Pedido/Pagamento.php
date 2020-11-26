<?php


namespace Mitryusweb\Model\Pedido;

use Mitryusweb\Classes\ModelItemBase;

/**
 * Class Pagamento
 * @package Mitryusweb\Model\Pedido
 */
class Pagamento extends ModelItemBase
{
    protected $attributeMap = [
        "tipo_pagamento"  => "String",
        "valor_pagamento" => "Float",
        "token"           => "String",
        "data_pagamento"  => "Date",
        "status"          => "String",
        "inf_pagamento"   => "String",
        "numero_parcelas" => "Integer",
        "bandeira"        => "String",
    ];
}