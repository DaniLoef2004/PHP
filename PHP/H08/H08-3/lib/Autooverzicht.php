<?php

class Autooverzicht {


    private $autoos;
    private $gefilterdeAutoos = array();

    function __construct()
    {
        $this->autoos = array(new Auto("Audi", 56000, "img/audi1.jpg"),
            new Auto("Audi", 102500.00, "img/audi1.jpg"),
            new Auto("Audi", 108250.00, "img/audi1.jpg"),
            new Auto("Fiat", 10500.00, "img/fiat1.jpg"),
            new Auto("Fiat", 11500.00, "img/fiat2.jpg"),
            new Auto("Opel", 13500.00, "img/opel1.jpg"),
            new Auto("Opel", 9500.00, "img/opel2.jpg"),
            new Auto("Opel", 19500.00, "img/opel3.jpg"),
            new Auto("Ferrari", 99500.00, "img/ferrari1.jpg"),
            new Auto("Ferrari", 122500.00, "img/ferrari2.jpg"),
            new Auto("Ferrari", 152500.00, "img/ferrari3.jpg"),
            new Auto("Volkswagen", 16340.00, "img/vw1.jpg"),
            new Auto("Volkswagen", 18340.00, "img/vw2.jpg"),
            new Auto("Volkswagen", 21670.00, "img/vw3.jpg"),
            new Auto("Mercedes", 82500.00, "img/mercedes1.jpg"),
            new Auto("Mercedes", 132700.00, "img/mercedes2.jpg"),
            new Auto("Mercedes", 87500.00, "img/mercedes3.jpg"),
            new Auto("Mercedes", 222650.00, "img/mercedes4.jpg")
        );
    }

    function getGefilterdeLijst($minprijs, $maxprijs, $merk)
    {
        foreach ($this->autoos as $auto) {
            if ($auto->getPrijs() >= $minprijs && $auto->getPrijs() <= $maxprijs ) {
                if ($auto->getMerk() == $merk || $merk == "all") {
                    $this->gefilterdeAutoos[] = $auto;
                }

            }
        }
        return $this->gefilterdeAutoos;
    }

    function getAutoLijst()
    {
        return $this->autoos;
    }
}