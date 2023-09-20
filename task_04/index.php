<?php
echo "<h3>First 15 numbers of fibonacci Series:</h3>";
function printFibonacci($count) {
    $first = 0;
    $second = 1;

    for ($i = 1; $i <= $count; $i++) {
        echo $first . " ";

        // Calculate the next Fibonacci number
        $next = $first + $second;

        // Update the values for the next iteration
        $first = $second;
        $second = $next;
    }
}

// Call the function to print the first 15 Fibonacci numbers
printFibonacci(15);
?>
