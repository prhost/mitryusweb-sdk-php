<?php


namespace Mitryusweb\Model\Pedido;

use Mitryusweb\Classes\ModelItemBase;

/**
 * Class Pedido
 * @package Mitryusweb\Model\Pedido
 */
class Pedido extends ModelItemBase
{
    protected $itemAttributeModel = [
        'cliente' => Cliente::class
    ];

    protected $attributeMap = [
        "data_pedido"    => "Date",
        "observacoes"    => "String",
        "total_produtos" => "Float",
        "total_frete"    => "Float",
        "total_seguro"   => "Float",
        "total_desconto" => "Float",
        "total_outro"    => "Float",
        "qtd_produtos"   => "Float",
        "logradouro"     => "String",
        "numero"         => "String",
        "complemento"    => "String",
        "bairro"         => "String",
        "cidade"         => "String",
        "estado"         => "String",
        "cep"            => "String",
        "referencia"     => "String",
        "prazo_entrega"  => "Integer",
        "cliente"        => "Objeto",
        "produtos"       => "Collection",
        "pagamentos"     => "Collection",
    ];
}