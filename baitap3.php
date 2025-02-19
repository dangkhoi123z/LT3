<?php
function timGiaTri($giaTri, $mang) {
    for ($i = 0; $i < count($mang); $i++) {
        if ($mang[$i] === $giaTri) { // So sánh chặt chẽ (===) để kiểm tra chính xác giá trị
            return $i; // Trả về vị trí tìm thấy
        }
    }
    return -1; // Không tìm thấy
}

// Sử dụng hàm
$traiCay = ["Apple", "Banana", "Cherry"];
$index = timGiaTri("Banna", $traiCay);
echo $index; // -1 (do "Banna" bị sai chính tả, không có trong mảng)

$index2 = timGiaTri("Banana", $traiCay);
echo "\n" . $index2; // 1 (vì "Banana" ở vị trí thứ 1)
?>
