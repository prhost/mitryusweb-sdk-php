<?php


namespace Mitryusweb\Model;

use Mitryusweb\Classes\ModelItemBase;

/**
 * Class Tamanho
 * @package Mitryusweb\Model
 * @method integer getCodTamanho()
 * @method string getNomeTamanho()
 */
class Tamanho extends ModelItemBase
{
    protected $attributeMap = [
        "cod_tamanho"  => "Integer",
        "nome_tamanho" => "String",
    ];
}