<?php

namespace App;

class Entity
{
    private string $name;
    private \DateTime $dateField;

    public function getName(): string
    {
        return $this->name;
    }

    public function getDateField(): \DateTime
    {
        return $this->dateField;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setDateField(\DateTime $dateField): void
    {
        $this->dateField = $dateField;
    }
}
