<?php
$original = array( 'a', 'b', 'c', 'd', 'e' );
$inserted = array( 'x' ); // not necessarily an array, see manual quote

array_splice( $original, 3, 0, $inserted );
print_r($original);


$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange");
array_splice($a1,0,2,$a2);
print_r($a1);

$z = ['me','you', 'he'];
array_unshift($z, 'she', 'it');
print_r($z);
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
print_r($c);
?>