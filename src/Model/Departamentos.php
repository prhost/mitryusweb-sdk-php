<?php


namespace Mitryusweb\Model;

use Mitryusweb\Classes\Collection;
use Mitryusweb\Classes\ModelBase;

class Departamentos extends ModelBase
{
    public static $attributeMap = [
        'Attributes' => [
            "Name" => "string",
        ],
    ];

    /**
     * @var Collection[Departamento]
     */
    public $departamentos;

    public function __construct(\StdClass $departamentos = null)
    {
        $this->departamentos = new Collection();

        if ($departamentos) {
            foreach ($departamentos as $departamento) {
                $this->departamentos->push(new Departamento($departamento));
            }
        }
    }

    /**
     * @return Collection
     */
    public function getDepartamentos(): Collection
    {
        return $this->departamentos;
    }

    /**
     * @param Collection $departamentos
     */
    public function setDepartamentos(Collection $departamentos): void
    {
        $this->departamentos = $departamentos;
    }

    public function setDepartamento(Departamento $departamento)
    {
        if (null === $this->departamentos) {
            $this->departamentos = new Collection();
        }

        $this->departamentos->push($departamento);
    }
}