<?php
	echo "Hello World<br>";
	
	$number1 = 10;
	$number2 = 3;

	$remainder = $number1%$number2;

	echo $remainder;

	$input = 5432;

	$msg = $input%2 == 0? 'even':'odd';

	echo $msg;

	$output = 2;
	switch ($output) {
		case 0:
			echo 'even';
			break;
		case 1:
			echo 'odd';
			break;
		default:
			echo 'aww that\'s sad';
			break;

	}

	for ($number = 1; $number<=11111; $number = $number*10+$number) {
		echo $number.'<br/>';
	}

	for ($number = 1; $number <= 5; $number++) {
		for ($number2 = 1; $number2 <= $number; $number2++) {
			echo $number;
		} 
		echo '<br/>';
	}

	$fruits = array('a'=>'apple', 'b'=>'banana', 'c'=>'citrus','d'=>'dragonfruit','e'=>'pomegranate');
	$arr = 

	$bigarray = array($fruits, array('asdf','asdfasdfasdf', ';asdfessfasdf'));	

	echo '<br/>';

	foreach($bigarray as $dfg){
		foreach ($dfg as $balyu) {
					echo $balyu."<br>";
		}
	}

	print_r($bigarray);

?>
