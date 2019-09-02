<?php

namespace App\Char;

class Ken
{
    private $name;
    private $attribute;

    public function __construct($attribute)
    {
        $this->name = 'Ken';
        $this->attribute = $attribute;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAttribute()
    {
        return $this->attribute->do();
    }
}
