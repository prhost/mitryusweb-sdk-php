<?php


namespace Mitryusweb\Model\Pedido;

use Mitryusweb\Classes\ModelItemBase;

/**
 * Class Cliente
 * @package Mitryusweb\Model\Pedido
 */
class Cliente extends ModelItemBase
{
    protected $attributeMap = [
        "cpf_cnpj"        => "String",
        "nome_cliente"    => "String",
        "data_nasc_abe"   => "Date",
        "fisica_juridica" => "String",
    ];
}