<?php
function httpRequest($url){
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($curl);
return $data
;
}


$dato=json_decode(httpRequest("http://127.0.0.1/api.php"),true);
echo "<h1> soy el Cliente de mi API </h1>";
foreach($dato as $k => $v){
echo $k." = " .$v;
echo "<br/> <br/>";
}


?>