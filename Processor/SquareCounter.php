<?php

namespace Passage\Processor;

class SquareCounter
{
    private $iterator;

    /**
     * @param SquareMatrixEvaluator $iterator
     */
    public function __construct(SquareMatrixEvaluator $iterator)
    {
        $this->iterator = $iterator;
    }

    /**
     * @return int
     */
    public function countSquares(): int
    {
        $count = 0;
        $this->iterator->iterate(function ($i, $j) use (&$count) {
            if ($this->iterator->matrix[$i][$j] == 1) {
                $size = 1;
                $count++;
                while ($i + $size < $this->iterator->size && $j + $size < $this->iterator->size) {
                    $valid = true;
                    for ($k = $i; $k <= $i + $size; $k++) {
                        for ($l = $j; $l <= $j + $size; $l++) {
                            if ($this->iterator->matrix[$k][$l] == 0) {
                                $valid = false;
                                break 2;
                            }
                        }
                    }
                    if ($valid) {
                        $count++;
                        $size++;
                    } else {
                        break;
                    }
                }
            }
        });
        return $count;
    }
}