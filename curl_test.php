<?php
$curl=curl_init();
$data='theRegionCode=北京';
curl_setopt($curl, CURLOPT_URL, "http://www.webxml.com.cn/WebServices/WeatherWS.asmx/getSupportCityString");
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/x-www-form-urlencoded;charset=utf-8	","Content-length: ".strlen($data)));
$rtn=curl_exec($curl);
echo $rtn;
echo curl_errno($curl);
if(!curl_errno($curl)){
	echo $rtn;
}
else{
	echo 'Curl error: '.curl_error($curl);
}
curl_close($curl);