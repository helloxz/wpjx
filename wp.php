<?php
	$wp_url = $_GET['wp_url'];
	$apikey = 'b766d17dbe3554b09e3e7312552c907f';
	$zg_url = 'http://zg.yangsifa.com/wp/?url='.$wp_url.'&apikey='.$apikey;
	#echo $zg_url;
	
	#$content = file_get_contents($zg_url);
	#echo $content;

	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,$zg_url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch,CURLOPT_HEADER,0);

	$content = curl_exec($ch);

	curl_close($ch);
	echo $content;
?>