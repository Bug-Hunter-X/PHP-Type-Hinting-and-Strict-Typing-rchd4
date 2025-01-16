<?php
declare(strict_types=1);

function foo(int $a, int $b): int {
  return $a + $b;
}

//This will now throw a TypeError because we have strict types enabled
$result = foo(1, '2'); 