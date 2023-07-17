<?php

$url = 'https://randomuser.me/api';
$curl = curl_init($url);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resul = json_decode(curl_exec($curl));

//print_r($resul);
//echo "<br> <hr> ";

foreach ($resul->results as $resulta){
  print_r($resulta);
  echo "<br><hr>";
 $name = $resulta->name;
 $first = $name->first;
 $last = $name->last;
 
 $gen = $resulta->gender;
 
 $loca = $resulta->location->street;
 $num = $loca->number;
 $rua = $loca->name;
 
 
 $city = $resulta->location->city;
 $stat = $resulta->location->state;
 $cotry = $resulta->location->country;
 $postc = $resulta->location->postcode;
 
 $email = $resulta->email;
 $pass = $resulta->login->password;
 
 
 $pic = $resulta->picture;
 $f1 = $pic->thumbnail;
 $f2 = $pic->medium;
 $f3 = $pic->large;
 
$age = $resulta->registered->age;

}


echo "My name is: " .$first . " ". $last."<br>";
echo "i have ". $age ." old <br>";
echo "My genre is: ". $gen."<br>";

echo "my road is: " .$rua .", and my number from home is: ". $num. "<br>";

echo "email: ". $email ."<br>". "senha: ".$pass."<br>";
    
echo "<img src=$f1>";
echo "<img src=$f2>";
echo "<img src=$f3>";
