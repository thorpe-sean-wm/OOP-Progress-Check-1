<!DOCTYPE html>
<html>
<head>
    <meta charset="UHF-8">
    <title>OOP in PHP</title>
    <?php include("autoload_Function.php")?>
    <?php include("classes.php");?>
</head>
<body>


</body>
<?php
$X11Chimera = new computer('Asus M5A97 R2.0', 'i7 Core-Processor', 'GeForce GTX 1060','Sean');
echo 'Motherboard: '. $X11Chimera->get_motherboard(). '<br/>';
echo 'CPU: '. $X11Chimera->get_cpu(). '<br/>';
echo 'GPU: '. $X11Chimera->get_gpu(). '<br/>'.'<br/>';

$B32Zealot = new computer('Conquerer 8A32i', 'M-87 Processor', 'GeForce GTX 9000', 'Sean');
echo 'Motherboard: '. $B32Zealot->get_motherboard(). '<br/>';
echo 'CPU: '. $B32Zealot->get_cpu(). '<br/>';
echo 'GPU: '. $B32Zealot->get_gpu();


?>
</html>
