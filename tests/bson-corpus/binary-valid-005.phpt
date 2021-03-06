--TEST--
Binary type: subtype 0x02
--DESCRIPTION--
Generated by scripts/convert-bson-corpus-tests.php

DO NOT EDIT THIS FILE
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

$canonicalBson = hex2bin('13000000057800060000000202000000FFFF00');
$canonicalExtJson = '{"x" : { "$binary" : {"base64" : "//8=", "subType" : "02"}}}';

// Canonical BSON -> Native -> Canonical BSON 
echo bin2hex(fromPHP(toPHP($canonicalBson))), "\n";

// Canonical BSON -> Canonical extJSON 
echo json_canonicalize(toCanonicalJSON($canonicalBson)), "\n";

// Canonical extJSON -> Canonical BSON 
echo bin2hex(fromJSON($canonicalExtJson)), "\n";

?>
===DONE===
<?php exit(0); ?>
--EXPECT--
13000000057800060000000202000000ffff00
{"x":{"$binary":{"base64":"\/\/8=","subType":"02"}}}
13000000057800060000000202000000ffff00
===DONE===