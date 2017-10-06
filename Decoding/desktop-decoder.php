<?php
// *************************
// Author: techwizmac
// Created: jan-6-2016
// Modified: Sept-13-2017
// Desktop generic decoder
// *************************
echo "Enter File Name: ";
$value = fgets(STDIN);
$value = str_replace(array('.', ' ', "\n", "\t", "\r"), '', $value);
echo "File-Name= $value \n";
$str = file_get_contents("./$value", true);
echo "\n\n", "Content of str= $str";
error_reporting(E_ERROR);

echo "Nested Function Combinations...", "\n\n";

echo "1) straight b64dec ->  ", base64_decode($str), "\n";
echo "1-1) eval-b64dec -> ", eval(base64_decode($str)), "\n\n";

echo "2) b64dec-gzinfl ->  ",  base64_decode(gzinflate($str)), "\n";
echo "2-2) eval-b64dec-gzinfl ->  ",  eval(base64_decode(gzinflate($str))), "\n\n";

echo "3) b64dec-gzuncomp-b64dec -> ", base64_decode(gzuncompress(base64_decode($str))), "\n";
echo "3-3) eval-b64dec-gzuncomp-b64dec -> ", eval(base64_decode(gzuncompress(base64_decode($str)))), "\n\n";

echo "4) gzinfl-b64dec ->  ", gzinflate(base64_decode($str)), "\n";
echo "4-4) eval-gzinfl-b64dec ->  ", eval(gzinflate(base64_decode($str))), "\n\n";

echo "5) gzinfl-b64dec-rot13 -> ", gzinflate(base64_decode(str_rot13($str))), "\n";
echo "5-5) eval-gzinfl-b64dec-rot13 -> ", eval(gzinflate(base64_decode(str_rot13($str)))), "\n\n";

echo "6) gzinfl-rot13-b64dec -> ", gzinflate(str_rot13(base64_decode($str))), "\n";
echo "6-6) eval-gzinfl-rot13-b64dec -> ", eval(gzinflate(str_rot13(base64_decode($str)))), "\n\n";

echo "7) gzinfl-b64dec-rot13-strrev -> ", gzinflate(base64_decode(str_rot13(strrev($str)))), "\n";
echo "7-7) eval-gzinfl-b64dec-rot13-strrev -> ", eval(gzinflate(base64_decode(str_rot13(strrev($str))))), "\n\n";

echo "8) gzinfl-b64dec-strrev-rot13 -> ", gzinflate(base64_decode(strrev(str_rot13($str)))), "\n";
echo "8-8) eval-gzinfl-b64dec-strrev-rot13 -> ", eval(gzinflate(base64_decode(strrev(str_rot13($str))))), "\n\n";

echo "9) gzinfl-b64dec-rawurldec -> ", gzinflate(base64_decode(rawurldecode($str))), "\n";
echo "9-9) eval-gzinfl-b64dec-rawurldec -> ", eval(gzinflate(base64_decode(rawurldecode($str)))), "\n\n";

echo "10) gzinfl-b64dec-strrev -> ", gzinflate(base64_decode(strrev($str))), "\n";
echo "10-10) eval-gzinfl-b64dec-strrev -> ", eval(gzinflate(base64_decode(strrev($str)))), "\n\n";

echo "11) gzinfl-b64dec-b64dec-rot13 -> ", gzinflate(base64_decode(base64_decode(str_rot13($str)))), "\n";
echo "11-11) eval-gzinfl-b64dec-b64dec-rot13 -> ", eval(gzinflate(base64_decode(base64_decode(str_rot13($str))))), "\n\n";

echo "12) gzuncomp-b64dec ->  ", gzuncompress(base64_decode($str)), "\n";
echo "12-12) eval-gzuncomp-b64dec ->  ", eval(gzuncompress(base64_decode($str))), "\n\n";

echo "13) gzuncomp-rot13-b64dec -> ", gzuncompress(str_rot13(base64_decode($str))), "\n";
echo "13-13) eval-gzuncomp-rot13-b64dec -> ", eval(gzuncompress(str_rot13(base64_decode($str)))), "\n\n";

echo "14) gzuncomp-b64dec-r0t13 -> ", gzuncompress(base64_decode(str_rot13($str))), "\n";
echo "14-14) eval-gzuncomp-b64dec-r0t13 -> ", eval(gzuncompress(base64_decode(str_rot13($str)))), "\n\n";

echo "15) rot13-gzinfl-b64dec -> ", str_rot13(gzinflate(base64_decode($str))), "\n";
echo "15-15) eval-rot13-gzinfl-b64dec -> ", eval(str_rot13(gzinflate(base64_decode($str)))), "\n\n";

echo "16) rot13-gzinfl-rot13-b64dec -> ", str_rot13(gzinflate(str_rot13(base64_decode($str)))), "\n";
echo "16-16) eval-rot13-gzinfl-rot13-b64dec -> ", eval(str_rot13(gzinflate(str_rot13(base64_decode($str))))), "\n\n";

/*
# - Encoding portion still incomplete - 
echo "rawurlenc-b64dec-gzdeflate -> ", rawurlencode(base64_encode(gzdeflate($str))), "\n\n";

    base64_encode(gzdeflate('Code'))
    base64_encode(str_rot13(gzdeflate('Code')))
    str_rot13(base64_encode(gzdeflate('Code')))
    str_rot13(base64_encode(base64_encode(gzdeflate('Code'))))
    base64_encode(gzcompress('Code'))
    base64_encode(str_rot13(gzcompress('Code')))
    str_rot13(base64_encode(gzcompress('Code')))
    base64_encode('Code')
    base64_encode(gzdeflate(str_rot13('Code')))
    str_rot13(strrev(base64_encode(gzdeflate('Code'))))
    strrev(base64_encode(gzdeflate('Code')))
    str_rot13(base64_encode(gzdeflate('Code')))
    strrev(str_rot13(base64_encode(gzdeflate('Code'))))
    base64_encode(gzcompress(base64_encode('Code')))
    rawurlencode(base64_encode(gzdeflate('Code')))
    base64_encode(str_rot13(gzdeflate(str_rot13('Code'))))

*/
?>

