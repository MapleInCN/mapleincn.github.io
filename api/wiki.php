<?php
$site = "https://baike.baidu.com/item/".$_GET["s"];
$content = get_sitemeta($site);
echo $content;

function get_sitemeta($url) {
     $data = file_get_contents($url);
     if (!empty($data)) {
          #Description
          preg_match('/<META\s+name="description"\s+content="([\w\W]*?)"/si', $data, $matches);         
          if (empty($matches[1])) {
               preg_match("/<META\s+name='description'\s+content='([\w\W]*?)'/si", $data, $matches);
          }
     }
     return $matches[1];
}