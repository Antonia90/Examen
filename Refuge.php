<?php

declare(strict_types=1);
require_once('Animal.php');
class Refuge
{
    private array $animals;

    public function __construct(array $animals)
    {
        if (count($animals) < 1) {
            throw new InvalidArgumentException("Al menos debe haber un animal en el refugio");
        }
        $this->animals = $animals;
    }
    public function getAnimals(): array
    {
        return $this->animals;
    }

    public function sameTypeAnimals(string $type): array
    {
        $type = strtolower((trim($type)));
        $sameTypeAnimals = [];
        foreach ($this->animals as $animal) {
            if (strtolower($animal->getType()) === $type) {
                $sameTypeAnimals[] = $animal;
            }
        }
        return $sameTypeAnimals;
    }

    public function longerName(): string
    {
        $longerName = $this->animals[0];
        foreach ($this->animals as $animal) {
            if (strlen($animal->getName()) > strlen($longerName->getName())) {
                $longerName = $animal;
            }
        }
        return $longerName->getName();
    }
}
