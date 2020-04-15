<?php


namespace Mitryusweb\Model;

use Mitryusweb\Classes\ModelCollectionBase;

class Grupos extends ModelCollectionBase
{
    protected $itemAttributeModel = [
        "Grupos" => Grupo::class,
    ];

    protected $attributeMap = [
        "Grupos" => "Collection",
    ];
}