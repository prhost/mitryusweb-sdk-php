<?php


namespace Mitryusweb\Model\Pedido;

use Mitryusweb\Classes\ModelCollectionBase;

class Pagamentos extends ModelCollectionBase
{
    protected $itemAttributeModel = [
        "Pagamentos" => Pagamento::class,
    ];

    protected $attributeMap = [
        "Pagamentos" => "Collection",
    ];
}