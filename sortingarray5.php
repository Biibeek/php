<?php
$meal= array('breakfast '=> 'walnut bun',
'launch => cashew nuts and white mushroom',
'snack' => 'dried mulberries',
'diiner' => 'rice');
echo "before sorting</br>";
print_r($meal);
echo '<br/>';
asort($meal);
echo "after sorting<br>";
print_r($meal);

?>