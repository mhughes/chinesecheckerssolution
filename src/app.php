<?php
if(substr($argv[0], -7) != "app.php"){
	echo "Wrong Usage. Must be called from CLI.";
	
	exit;
}
include "config.php";

$board = Game\Board::newFromFile(__DIR__."../data/board.ini");

$solver = new Solution\Classic($board);

$solver->resolve();