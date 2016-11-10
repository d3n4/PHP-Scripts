<?php
// **************************
// Author: techwizmac
// Created: jan-6-2016
// Web Based generic decoder
// **************************

$str= $_POST['encoded'];

echo "Value Accepted:  $str<br><br>";

error_reporting(E_ERROR);

echo "Nested Function Combinations...<br><br>";

echo "Unescape(value) = ","<strong>", urldecode($str), "</strong><br><br>";

// echo "Unescape(value) = ","<strong>", urldecode("\x63\x72\x65\x61\x74\x65\x5f\x66\x75\x6e\x63\x74\x69\x6f\x6e"), "</strong><br><br>";

echo "b64dec(value) = ","<strong>", base64_decode($str), "</strong><br>";

echo "ROT13(value) = ","<strong>", str_rot13($str), "</strong><br>";

echo "Gzinflate(value) = ","<strong>", gzinflate($str), "</strong><br>";

echo "b64dec(gzinfl(value)) = ","<strong>", base64_decode(gzinflate($str)), "</strong><br>";

echo "b64dec(gzuncomp(b64dec(value))) = ","<strong>", base64_decode(gzuncompress(base64_decode($str))), "</strong><br>";

echo "gzinfl(b64dec(value)) = ","<strong>", gzinflate(base64_decode($str)), "</strong><br>";

echo "gzinfl(b64dec(rot13(value))) = ","<strong>", gzinflate(base64_decode(str_rot13($str))), "</strong><br>";

echo "gzinfl(rot13(b64dec(value))) = ","<strong>", gzinflate(str_rot13(base64_decode($str))), "</strong><br>";

echo "gzinfl(b64dec(rot13(strrev(value)))) = ","<strong>", gzinflate(base64_decode(str_rot13(strrev($str)))), "</strong><br>";

echo "gzinfl(b64dec(strrev(rot13(value)))) = ","<strong>", gzinflate(base64_decode(strrev(str_rot13($str)))), "</strong><br>";

echo "gzinfl(b64dec(rawurldec(value)) = ","<strong>", gzinflate(base64_decode(rawurldecode($str))), "</strong><br>";

echo "gzinfl(b64dec(strrev(value))) = ","<strong>", gzinflate(base64_decode(strrev($str))), "</strong><br>";

echo "gzinfl(b64dec(b64dec(rot13(value)))) = ","<strong>", gzinflate(base64_decode(base64_decode(str_rot13($str)))), "</strong><br>";

echo "gzuncomp(b64dec(value)) = ","<strong>", gzuncompress(base64_decode($str)), "</strong><br>";

echo "gzuncomp(rot13(b64dec(value))) = ","<strong>", gzuncompress(str_rot13(base64_decode($str))), "</strong><br>";

echo "gzuncomp(b64dec(r0t13(value))) = ","<strong>", gzuncompress(base64_decode(str_rot13($str))), "</strong><br>";

echo "rot13(gzinfl(b64dec(value))) = ","<strong>", str_rot13(gzinflate(base64_decode($str))), "</strong><br>";

echo "rot13(gzinfl(rot13(b64dec(value)))) = ","<strong>", str_rot13(gzinflate(str_rot13(base64_decode($str)))), "</strong><br>";

?>

