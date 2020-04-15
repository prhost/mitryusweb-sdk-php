<?php


namespace Mitryusweb\Model;

use Mitryusweb\Classes\ModelCollectionBase;

class Tamanhos extends ModelCollectionBase
{
    protected $itemAttributeModel = [
        "Tamanhos" => Tamanho::class,
    ];

    protected $attributeMap = [
        "Tamanhos" => "Collection",
    ];
}