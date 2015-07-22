<?php
function printc($data)
{
        if(is_array($data)) {
                print_r($data);
        } else {
                print($data."\n");
        }
}
?>
