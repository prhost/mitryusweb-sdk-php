<?php

namespace Mitryusweb\Classes;


abstract class ModelCollectionBase extends Collection
{
    use TraitModelBase;

    public function __construct($data = null)
    {
        if ($data && $data instanceof \StdClass) {
            foreach ($this->getAttributeMap() as $attribute => $type) {
                if (property_exists($data, $attribute)) {
                    $modelClass = $this->getModelClassFromAttribute($attribute);
                    if (class_exists($modelClass) && is_array($data->{$attribute})) {
                        foreach ($data->{$attribute} as $value) {
                            $this->push(new $modelClass($value));
                        }
                    } else {
                        $this->{$attribute} = $data->{$attribute};
                    }
                }
            }
        } else {
            parent::__construct($data);
        }
    }

    protected function getModelClassFromAttribute(string $attribute)
    {
        return '\Mitryusweb\Model\\' . ($this->itemAttributeModel[$attribute] ?? '');
    }

    public function __get($attribute)
    {
        $modelClass = $this->getModelClassFromAttribute($attribute);
        if (class_exists($modelClass)) {
            return $this->whereInstanceOf($modelClass);
        } else {
            $value = $this->attributeValues[$attribute] ?? null;

            if (!$value) {
                return parent::__get($attribute);
            }

            return $value;
        }
    }

    public function __call($name, $arguments)
    {
        if (strpos($name, 'get') === 0) {
            $attribute = ltrim($name, 'get');
            return $this->{$attribute};
        }
    }
}