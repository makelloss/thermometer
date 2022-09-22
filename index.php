<?php
$t = rand(-20,20);
$i = 0;
print "<table style=\"border:solid;\">";
$style = $t > $i ? 'width:30px;background:red' : 'width:30px;background:yellow';
for ($t = -20; $t <= 20; $t++) {
    print "<tr><td style=\"border:solid;\">$t</td><td style=\"border:solid;\" style=\"{$style}\"\></td></tr>";
}
print "</table>";