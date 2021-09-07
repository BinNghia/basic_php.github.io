<!DOCTYPE html>
<html>
<body>

<?php
  function LargestWord($sen) {
    $senArr = explode(' ', $sen); //Tách chuỗi thành mảng
    $largeWord = ''; //khởi tạo biến so sánh
    for ($i = 0; $i < count($senArr); $i++) {
      if (strlen($senArr[$i]) > strlen($largeWord)) { 
        $largeWord = $senArr[$i]; 
      }
    }
    return $largeWord;
  }
  echo LargestWord('ArrowHiTech Jsc');
?>

</body>
</html>
