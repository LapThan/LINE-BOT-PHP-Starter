<?php
$access_token = 'x1MDblt/TECaEPkgBYz9CsBOBvN+HnNbXXc+/nkEWjmWjUI2QrF6uLxP8uZ/zwROGL+g5BZnDRe9E5+DNivsjeHzj5D1aw8NfjGUymSQNQb5SMc3Qo1duBq86q6nYwWF7wjtzXor4oMTZksiz6S7jwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;