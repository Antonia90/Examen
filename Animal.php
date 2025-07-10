<?php

declare(strict_types=1);
require_once('Status.php');
require_once('Gender.php');

class Animal
{
    private string $name;
    private string $type;
    private Status $status;
    private Gender $gender;

    public function __construct(string $name, string $type, Status $status, Gender $gender)
    {
        if (empty($name)) {
            throw new InvalidArgumentException("El nombre no puede estar vacío.");
        }
        if (empty($type)) {
            throw new InvalidArgumentException("El tipo debe especificarse.");
        }
        $this->name = $name;
        $this->type = $type;
        $this->status = $status;
        $this->gender = $gender;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getType(): string
    {
        return $this->type;
    }
    public function getStatus(): Status
    {
        return $this->status;
    }
    public function getGender(): Gender
    {
        return $this->gender;
    }

    public function __toString()
    {
        return "Nombre: {$this->name} <br> Tipo: {$this->type} <br> Estado: {$this->status->value} <br> Sexo: {$this->gender->value} <br><br>";
    }
}
