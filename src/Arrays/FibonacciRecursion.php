<?php
/**
 * Class that calculates the Fibonacci number in recursion.
 *
 * @author Nikola Dordevic
 * @see https://en.wikipedia.org/wiki/Fibonacci_number
 */
namespace Math\Arrays;

use Math\Arrays\Definitions\Fibonacci;

class FibonacciRecursion implements Fibonacci
{

    /**
     * Function summarizes the previous and the current element of Fibonacci's array.
     * The result and the current element of Fibonacci's array are the new params for the next recursion call with reduced n value.
     * Recursion exists when n = 2.
     *
     * @param int $prev previous element of Fibonacci's array
     * @param int $current current element of Fibonacci's array
     * @return int Fibonacci value
     *
     */
    private function calcualte(int $prev, int $current, int $n) : int
    {
        $sum = $prev + $current;
        if ($n == 2) {
            return $sum;
        }
            
        return $this->calcualte(max($prev, $current), $sum, --$n);
    }

    /**
     * Returns the N-th Fibonacci number.
     *
     * @param int $n
     * @return int Fibonacci's number
     */
    public function getNumber(int $n) : int
    {
        /**
         * If n < 2 the value is equal to n.
         */
        if (0 == $n || 1 == $n) {
            return $n;
        }

        /**
         * Calculates the N-th Fibonacci number.
         */
        return $this->calcualte(0, 1, $n);
    }
}
