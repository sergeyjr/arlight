<?php

namespace Project\classes;

use Project\elements\HtmlElement;
use Project\traits\EditableTrait;

class InputText extends HtmlElement
{

    use EditableTrait;

    protected string $type = 'text';

    public function __construct(string $name, string $value, string $placeholder, bool $required)
    {

        if (empty(trim($name))) {
            throw new \InvalidArgumentException('Имя input должно быть задано.');
        }

        $this->setName($name);
        $this->setValue($value);
        $this->setPlaceholder($placeholder);
        $this->setRequired($required);

    }

    public function render(): string
    {

        try {

            $requiredStar = $this->isRequired() ? '*' : '';

            $attributes = [
                'type' => $this->type,
                'name' => $this->getName(),
                'value' => htmlspecialchars((string)$this->getValue()),
                'placeholder' => $this->getPlaceholder() ?: '',
            ];

            if ($this->isRequired()) {
                $attributes['required'] = 'required';
            }

            $htmlAttributes = '';
            foreach ($attributes as $key => $value) {
                if ($value !== '' && $value !== null) {
                    $htmlAttributes .= "$key=\"$value\" ";
                }
            }
            $htmlAttributes = trim($htmlAttributes);

            $htmlLabel = "<label for='" . $this->getName() . "'>" . $this->getName() . " $requiredStar:</label>";
            $htmlInput = "<input $htmlAttributes />";

            return $htmlLabel . $htmlInput;

        } catch (\Exception $e) {
            error_log("Ошибка рендера InputText: {$e->getMessage()}");
            return '';
        }

    }

}
