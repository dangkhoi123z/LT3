<?php
$students = [
[ "name" => "Nguyen Van Nam", "namSinh" => "18-2-2008", "gioiTinh" => "Nam", "Toan" => 9, "Van" =>8, "Anh" =>8 ],
[ "name" => "Nguyen Huu Bich Ngoc", "namSinh" => "18-2-2008", "gioiTinh" => "Nu", "Toan" => 7, "Van" =>8, "Anh" =>7 ],
[ "name" => "Tran Van Minh", "namSinh" => "10-2-2008", "gioiTinh" => "Nam", "Toan" => 7, "Van" =>7, "Anh" =>7 ],
[ "name" => "Bui Xuan Ngoc", "namSinh" => "14-10-2008", "gioiTinh" => "Nu", "Toan" => 9, "Van" =>9, "Anh" =>7 ],
[ "name" => "Ha Van Nam", "namSinh" => "11-3-2008", "gioiTinh" => "Nam", "Toan" => 7, "Van" =>7, "Anh" =>7 ],
[ "name" => "Nguyen Van Nam", "namSinh" => "11-9-2008", "gioiTinh" => "Nam", "Toan" => 9, "Van" =>8, "Anh" =>8 ],
[ "name" => "Nguyen Nhu Ngoc", "namSinh" => "15-3-2008", "gioiTinh" => "Nu", "Toan" => 7, "Van" =>8, "Anh" =>9 ],
[ "name" => "Tran Van Minh", "namSinh" => "9-4-2008", "gioiTinh" => "Nam", "Toan" => 7, "Van" =>7, "Anh" =>7 ],
[ "name" => "Bui Hai Linh", "namSinh" => "6-2-2008", "gioiTinh" => "Nu", "Toan" => 9, "Van" =>9, "Anh" =>7 ],
[ "name" => "Bui Hoan Thanh", "namSinh" => "3-2-2008", "gioiTinh" => "Nam", "Toan" => 7, "Van" =>7, "Anh" =>7 ],
[ "name" => "Nguyen Van Nam", "namSinh" => "1-2-2008", "gioiTinh" => "Nam", "Toan" => 9, "Van" =>8, "Anh" =>8 ],
[ "name" => "Du My Linh", "namSinh" => "18-2-2008", "gioiTinh" => "Nu", "Toan" => 7, "Van" =>8, "Anh" =>7 ],
[ "name" => "Tran Van Minh", "namSinh" => "17-2-2008", "gioiTinh" => "Nam", "Toan" => 7, "Van" =>7, "Anh" =>7 ],
[ "name" => "Khanh Ha", "namSinh" => "16-2-2008", "gioiTinh" => "Nu", "Toan" => 9, "Van" =>9, "Anh" =>7 ],
[ "name" => "Khoi Khu Kho", "namSinh" => "15-2-2008", "gioiTinh" => "Nam", "Toan" => 7, "Van" =>7, "Anh" =>7 ],
[ "name" => "Nguyen Van Nam", "namSinh" => "14-2-2008", "gioiTinh" => "Nam", "Toan" => 9, "Van" =>8, "Anh" =>8 ],
[ "name" => "Nguyen Huu Dung", "namSinh" => "13-2-2008", "gioiTinh" => "Nu", "Toan" => 7, "Van" =>8, "Anh" =>7 ],
[ "name" => "Tran Van Minh", "namSinh" => "11-2-2008", "gioiTinh" => "Nam", "Toan" => 7, "Van" =>7, "Anh" =>7 ],
[ "name" => "Ho Ngoc Ha", "namSinh" => "18-2-2008", "gioiTinh" => "Nu", "Toan" => 9, "Van" =>9, "Anh" =>10 ],
[ "name" => "Nguyen Van Nam", "namSinh" => "10-2-2008", "gioiTinh" => "Nam", "Toan" => 7, "Van" =>7, "Anh" =>10] 
];

foreach ($students as &$student) {
    $student['tb'] = round(($student["Toan"] + $student["Van"] + $student["Anh"]) / 3, 2);
}
unset($student);
function inRaManHinh($students) {
    foreach ($students as $student) {
        echo "Họ tên: " . $student['name'] . ", Ngày sinh: " . $student['namSinh'] . ", Giới tính: " . $student['gioiTinh'] . ", Toán: " . $student['Toan'] . ", Văn: " . $student['Van'] . ", Tiếng Anh: " . $student['Anh'] . ", Điểm TB: " . $student['tb'] . "<br>";
    }
    echo "<br>";
}
function sapXepTheoTen($students) {
    usort($students, function($a, $b) {
        return strcmp($a['name'], $b['name']);
    });
    return $students;
}

function sapXepTheoDiemTrungBinh($students) {
    usort($students, function($a, $b) {
        return $b['tb'] <=> $a['tb'];
    });
    return $students;
}

function layNhungSinhVienTren8d($students) {
    return array_filter($students, function($student) {
        return $student['tb'] >= 8.0;
    });
}
function layDanhSachNu($students) {
    return array_filter($students, function($student) {
        return $student['gioiTinh'] === 'Nu';
    });
}
function sinhVienNuDiemCaoNhat($students) {
    $females = layDanhSachNu($students);
    $svNuDiemCaoNhat = null;
    foreach ($females as $student) {
        if ($svNuDiemCaoNhat === null || $student['tb'] > $svNuDiemCaoNhat['tb']) {
            $svNuDiemCaoNhat = $student;
        }
    }
    echo "<br>";
    return $svNuDiemCaoNhat;
}
echo "sap xep theo ten". "<br>";
$svDuocXepTheoTen = sapXepTheoTen($students);
inRaManHinh($svDuocXepTheoTen);
echo "danh sach nu sinh ". "<br>";
$svNu = layDanhSachNu($students);
inRaManHinh($svNu);
echo "sap xep theo diem trung binh". "<br>";
$svDuocXepTheoDiemTB = sapXepTheoDiemTrungBinh($students);
inRaManHinh($svDuocXepTheoDiemTB);
echo "hoc sinh diem tren 8". "<br>";
$svDiemTren8 = layNhungSinhVienTren8d($students);
inRaManHinh($svDiemTren8);
echo "Bạn nữ có Điểm TB cao nhất";
$svNuDiemCaoNhat = sinhVienNuDiemCaoNhat($students);
inRaManHinh([$svNuDiemCaoNhat]);