<?php

namespace Project\classes;

use Project\traits\EditableTrait;

class InputNumber extends InputText
{

    use EditableTrait;

    protected string $type = 'number';

    public function render(): string
    {

        return parent::render();

    }

}
