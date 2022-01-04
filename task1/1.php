<?php

    function insertElement($array, $elem)
    {
        $count = count($array);
        $i = 0;
        while ($i < $count) {
            if (strpos((string)$array[$i], '2') !== false) {
                while ($count > $i + 1) {
                    $array[$count] = $array[$count - 1];
                    $count--;
                }
                $array[$i + 1] = $elem;
            }
            $count = count($array);
            $i++;
        }
        return $array;
    }