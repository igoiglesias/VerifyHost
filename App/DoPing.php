<?php
header("Content-type: text/html;charset=utf-8");
function testa_ping($ip, $n)
{

    exec('ping -n ' . $n . " " . $ip, $saida, $retorno);

    if (!$retorno) {
        
        $teste->ip = $ip;
        $teste->status = "online";
        $teste->saida = $saida[$n + 4];
    } else {
       
        $teste->ip = $ip;
        $teste->status = "offline";
        $teste->saida = null;
    }

    return json_encode($teste);
}
