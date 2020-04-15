<?php


namespace Mitryusweb\Model;

use Mitryusweb\Classes\ModelCollectionBase;

class Cores extends ModelCollectionBase
{
    protected $itemAttributeModel = [
        "Cores"   => Cor::class,
    ];

    protected $attributeMap = [
        "Cores" => "Collection",
    ];
}