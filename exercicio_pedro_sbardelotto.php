<?php
echo "<hr>";
echo "<h1> FOR <h1>";
echo "<hr>";
for($i = 1;$i <= 6; $i++) {
    echo "<h{$i}> Titulo {$i} <h{$i}>";
}
echo "<hr>";
echo "<h1> WHILE <h1>";
echo "<hr>";
$j = 0;
while($j < 6){
    $j += 1;
    echo "<h{$j}> Titulo {$j} <h{$j}>";
}


?>