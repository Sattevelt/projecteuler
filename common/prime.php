<?php

class Prime
{
    public static $primes = array(2 => 2);

    public static function isPrime($number)
    {
        if (array_key_exists($number, self::$primes)) {
            return true;
        } else if ($number < reset(self::$primes)) {
            return false;
        }

        $max = (int)floor($number / 2);
        
        for ($i = 2; $i <= $max; $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        
        self::$primes[$number] = $number;
        return true;
    }

    public static function findsPrimesUpTo($max)
    {
        $allNumbers = range(2, $max);
        $primes = array_combine($allNumbers, $allNumbers);
        $number = 2;

        while ($number * $number < $max) {
            for ($i = 2 * $number; $i <= $max; $i += $number) {
                unset($primes[$i]);
            }
            $number = next($primes);
        }

        return $primes;
    }




}
