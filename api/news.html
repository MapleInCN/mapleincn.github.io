<?php
$site = "https://www.chinanews.com.cn/rss/".$_GET["s"].".xml";
$data = get_sitemeta($site);
$data = str_replace(array("</pubDate></item><item><title>"),"\\"."n"."\\"."n",$data);
$data = str_replace(array("</link><description></description><pubDate>"),"\\"."n",$data);
$data = str_replace(array("</title><link>","</link><description>","</description><pubDate>","</pubDate></item>"),"\\"."n",$data);
$data = str_replace("</","",$data);
echo $data;

function get_sitemeta($url) {
     $data = file_get_contents($url);
     $data = str_replace(array("\r\n","\r","\n"),"",$data);
     if (!empty($data)) {
          preg_match('/language><item><title>([\w\W]*?)pubDate></si', $data, $matches); 
     }
     return $matches[1];
}