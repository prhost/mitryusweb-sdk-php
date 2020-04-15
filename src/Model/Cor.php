<?php


namespace Mitryusweb\Model;

use Mitryusweb\Classes\ModelItemBase;

/**
 * Class Cor
 * @package Mitryusweb\Model
 * @method integer getCodCor()
 * @method string getNomeCor()
 */
class Cor extends ModelItemBase
{
    protected $attributeMap = [
        "cod_cor"  => "Integer",
        "nome_cor" => "String",
    ];
}