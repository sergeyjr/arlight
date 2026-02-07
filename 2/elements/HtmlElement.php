<?php

namespace Project\elements;

abstract class HtmlElement
{

    /**
     * Массив для хранения атрибутов
     */
    protected array $attributes = [];

    /**
     * Возвращает значение атрибута или null, если атрибут отсутствует
     */
    protected function getAttribute($key)
    {
        return $this->attributes[$key] ?? null;
    }

    /**
     * Устанавливает значение атрибута
     */
    protected function setAttribute(string $key, $value): void
    {
        $this->attributes[$key] = $value;
    }

    /**
     * Устанавливает идентификатор элемента
     */
    public function setId(string $id): void
    {
        $this->setAttribute('id', $id);
    }

    /**
     * Добавляет CSS-класс к элементу
     */
    public function addClass(string $class): void
    {
        $currentClasses = $this->getAttribute('class') ?? [];
        $currentClasses[] = $class;
        $this->setAttribute('class', $currentClasses);
    }

    /**
     * Устанавливает содержимое элемента
     */
    public function setContent($content): void
    {
        $this->setAttribute('content', $content);
    }

    /**
     * Устанавливает адрес ссылки
     */
    public function setHref(string $href): void
    {
        $this->setAttribute('href', $href);
    }

    abstract public function render(): string;

}
