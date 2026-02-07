<?php

namespace Project\classes;

use Project\traits\NumberFormatTrait;

class SpanNumber extends SpanText
{

    use NumberFormatTrait;

    public function render(): string
    {

        try {

            $content = $this->getAttribute('content');

            if (!is_numeric($content)) {
                throw new \InvalidArgumentException('Атрибут content должен содержать число.');
            }

            $formattedContent = $this->formatNumberWithSeparator((float)$content, 4);

            $this->setAttribute('content', $formattedContent);

            return parent::render();

        } catch (\Exception $e) {
            error_log("Ошибка рендера SpanNumber: {$e->getMessage()}");
            return '';
        }

    }

}
