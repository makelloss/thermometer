<?php
$t = rand(-20,20);
print "<table style=\"border:solid;\">";
for ($i = 1; $i > 0; $i--) {
    $style = $t > $i ? 'width:30px;background:red' : 'width:30px;background:blue';
    print "<tr><td style=\"border:solid;\">$t</td><td style=\"{$style}\"\></td></tr>";
}
