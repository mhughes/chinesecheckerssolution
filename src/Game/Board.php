<?php
namespace Game;

/**
 * Description of Board
 *
 * @author tute666
 */
class Board implements IBoard{

//	private $nodes = array();
//	private $current;
//
//	public static function newFromFile($path) {
//		$nodes = parse_ini_file($path);
//		$board = new Board($nodes);
//		return $board;
//	}
//
//	public function __construct($nodes = array()) {
//		$this->nodes = $nodes;
//	}
	private $board = array();

	public function __construct() {
		$cols = array("a", "b", "c", "d", "e", "f", "g");
		$rows = array(1, 2, 3, 4, 5, 6, 7);
		$incomplete = array(null, null, 1, 1, 1, null, null);
		$complete = array(1, 1, 1, 1, 1, 1, 1);
		$center = array(1, 1, 1, 0, 1, 1, 1);
		$boardRows = array($incomplete, $incomplete, $complete, $center, $complete, $incomplete, $incomplete);

		$this->board = $boardRows;
	}

	public function __toString() {
		$output = "";
		foreach ($this->board as $row => $values) {
			foreach ($values as $col) {
				if ($col === null) {
					$output .= " ";
				} elseif ($col === 1) {
					$output .= "x";
				} elseif ($col === 0) {
					$output .= "o";
				}
			}
			$output .= "\n";
		}
		$output .= "\n";
		return $output;
	}

	public function move($from, $to) {
		if($this->isValidMove($from, $to)){
			$this->doMove($from, $to);
		}else{
			throw new \InvalidMoveException();
		}
	}
	
	private function doMove($from, $to){
		$this->board[$from[1]][$from[0]] = 0;
		$this->board[$to[1]][$to[0]] = 1;
	}
	private function isValidMove($from, $to){
		
	}
	public function isResolved(){
		return false;
	}

}