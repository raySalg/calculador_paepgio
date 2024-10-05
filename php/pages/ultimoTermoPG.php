<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Ultimo Termo de PG</title>
</head>
<body>

<?php
    include_once("../include/function.php");
?>

    <form method='POST'>
        
        <a href="../../index.php"> <i class="fa fa-arrow-left" aria-hidden="true"> Voltar </i> </a>

        <h2> Insira os termos </h2> 
        <p>Posição Ultimo Termo (N):  </p> <input type='number' name='N' value='N' require> <br> 
        <p>Razão (r):</p> <input type='number' name='r' value='r' require> <br>
        <p>Valor primeiro termo (a1): </p> <input type='number' name='a1' value='a1' require> <br> 
        <input class="btn-enviar" name="enviar" type="submit" value="Calcular"/>
        
<?php
 
    if(isset($_POST['enviar'])){
            $valores = array (
                $_POST['N'],
                $_POST['r'],
                $_POST['a1']
            );

            ultimoTermoPG($valores[0], $valores[1], $valores[2]);
        
    }
    
?>
</form>

</body>
</html>
