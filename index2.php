<?php

declare(strict_types=1);
//
//
//$a = 1;
//$c = 3;
//
//function change(int &$b): void
//{
//    $b = 2;
//}
//
//change($a);
//
//echo "$a\n";


//function test(callable $a): callable
//{
//    return $a;
//}
//
//
//$func = function() {
//    return M_PI;
//};
//
//var_dump($func);
//
//var_dump(test($func)());


//class A
//{
//    private $t;
//
//
//    public function getT()
//    {
//        return $this->t;
//    }
//
//    public function magic()
//    {
//        $this->t = 2;
//    }
//}
//
//
//$obj = new A();
//var_dump($obj->getT());
//
//$func2 = function() {
//    $this->t = 2;
//};
//$func2->call($obj);
//
//var_dump($obj->getT());
//
//
//
//
//$a = [1,2,3,3.123,M_2_PI];
//var_dump(array_map('strval', $a));
//
//var_dump(array_map(function($value) {return (string)$value; }, $a));
//
//function mystrval($value)
//{
//    return (string)$value;
//}
//
//var_dump(array_map('mystrval', $a));
//
//
//$s = 'hello, world';
//var_dump(strpos($s, 'hello')); // 0
//var_dump(strpos($s, 'hello') == 0);  // true
//var_dump(strpos($s, 'hello') === 0); // true
//
//var_dump(strpos($s, 'test')); // false
//var_dump(strpos($s, 'test') == 0);   // false
//var_dump(strpos($s, 'test') === 0);  // false
//
//
//
//$f = 3.2; // 3.19999999999999999999999999999999999
//// 3.200000000000000000000000001
//
//
//$a1 = [
//    'one' => 1,
//    'two' => 2,
//    'three' => 3,
//];
//$a2 = [
//    'three' => 5,
//    'four' => 4
//];
//
//var_dump(array_merge($a1, $a2));
//var_dump($a1 + $a2);
//
//
//$s1 = 'hellos';
//$s2 = 'привет';
//
//var_dump(mb_strlen($s1), mb_strlen($s2));
//
//
//echo "-------------------------------------------------------\n\n";
//
//
//
//$a3 = [1,2,3,4,5];
//foreach ($a3 as $i => $item) {
//    $a3[$i] += 1;
//}
//var_dump($item);
//var_dump($a3);
//
//$item = 0;
//
//var_dump($item);
//var_dump($a3);
//
//
echo "-------------------------------------------------------\n\n";


class Product
{
    public $images;
}

$product = new Product();

$product->images = ['v', 'w', 'f'];

var_dump($product);

function getBatchProducts(Product $prod): array
{
    if (count($prod->images) > 1) {
        $batch = [];
        foreach ($prod->images as $image) {
            $newProd = clone $prod;
            $newProd->images = [$image];
            $batch[] = $newProd;
        }
        return $batch;
    }
    return [$prod];
}


var_dump(getBatchProducts($product));

//$a3 = [1,2,3,4,5];
//foreach ($a3 as &$item) {
//    $item += 1;
//}
//unset($item);
//var_dump($item);
//var_dump($a3);
//
//$item = 0;
//
//var_dump($item);
//var_dump($a3);


//$count = 1;
//while (true && $count > 0)
//{
//    if (true) {
//
//    } else {
//        $count--;
//    }
//}


//
//$a = 1;
//
//$b = false;
//if ($a === 1) {
//    $b = true;
//}
//
//
//try {
//
//} catch (ParseError $e) {
//
//} catch (Error $e) {
//
//}