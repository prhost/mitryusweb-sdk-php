<?php


namespace Mitryusweb\Model\Pedido;

use Mitryusweb\Classes\ModelCollectionBase;

class Produtos extends ModelCollectionBase
{
    protected $itemAttributeModel = [
        "Produtos" => Produto::class,
    ];

    protected $attributeMap = [
        "Produtos" => "Collection",
    ];
}