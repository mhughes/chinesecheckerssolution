<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Board
 *
 * @author tute666
 */
class  Nextive_Board {
    private $nodes = array();
    private $start;

    public static function newFromFile($path){
        $nodes = sfYaml::load($path);

    }
    public function __construct($nodes = array()) {
        $this->nodes = $nodes;
    }
    public function getFirst(){
        return $this->start;
    }

}
?>
