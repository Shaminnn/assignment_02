<?php
echo "<h3>First 10 numbers of fibonacci Series:</h3>";
$first = 0;
$second = 1;

for ($i = 1; $i <= 10; $i++) {
    // Print the current Fibonacci number
    echo $first . " ";

    // Calculate the next Fibonacci number
    $next = $first + $second;

    // Check if the current Fibonacci number is greater than 100
    if ($next > 100) {
        // Break out of the loop
        break;
    }

    // Update the values for the next iteration
    $first = $second;
    $second = $next;
}

?>
