<?php


namespace Mitryusweb\Model;

use Mitryusweb\Classes\Collection;
use Mitryusweb\Classes\ModelBase;

class Departamento extends ModelBase
{
    public static $attributeMap = [
        "cod_departamento"  => "integer",
        "nome_departamento" => "string",
    ];

    /**
     * @var int
     */
    protected $cod_departamento;

    /**
     * @var string
     */
    protected $nome_departamento;

    public function __construct(\StdClass $data)
    {
        $this->cod_departamento = $data->cod_departamento;
        $this->nome_departamento = $data->cod_departamento;
    }
}