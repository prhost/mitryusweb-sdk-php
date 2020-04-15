<?php


namespace Mitryusweb\Model;

use Mitryusweb\Classes\ModelCollectionBase;

class ProdutosEcommerce extends ModelCollectionBase
{
    protected $itemAttributeModel = [
        "ProdutosEcommerce"   => "ProdutoEcommerce",
    ];

    protected $attributeMap = [
        "ProdutosEcommerce" => "Collection",
    ];
}