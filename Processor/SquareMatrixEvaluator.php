<?php

namespace Passage\Processor;

use Passage\MatrixEvaluator\Api\Iterator;

class SquareMatrixEvaluator implements Iterator
{
    public $matrix;
    public $size;

    /**
     * @param array $matrix
     */
    public function __construct(array $matrix)
    {
        $this->matrix = $matrix;
        $this->size = count($matrix);
        if (!$this->isMatrixSizeCorrect()) {
            throw new \InvalidArgumentException("Invalid matrix size. Max size is nxn where n < 1000. <br><br>");
        }
        if (!$this->isSquareMatrix()) {
            throw new \InvalidArgumentException("Given matrix is not square (nxn). <br><br>");

        }
        if (!$this->isBinaryMatrix()) {
            throw new \InvalidArgumentException("Given matrix is not binary (0s or 1s). <br><br>");

        }
    }

    /**
     * @param callable $callback
     * @return void
     */
    public function iterate(callable $callback)
    {
        $n = count($this->matrix);
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                call_user_func($callback, $i, $j);
            }
        }
    }

    /**
     * @return bool
     */
    private function isSquareMatrix(): bool
    {
        $n = count($this->matrix);
        foreach ($this->matrix as $row) {
            if (count($row) != $n) {
                return false;
            }
        }
        return true;
    }

    /**
     * @return bool
     */
    private function isMatrixSizeCorrect(): bool
    {
        $rows = count($this->matrix);
        $columns = count($this->matrix[0]);
        return ($rows < 1000 && $columns < 1000);
    }

    /**
     * @return bool
     */
    private function isBinaryMatrix(): bool
    {
        $n = count($this->matrix);
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                if ($this->matrix[$i][$j] != 0 && $this->matrix[$i][$j] != 1) {
                    return false;
                }
            }
        }
        return true;
    }
}
