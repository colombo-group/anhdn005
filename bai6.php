<!DOCTYPE html>
<html>
<body>

<?php
/**
 * Created by Love Barca on 5/25/2016.
 */
$month_name = array("January", "February","March","April","May","June","July","August","September","October","November","December");
$day_name = array("Su", "M", "Tu","W","Th","F","Sa");
$month_day = array(31,28,31,30,31,30,31,31,30,31,30,31);
$thisDay = date("l");

$thisMonth = date("m");
$thisYear = date("Y");
$thisDate = date("d");

if ($thisYear % 4 == 0) {
    $month_day[1]++;
}
echo'<table border="2px">';
var_dump($thisDay);
echo'<tr><th style="text-align: center;" colspan="7">'. $month_name[intval($thisMonth)]." ". $thisYear. '</th></tr>';
echo'<tr><td>'."Sunday".'</td>' .'<td>'."Monday".'</td>'.'<td>'."Tuesday".'</td>'.'<td>'."Wednesday".'</td>'.'<td>'."Thursday".'</td>'.'<td>'."Friday".'</td>'.'<td>'."Saturday".'</td>';
     '</tr>';
$sohang = $month_day[intval($thisMonth)];
//echo "</br>";
$sohang = ($sohang/7)+1;
for ( $i = 0; $i<$sohang ; $i++) {
     echo'<tr>';

      for ($j = 1; $j < 8; $j++) {
        
          if (7 * $i + $j <= $month_day[intval($thisMonth)]+1) {
              if (7 * $i + $j == $thisDate) {
                  echo '<td style = "color:red;">' . (7 * $i + $j) . '</td>';
              }
              else {
                  echo'<td>' . (7 * $i + $j) . '</td>';
              }

          }
      }
     echo'</tr>';
 }
echo '</table>';

?>

</body>
</html>