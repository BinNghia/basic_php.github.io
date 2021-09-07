<!DOCTYPE html>
<html>
<body>
    <?php
        function cleanString(string $text) {
            $result = '';
            //duyệt qua các phần tử
            for ($i = 0; $i < strlen($text); $i++){
                //nếu tồn tại ký tự #
                if($text[$i] === '#') {
                    //chuỗi không trống
                    if(strlen($result) > 0) {
                        //xóa ký tự trước #
                        $result = substr($result, 0, -1);
                    }
                } else {
                    $result .= $text[$i];
                }
            }
            return $result;
        }
        echo cleanString('abc#d##c');
    ?>
</body>
</html>
