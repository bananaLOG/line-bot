<?php
$access_token = 'GC/a4Ha8qxZjmdTLy0VKJJu7NwVZAQupdKl0Q52wDIq0k3aaZVkE1PRWcaZU6cqmtidovysDQr1pfxMiIkJNGR3ttB5jQRggSjMYUCMHFq2LPtIR+GxMlv6gRpN+ZRfMmndMyNgUzRycYgUKvE2TJwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;