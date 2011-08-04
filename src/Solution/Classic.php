<?php
namespace Solution;

/**
 * Basic Solver
 *
 * @author tute666
 */
class Classic implements IResolver{
	private $board;
	public function __construct(\Game\Board $board) {
		$this->board = $board;
	}
	public function resolve() {
		return true;
	}
}

?>
