<?php

namespace Passage\Helper;

class MatrixHelper
{
    /**
     * @param array $matrix
     * @return void
     */
    public function printMatrix(array $matrix)
    {
        $rows = count($matrix);
        if ($rows === 0) {
            echo "Empty matrix";
            return;
        }

        $columns = count($matrix[0]);

        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $columns; $j++) {
                echo isset($matrix[$i][$j]) ? $matrix[$i][$j] . "\t" : "\t";
            }
            echo "<br>";
        }
        echo "<br>";
    }
}