<!DOCTYPE html>
<html>
<body>
    <?php
        function createPhoneNumber($number) {
            $result = preg_replace('~.*(\d{3})[^\d]{0,7}(\d{3})[^\d]{0,7}(\d{4}).*~', '($1) $2-$3', $number);
            return $result;
        }
        echo createPhoneNumber('1234567890');
    ?>
</body>
</html>
