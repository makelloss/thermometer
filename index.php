<?php
$i = 0;
print "<table style=\"border:solid;\">";
for ($t = 20; $t > -20; $t--) {
    $style = $t > $i ? 'width:30px;background:red' : 'width:30px;background:blue';
    print "<tr><td style=\"border:solid;\">$t</td><td style=\"{$style}\"\></td></tr>";
}