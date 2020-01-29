<?php
require 'mvc/Loader.php';

$loader = new Loader();

$loader->regDirectiry(dirname(__FILE__).'/models');

$loader->register();
?>