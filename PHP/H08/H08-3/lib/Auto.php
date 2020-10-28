<?php

class Auto
{
    private $merk;
    private $prijs;
    private $image;

    function __construct($merk, $prijs, $image)
    {
        $this->merk = $merk;
        $this->prijs = $prijs;
        $this->image = $image;
    }

    function getMerk()
    {
        return $this->merk;
    }

    function getPrijs()
    {
        return $this->prijs;
    }

    function getImage()
    {
        return $this->image;
    }

    function setPrijs($prijs)
    {
        $this->prijs = $prijs;
    }

    function setImage($image)
    {
        $this->image = $image;
    }
}