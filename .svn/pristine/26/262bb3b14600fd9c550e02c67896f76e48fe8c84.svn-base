<?php
//step1
$url='https://api.petfbi.org/dev/reports?start_date=2018-02-01 00:00:00&end_date=2018-03-01 23:59:59&latitude=40&longitude=-83&distance=200';
$cSession = curl_init($url); 

//The JSON data.
/*$jsonData = '{
   
        "start_date":"2018-02-01 00:00:00",
		"end_date":"2018-03-01 23:59:59",
		"latitude":"40",
		"longitude":"-83",
		"distance":"200"       
}';
$jsonDataEncoded = $jsonData;
curl_setopt($cSession, CURLOPT_POSTFIELDS, $jsonDataEncoded);*/

//step2
//curl_setopt($cSession,CURLOPT_URL,"http://www.google.com/search?q=curl");
//curl_setopt($cSession,CURLOPT_URL,"https://api.petfbi.org/dev/reports?start_date=2018-02-01 00:00:00&end_date=2018-03-01 23:59:59&latitude=40&longitude=-83&distance=200");
curl_setopt($cSession,CURLOPT_RETURNTRANSFER,1);
curl_setopt($cSession,CURLOPT_HEADER, true); 
curl_setopt($cSession, CURLOPT_HTTPHEADER, array("Authorization:Doobert"));
 
//step3
$result=curl_exec($cSession);
//step4
curl_close($cSession);
//step5
echo $result;
?>