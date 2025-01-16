function foo(int $a, int $b): int {
  return $a + $b;
}

$result = foo(1, '2'); //This will cause a TypeError

//The issue here is that PHP is using type hinting in a way that is not strictly enforced
//It's using the type hint to inform the programmer of the intended types
//In this case PHP is not giving an error and will simply coerce the string to an integer
//If the caller does not pass in the correct type this can lead to unexpected results
//The correct approach is to use strict typing

function foo(int $a, int $b): int {
  return $a + $b;
}

$result = foo(1, '2');  //This will throw a TypeError