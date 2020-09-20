<?php

function permuteArray(array $items, array $perms = []) {
    if (empty($items)) {
        $return = array($perms);
    }  else {
        $return = array();
        for ($i = count($items) - 1; $i >= 0; --$i) {
             $newitems = $items;
             $newperms = $perms;
         list($foo) = array_splice($newitems, $i, 1);
             array_unshift($newperms, $foo);
             $return = array_merge($return, permuteArray($newitems, $newperms));
         }
    }
    return $return;
}

function checkCircle(array $words): bool {
    $words[] = $words[0];

    foreach ($words as $key => $word) {
        if((count($words)-1) == $key) {
            return true;
        }
        if(getLastChar($words[$key]) == getFirtsChar($words[$key+1])) {
            continue;
        } else {
            break;
        }
    }
    return false;
}

function getFirtsChar(string $word) : string {
    return strtolower(substr($word, 0, 1));
}

function getLastChar(string $word) : string {
    return strtolower(substr($word, -1));
}