
<?php

class AapOverzicht {

    private $apen = array();

    public function voegAapToe($aap) {
        $this->apen[] = $aap;
    }

    public function getApen()
    {
        sort($this->apen);
        return $this->apen;
    }
}