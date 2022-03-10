// JavaScript program to print all prime factors
 
// A function to print all prime
// factors of a given number n
function primeFactors(n)
{
     
    // Print the number of 2s that divide n
    while (n % 2 == 0)
    {
        document.write(2 + " ");
        n = Math.floor(n / 2);
    }
 
    // n must be odd at this point.
    // So we can skip one element
    // (Note i = i +2)
    for(let i = 3;
            i <= Math.floor(Math.sqrt(n));
            i = i + 2)
    {
         
        // While i divides n, print i
        // and divide n
        while (n % i == 0)
        {
            document.write(i + " ");
            n = Math.floor(n / i);
        }
    }
 
    // This condition is to handle the
    // case when n is a prime number
    // greater than 2
    if (n > 2)
        document.write(n + " ");
}
 
// Driver code
let n = 315;
 
primeFactors(n);