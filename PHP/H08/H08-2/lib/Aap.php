<?php

class Aap {

    Private $aap;
    Private $website;

    function __construct($w, $a) {
        $this->website = $w;
        $this->aap = $a;
    }

    public function getAap()
    {
        return $this->aap;
    }

    public function setAap($aap)
    {
        $this->aap = $aap;
        return $this;
    }

    public function getWebsite()
    {
        return $this->website;
    }

    public function setArtiest($website)
    {
        $this->website = $website;
        return $this;
    }

}