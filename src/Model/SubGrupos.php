<?php


namespace Mitryusweb\Model;

use Mitryusweb\Classes\ModelCollectionBase;

class SubGrupos extends ModelCollectionBase
{
    protected $itemAttributeModel = [
        "SubGrupos" => SubGrupo::class,
    ];

    protected $attributeMap = [
        "SubGrupos" => "Collection",
    ];
}