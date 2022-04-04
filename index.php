<?php

require_once 'vendor/autoload.php';

$curr = new \Currency\Currency('uah');
$curr2 = new \Currency\Currency('uah');

$b = new \Money\Money(21, new \Currency\Currency('UAH'));
$a = new \Money\Money(20, new \Currency\Currency('uah'));
$b->equals($a);
$result = $a->add($b);