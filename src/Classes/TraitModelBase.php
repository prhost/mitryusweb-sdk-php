<?php

namespace Mitryusweb\Classes;


use Illuminate\Support\Arr;

trait TraitModelBase
{
    protected $attributeMap = [];

    protected $attributeValues = [];

    protected $itemAttributeModel = [];

    /**
     * @return array
     */
    public function getAttributeMap(): array
    {
        return $this->attributeMap;
    }

    /**
     * @param array $attributeMap
     */
    public function setAttributeMap(array $attributeMap): void
    {
        $this->attributeMap = $attributeMap;
    }

    public function __set($attribute, $value)
    {
        $this->attributeValues[$attribute] = $value;
    }

    public function __get($attribute)
    {
        return $this->attributeValues[$attribute] ?? null;
    }

    public function __call($name, $arguments)
    {
        if (strpos($name, 'get') === 0) {
            $attribute = ltrim($name, 'get');
            return $this->{snake_case($attribute)};
        }

        if (strpos($name, 'set') === 0) {
            $attribute = ltrim($name, 'set');
            $this->{snake_case($attribute)} = Arr::first($arguments);
        }
    }

    /**
     * @return array
     */
    public function getItemAttributeModel(): array
    {
        return $this->itemAttributeModel;
    }

    /**
     * @param array $itemAttributeModel
     */
    public function setItemAttributeModel(array $itemAttributeModel): void
    {
        $this->itemAttributeModel = $itemAttributeModel;
    }
}