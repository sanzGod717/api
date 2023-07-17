<style>
h2 {
  font-family: "Nome da Fonte", courier,arial,helvetica;
        font-size: 48px;
        color: #ffffff;
}
hr {
  border: none;
  border-top: 2px solid white;
  background-color: transparent;
  height: 1px;
}
body {
  zoom: 1.8; 
}

</style>
<body>
<?php 
$url = "https://www.canalti.com.br/api/pokemons.json"; 
$ci = curl_init($url);
curl_setopt($ci,CURLOPT_SSL_VERIFYPEER , false);
curl_setopt($ci,CURLOPT_RETURNTRANSFER, true);
$pokemons = json_decode(curl_exec($ci));
//var_dump($pokemons);


if (count($pokemons->pokemon) == 151)
{

      foreach($pokemons->pokemon as $Pokemon) {

      
      ?>
         <center>
           <h2><?=$Pokemon->name?></h2>
  <figure class="image is-128x128">
 <img src="<?=$Pokemon->img?>">
              
                
           <br></center>
          <?php
          if(is_array($Pokemon->next_evolution)){
            echo "<center><h1>a próxima evolução: </h1>";
            foreach ($Pokemon->next_evolution as $ev){
              echo $ev->name . "    ";
            }
          }
          else {
            echo "<i>não tem Evolução</i>";
          } ?>   <hr> </body><?php
      }
}