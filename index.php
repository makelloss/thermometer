<?php
$t = rand(-20,20);
print "<table style=\"border:solid;\">";

for ($i = 20; $i > -1; $i--) {
    $style = $t > $i ? 'width:30px;background:red' : 'width:30px;background:blue';
}
for ($t = rand(-20,20); $t <= 20; $t++) {
    $style = $t > $i ? 'width:30px;background:red' : 'width:30px;background:blue';
    print "<tr><td style=\"border:solid;\">$t</td><td style=\"{$style}\"\></td></tr>";
}
print "</table>";