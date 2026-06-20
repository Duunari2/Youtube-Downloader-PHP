<html>
<p>Test</p>
</html>
<?php
echo '<font color="red" size="32">Check the last line of page-<br> and use video name inside tags and replace the url yt-dlp.php with the video name: </font>';
echo "<br><br>";
$linkki =  $_POST["linkki"];
system('proxychains4 yt-dlp '.$linkki);
echo "<br>";
echo "Downloaded the video with proxy connenction...";
echo "<br>";

 ?>
