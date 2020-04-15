<?php


namespace Mitryusweb\Model;

use Mitryusweb\Classes\ModelItemBase;

/**
 * Class Secao
 * @package Mitryusweb\Model
 * @method integer getCodSecao()
 * @method string getNomeSecao()
 */
class Secao extends ModelItemBase
{
    protected $attributeMap = [
        "cod_secao"  => "Integer",
        "nome_secao" => "String",
    ];
}