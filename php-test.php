<html> <body> <?php 


//PayPal TLS1.2 Update
//https://github.com/curl/curl/issues/700
//https://www.paypal.com/au/webapps/mpp/tls-http-upgrade
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, "https://tlstest.paypal.com/");
var_dump(curl_exec($ch));
var_dump(curl_error($ch));

// Secondardy test below
/*
$ch = curl_init('https://www.howsmyssl.com/a/check');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);

$json = json_decode($data);
echo $json->tls_version;
*/



//$curl_info = curl_version();
//echo $curl_info['ssl_version'];



?> </body> </html> 

