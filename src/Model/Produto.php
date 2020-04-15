<?php


namespace Mitryusweb\Model;

use Mitryusweb\Classes\ModelItemBase;

/**
 * Class Produto
 * @package Mitryusweb\Model
 * @method integer getCodProduto()
 * @method string getNomeProduto()
 */
class Produto extends ModelItemBase
{
    protected $attributeMap = [
        "cod_produto"      => "Integer",
        "cod_departamento" => "Integer",
        "cod_estilo"       => "Integer",
        "cod_grupo"        => "Integer",
        "cod_subgrupo"     => "Integer",
        "nome_produto"     => "String",
        "dsc_produto_web"  => "String",
        "is_ativo"         => "Boolean",
        "is_fora_linha"    => "Boolean",
        "ncm"              => "String",
        "ordenacao"        => "Integer",
        "dsc_marca"        => "String",
        "dsc_modelo"       => "String",
        "dsc_referencia"   => "String",
        "vl_custo_liquido" => "Float",
        "vl_venda_vista"   => "Float",
        "vl_venda_prazo"   => "Float",
        "peso_bruto"       => "Float",
        "peso_liquido"     => "Float",
        "altura"           => "Float",
        "largura"          => "Float",
        "comprimento"      => "Float",
        "pronta_entrega"   => "Boolean",
    ];
}