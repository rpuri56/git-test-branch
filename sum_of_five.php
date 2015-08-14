<?php
// array  (0,5,8,4,1,3,2,-2,7,-2,0);
//$arr = $tempArr = [0, 5, 8, 4, 1, 3, 2, -2, 7, -2, 0];
$arr = $tempArr = [ 0, 5, 8, 4, 1, -2, 7 ];
/*
0,5
0,8
0,4
0,1
5,8
5,4
5,1
8,4
8,1
4,1
*/

for( $i=0; $i < count( $arr ); $i++ ) {
	for( $j=$i+1; $j < count($arr); $j++ ) {
		 $sum = $arr[$i] + $arr[$j];
		if( $sum == 5 ) {					
			$recordData[] = array( $arr[$i], $arr[$j],  'sum' => $sum );						
		}
	}	
}
echo "<pre>";
print_r($arr);
print_r($recordData);
//print_r( $recordData );
?>