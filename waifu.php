<?php 
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://api.waifu.im/search?included_tags=maid&height=>=2000",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	
	
]);

$response = json_decode(curl_exec($curl),true);



$inv = $response["images"][0];

$url = $inv['url'];
$width = $inv['width'];
$height = $inv['height'];
$color = $inv['dominant_color'];

if (isset($inv) && is_array($inv) && array_key_exists('artist', $inv) && is_array($inv['artist']) && array_key_exists('name', $inv['artist'])) {
   
    $art = $inv['artist']['name'];
}
?>
<!DOCTYPE html>
<html>
<head>
  <style>
    .waifu {
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    }
    .rodape {
      background-color: black;
      color: white;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      font-size: 25px;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding: 10px;
      text-align: center;
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      height: 8em;
      display: flex;
      flex-direction: column;
      justify-content: space-around;
    }

    .autor {
      font-family: 'Pacifico', cursive;
      font-size: 24px;
    }
  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Waifus</title>
</head>
<body style="background-color: <?php echo $color;?>;">
 
 <img class="waifu" 
 src="<?php echo $url; ?>"
 width="<?php echo $width;?>"
 height="<?php echo $height;?>"
 >
 
 <footer class="rodape">
    <p>developed by: sanzGod717 <br>
      work artist: <br> <span class="autor">
      <?php 
    if($art){
      echo $art;
    }else {
      echo "unknown author";
    }
    ?></span></p>
  </footer>
</body>
</html>