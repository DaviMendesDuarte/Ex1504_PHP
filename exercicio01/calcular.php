<?php

    $num = array(rand(0, 99));
    $rand = $num[rand(0, count($num)-1)];

    echo "O número aleatório gerado foi: ".$rand;
?>