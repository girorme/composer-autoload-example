<?php

namespace App\Char;

class Ryu
{
    public function __construct($attribute)
    {
        $this->name = 'Ryu';
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
