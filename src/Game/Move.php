<?php
namespace Game;
/**
 * Move is coupled to the board implementation
 * TODO: reflect this
 * maybe by defining the point implementation as a1,b2 we mitigate this.
 *
 * @author tute666
 */
class Move extends IMove{
	private $to;
	private $from;
	public function __construct($string){
		$parts = preg_split("/-/", $string);
		$this->from =  $parts[0];
		$this->to =  $parts[1];
	}
	public function getFrom(){
		return $this->from;
	}
	public function getTo(){
		return $this->to;
	}
	/**
	 * calculates middle peg between to and from
	 */
	public function getMiddle(){
		return ;
	}
	public function isValid(IBoard $board){
		return 
		$board->hasPegAt($this->getFrom()) &&
		!$board->hasPegAt($this->getTo()) &&
		$board->hasPegAt($this->getMiddle());
	}
}