<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    /*PROPRIETES DU CAMION*/

    private int $storageCapacity;

    private int $currentLoad = 0;



    public function __construct(string $color, int $numberOfSeats, string $energyType, int $storageCapacity)
    {
        parent::__construct($color, $numberOfSeats, $energyType);
        $this->storageCapacity = $storageCapacity;
    }


    //METHODE DE VERIFICATION DE L'INTERRIEUR DU CAMION

    public function isFull(): string
    {
        return $this->currentLoad >= $this->storageCapacity ? "full" : "in filling";
    }




    //GET

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function getCurrentLoad(): int
    {
        return $this->currentLoad;
    }



    //SET

    public function setCurrentLoad(int $load): void
    {
        if ($load <= $this->storageCapacity) {
            $this->currentLoad = $load;
        }else{
            throw new Exception("Erreur, plus de place.");
        }
    }
}