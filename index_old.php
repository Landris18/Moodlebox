<form name = "forma" method="POST">
<button name = "tuer"> Shutdown </button>
</form>

<?php

if (isset($_POST['tuer'])){
	$out = shell_exec('python3 script.py');
	echo $out;
}

?>
