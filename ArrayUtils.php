<?php


namespace LuminoRay;


class ArrayUtils
{
    /**
     * Combines multiple arrays by interweaving their elements.
     * @param array[]   $arrays             Array containing the arrays that will be weaved together.
     * @param int       $elementsPerArray   How many elements to take from each pile every cycle.
     * @return array
     */
    public static function weave(array $arrays, $elementsPerArray = 1) : array {
        if (count($arrays) <= 1) {
            return $arrays;
        }

        $output = array_splice($arrays[0], 0, $elementsPerArray);

        $first = array_shift($arrays);

        $arrays = empty($first)
            ? $arrays
            : array_push($arrays, $first);

        return array_push($output, self::weave($arrays, $elementsPerArray));
    }

    /**
     * Combines multiple arrays by evenly distributing their elements.
     */
    public static function distribute() {}

    /**
     * Separates an array into multiple arrays, categorizing by the value of a certain key or object property.
     */
    public static function separate() {}
}