<?php
$t = 0;
print "<table style=\"border:solid;\">";
for ($i = 20; $i > -20; $i--) {
    $style = $t > $i ? 'width:30px;background:red' : 'width:30px;background:blue';
    print "<tr><td style=\"border:solid;\">$i</td><td style=\"{$style}\"\></td></tr>";
}