<?php

function saque($pontuacao) {
    list($pontos_a, $pontos_b) = explode(":", $pontuacao);
   
    if ($pontos_a >= 21 && $pontos_a - $pontos_b >= 2) {
        return "jogador a";
    } elseif ($pontos_b >= 21 && $pontos_b - $pontos_a >= 2) {
        return "jogador b";
    } elseif ($pontos_a == 20 && $pontos_b == 20) {
        if (($pontos_a + $pontos_b) % 4 == 0) {
            return "jogador a";
        } else {
            return "jogador b";
        }
    } else {
        $sacadas_total = $pontos_a + $pontos_b;

        if (($sacadas_total % 10) < 5) {
            return "jogador a";
        } else {
            return "jogador b";
        }
    }
}

echo saque(22,23);

?>