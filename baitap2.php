<?php
function daoNguocMang($mang) {
    $n = count($mang);
    for ($i = 0; $i < $n / 2; $i++) {
        // Hoán đổi phần tử đầu và cuối
        $temp = $mang[$i];
        $mang[$i] = $mang[$n - $i - 1];
        $mang[$n - $i - 1] = $temp;
    }
    return $mang;
}

// Sử dụng hàm
$numbers = [1, 2, 3, 4, 5];
$mangDaoNguoc = daoNguocMang($numbers);
print_r($mangDaoNguoc);
?>
