<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Node
 *
 * @author tute666
 */
class Nextive_Board_Node {
    const STATE_FULL = 1;
    const STATE_EMPTY = 0;
    private $n,$e,$s,$w;
    public function __construct($n,$e,$s,$w, $state = Node::STATE_FULL) {
        $this->n = $n;
        $this->e = $e;
        $this->s = $s;
        $this->w = $w;
    }
}

?>
