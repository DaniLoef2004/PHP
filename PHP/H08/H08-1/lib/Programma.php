<?php

class Programma {
    private $naam = "";
    private $omschrijving = "";
    private $liedjes = array();

    public function voegLiedjeToe($liedje) {
        $this->liedjes[] = $liedje;
    }

    /**
     * @return array
     */

    public function getLiedjes() {
        return $this->liedjes;
    }

    /**
     *  Geeft programma informatie terug
     * @return array
     */

    public function getProgramma() {
        return array("naam" => $this->naam,
            "omschijving" => $this->omschrijving
        );
    }

    /**
     *  Geeft het programma een naam
     * @param de naam als string
     */

    public function setNaam($n) {
        if(strlen($n)>=2) {
            $this->naam = $n;
        }
    }

    /**
     *  Geeft het programma een omschijving
     * @param de omschijving als string
     */

    public function setOmschijving($omschijving) {
        $this->omschrijving = $omschijving;
    }

    /**
     *  Retourneert naam van het programma
     * @param de naam als string
     */

    public function getNaam() {
        return $this->naam;
    }

    /**
     *  Retourneert omschijving van het programma
     * @param de omschijving als string
     */

    public function getOmschijving() {
        return $this->omschrijving;
    }
}

?>