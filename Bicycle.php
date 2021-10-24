<?php
require_once 'Vehicle.php';

class Bicycle extends Vehicle
{
    private bool $hasLuggageRack = true;

    public function getHasLuggageRack(): bool
    {
        return $this->hasLuggageRack;
    }
}