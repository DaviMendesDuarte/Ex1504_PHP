<?php
    $cor = array("Azul", "Vermelho", "Verde", "Amarelo", "Roxo");
    $rand = $cor[rand(0, count($cor)-1)];

    echo "A cor escolhida foi: ".$rand; 

    if ($rand == "Azul")
    {
        echo "<br><br> Os céus sãos azuis"; 
    }
    else if ($rand == "Vermelho")
    {
        echo "<br><br> O sangue é vermelho"; 
    }
    else if ($rand == "Verde")
    {
        echo "<br><br> A natureza é verde"; 
    }
    else if ($rand == "Amarelo")
    {
        echo "<br><br> O sol é amarelo, para nós."; 
    }
    else
    {
        echo "<br><br> É raro algo roxo na natureza."; 
    }
?>