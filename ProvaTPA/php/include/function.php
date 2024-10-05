<?php
    function primeiroTermoPA($aN, $N, $r){
            $a1 = $aN - ($N - 1) * $r;  
            echo "<p>A resposta é </p>" , " <p class='result'> " , $a1 , "</p>";
    }
    function primeiroTermoPG($aN, $N, $r){
            $a1 =  $aN / pow($r, $N - 1);
            echo "<p>A resposta é </p>" , " <p class='result'> " , $a1 , "</p>";
        }
    function somaTermosPA($a1, $aN, $N){
            $Sn = (($a1 + $aN) * $N ) / 2; 
            echo "<p>A resposta é </p>" , " <p class='result'> " , $Sn , "</p>";
    }
    function somaTermosPG($a1, $r, $N){
            $Sn = ($a1 * (pow($r, $N) -1)) / ($r - 1);
            echo "<p>A resposta é </p>" , " <p class='result'> " ,  $Sn , "</p>";
    }
    function ultimoTermoPA($a1, $r, $N){
            $aN = $a1 + (($N - 1) * $r);
            echo "<p>A resposta é </p> " , " <p class='result'> " , $aN , "</p>";
        }
    function ultimoTermoPG($N, $r, $a1){
            $aN = $a1 * pow($r , ($N - 1)); 
            echo "<p>A resposta é </p> " ,  " <p class='result'> " , $aN , "</p>";
    }
?> 

<script src="https://use.fontawesome.com/62e43a72a9.js"></script>
