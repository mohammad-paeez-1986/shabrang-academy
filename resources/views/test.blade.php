<?php

$curl = curl_init();
$params =	[
	'merchant_id' => '7e2fea35-a701-4461-8e18-ce40636b1f6d',
	'amount' => 1000, 'description' => 'asdasdas', 'callback_url' => 'https://shabrangacademy.ir/verify'
];
$fields_string = http_build_query($params);

curl_setopt($curl, CURLOPT_URL, 'https://api.zarinpal.com/pg/v4/payment/request.json');
curl_setopt($curl, CURLOPT_POST, TRUE);
curl_setopt($curl, CURLOPT_POSTFIELDS, $fields_string);

$data = curl_exec($curl);
print_r($data);

curl_close($curl);
