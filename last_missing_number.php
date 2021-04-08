<?php
function solution($arr) {
  $max = max($arr);
  $min = min($arr);
  $temp = [];
  foreach ($arr as $num) {
    $up = $num + 1;
    if ( !in_array($up, $arr) && $up < $max ) {
      $temp[] = $up;
    }
    $down = $num - 1;
    if ( !in_array($down, $arr) && $down > $min) {
      $temp[] = $down;
    }
  }
  $result = max($temp);
  return $result;
}

$arguments = [];
echo(solution($arguments));
