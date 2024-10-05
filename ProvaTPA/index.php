<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <title>PA e PG</title>
</head>
<body>

    <form method="POST">
      <h1>Calculadora Online</h1>
      <h2>Progressão Aritmética e Geométrica</h2>

      <ul>
         <li><p>P.A</p> <input type="radio" name="calculo" value="PA"/></li>
         <li><p>P.G</p> <input type="radio" name="calculo" value="PG"/></li>
      </ul>

      <br> <p>Quero descobrir:</p> <br>

      <select name="metodo">
        <option value="somaTermos">Soma dos Termos</option>
        <option value="primeiroTermo">Primeiro Termo</option>
        <option value="ultimoTermo">Ultimo Termo</option>
      </select>

      <br>

      <input class="btn-enviar" name="enviar" type="submit" value="Calcular"/>

<?php

    if(isset($_POST['enviar'])){
      if (!isset($_POST['calculo']) || !isset($_POST['metodo'])){
         echo "<p>Selecione todos os campos acima</p>";
      }
      else{
        $calculo = $_POST['calculo'];
        $metodo = $_POST['metodo'];

        if($calculo == "PA" && $metodo == "somaTermos"){
            header("location: php/pages/somaTermosPA.php");
        }
        elseif($calculo == "PA" && $metodo == "primeiroTermo"){
            header("location: php/pages/primeiroTermoPA.php");
        }
        elseif($calculo == "PA" && $metodo == "ultimoTermo"){
            header("location: php/pages/ultimoTermoPA.php");
        }
        elseif($calculo == "PG" && $metodo == "somaTermos"){
            header("location: php/pages/somaTermosPG.php");
        }
        elseif($calculo == "PG" && $metodo == "primeiroTermo"){
            header("location: php/pages/primeiroTermoPG.php");
        }
        elseif($calculo == "PG" && $metodo == "ultimoTermo"){
            header("location: php/pages/ultimoTermoPG.php.php");
        }

      }

    }
?>

</form>  


</body>
</html>