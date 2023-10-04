<?php
echo "<table border='1'>";

for ($i=1;$i<=20;$i++)
{
    echo "<TR>";
    for ($j=1;$j<=15;$j++){
        echo "<TD>row $j, col $i</TD>";
    }
echo "</TR>";
}
echo "</table>";

?>