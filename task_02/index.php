<?php
echo "<h3>Number from 1 to 50 without multiple of 5:</h3>";
for ($i = 1; $i <= 50; $i++) {
    // Check if $i is a multiple of 5
    if ($i % 5 == 0) {
        // Skip this iteration
        continue;
    }
    // Print the current number
    echo $i . " ";
}
?>
