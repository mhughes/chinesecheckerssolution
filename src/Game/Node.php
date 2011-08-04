<?php
namespace Game;
/**
 * Description of Node
 *
 * @author tute666
 */
class Node {
    const STATE_FULL = 1;
    const STATE_EMPTY = 0;
    private $n,$e,$s,$w;
    public function __construct($n,$e,$s,$w, $state = Node::STATE_FULL) {
        $this->n = $n;
        $this->e = $e;
        $this->s = $s;
        $this->w = $w;
    }
	public function jumpTo($direction){
	}
}

?>
