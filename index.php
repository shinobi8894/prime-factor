<?php
// PHP Efficient program to print all
// prime factors of a given number
 
// function to print all prime
// factors of a given number n
function primeFactors($n)
{
     
    // Print the number of
    // 2s that divide n
    while($n % 2 == 0)
    {
        echo 2," ";
        $n = $n / 2;
    }
 
    // n must be odd at this
    // point. So we can skip
    // one element (Note i = i +2)
    for ($i = 3; $i <= sqrt($n);
                   $i = $i + 2)
    {
         
        // While i divides n,
        // print i and divide n
        while ($n % $i == 0)
        {
            echo $i," ";
            $n = $n / $i;
        }
    }
 
    // This condition is to
    // handle the case when n
    // is a prime number greater
    // than 2
    if ($n > 2)
        echo $n," ";
}
 
    // Driver Code
    $n = 315;
    primeFactors($n);
?>