<?php 
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://merojob.com/sales-and-marketing-officer-144/");
	curl_exec($ch);
	curl_close($ch);

	$chs = curl_init();
	curl_setopt($chs, CURLOPT_URL, "https://merojob.com/");
	curl_exec($chs);
	curl_close($chs);

 ?>