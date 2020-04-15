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
        "Departamentos"   => "Departamento",
        "Grupos"          => "Grupo",
        "SubGrupos"       => "SubGrupo",
        "Secoes"          => "Secao",
        "Estacoes"        => "Estacao",
        "Estilos"         => "Estilo",
        "Cores"           => "Cor",
        "Tamanhos"        => "Tamanho",
        "Produtos"        => "Produto",
        "ProdutoRemovido" => "ProdutoRemovido",
        "CodigosBarra"    => "CodigoBarra",
        "Oferta"          => "Oferta",
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