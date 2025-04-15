<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
</head>
<body>
    <fieldset>
        <legend>Escolhendo um time de futebol</legend>
        Escolha o número de acordo com o time <br> <br>
        1 - Corinthians <br>
        2 - Palmeiras <br>
        3 - São Paulo <br>
        4 - Santos <br>
        <br>
        <form method="post" action="calcular.php">  
            Digite o número escolhido:
            <input type="text" name="et" size="25">
            <br> <br>
            <input type="submit" name="mostrarResultado" value="Mostrar resultado">
        </form>
    </fieldset>
</body>

</html>