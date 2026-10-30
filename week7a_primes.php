<?php
for ($n = 2; $n <= 50; $n++) {
    $ok = 1;
    for ($i = 2; $i * $i <= $n; $i++)
        if ($n % $i == 0) $ok = 0;
    if ($ok) echo "$n , ";
}
?>
