<?php
    $et = $_POST['et'];

    $fc = array("Corinthians ganhou o Paulistão de 2025", "Roger Guedes e Cássio meteram o pé do time", "Corinthians tem 2 mundiais.");
    $fp = array("Palmeiras ganhou a libertadores de 1999", "Palmeiras não tem mundial.", "Palmeiras ganhou 10 títulos em 6 anos");
    $fsp = array("O maior artilheiro do time é um goleiro", "Quem torce para São Paulo é viado", "Sâo Paulo não tinha copa do Brasil até 2023");
    $fs = array("O Neymar começou no Santos, saiu e voltou para o Santos", "O Pelé jogou pelo Santos.", "O Santos foi rebaixado para a série B em 2024");

    if ($et == 1)
    {
        $rand = $fc[rand(0, count($fc)-1)];
    }
    else if ($et == 2)
    {
        $rand = $fp[rand(0, count($fp)-1)];
    }
    else if ($et == 3)
    {
        $rand = $fsp[rand(0, count($fsp)-1)];
    }
    else
    {
        $rand = $fs[rand(0, count($fs)-1)];
    }

    echo "A frase gerada com o tema foi: ".$rand; 
?>