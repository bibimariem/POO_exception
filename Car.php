<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;

    private int $energyLevel;

    private bool $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    
    public function setEnergy(string $energy): Car
    {
    if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
    }
    return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    public function setParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }
    public function start():bool
    {
        if (/*on simule que frein à main est utilisé*/ true)
            {
                // l’exception jetée avec son message et son code d’erreur
                throw new Exception('Le frein à main est actif');
            }   
           
            return true;
         }
    try {
         start();
    } catch (NotificationStartCar $sc) {
        // Envoyez  une alerte
        // pour prévenir que le frein à main est actif ;)
    } finally {
        // finally permet d'exécuter du code quoi qu'il arrive :)
        start();
        // si une exception est jetée par sendEmail,
        // Le return n'est jamais exécuté
        return 'Ma voiture roule comme un donut';
        }
}
