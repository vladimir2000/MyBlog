			<?php
	$num = 3;
	echo $num;

	$name = 'Volodya';
	echo $name;

	$isFall = true;
	if ($isFall) {
		//echo 'is fall';
	} 
	else {
		echo 'not fall';
	}
	
	$arr = array('Kiril' , 'Damir' , 'Volodya');
	echo $arr[2];	

	obg
	$player = array('hero' => 'megaman' , 'hp' => 100);
	echo $player['hero'];

	$hp = array('html' => 78  , 'css' => 99  , 'js' => 30 , 'php' => 19 );
	echo $hp['html'];
	echo $hp['css'];
	echo $hp['js'];
	echo $hp['php'];

	Задача вывести все числа из массива nambers.
	$numbers = [1, 2, 3, 4, 5];

	for ($i = 0; $i < count($numbers); $i++) { 
		echo $numbers[$i];
	};

	$time = [

		'season' => 'autumn',
		'day' => 'wednesday'

	];

			echo $time['day'];

	function func() 
	{	
		echo 'hello world';
	};

	func() 

	function summ($arg1 , $arg2)
	{
		echo $arg1 + $arg2;
	}

	summ(13345, 23456)

    $numbers = [3, 4, 6, 8, 10, 300] ;

	function summArr($arr)
	{
		for ($i = 0; $i < count($arr); $i++) { 
			$result = $result + $arr[$i];
		}
		echo $result;
	}

	summArr($numbers);
	
	$countpeople($WE)

	function countpeople($WE)
	{
		for ($i=0; $i < ; $i++) { 
			# code...
		}
	}
?>