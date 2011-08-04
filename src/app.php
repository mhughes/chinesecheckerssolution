<?php

if($argv[0] != "app.php"){
	echo "Wrong Usage";
}
include "config.php";

$board = Game\Board::newFromFile(__DIR__."../data/board.ini");

$solver = new Solution\Classic($board);

$solver->resolve();