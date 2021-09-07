<!DOCTYPE html>
<html>
<body>
  <?php
    function commas($num) {
      //nếu là số thập phân
    	if(fmod($num, 1) != 0){
        //làm tròn đến 3 chữ số thập phân sau dấu phẩy
        echo number_format($num, 3, '.', ',');
      } else {
          //không là số thập phân thì trả về số ấy
          echo number_format($num);
      }
    }
    echo commas(-1000000.123);
  ?>
</body>
</html>
