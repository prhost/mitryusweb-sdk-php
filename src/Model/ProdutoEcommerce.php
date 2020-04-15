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
    protected $itemAttributeModel = [
        'codigos_barra' => 'CodigoBarraEcommerce'
    ];
    
    protected $attributeMap = [
        "cod_produto"       => "Integer",
        "nome_produto"      => "String",
        "marca_produto"     => "String",
        "descricao_produto" => "String",
        "descricao_web"     => "String",
        "info_adicionais"   => "String",
        "ordem_destaque"    => "Integer",
        "peso_bruto"        => "Float",
        "peso_liquido"      => "Float",
        "frete_com_seguro"  => "Boolean",
        "lastro"            => "Integer",
        "camada"            => "Integer",
        "volume"            => "Integer",
        "altura"            => "Float",
        "largura"           => "Float",
        "comprimento"       => "Float",
        "profundidade"      => "Float",
        "tipo_categoria1"   => "String",
        "cod_categoria1"    => "Integer",
        "desc_categoria1"   => "String",
        "tipo_categoria2"   => "String",
        "cod_categoria2"    => "Integer",
        "desc_categoria2"   => "String",
        "tipo_categoria3"   => "String",
        "cod_categoria3"    => "Integer",
        "desc_categoria3"   => "String",
        "codigos_barra"     => "Collection",
    ];
}