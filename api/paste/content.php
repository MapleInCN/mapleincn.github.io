<title>Content</title>
<?php echo nl2br(json_decode(file_get_contents("content.txt"))); ?>
<br><br><a href="/api/paste">Back</a>