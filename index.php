<table align="left">
<?php
$baris = 5;
for ($y=1; $y <= $baris; $y++) {
  echo "<tr>";
  for ($x=1; $x <= $y; $x++) {
      if ($x == 1){
        $number[$y][$x] = 1;

        if($baris != $y)
        echo "<td colspan='".($baris-$y)."'></td>";

        echo "<td>".$number[$y][$x]."</td>";
        echo "<td></td>";
      } else if($x == $y) {
        $number[$y][$x] = 1;
        echo "<td>".$number[$y][$x]."</td>";
        echo "<td></td>";
      } else {
        $number[$y][$x] = $number[$y-1][$x-1]+$number[$y-1][$x];
        echo "<td>".$number[$y][$x]."</td>";
        echo "<td></td>";
      }
    }
    echo "</tr>";
  }

 ?>
</table>
