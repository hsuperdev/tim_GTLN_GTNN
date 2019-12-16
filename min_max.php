<?php
    function findMax($array) {
        $max = $array[0];
        for ($i = 0; $i < count($array); $i++) {
            if ($max < $array[$i]) {
                $max = $array[$i];
            }
        }
        return $max;
    }

    function findMin($array) {
        $min = $array[0];
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] < $min) {
                $min = $array[$i];
            }
        }
        return $min;
    }

    $arr = [1, 4, 12, 4, 8];
    echo "GTLN: " . findMax($arr);
    echo "<br>";
    echo "GTNN: " . findMin($arr);
?>
