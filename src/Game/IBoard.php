<?php
namespace Game;
/**
 * Description of IBoard
 *
 * @author tute666
 */
interface IBoard {
	/**
	 * @return bool
	 * @throws InvalidMoveException
	 */
	public function move($to, $from);
	/**
	 * @return bool;
	 */
	public function isResolved();
}