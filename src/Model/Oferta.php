<?php


namespace Mitryusweb\Model;

use Mitryusweb\Classes\ModelItemBase;

/**
 * Class Oferta
 * @package Mitryusweb\Model
 * @method integer getCodProduto()
 */
class Oferta extends ModelItemBase
{
    protected $attributeMap = [
        "cod_produto"    => "Integer",
        "dt_inicial"     => "DateTime",
        "dt_final"       => "DateTime",
        "vl_venda_vista" => "Float",
        "vl_venda_prazo" => "Float",
    ];
}