<?php

require_once('./utils.php');

// ------------------- INPUTS ----------------------
$arrayInput = ['chaitrr', 'height', 'racket', 'touch', 'tunic'];
// ------------------- END INPUTS ------------------

$arrayInput = array_filter($arrayInput, 'is_string');
$arrayInput = array_map('strtolower', $arrayInput);
$arrayInput = array_values(array_unique($arrayInput));

$permutations = permuteArray($arrayInput);

$results = [];
foreach ($permutations as $key => $permutation) {
    if (checkCircle($permutation)) {
        $permutation[] = $permutation[0];
        $results[] = $permutation;
    }
}

if (count($results)>0) {
    print_r('Existen '.count($results).' círculos posibles'.PHP_EOL);
    foreach ($results as $result) {
        print_r(implode(' ', $result).PHP_EOL);
    }
} else {
    print_r('No existen círculos posibles'.PHP_EOL);
}