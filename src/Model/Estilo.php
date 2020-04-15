<?php


namespace Mitryusweb\Model;

use Mitryusweb\Classes\ModelItemBase;

/**
 * Class Estilo
 * @package Mitryusweb\Model
 * @method integer getCodEstilo()
 * @method string getNomeEstilo()
 */
class Estilo extends ModelItemBase
{
    protected $attributeMap = [
        "cod_estilo"  => "Integer",
        "nome_estilo" => "String",
    ];
}