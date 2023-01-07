<?php
$word =strtoupper(str_replace(array('"',"\\u"),'',json_encode($_GET["s"])));
$site = "http://zisea.com/zscontent.asp?uni=".$word;
$data = get_sitemeta($site);
$data = preg_replace('/<a([\w\W]*?)>/','', $data);
$data = str_replace("<br>","\\"."n",$data);
$data = str_replace(array('"',"<a>","</a>",),'',$data);
$data = str_replace(" width=20>","±",$data);
$data = str_replace(array("<img src="), "±img=http://zisea.com/",$data);
echo $data;

function get_sitemeta($url) {
     $data = file_get_contents($url);
     $data = str_replace(array("\r\n","\r","\n"),"",$data);
     if (!empty($data)) {
          preg_match('/left\s+><font\s+size=3>([\w\W]*?)<\/font>/si', $data, $matches); 
     }
     return $matches[1];
}