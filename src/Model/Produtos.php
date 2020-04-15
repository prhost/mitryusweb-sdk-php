<?php


namespace Mitryusweb\Model;

use Mitryusweb\Classes\ModelCollectionBase;

class Produtos extends ModelCollectionBase
{
    protected $itemAttributeModel = [
        "Produtos" => "Produto",
    ];

    protected $attributeMap = [
        "Produtos" => "Collection",
    ];
}