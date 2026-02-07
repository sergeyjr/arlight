<?php

namespace Project\classes;

use Project\elements\HtmlElement;

class Link extends HtmlElement
{

    private const DEFAULT_TEXT = 'Ссылка';

    public function render(): string
    {

        $href = $this->getAttribute('href');

        if (!$href) {
            return '';
        }

        $text = $this->getAttribute('text') ?? self::DEFAULT_TEXT;

        return '<a href="' . htmlspecialchars($href) . '">' . htmlspecialchars($text) . '</a>';

    }

}
