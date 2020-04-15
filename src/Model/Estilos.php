<?php


namespace Mitryusweb\Model;

use Mitryusweb\Classes\ModelCollectionBase;

class Estilos extends ModelCollectionBase
{
    protected $itemAttributeModel = [
        "Estilos" => Estilo::class,
    ];

    protected $attributeMap = [
        "Estilos" => "Collection",
    ];
}