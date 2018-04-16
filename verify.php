<?php
$access_token = 'tuuA+7sz8iakcABl20lSbaYVqmUU3gxCKu3k9NDGmmkrRMeGRnLK4uL/5A6HdNVddNNecNmt7c96cl6Z6F3AVgm45vyB/kcEdrnn4jwT0t5COXzVCAvEAXItfS40MA1agpa+EmoR9cUaemWUtEvrGwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;