
<table style="border: 1px solid black; border-collapse:collapse;" >
  <?php
  for ($a = 1; $a <= 9; $a++) {
    echo '<tr>';
    for ($b = 1; $b <= 9; $b++) {
      echo '<td  style="border:solid 1px black;">' . $a * $b . '</td>';
    }
    echo '</tr>';
  }
  ?>
</table>


