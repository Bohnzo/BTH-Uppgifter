<?php
/**
*
*
*/
class CDice {

    /**
    * Properties
    *
    */
private $faces;
protected $rolls = array();
private $last;

/**
* Constructor
*
* @param int $faces the number of faces to use.
*/
public function __construct($faces=6) {
    //echo __METHOD__;
    $this->faces = $faces;
}

/**
* Destructor
*
*/
public function __destruct() {
    //echo __METHOD__;
}

    /**
    * Roll the dice
    *
    * @param int $times how many times to roll the dice.
    */
       public function Roll($times) {
           $this->rolls = array();

           for($i = 0; $i <$times; $i++) {
               $this->last = rand(1,$this->faces);
               $this->rolls[] = $this->last;
           }
           return $this->last;
       }

    /**
    * Sums up the numbers of the dices.
    */
    public function getTotal() {
        return array_sum($this->rolls);
    }

    /**
    * Get the number of faces.
    *
    */
    public function GetFaces() {
        return $this->faces;
    }

    /**
    * Get the amount of rolls in an array.
    *
    */
    public function GetRollsAsArray() {
        return $this->rolls;
    }

    /*
    * Get last rolled value.
    *
    */
    public function GetLastRoll() {
        return $this->last;
    }



}
