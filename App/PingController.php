<?php
header('Content-Type: application/json');
require_once "DoPing.php";
$data = file_get_contents('php://input');
$data = json_decode($data);

if (is_object($data)) {
  $ip = $data->ip;
  $n = $data->n;

  $saida = testa_ping($ip, $n);

  echo json_encode($saida);
} else {

  $saida = new \stdClass();
  $saida->result = 'null';
  echo json_encode($saida);
}
