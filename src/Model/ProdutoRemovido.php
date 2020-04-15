<?php


namespace Mitryusweb\Model;

use Mitryusweb\Classes\ModelItemBase;

/**
 * Class ProdutoRemovido
 * @package Mitryusweb\Model
 * @method integer getCodProduto()
 */
class ProdutoRemovido extends ModelItemBase
{
    protected $attributeMap = [
        "cod_produto" => "Integer",
        "dt_remocao"  => "DateTime",
        "mensagem"    => "String",
    ];
}