# PHP Basic.
## Thực hiện bởi: Vũ Trung Kiên.

## Key word 
nginx vs apache
* nginx:là phần mềm nguồn mở làm web server ngoài các tính năng của một máy chủ HTTP, Nginx cũng có thể hoạt động như một máy chủ proxy cho email (IMAP, POP3 và SMTP) và một trình cân bằng tải (load balancer) và proxy ngược (reverse proxy) cho các máy chủ HTTP, TCP và UDP .

* apache:là chương trình máy chủ HTTP là một chương trình dành cho máy chủ đối thoại qua giao thức HTTP

* PHP-FPM là chương trình có chức năng phiên dịch php khi chạy trang web cho web server cho phép tăng tốc PHP lên gấp nhiều lần, đặc biệt phù hợp với các web server có lưu lượng truy cập lớn.

* web stacks: là tập hợp các công nghệ , ứng dụng phần mềm thường dùng để phát triển các ứng dụng web, thực hiện các trang web.

## HTML5 
là một ngôn ngữ cấu trúc và trình bày nội dung cho World Wide Web. Đây là phiên bản thứ 5 của ngôn ngữ HTML, được giới thiệu bởi World Wide Web Consortium (W3C). HTML5 vẫn sẽ giữ lại những đặc điểm cơ bản của HTML4 và bổ sung thêm các đặc tả nổi trội của XHTML, DOM cấp 2, đặc biệt là JavaScript.

## php data type
có 7 kiểu dữ liệu trong php 
* 1.Int 
khai báo cho cả số nguyên và số âm
```php
$thap_phan = 123456789; // Số thập phân
$so_am = -123; // Số âm
$bat_phan = 01234567; // số bát phân
$thap_luc_phan = 0x1A; // và số thập lục phân
```

* 2.Kiểu dữ liệu boolean

là kiểu dữ liệu đơn giản chỉ có 2 giá trị là True or False

```php
    $result = True; // biến $result có kiểu giữ liệu là boolean có giá trị là true
```

* Kiểu dữ liệu số thực
    Là những số có thêm phần dư
    ```php
        $a=1.234;
    ```
* Kiểu dữ liệu chuỗi;
    gồm chuỗi(string) và char(kí tự)

* kiểu mảng
    trong PHP kiểu dữ liệu mảng gồm các phần từ có thể có nhiều kiểu dữ liệu 

    ```php
        <?php
    $a = array(); // khởi tạo một mảng gán vào biến $a
    ?>

    ```
* kiểu null
 nó mang giá trị rỗng và gán phần tử bằng NUll

* kiểu object

## PHP Variables, Constants   
 * Variables là giá trị dữ liệu có thể thay đổi được trong chương trình.
 * Constants là hằng số để lưu trữ các giá trị cố định.

 # String funcions
* strlen($string): lấy độ dài 1 chuỗi
VD:
```php
    $b = 'khuong duy - khuong ba uoc';
    print_r(strlen($b));
```
kết quả: 26.
*   strrev(): Đảo ngược chuỗi
VD:
```php
print_r(strrev($b));
echo("<br>");
```
kết quả: cou ab gnouhk - yud gnouhk

*   substr(): trich xuat chuoi.
```php
print_r(substr($b, 4, 9));
echo("<br>");
```
kết quả: ng duy -

## Array functions
*   array_push(): chèn phần tử vào cuối mảng
```php
    $mang = ['honda','suzuki','dream'];
    array_push($mang,'audi');
    var_dump($mang);
    echo "<br>";
```
kết quả:
array(4) { [0]=> string(5) "honda" [1]=> string(6) "suzuki" [2]=> string(5) "dream" [3]=> string(4) "audi" } 

*   array_unshift(): chèn phần tử vào đầu mảng
```php
    $mang = ['honda','suzuki','dream','audi'];
    array_unshift($mang,'bycle');
    var_dump($mang);
    echo "<br>";
```
kết quả:
array(5) { [0]=> string(5) "bycle" [1]=> string(5) "honda" [2]=> string(6) "suzuki" [3]=> string(5) "dream" [4]=> string(4) "audi" } 

*   array_pop(): xoá phần tử cuối mảng
```php
    $mang = ['honda','suzuki','dream'];
    array_pop($mang);
    var_dump($mang);
    echo "<br>";
```
kết quả :
array(4) { [0]=> string(5) "bycle" [1]=> string(5) "honda" [2]=> string(6) "suzuki" [3]=> string(5) "dream" } 

*   array_shift(): xoá phần tử đầu mảng
```php
    $mang = ['honda','suzuki','dream'];
    var_dump($mang);
    echo "<br>";
```
kết quả:
array(3) { [0]=> string(5) "honda" [1]=> string(6) "suzuki" [2]=> string(5) "dream" } 

*   count($ten_mang): đếm số phần tử trong mảng
```php
    $mang = ['honda','suzuki','dream'];
    count($mang);
    echo "<br>";
```
kết quả: 3.

## Loop, if else
### loop:
* while 
```php
 $i = 1;
while ($i < 5) {
    echo "Giá trị i = $i <br />";
    $i++;
}
```
kết quả:
Giá trị i = 1
Giá trị i = 2
Giá trị i = 3
Giá trị i = 4

* do while 
```php
$i = 2;
do {
   echo "Số là " . $i . "<br/>";
   $i++;
} while($i <= 5);
```
kết quả:
Số là 2
Số là 3
Số là 4
Số là 5

* foreach
dùng để lặp các phần tử trong mảng php 
```php
foreach($a as $i) {
    echo($i.'<br>');
}
```
kết quả:
1
2
10

### if-else, else-if, switch-case:
* switch case:
```php
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
```
kết quả:[Được quản lý member]

* if-else:

```php
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
```
kết quả: Ngày làm việc!

* else-if:
```php
if ($d == "Sun") 
    echo "Chủ Nhật, Ngày nghỉ!";
elseif ($d == "Sat")    
    echo "Thứ Bảy, Ngày nghỉ!";         
else
    echo "Ngày làm việc!";
echo('<br>');
```
kết quả: Ngày làm việc!