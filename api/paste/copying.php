<title>Copying...</title>
<?php
if ($_POST["s"]=="") {
echo "NO BLANK!!!";
}else{
$txt = fopen("content.txt", "w");
fwrite($txt, json_encode($_POST["s"]));
fclose($txt);
echo "Succeed!    ";
}
?>
<br><a href="/api/paste">Back</a>