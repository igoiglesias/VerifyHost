<?php
	header("Content-type: text/html;charset=utf-8");

    $n=$_GET['n'];
	$ip=$_GET['ip'];
	
    if(empty($n)){
        $n="5";
    }
    if(empty($ip)){
        $ip="8.8.8.8";
    }   

    exec('ping -c'.$n." ".$ip, $saida, $retorno);
 
    if (!$retorno) {
        print 'A Máquina está online!</br></br>';
        #$saida1=$saida[1];
	    #echo (str_word_count($saida[1],1));
    	foreach ($saida as $i => $j) {
    		echo($saida[$i]."<br>");
    		$j=$j+1;
    	}
    } else {
        print 'A Máquina NÃO está online ou o host não pode ser encontrado!';
    }
?>
