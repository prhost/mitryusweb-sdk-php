<?php


namespace Mitryusweb\Model;

use Mitryusweb\Classes\ModelCollectionBase;

class Secoes extends ModelCollectionBase
{
    protected $itemAttributeModel = [
        "Secoes" => Secao::class,
    ];

    protected $attributeMap = [
        "Secoes" => "Collection",
    ];
}