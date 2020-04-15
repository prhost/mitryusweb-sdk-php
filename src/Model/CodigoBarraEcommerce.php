<?php


namespace Mitryusweb\Model;

use Mitryusweb\Classes\ModelItemBase;

/**
 * Class CodigoBarraEcommerce
 * @package Mitryusweb\Model
 * @method integer getCodBarra()
 */
class CodigoBarraEcommerce extends ModelItemBase
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