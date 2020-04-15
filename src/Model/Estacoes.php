<?php


namespace Mitryusweb\Model;

use Mitryusweb\Classes\ModelCollectionBase;

class Estacoes extends ModelCollectionBase
{
    protected $itemAttributeModel = [
        "Estacoes" => Estacao::class,
    ];

    protected $attributeMap = [
        "Estacoes" => "Collection",
    ];
}