<?php


namespace Mitryusweb\Model\Pedido;

use Mitryusweb\Classes\ModelItemBase;

/**
 * Class Produto
 * @package Mitryusweb\Model\Pedido
 */
class Produto extends ModelItemBase
{
    protected $attributeMap = [
        "cod_barras" => "String",
        "valor"      => "Float",
        "frete"      => "Float",
        "seguro"     => "Float",
        "desconto"   => "Float",
        "outros"     => "Float",
        "quantidade" => "Float",
    ];
}