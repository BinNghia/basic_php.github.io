<!DOCTYPE html>
<html>
<body>

<?php
    function LetterChanges($str) { 
        //độ dài chuỗi 
        $n = strlen($str); 
        for ($i = 0; $i < $n; $i++) {
            //trả về giá trị ASCII của kí tự truyền vào
            $ord = ord($str{$i});
            if ($ord >= ord('a') && $ord < ord('z') || $ord >= ord('A') && $ord < ord('Z')) {
                $ord += 1;
            } elseif ($ord == 'z') {
                $ord = ord('a');
            } elseif ($ord == "Z") {
                $ord = ord('A');
            }
            //in ra ký tự trong bảng mã ASCII
            $chr = chr($ord);
            if (in_array($chr, ['a', 'e', 'i', 'o', 'u'])) {
                //viết hoa nguyên âm
                $chr  =  strtoupper($chr);
            }
            //in chuỗi
            $str{$i} = $chr;   
        }
        return $str;
    }
    echo LetterChanges('hello*3');
?>

</body>
</html>
