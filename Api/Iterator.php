<?php

namespace Passage\MatrixEvaluator\Api;

interface Iterator {
    public function iterate(callable $callback);
}