<?php

namespace Project\traits;

trait EditableTrait
{

    /**
     * Получает имя поля
     */
    public function getName(): string
    {
        return (string)$this->getAttribute('name');
    }

    /**
     * Устанавливает имя поля
     */
    public function setName(string $name): void
    {
        $this->setAttribute('name', $name);
    }

    /**
     * Получает значение поля
     */
    public function getValue()
    {
        return $this->getAttribute('value');
    }

    /**
     * Устанавливает значение поля
     */
    public function setValue($value): void
    {
        $this->setAttribute('value', $value);
    }

    /**
     * Получает флаг обязательности поля
     */
    public function isRequired(): bool
    {
        return (bool)$this->getAttribute('required');
    }

    /**
     * Устанавливает флаг обязательности поля
     */
    public function setRequired(bool $required): void
    {
        $this->setAttribute('required', $required);
    }

    /**
     * Получает значение подсказки-плейсхолдера
     */
    public function getPlaceholder(): ?string
    {
        return $this->getAttribute('placeholder');
    }

    /**
     * Устанавливает подсказку-плейсхолдер
     */
    public function setPlaceholder(?string $placeholder): void
    {
        $this->setAttribute('placeholder', $placeholder);
    }

}
