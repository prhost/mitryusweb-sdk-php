<?php


namespace Mitryusweb\Model;

use Mitryusweb\Classes\ModelCollectionBase;

class Ofertas extends ModelCollectionBase
{
    protected $itemAttributeModel = [
        "Ofertas"   => "Oferta",
    ];

    protected $attributeMap = [
        "Ofertas" => "Collection",
    ];
}