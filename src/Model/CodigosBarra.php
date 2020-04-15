<?php


namespace Mitryusweb\Model;

use Mitryusweb\Classes\ModelCollectionBase;

class CodigosBarra extends ModelCollectionBase
{
    protected $itemAttributeModel = [
        "CodigosBarra" => CodigoBarra::class,
    ];

    protected $attributeMap = [
        "CodigosBarra" => "Collection",
    ];
}