<?php


namespace Mitryusweb\Model;

use Mitryusweb\Classes\ModelItemBase;

/**
 * Class Estacao
 * @package Mitryusweb\Model
 * @method integer getCodEstacao()
 * @method string getNomeEstacao()
 */
class Estacao extends ModelItemBase
{
    protected $attributeMap = [
        "cod_estacao"  => "Integer",
        "nome_estacao" => "String",
    ];
}