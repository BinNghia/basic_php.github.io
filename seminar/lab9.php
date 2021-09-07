<!DOCTYPE html>
<html>
<body>
  <?php
    //đổi chỗ 2 mảng
    function swap(&$my_array, &$other_array) {
      $tmp = $my_array;
      $my_array = $other_array;
      $other_array = $tmp;
    }
    //đảo ngược các phần tử của mảng
    function revereArray(&$arr, $start,$end) {
      while ($start < $end) {
        $tmp = $arr[$start];
        $arr[$start] = $arr[$end];
        $arr[$end] = $tmp;
        $start++;
        $end--;
      }
    }
    //in mảng
    function printArray(&$arr, $size) {
      for ($i = 0; $i < $size; $i++)
        echo $arr[$i] . " ";
      echo "\n";
    }
    $my_array = array('a', 'b', 'c');
    $other_array = array(1,2,3);
    swap($my_array, $other_array);
    revereArray($my_array, 0, 2);
    revereArray($other_array, 0, 2);
    echo 'My-array: ';
    printArray($my_array, 3);
    echo '<br>';
    echo 'Other-array: ';
    printArray($other_array, 3);
  ?>
</body>
</html>
