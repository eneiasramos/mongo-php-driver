--TEST--
BSON BSON\UTCDateTime serialization (unserialize 32-bit data on 64-bit)
--SKIPIF--
<?php if (8 !== PHP_INT_SIZE) { die('skip Only for 64-bit platform'); } ?>
<?php require __DIR__ . "/../utils/basic-skipif.inc"?>
--FILE--
<?php
require_once __DIR__ . "/../utils/basic.inc";

$tests = [
    '0',
    '-1416445411987',
    '1416445411987',
];

foreach ($tests as $milliseconds) {
    $s = sprintf('O:24:"MongoDB\BSON\UTCDateTime":1:{s:12:"milliseconds";s:%d:"%s";}', strlen($milliseconds), $milliseconds);

    var_dump($s);
    var_dump(unserialize($s));
    echo "\n";
}

?>
===DONE===
<?php exit(0); ?>
--EXPECTF--
string(64) "O:24:"MongoDB\BSON\UTCDateTime":1:{s:12:"milliseconds";s:1:"0";}"
object(MongoDB\BSON\UTCDateTime)#%d (%d) {
  ["milliseconds"]=>
  int(0)
}

string(78) "O:24:"MongoDB\BSON\UTCDateTime":1:{s:12:"milliseconds";s:14:"-1416445411987";}"
object(MongoDB\BSON\UTCDateTime)#%d (%d) {
  ["milliseconds"]=>
  int(-1416445411987)
}

string(77) "O:24:"MongoDB\BSON\UTCDateTime":1:{s:12:"milliseconds";s:13:"1416445411987";}"
object(MongoDB\BSON\UTCDateTime)#%d (%d) {
  ["milliseconds"]=>
  int(1416445411987)
}

===DONE===
