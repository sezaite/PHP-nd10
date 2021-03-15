<?php
class Pinigine {
    private $popieriniaiPinigai;
    private $metaliniaiPinigai;
    static private $popieriniuKiekis;
    static private $metaliniuKiekis;

    public function ideti($kiekis): void {
        if ($kiekis <= 2){
            $this->metaliniaiPinigai += $kiekis;
        } else {
            $this->popieriniaiPinigai += $kiekis;
        }
    }

    public function skaiciuoti(){
        return print_r($this->metaliniaiPinigai + $this->popieriniaiPinigai);
        //printr leidzia returno metu spausdinti
    }

    public function getPopieriniai() {
        return print_r(self::$popieriniuKiekis);
    }
    
    public function getGeleziniai() {
        return print_r(self::$metaliniuKiekis);
    }
}

?>