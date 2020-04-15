<?php


namespace Mitryusweb\Model;

use Mitryusweb\Classes\ModelItemBase;

/**
 * Class CodigoBarra
 * @package Mitryusweb\Model
 * @method integer getCodBarra()
 */
class CodigoBarra extends ModelItemBase
{
    protected $attributeMap = [
        "cod_barra"              => "Integer",
        "cod_produto"            => "Integer",
        "cod_cor_1"              => "Integer",
        "cod_cor_2"              => "Integer",
        "cod_cor_3"              => "Integer",
        "cod_tamanho"            => "Integer",
        "integracao_ativa"       => "Boolean",
        "variacao_principal"     => "Boolean",
        "ean"                    => "Array",
        "qnt_estoque_disponivel" => "Float",
    ];
}