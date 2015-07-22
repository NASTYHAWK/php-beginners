<?php
$search_index = array_search('Search me', $array);
//printc($search_index);
if($search_index !== false) {
        $task = 'Task Array Search: index is ';
	printc($task.$search_index);
} else {
        $task1 = 'Task Array Search: ';
	$notfound = 'index not found';
	printc($task1.$notfound);
}
?>
