<?php
$word = $_GET["s"];
$from = $_GET["from"];
$to = $_GET["to"];
$appid = '20200226000388929'; //你自己的Appid
$salt = '1435660288'; //随机数
$params = array(
    'appid' => $appid, //你的appid
    'from' => $from, 
    'to' => $to,
    'salt' => '1435660288',//10位随机数字，你也可以用10位时间戳
    'q' => $word, 
);
$seckey = 'ihNu5mCvjofNO7rE0rAE'; //你的密钥
ksort($params);
$querySign = '';  
$params['sign'] = md5($appid.$word.$salt.$seckey);
foreach ($params as $key => $value) {
    $querySign .= $key . '=' . $value . '&';
    //echo $querySign."<br/>";
}
$url = 'http://fanyi-api.baidu.com/api/trans/vip/translate?';
//$url = "$url$querySign";
$header = array(
    'Content-Type' => 'application/x-www-form-urlencoded',
       );
$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$querySign);
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result=curl_exec($ch);
curl_close($ch);
$callRet = json_decode($result, true);
$string = utf8_decode($string);
//print_R($callRet);

$content = result($result);
echo json_decode('"'.$content.'"');

function result($result) {
     if (!empty($result)) {
          preg_match('/dst":"([\w\W]*?)"/si', $result, $matches);
     }
     if (empty($matches[1])) {
          preg_match("/dst]\s+=>\s+([\w\W]*?)\s+)\s+)\s+)/si", $result, $matches);              
     }
     return $matches[1];
}