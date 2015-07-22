<?php
$search_index = array_search('I\'m going to become PHP expert!', $array);
if($search_index !== false) {
	$rplc = 'software';
	$oldvlu = 'PHP';
	$result = $array[$search_index];
	$new = str_replace($oldvlu,$rplc,$result);
	printc($new);	
//	printc
}
?>
