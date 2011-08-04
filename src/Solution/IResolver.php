<?php
namespace Solution;

/**
 * Description of Resolver
 *
 * @author tute666
 */
interface IResolver {

    public function __construct(\Game\Board $board);

	public function resolve();
}

?>
