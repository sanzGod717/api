<?php
$url = "https://animechan.xyz/api/random";
$curl = curl_init($url);

curl_setopt($curl,CURLOPT_RETURNTRANSFER, true );
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$data = json_decode(curl_exec($curl));

  $anime = $data->anime;
  $perso = $data->character;
  
  $frase = $data->quote;
  
  echo "<center>";
  
  echo " Anime : ".$anime;
  echo " Person: ".$perso;
  echo "<pre>";
  echo " Quote :  <br>".$frase;
  echo "</pre>";
  
  
  
