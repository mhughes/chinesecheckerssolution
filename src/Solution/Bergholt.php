<?php
namespace Solution;

/**
 * Bergholt Solution.
 *
 * @author tute666
 */
class Bergholt implements Solution\IResolver{
	
	private $solution = array( 
		array(array("b", 4), array("d", 4)),
		array(array("c", 6),  "c",4)
			);
	
	public function __construct(\Game\Board $board) {
		;
	}
	public function resolve() {
		;
	}
}

