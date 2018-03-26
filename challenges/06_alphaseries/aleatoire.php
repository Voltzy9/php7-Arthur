<?php
$projectDir = __DIR__;
require_once($projectDir.'/src/functions.php');
header('Location: serie.php?slug=' . $shows[array_rand($shows)]['slug']) ;
