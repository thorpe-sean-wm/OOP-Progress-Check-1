<?php
spl_autoload_register(function($class_name) {
    include $class_name . '.php';
});

$frame = new Frame;
$part = new Part;

$part->sayHello();
?>