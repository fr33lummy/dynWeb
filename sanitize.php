<?php


//voorkome dat speciale karakters gebruikt worde
function escape($string){
	return  htmlentities($string,ENT_QUOTES,'UTF-8');
}

?>
