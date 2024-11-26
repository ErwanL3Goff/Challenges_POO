<?php

class Car{
    private int $nbWeels = 4;
    private int $currentSpeed = 0;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private float $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color=$color;
        $this->nbSeats=$nbSeats;
        $this->energy=$energy;
        $this->energyLevel=$energyLevel = 100;
    }



    public function start(): string
    {
        return "Vroooouuum !!";
    }

    public function foward(): string
    {
        $this->currentSpeed += 20;
        return "Vous vous déplacez à {$this->currentSpeed} km/h.";
    }

    public function brake(): string
    {
        if ($this->currentSpeed > 20)
        {
            $this->currentSpeed -= 20;
        }else{
            $this->currentSpeed = 0;
        }
        return "Vous avez ralenti à {$this->currentSpeed} km/h.";
    }




    public function getNbWeels(): int
    {
        return $this->nbWeels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbSeats(): string
    {
        return $this->nbSeats;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): float
    {
        return $this->energyLevel;
    }


    public function setEnergyLevel(float $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}