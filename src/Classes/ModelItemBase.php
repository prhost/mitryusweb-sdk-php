<?php

namespace Mitryusweb\Classes;


abstract class ModelItemBase
{
    use TraitModelBase;

    public function __construct(\StdClass $data = null)
    {
        if ($data) {
            foreach ($this->getAttributeMap() as $attribute => $type) {
                $this->{$attribute} = $data->{$attribute};
            }
        }
    }

    public function toArray()
    {
        return $this->attributeValues;
    }
}