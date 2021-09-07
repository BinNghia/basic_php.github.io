<!DOCTYPE html>
<html>
<body>
  <?php
    function solve($str) {
      $num = 0;
      $res = 0;
      for ($i = 0; $i<strlen($str); $i++)
      {
        //nếu trong chuỗi có số
        if ($str[$i] >= '0' && $str[$i] <= '9')
          //lấy số ấy cho đến khi có số tiếp theo
          $num = $num * 10 + ($str[$i]-'0');
        else
        {
          $res = max($res, $num);
          $num = 0;
        }
      }
      return max($res, $num);
    }
    echo solve('gh12cdy695m1')
  ?>
</body>
</html>
