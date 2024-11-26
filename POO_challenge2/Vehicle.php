<?php

class Vehicle
{
    protected int $numberOfweels;
    protected int $currentSpeed = 0;
    protected string $color;
    protected int $numberOfSeats;
    protected string $energyType;




    public function __construct(string $color, int $numberOfSeats, string $energyType)
    {
        $this->color=$color;
        $this->numberOfSeats=$numberOfSeats;
        $this->energyType=$energyType;
    }



    /*METHODES PUBLIQUES*/

    public function start(): string
    {
        return "Démarage...";
    }

    public function move(): string
    {
        $this->currentSpeed += 10;
        return "Le véhicule se déplace à {$this->currentSpeed} Km/h.";
    }

    public function brake(): string
    {
        if ($this->currentSpeed > 0){
            $this->currentSpeed -= 10;
        } else{
            $this->currentSpeed = 0;
        }
        return "Le véhicule ralenti à {$this->currentSpeed} km/h.";
    }




    /*GET*/

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNumberOfSeats(): int
    {
        return $this->numberOfSeats;
    }

    public function getEnergyType(): string
    {
        return $this->energyType;
    }

    public function getcurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
}