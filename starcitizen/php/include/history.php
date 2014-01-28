<?php
// Declare basic variables
$j = 0;				// Counter for while loops
$height = 210;		// Height of blocks in pixels, incl. padding and margins
$cal = 100;			// Calibration value

// Reads database and stores the years in an array as integers
while($init = mysql_fetch_array($resultYears)) {
	$j++;
	$years[$j] = intval(substr($init['Date'],0,4));
}

$total = $j; $j = 0;
$range = $years[1] - $years[$total];

// Calculates the desired positions for the dots
for ($i = 1; $i <= $total; $i++){
	$dotPos[$i] = intval(($years[1] - $years[$i]) / $range * $total * $cal);
	if (($i > 1) && ($dotPos[$i] - $dotPos[$i-1] < 15) && ($dotPos[$i] - $dotPos[$i-1] != 0)) {
		$dotPos[$i] += 15 - ($dotPos[$i] - $dotPos[$i-1]);
	}
}

// Checks if the third block would overlap the first block. If so, pushes all blocks down
// in order to position the first arrow at the bottom of the first block.
if ($dotPos[3] < $height) {
	for ($i = 1; $i <= $total; $i++){
		$dotPos[$i] += $height - 40;
	}
}

$top[1] = 0;

//if ($dotPos[2] > 40) {
$top[2] = $top[1] + ($dotPos[2] - $dotPos[1]);
//} else {$top[2] = 40;}

// Calculates the correct positions and margins (totalling the desired position)
for ($i = 1; $i <= $total; $i++){
	if ($i > 2){$top[$i] = $top[$i-2] + $height;}
	if ($dotPos[$i] - $top[$i] > $height) {
		$top[$i] = $dotPos[$i] - $height;
	}
	$topMargin[$i] = $dotPos[$i] - $top[$i];
	if ($topMargin[$i] > $height - 40) {$topMargin[$i] = $height - 40;}
	if ($topMargin[$i] < 0) {$topMargin[$i] = 0;}
	if ($dotPos[$i+2] - $dotPos[$i] < $height) {
		
	}
}

if ($total * $cal + $topMargin[1] < round($total/2) * $height - 30) {$histHeight = round($total/2) * $height;}
else {$histHeight = $total * $cal + $topMargin[1];}




?>