<?php


namespace Mitryusweb\Model;

use Mitryusweb\Classes\ModelItemBase;

/**
 * Class Departamento
 * @package Mitryusweb\Model\
 * @method integer getCodDepartamento()
 * @method string getNomeDepartamento()
 */
class Departamento extends ModelItemBase
{
    protected $attributeMap = [
        "cod_departamento"  => "Integer",
        "nome_departamento" => "String",
    ];
}