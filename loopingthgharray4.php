<?php
$meal= array('breakfast '=> 'walnut bun',
'launch => cashew nuts and white mushroom',
'snack' => 'dried mulberries',
'diiner' => 'rice');
foreach($meal as $key => $value){
    echo "key is " . $key . "and value is " . $value;
    echo '<br/>';
}
?>