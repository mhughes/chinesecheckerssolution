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
	public function move(IMove $move);
	/**
	 * @return bool;
	 */
	public function isResolved();
	/**
	 * @return bool
	 */
	public function hasPegAt($point);
}