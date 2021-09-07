<!DOCTYPE html>
<html>
<body>
  <?php
    function mostPopularChar($str) {
      $str = str_replace(' ', '', $str); //xóa khoảng trắng
      $arr = str_split(count_chars($str.trim($str), 3));
      $character = "";
      $count = 0;
      foreach ($arr as $value) {
        $n = substr_count ($str, $value);
        if($count < $n){
          $character = $value;
          $count = $n;
        } elseif ($count == $n) {
        	echo 'No most popular char';
        }
      }
      return $character;
    }
    echo mostPopularChar('ababbab')
  ?>
</body>
</html>
