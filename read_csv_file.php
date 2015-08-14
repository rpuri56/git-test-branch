<?php
$filename = "test.txt";
$handle = fopen( $filename, "rb" );

$i=1;
echo '<pre>';
while ( ( $line = fgets($handle) ) !== false) {	
	 
	if( $i == 1 || $i % 3 == 0 ) {
		echo trim($line);
	 	$arr = explode(',', trim($line) ); 
	 	print_r($arr);
	}
	$i++;
}

?> 