<?php

namespace KoalaCars\Entities;

use KoalaCars\Abstracts\VehicleAbstract;

class CarEntity extends VehicleAbstract
{
    private int $id;
    private string $make;
    private string $model;
    private int $year;
    private string $color;
    private string $location;
    private string $image;

    public function getId(): int
    {
       return $this->id;
    }
    public function getMake(): string
    {
       return $this->make;
    }
    public function getModel(): string
    {
       return $this->model;
    }
    public function getYear(): int
    {
       return $this->year;
    }
    public function getColor(): string
    {
        return $this->color;
    }
    public function getLocation(): string
    {
       return $this->location;
    }
    public function getImage(): string
    {
       return $this->image;
    }
}