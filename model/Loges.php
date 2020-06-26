<?php

class Loges extends Etudiant implements IAllocation{

    private $numChambre;


    public function getNumChambre()
    {
        return $this->numChambre;
    }

    public function setNumChambre($numChambre)
    {
        $this->numChambre = $numChambre;
        return $this;
    }
}