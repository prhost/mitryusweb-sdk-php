<?php


namespace Mitryusweb\Model;

use Mitryusweb\Classes\Collection;
use Mitryusweb\Classes\ModelCollectionBase;

/**
 * Class PacoteDados
 * @package Mitryusweb\Model
 * @method Collection getDepartamentos()
 * @method Collection getProdutos()
 * @method Collection getCodigosBarra()
 */
class PacoteDados extends ModelCollectionBase
{
    protected $itemAttributeModel = [
        "Departamentos"   => Departamento::class,
        "Grupos"          => Grupo::class,
        "SubGrupos"       => SubGrupo::class,
        "Secoes"          => Secao::class,
        "Estacoes"        => Estacao::class,
        "Estilos"         => Estilo::class,
        "Cores"           => Cor::class,
        "Tamanhos"        => Tamanho::class,
        "Produtos"        => Produto::class,
        "ProdutoRemovido" => ProdutoRemovido::class,
        "CodigosBarra"    => CodigoBarra::class,
        "Oferta"          => Oferta::class,
    ];

    protected $attributeMap = [
        "Departamentos"      => "Collection",
        "Grupos"             => "Collection",
        "SubGrupos"          => "Collection",
        "Secoes"             => "Collection",
        "Estacoes"           => "Collection",
        "Estilos"            => "Collection",
        "Cores"              => "Collection",
        "Tamanhos"           => "Collection",
        "Produtos"           => "Collection",
        "ProdutoRemovido"    => "Collection",
        "CodigosBarra"       => "Collection",
        "Oferta"             => "Collection",
        "codigo_confirmacao" => "Integer",
    ];
}