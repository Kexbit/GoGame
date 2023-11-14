<?php

class Board
{
     public $sizeboard;
     public $timeforgame;
     public function __construct($sizeboard, $timeforgame) {
     	$this->sizeboard = $sizeboard;
     	$this->timeforgame = $timeforgame;
     }
     public function createboard() {
            $matrix = array();
			$rows = $this->sizeboard;
			$cols = $this->sizeboard;

			for ($i = 0; $i < $rows; $i++) {
			$matrix[$i] = array();
			for ($j = 0; $j < $cols; $j++) {
			$matrix[$i][$j] = 0;
			}
			}
			print_r($matrix);
     }
     public function start_game(){
     	//????
     }
     public function end_game(){
     	//????
     }
     public function your_turn(){
         //????
     }
     public function return_zero() {
         //????
     }

}
$game = new Board(9, 12);
$game->createboard();
?>
