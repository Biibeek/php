<?php
//using asort.i.e sorting array by element value in descending order
$meal= array('breakfast '=> 'walnut bun',
'launch' => 'cashew nuts and white mushroom',
'snack' => 'dried mulberries',
'dinner' => 'rice');
echo "before sorting</br>";
print_r($meal);
echo '<br/>';
asort($meal);
echo "after sorting<br>";
print_r($meal);
echo '<br>';
echo '<br>';
echo '<br>';

//using ksort i.e sorting an array by keys in ascending order
$meal= array('breakfast '=> 'walnut bun',
'launch' => 'cashew nuts and white mushroom',
'snack' => 'dried mulberries',
'dinner' => 'rice');
echo "before sorting</br>";
print_r($meal);
echo '<br/>';
ksort($meal);
echo "after sorting<br>";
print_r($meal);

?>