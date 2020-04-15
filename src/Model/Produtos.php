<?php


namespace Mitryusweb\Model;

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