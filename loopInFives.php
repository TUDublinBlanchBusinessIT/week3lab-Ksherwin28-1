<?php
#phpForLoop - put the name of the file/program here - notes the hashtag indicates a comment in PHP
#Keith Sherwin 04/10/2023
#put a descripition of what the code does here - 
#this program uses a loop to count up to 10 and puts the value of the loop counter out to the screen on each iteration
for ($i=1;$i<=20;$i++) {
    echo "$i, ";
    if ($i % 5 == 0){
        echo "<br>";
    }
    
   
}

?>

