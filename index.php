<?php
print "<table style=\"border:solid;\">";
$t = rand(-20,20);
if ($t > 0) {
    '<th style="color:white;background-color:green;">';
} elseif ($t == 0)
'<th style="color:white;background-color:yellow;">';
 else{
    '<th style="color:white;background-color:red;">';
}
for ($i = -20; $i <= 42; $i++) {
    print "<tr><td style=\"border:solid;\">$i</td><td style=\"border:solid;\"></td></tr>";
}
print "</table>";