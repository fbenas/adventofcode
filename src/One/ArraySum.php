<?php

namespace App\One;

/**
 * Sum contents of an array
 *
 * @author Phil Burton <phil@pgburton.com>
 */
class ArraySum
{
    /**
     * Sum of array contents
     *
     * @var int
     */
    protected $sum;

    /**
     * Take array and sum it
     *
     * @param array $array
     * @author Phil Burton <phil@pgburton.com>
     */
    public function __construct(array $array)
    {
        if (empty($array)) {
            throw new Exception('Empty Array');
        }

        $this->sum = array_sum($array);
    }

    public function getSum(): int
    {
        return $this->sum;
    }
}
