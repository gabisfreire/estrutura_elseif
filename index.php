<?php
$velocidade = 30;
 $velocidade = 30;
if ($velocidade >= 41 && $velocidade <= 50){
    echo "O motorista está na velocidade correta.";
} elseif ($velocidade < 40) {
    echo "Atenção! A velocidade está no limite permitido.";
} else {
    echo "Multa! A velocidade ultrapassou o limite permitido.";
}
?>