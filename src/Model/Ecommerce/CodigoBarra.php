<?php


namespace Mitryusweb\Model\Ecommerce;

use Mitryusweb\Classes\ModelItemBase;

/**
 * Class CodigoBarra
 * @package Mitryusweb\Model\Ecommerce
 * @method integer getCodBarra()
 */
class CodigoBarra extends ModelItemBase
{
    protected $attributeMap = [
        "cod_produto"      => "Integer",
        "cod_barra"        => "Integer",
        "principal"        => "Boolean",
        "cor"              => "String",
        "tamanho"          => "String",
        "vl_venda_vista"   => "Float",
        "vl_venda_prazo"   => "Float",
        "vl_oferta_vista"  => "Float",
        "vl_oferta_prazo"  => "Float",
        "dt_inicio_oferta" => "Date",
        "dt_fim_oferta"    => "Date",
        "qtd_estoque"      => "Float",
    ];
}