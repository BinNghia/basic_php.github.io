<!DOCTYPE html>
<html>
<body>
    <?php
        function reverseVowels(string $str) {
            $vowels = ['a','e','i','o','u'];
            $swap = [];
            $chars = str_split($str); //chuyển chuỗi thành mảng
            $swap = array_intersect($chars, $vowels); //so sánh mảng đầu với các mảng còn lại
            //trộn mảng
            $swap = array_combine(
                array_keys($swap),
                array_reverse($swap)
            );
            //thay thế
            $chars = array_replace($chars, $swap);
            //chuyển mảng thành chuỗi
            return implode('', $chars);
        }

        echo reverseVowels('Reverse Vowels In A String');
    ?>
</body>
</html>
