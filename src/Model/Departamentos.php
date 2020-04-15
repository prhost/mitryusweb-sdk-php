<?php


namespace Mitryusweb\Model;

use Mitryusweb\Classes\ModelCollectionBase;

class Departamentos extends ModelCollectionBase
{
    protected $itemAttributeModel = [
        "Departamentos" => Departamento::class,
    ];

    protected $attributeMap = [
        "Departamentos" => "Collection",
    ];
}