<?php
/**
*
*
*/
class CDiceCount {

    /**
    * Properties
    *
    */
    private $dices;
    private $numDices;
    private $sum;
    private $sumRound;
    private $save;
    private $totalScore;

    /**
  * Constructor
  *
  * @param int $numDices the number of dices in the hand, defaults to six dices.
  */
 public function __construct($numDices) {
   for($i=0; $i < $numDices; $i++) {
     $this->dices[] = new CDiceImage();
   }
   $this->numDices = $numDices;
   $this->sum = 0;
   $this->sumRound = 0;
 }

 /**
 * Roll all dices in the hand.
 *
 */
public function Roll() {
  $this->sum = 0;
  for($i=0; $i < $this->numDices; $i++) {
    $roll = $this->dices[$i]->Roll(1);
    $this->sum += $roll;
     if($this->GetTotal() == 1) {
         $this->sumRound = 0;
     }
     else {
         $this->sumRound += $roll;
     }
  }
}

/**
 * Get the sum of the last roll.
 *
 * @return int as a sum of the last roll, or 0 if no roll has been made.
 */
public function GetTotal() {
  return $this->sum;
}

/**
 * Init the round.
 *
 */
public function InitRound() {
  $this->sumRound = 0;
}

/** Save the round **/
 public function saveRound() {
     $this->totalScore += $this->GetRoundTotal();
    // $this->sumRound = 0;
 }

    /**
    * Get the accumulated sum of the round.
    *
    * @return int as a sum of the round, or 0 if no roll has been made.
    */
    public function GetRoundTotal() {
        return $this->sumRound;
    }

 /** Total score **/
  public function GetTotalScore() {
      return $this->totalScore;
  }

  public function infoWinner() {
      if($this->totalScore >= 100)
         return"<p>Grattis, du fick" . $this->totalScore . "poäng!</p>";
    }

  public function infoLose() {
      if($this->sum == 1) {
          $this->sum = 0;
          return"<p>Du slog 1 och denna rundans poäng sparas inte.</p>";
      }
    }

 /**
  * Get the rolls as a serie of images.
  *
  * @return string as the html representation of the last roll.
  */
 public function GetRollsAsImageList() {
   $html = "<ul class='dice'>";
   foreach($this->dices as $dice) {
     $val = $dice->GetLastRoll();
     $html .= "<li class='dice-{$val}'></li>";
   }
   $html .= "</ul>";
   return $html;
    }
}
