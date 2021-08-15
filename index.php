<html>
<body>
<pre>
<?php
	$files = scandir('.');
	for ($i = 0; $i < count($files); $i++) {
		if ($files[$i] != '.' && $files[$i] != '..' && $files[$i] != 'index.php') {
			if (is_dir($files[$i])) {
				$files[$i] = $files[$i].'/';
			}
			echo "<a href=\"".$files[$i]."\">".$files[$i]."</a>\n";
		}
	}
?>
</pre>
</body>
</html>
