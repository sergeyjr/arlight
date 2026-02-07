<?php

namespace Project\classes;

use Project\elements\HtmlElement;

class SpanText extends HtmlElement
{

    public function render(): string
    {

        $attributes = [
            'id' => $this->getAttribute('id'),
            'class' => implode(' ', $this->getAttribute('class') ?? []),
        ];

        $htmlAttributes = [];

        foreach ($attributes as $key => $value) {
            if (!empty($value)) {
                $htmlAttributes[] = "$key=\"" . htmlspecialchars($value) . '"';
            }
        }

        $htmlAttributesStr = !empty($htmlAttributes) ? implode(' ', $htmlAttributes) : '';

        $content = htmlspecialchars((string)$this->getAttribute('content'));

        if (trim($content) === '') {
            return '';
        }

        return "<span $htmlAttributesStr>$content</span>";

    }

}
