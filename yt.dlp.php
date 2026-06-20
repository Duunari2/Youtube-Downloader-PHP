<?php

$linkki =  $_POST["linkki"];
system('yt-dlp '.$linkki);
echo "Downloading to the current directory...";


 ?>
