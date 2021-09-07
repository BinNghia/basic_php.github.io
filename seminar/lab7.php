<!DOCTYPE html>
<html>
<body>
  <?php
    function countVowels($str) {
      preg_match_all('/[aeiou]/i', $str, $matches); //trả về kết quả sô khớp
      return count($matches[0]);
    }
    echo countVowels('abbas');
  ?>
</body>
</html>
