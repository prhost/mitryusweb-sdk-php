<?php


namespace Mitryusweb\Model\Ecommerce;

use Mitryusweb\Classes\ModelCollectionBase;

/**
 * Class Produtos
 * @package Mitryusweb\Model\Ecommerce
 */
class Produtos extends ModelCollectionBase
{
    protected $itemAttributeModel = [
        "ProdutosEcommerce" => Produto::class,
    ];

    protected $attributeMap = [
        "ProdutosEcommerce" => "Collection",
    ];
}