<?php 
    include_once("./calculadora.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculadora de daño</title>
</head>
<body>
    <h2>Calculadora de daño</h2>
    <form action="{ completar con el action adecuado }" method="{ completar con el método adecuado }">
        <!-- Completar con los elementos del form-->

        <br> <p>Vida Actual: <input type="number" name="vida"></p> <br>

        <p>Seleccione el Tipo de Ataque:
            <select name="ataque">

                <option value="golpe">Golpe</option>
                <option value="patada">Patada</option>
                <option value="espadazo">Espadazo</option>

            </select>

        </p> <br>
        
        <p>Seleccione el Tipo de Poción: </p> <br>

        <p> <input type="radio" name="pocion" value="1">Poción de Veneno</p> <br>
        <p> <input type="radio" name="pocion" value="2">Poción de Fuego</p> <br>
        <p> <input type="radio" name="pocion" value="3">Poción de Adormecimiento</p> <br>

        <p> <input type="submit" values = "Calcular"> </p> <br>

    </form>
    <?php
        if(isset($_POST["ataque"])){
            // Completar con el código para mostrar el resultado

            echo ("<h2> La cantidad de vida restante es: ". calcularvida ($_POST ["ataque"], $_POST ["pocion"], $_POST ["vida"]) . "</h2>");
        }
    ?>
</body>
</html>