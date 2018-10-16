<?php
/**
 * Created by PhpStorm.
 * User: remy
 * Date: 16/10/18
 * Time: 09:44
 */
function dna(string $a,string $b) :int {
    $a = str_split($a);
    $b = str_split($b);
    $counting = 0;
    foreach($a as $i => $letter) {
        if($letter != $b[$i]) {
            $counting ++;
        }
    }
    return $counting;
}


echo dna('GAGCCTACTAACGGGAT', 'CATCGTAATGACGGCCT');