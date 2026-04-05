<?php

$loader = include dirname( __DIR__ ) . '/vendor/autoload.php';

$loader->add( 'Kado\\Date\\Tests', __DIR__ );
$loader->register();
