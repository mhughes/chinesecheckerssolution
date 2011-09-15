<?php
namespace Game;

/**
 * Description of Board
 *
 * @author tute666
 */
class Board implements IBoard {

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

	/**
	 * Prints Board state
	 * @return string 
	 */
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

	public function move(IMove $move) {
		if ($move->isValid($this)) {
			$this->doMove($move);
		} else {
			throw new \InvalidMoveException();
		}
	}

	private function doMove(IMove $move) {
		$from = $move->getFrom();
		$to = $move->getTo();
		$middle = $move->getMiddle();
		$this->board[$from[0]][$from[1]] = 0;
		$this->board[$middle[0]][$middle[1]] = 0;
		$this->board[$to[0]][$to[1]] = 1;
	}

	public function isResolved() {
		return false;
	}

	public function hasPegAt($point) {
		return $this->board[$point[0]][$point[1]]===1;
	}

}