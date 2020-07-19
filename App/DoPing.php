<?php

function testa_ping($ip, $n)
{

    exec('ping -n ' . $n . " " . $ip, $saida, $retorno);
    $teste = new \stdClass();
    if (!$retorno) {

        $teste->ip = $ip;
        $teste->status = "online";
        $teste->saida = trim($saida[$n + 4])." ".trim($saida[$n + 5]);
    } else {

        $teste->ip = $ip;
        $teste->status = "offline";
        $teste->saida = "null";
    }

    return $teste;
}
