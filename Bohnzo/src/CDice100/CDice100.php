
<?php
class CDice100 {

    /** Properties **/
       protected $hand;
       private $roll;
       private $init;
       private $save;
       public $html;

   // Create object or get it from session
   public function View() {
       if(isset($_SESSION['dicehand'])) {
    $hand = $_SESSION['dicehand'];
    }
    else {
      $hand = new CDiceCount(1);
      $_SESSION['dicehand'] = $hand;
    }
        // Get the arguments from the query string
    $roll =    isset($_GET['roll'])    ? true : false;
    $init =    isset($_GET['init'])    ? true : false;
    $save =    isset($_GET['save'])    ? true : false;
    $destroy = isset($_GET['destroy']) ? true : false;

        /** Roll the dice **/
        if($roll) {
            $hand->Roll();
        }
        else if($init) {
            $hand->initRound();
        }
        else if($save) {
            $hand->saveRound();
        }
        else if($destroy) {
            if(isset($_GET['destroy'])) {
          // Unset all of the session variables.
          $_SESSION = array();
        }
                     // Finally, destroy the session.
          session_destroy();
          echo " Sessionen raderas, <a href='?'>klicka här för att spela igen</a>";
          exit;
          }


       $html='<div>';
       // Display game points for player
      if($roll OR $save) {
         $html.=$hand->infoWinner();
         $html.=$hand->GetRollsAsImageList();
         $html.="<p>Poäng denna runda: ".$hand->GetRoundtotal()."</p>";
         $html.=$hand->infoLose();
         $html.="<p>Dina sparade poäng: ".$hand->GetTotalScore()."</p></div>";

        }
        else {
        $html.=$hand->GetRollsAsImageList();
        $html.="<p>Kasta tärningen för att börja spela!</p></div>";
        };
        return $html;
        }

}
