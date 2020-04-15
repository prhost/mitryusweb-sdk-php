<?php


namespace Mitryusweb\Model;

use Mitryusweb\Classes\ModelItemBase;

/**
 * Class SubGrupo
 * @package Mitryusweb\Model
 * @method integer getCodSubgrupo()
 * @method string getNomeSubgrupo()
 */
class SubGrupo extends ModelItemBase
{
    protected $attributeMap = [
        "cod_subgrupo"  => "Integer",
        "nome_subgrupo" => "String",
    ];
}