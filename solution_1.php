<?php
function result($a, $b) {
	if ($a >= 0 && $b >= 0)   { return ($a > $b) ? ($a - $b) : ($b - $a); } 
	elseif ($a < 0 && $b < 0) { return ($a * $b); } 
	else                      { return ($a + $b); }
}
echo result(3, 5);