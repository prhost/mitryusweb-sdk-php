<?php


namespace Mitryusweb\Model;

use Mitryusweb\Classes\ModelItemBase;

/**
 * Class Grupo
 * @package Mitryusweb\Model
 * @method integer getCodGrupo()
 * @method string getNomeGrupo()
 */
class Grupo extends ModelItemBase
{
    protected $attributeMap = [
        "cod_grupo"  => "Integer",
        "nome_grupo" => "String",
    ];
}