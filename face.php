<?php
include('./vendor/autoload.php');

include('./Phasher.php');

$I = PHasher::Instance();

var_dump($I->CompareStrings($I->HashAsString($I->HashImage('./ang1.jpg',0,0,24), false), $I->HashAsString($I->HashImage('./ang2.jpg',0,0,24), false), 10));
var_dump($I->CompareStrings($I->HashAsString($I->HashImage('./ang1.jpg',0,0,24), false), $I->HashAsString($I->HashImage('./ang3.jpg',0,0,24), false), 10));
var_dump($I->CompareStrings($I->HashAsString($I->HashImage('./ang1.jpg',0,0,24), false), $I->HashAsString($I->HashImage('./ang4.jpg',0,0,24), false), 10));
var_dump($I->CompareStrings($I->HashAsString($I->HashImage('./ang1.jpg',0,0,24), false), $I->HashAsString($I->HashImage('./jen1.jpg',0,0,24), false)));
var_dump($I->CompareStrings($I->HashAsString($I->HashImage('./ang1.jpg',0,0,24), false), $I->HashAsString($I->HashImage('./man1.jpg',0,0,24), false)));
var_dump($I->CompareStrings($I->HashAsString($I->HashImage('./ang1.jpg',0,0,24), false), $I->HashAsString($I->HashImage('./man2.jpg',0,0,24), false)));