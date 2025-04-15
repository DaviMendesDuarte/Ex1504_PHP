<?php

    $max = $_POST['max'];
    $num = array(rand(0, $max));
    $rand = $num[rand(0, count($num)-1)];

    echo "O número aleatório gerado foi: ".$rand;     
        
?>