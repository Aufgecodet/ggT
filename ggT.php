<?php


/**
 *
 *   IMP - ein simpler ggT Rechner von Jonas Fleischmann, geschrieben in PHP
 */


$one = 0;
$two = 0;


//get from config.json file one and two
//make a variable to the directory of the file
$dir = dirname(__FILE__);
//make a variable to the config.json file
$config = $dir . "/config.json";
$config = file_get_contents($config);
$config = json_decode($config, true);
$one = $config["one"];
$two = $config["two"];
//calculate the ggT with the euclidean algorithm
function ggT($one, $two)
{
    if ($one == 0) {
        return $two;
    }
    while ($two != 0) {
        if ($one > $two) {
            $one = $one - $two;
        } else {
            $two = $two - $one;
        }
    }
    return $one;
}

$result = ggT($one, $two);

print "Der ggT von ".$one." und ".$two." ist ".$result."!\n";




