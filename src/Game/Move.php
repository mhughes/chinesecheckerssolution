<?php
namespace Game;
/**
 * Description of Move
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
}