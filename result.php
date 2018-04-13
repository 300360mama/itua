<?php





// QUESTION: 1
// Написать функцию на php7, принимающую 2 параметра с указанием типа данных:
// массив и целое число. Массив передается по ссылке. Параметр массива по-умолчанию: пустой массив.
function job( int $int , array &$array = []){

    echo "<pre>";
    $array[] = 3;
    //print_r($array);
    echo "</pre>";
}

$arr = [1,2];
job(1 , $arr);



// QUESTION: 2
// $a = 10.67; $b = 31.21; echo intval ( $a + $b ); Что будет выведено на экране?

$a = 10.67;
$b = 31.21;
//echo intval ( $a + $b ); //result 41

// QUESTION: 3
// $url = "/crm/deal/#deal_id#/";
// $deal_id = 387;
// Задача: переадресовать с помощью PHP header пользователя на страницу, указанную в шаблоне url.

$url = "/crm/deal/#deal_id#/";
$deal_id = 387;
$resUrl = preg_replace('~#[A-Za-z_]+#~', $deal_id, $url);
//header("Location: $resUrl"); //delete comment

// QUESTION: 4
// Написать 5 функций по работе с массивами, объяснить принцип работы.
//
// Variant 1
// $arr [array]
// return max integer value of array;
function maxValue(array $arr){
    $max = $arr[0];

    if(count($arr)==1) return (int) $max;

    foreach ($arr as $value) {
        $int = (int) $value;
        if( $int> $max) $max = $int;
    }

    return $max;
}

//Variant 2
//
//function search needle in array
//$arr [array]
//$needle [string || number]
//
//return false or array result

function searchValue(array $arr, $needle){

    $res = [];


    foreach ($arr as $key=>$value) {
        if($value === $needle) $res[$key] = $value;
    }

    if(count($res)>0) return $res;
    return false;
}

//print_r(searchString([1,'sss',3], 'sss'));

//Variant 3
//$arr [array]
//return reverse array

function arrayReverse(array $arr){
    $quantity = count($arr);
    $res = [];
    for ($i=$quantity-1; $i >=0 ; $i--) {
        $res[] = $arr[$i];
    }

    return $res;

}

//Variant 4
//$arr [array]
//
//return size of array

function countSize(array $arr){
    $size = 0;

    foreach ($arr as $value) {
        $size++;
    }

    return $size;

}


//Variant 5
//$arr [array]
//return random value of array

function getRandomVal(array $arr){

    $size = count($arr);

    $res = rand(0, $size-1);
    return $arr[$res];


}

//print_r(getRandomVal([1,2,3,4,5,23,34,534,342,234]));
// echo "<br>";
// print_r(getRandomVal([1,2,3,4,5,234,234234,545,646,64]));
// echo "<br>";
// QUESTION: 5
//Написать цикл, выводящий на экран каждый год до текущего, начиная от года вашего рождения.

$myDay = 1988;
$today = date('Y',time());

for($i = $myDay; $i<=$today; $i++){
    echo $myDay++."<br>";

}
