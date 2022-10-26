<?php
//khai bao mang:
$a = [1, 2, 10, 'kin'];
//duyet mang:
for($i = 0; $i<4; $i++){
    echo($a[$i]);
    echo(' ');
};
echo('<br>');
//array function:

//array_merge: dung de gop 2 mang.
$c = [7, 'haha', 'vu'];
$d = array_merge($a, $c);
print_r($d);
echo('<br>');

//array_pop: xoa phan tu cuoi va tra ve gia tri cua no.
array_pop($a);
print_r($a);
echo('<br>');

//array_reverse(): tra ve mang voi thu tu bi dao nguoc.
print_r(array_reverse($a));
echo('<br>');

print_r(array_sum($c));
echo("<br>");

//khai bao chuoi
$b = 'khuong duy - khuong ba uoc';
echo($b);
echo('<br>');

print_r(strlen($b));
echo('<br>');

//string function:

//trim(): xoa khoang trong trong xau.
print_r(trim($b));
echo("<br>");

//substr(): trich xuat chuoi.
print_r(substr($b, 4, 9));
echo("<br>");

//strrev(): dao nguoc chuoi tu cuoi len dau.
print_r(strrev($b));
echo("<br>");

//vong lap trong PHP.
//vong lap while:
$i = 1;
while ($i < 5) {
    echo "Giá trị i = $i <br />";
    $i++;
}

//vong lap do while:
$i = 2;
do {
   echo "Số là " . $i . "<br/>";
   $i++;
} while($i <= 5);

//vong lap foreach:
foreach($a as $i) {
    echo($i.'<br>');
}

//cau dieu kien trong PHP
//if:
$number = 1990;
if (($number % 2) == 0)
    echo("$number là số chẵn");
echo('<br>');

//if-else:
$d = date("D");
if (($d == "Sun") || ($d == "Sat"))
{
    echo "Ngày nghỉ!";
} 
else
{
    echo "Ngày làm việc!";
}
echo('<br>');

//cau lenh 3 thanh phan:
(($d == "Sun") || ($d == "Sat")) ? printf("Ngày nghỉ!"): printf("Ngày làm việc!");
echo('<br>');

//cau lenh else-if:
if ($d == "Sun") 
    echo "Chủ Nhật, Ngày nghỉ!";
elseif ($d == "Sat")    
    echo "Thứ Bảy, Ngày nghỉ!";         
else
    echo "Ngày làm việc!";
echo('<br>');

//cau lenh switch-case:
$role = 'admin'; // vip, mode, member
    switch ($role)
    {
        default:
            echo '[Bị cấm truy cập]'; break;   // <------ khi code thi hành gặp break thì thoát switch tại break;
        case 'admin':
            echo '[Được quản lý member]'; break;
        case 'mod':
            echo '[Được viết bài]'; break;
        case 'vip':
            echo '[Được đọc bài đặt biệt]'; break;
        case 'member':
            echo '[Được đọc bài viết thường]'; break;
    }

