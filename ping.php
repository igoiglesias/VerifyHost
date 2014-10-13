<?php
    header("Content-type: text/html;charset=utf-8");
    function testa_ping($ip,$n){



           exec('ping -c'.$n." ".$ip, $saida, $retorno);
    
           if (!$retorno) {
               echo ('<div class="alert alert-success" role="alert">');
               echo ('O IP: '.$ip.' está online!</br></br>');
               echo ($saida[$n+3]."</br>");
               echo ($saida[$n+4]."</br>");
               echo ('</div>');
               #$saida1=$saida[1];
               #echo (str_word_count($saida[1],1));
            #   foreach ($saida as $i => $j) {
            #       echo($saida[$i]."<br>");
            #       $j=$j+1;
            #  }
           } else {
               echo ('<div class="alert alert-danger" role="alert">');
               print 'O IP: '.$ip.' NÃO está online ou o host não pode ser encontrado!';
               echo ('</div>');
           }
    
    }
            

?>
<html>
  
  <head>
    <meta charset="utf-8">
    <title>Ferramentas - Ping</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ferramenta para teste de rede">
    <meta name="author" content="Igor Iglesias">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"
    rel="stylesheet">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </head>
  
  <body draggable="true">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center">Ping</h1>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4 text-center"></div>
        <div class="col-md-4">
          <form role="form" style="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group" >
              <label class="control-label">IP/Site</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="8.8.8.8"
              type="text" name="ip">
            </div>
            <div class="form-group">
              <label class="control-label">Qtd</label>
              <input class="form-control" id="exampleInputPassword1" placeholder="5"
              type="text" name="n">
            </div>
            <button type="submit" class="btn btn-lg btn-primary">Pingar</button>
            
          </form>
          <?php
                if( $_SERVER["REQUEST_METHOD"] == "POST"){
                    $n=$_POST['n'];
                    $ip=$_POST['ip'];
                    if(empty($n)){
                        $n="5";
                    }
                    if(empty($ip)){
                        $ip="8.8.8.8";
                    }   

                    testa_ping($ip,$n);
                    
                }

            ?>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
  </body>

</html>



