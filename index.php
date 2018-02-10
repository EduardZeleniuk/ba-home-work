<?php 

$str = 'Дата 28.02.2018 является последним днем в месяце, а дато 07.02.2018 не является';
$mask = "/(\d{2}[-\.]){2}\d{4}/i";
$matches = array();

if(preg_match_all($mask, $str, $matches) !== 0){

	foreach ($matches[0] as $matche) {
		$date = preg_replace('/\./', '/', $matche); 
			echo '<pre>';
			var_dump($date);
			echo '</pre>';
		}	
}

$str2  = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
$mask2 = "/a|e|i|o|u/i";

$array_word = explode(" ", $str2);

foreach ($array_word as $word) {
	if(preg_match_all($mask2, $word, $letter) !== 0){
		if(count($letter[0]) % 2 != 0)
			$str2 = str_replace($word." ", "", $str2);
	}
}	

echo '<pre>';
var_dump($str2);
echo '</pre>';















// $full_name = '   Ivanov   Ivan 	 Ivanovich     ';
// $full_name = trim($full_name);

// $full_name = preg_replace('/\s+/', ' ', $full_name); 


// $array_full_name = explode(" ", $full_name);


// if(!empty($array_full_name[1]))
// $name1 = substr($array_full_name[1], 0, 1). ". ";

// if(!empty($array_full_name[2]))
// $name2 = substr($array_full_name[2], 0, 1). ".";


// $array_full_name = $array_full_name[0] . " " . $name1 . $name2;

// var_dump($array_full_name);
// exit;
?>