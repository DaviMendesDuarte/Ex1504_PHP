<?php

$hm = $_POST['hm'];

$fh = array("Você é fã do Cristiano Ronaldo", "Você tem que assistir Blue Lock", "Você gosta de futebol?");
$fm = array("Por que está mexendo no computador ao invés de lavar a louça??", "Vamos tomar um sorvete juntas?", "Você provavelmente gosta de crepúsculo");

if ($hm == "homem")
{
    $rand = $fh[rand(0, count($fh)-1)];
    echo "A frase gerada com o tema de homem foi: ".$rand; 
}
else
{
    $rand = $fm[rand(0, count($fm)-1)];
    echo "A frase gerada com o tema de mulher foi: ".$rand; 
}
?>