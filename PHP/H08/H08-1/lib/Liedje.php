<?php

class Liedje {
    private $titel;
    private $artiest;

    function __construct($t, $a) {
        $this->titel = $t;
        $this->artiest = $a;
    }

    /**
     * @return mixed
     */

    public function getTitel()
    {
        return $this->titel;
    }

    /**
     * @param mixed $titel
     */

    public function setTitel($titel)
    {
        $this->titel = $titel;
    }

    /**
     * @return mixed
     */

    public function getArtiest()
    {
        return $this->artiest;
    }

    /**
     * @param mixed $artiest
     */

    public function setArtiest($artiest)
    {
        $this->artiest = $artiest;
    }
}