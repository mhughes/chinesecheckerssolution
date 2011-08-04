<?php

namespace Game;

/**
 * Description of Board
 *
 * @author tute666
 */
class Board {

	private $nodes = array();
	private $start;

	public static function newFromFile($path) {
		$nodes = parse_ini_file($path);
		$board = new Board($nodes);
		return $board;
	}

	public function __construct($nodes = array()) {
		$this->nodes = $nodes;
	}

	public function getFirst() {
		return $this->start;
	}

	public function jump($direction) {
		$this->current->jumpTo();
	}

}

?>
