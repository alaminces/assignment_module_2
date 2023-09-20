<?php 

/**
 * Task 1: Looping with Increment using a Function (Even numbers)
 * Solution :
 */

 function displayEvenNumbers($start,$end,$step) {
  for ( $i = ++$start; $i <= $end; $i += $step ) {
    echo $i." ";
  }
}

displayEvenNumbers(1,20,2);

echo "\n\n";


/**
 * Task 2 : Skip Multiples of 5
 * Solution :
 */

for ( $i=1; $i<=50; $i++ ) {
  if ($i % 5 == 0) {
    continue;
  }
  echo $i." ";
}

echo PHP_EOL;
echo PHP_EOL;



/**
 * Task 3 : Break on Condition (Fibonnaci Series)
 * Solution : 
 */

$first = 0;
$second = 1; 
$next = 1;

for ($i=0; $i<10; $i++) {
  if ($first > 100 ) {
    break;
  }
  echo $first." ";
  $second = $next;
  $next = $first + $second;
  $first = $second;
}

echo PHP_EOL;
echo PHP_EOL;


/**
 * Task 4: Fibonacci Series printing using a Function
 * Solution: 
 */

function printFibonacciSeries($number) {
  $first = 0;
  $second = 1; 
  $next = 1;
  for ($i=0; $i < $number; $i++) {
    echo $first." ";
    $second = $next;
    $next = $first + $second;
    $first = $second;
  }
}
printFibonacciSeries(15);




