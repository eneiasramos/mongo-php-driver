--TEST--
Array: Single Element Array with index set incorrectly
--DESCRIPTION--
Generated by scripts/convert-bson-corpus-tests.php

DO NOT EDIT THIS FILE
--FILE--
<?php

require_once __DIR__ . '/../utils/tools.php';

$canonicalBson = hex2bin('140000000461000C0000001030000A0000000000');
$degenerateBson = hex2bin('130000000461000B00000010000A0000000000');
$canonicalExtJson = '{"a" : [{"$numberInt": "10"}]}';

// Canonical BSON -> Native -> Canonical BSON 
echo bin2hex(fromPHP(toPHP($canonicalBson))), "\n";

// Canonical BSON -> Canonical extJSON 
echo json_canonicalize(toCanonicalJSON($canonicalBson)), "\n";

// Canonical extJSON -> Canonical BSON 
echo bin2hex(fromJSON($canonicalExtJson)), "\n";

// Degenerate BSON -> Native -> Canonical BSON 
echo bin2hex(fromPHP(toPHP($degenerateBson))), "\n";

// Degenerate BSON -> Canonical extJSON 
echo json_canonicalize(toCanonicalJSON($degenerateBson)), "\n";

?>
===DONE===
<?php exit(0); ?>
--EXPECT--
140000000461000c0000001030000a0000000000
{"a":[{"$numberInt":"10"}]}
140000000461000c0000001030000a0000000000
140000000461000c0000001030000a0000000000
{"a":[{"$numberInt":"10"}]}
===DONE===