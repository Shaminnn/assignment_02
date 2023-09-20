<?php 
           //Using For loop 
echo "<h3>Using For loop</h3>";
function evenNumFor($start, $end, $step) {
	     
    for ($j=",",$k=".",$i = $start; $i <= $end; $i += $step) {
         // $j for printing , & $k for printing . 
		if(($i+1)%2==0){
			echo $i+1;
            if ($i+1 < $end ) {
                echo "$j";
            }else{
		        echo "$k";
        }	
		}  
		
    }
    
}
evenNumFor(1, 20, 2);

           //Using  While loop
echo "<h3>Using  While loop</h3>";
function evenNumWhile($start, $end, $step) {
    $i = $start;
    $j = ",";
    $k = ".";
    
    while ($i <= $end) {
        if (($i + 1) % 2 == 0) {
            echo $i + 1;
            if ($i + 1 < $end) {
                echo "$j";
            } else {
                echo "$k";
            }
        }
        $i += $step;
    }
}

evenNumWhile(1, 20, 2);

           //Using  Do while loop

echo "<h3>Using  Do while loop</h3>";
function evenNumDoWhile($start, $end, $step) {
    $i = $start;
    $j = ",";
    $k = ".";
    
    do {
        if (($i + 1) % 2 == 0) {
            echo $i + 1;
            if ($i + 1 < $end) {
                echo "$j";
            } else {
                echo "$k";
            }
        }
        $i += $step;
    } while ($i <= $end);
}

evenNumDoWhile(1, 20, 2);


?>