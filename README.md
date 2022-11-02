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

## String funcions
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

# Php-data-structures-algorithms

## Data-structures.
### Stack.
Ngăn xếp, là kiểu danh sách dữ liệu mà cho phép bổ xung và loại bỏ luôn ở được thực hiện ở 1 đầu.
*   push:thêm phần tử vào stack ,tức là nó được thêm vào sau các phần tử đã có sẵn trong stack.
*   pop : giải phóng và trả về phần tử trên đỉnh stack- phần tử cuối them vào trc khi thực hiện pop,phần tử này say khi lấy ra sẽ bị xóa khỏi stack.
*   isEmpty(): kiểm tra xem stack rỗng hay không.
*   top():trả về giá trị trên cùng mà không xóa nó khỏi stack.
#### Cài đặt:
```php
class ReadingList
{
    protected $stack;
    protected $limit;

    public function __construct($limit = 10) {
        $this->stack = array();
        $this->limit = $limit;
    }

        public function push($item) {
            if (count($this->stack) < $this->limit) {
                array_unshift($this->stack, $item);
            } else {
                throw new RunTimeException('Stack is full!');
            }
        }

    public function pop() {
        if ($this->isEmpty()) {
            throw new RunTimeException('Stack is empty!');
        } else {
            return array_shift($this->stack);
        }
    }

    public function top() {
        return current($this->stack);
    }

    public function isEmpty() {
        return empty($this->stack);
    }
}
```
*   thêm phần tử vào đầu stack:
```php
    public function push($item) {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            throw new RunTimeException('Stack is full!');
        }
    }
```
*   Xem phần tử đầu tiên:
```php
    public function top() {
        return current($this->stack);
    }
```

### Queue.
*   Hàng đợi (Queue) là một cấu trúc dữ liệu trừu tượng. Đặc điểm của hàng đợi là FIFO (first in first out) - có nghĩa là vào trước ra trước. Khác với ngăn xếp, hàng đợi là mở ở cả hai đầu. Một đầu luôn luôn được sử dụng để chèn dữ liệu vào (hay còn gọi là sắp vào hàng) và đầu kia được sử dụng để xóa dữ liệu (rời hàng). Cấu trúc dữ liệu hàng đợi tuân theo phương pháp First-In-First-Out, tức là dữ liệu được nhập vào đầu tiên sẽ được truy cập đầu tiên.
* Cài đặt:
```php
class Queue{
        public $front;
        public $back;
        public $Queue = array();

        function __construct(){
            $this->back = -1;
            $this->front = -1;
        }
        
        //khoi tao ham check queue co ton tai hay ko
        public function isEmpty(){
            if($this->back == $this->front){
                return  $this->font == null;
            }       
        }

        //ham tra ve so luong phan tu cua queue:
        public function size(){
            return($this->back - $this->front);
        }

        //ham them phan tu vao cuoi queue:
        public function EnQueue($x){
            $this->Queue[++$this->back] = $x;
            print_r($x." da dc them vao cuoi queue. \n");
            echo('<br>');
        }

        //ham xoa phan tu o dau queue:
        public function Dequeue(){
            if($this->back == $this->front){
                print_r("queue is empty. \n");
            } else {
                $x = $this->Queue[++$this->front];
                print_r($x."da dc xoa. \n");
                echo('<br>');
            }
        }

        //ham lay phan tu o dau queue:
        public function getFrontQueue(){
            if($this->back == $this->front) {
                echo "Queue is empty. \n";
            } else {
                return $this->Queue[$this->front+1];
            }
        }

        //ham lay phan tu o cuoi queue:
        public function getBackQueue(){
            if($this->back == $this->front) {
                echo "Queue is empty. \n";
            } else {
                return $this->Queue[$this->back];
            }
        }
    };
```

## Algorithms.
### Search.
#### Linear Search:
*   Bắt đầu từ bản ghi đầu tiên của mảng, duyệt từ đầu mảng đến cuối mảng với x.
*   Nếu phần tử đang duyệt bằng x thì trả về vị trí.
*   Nếu không tìm thấy bất cứ phần từ nào khi đã duyệt hết thì trả về -1.
```php
function linear_search($array, $search )
{
    $len = count($array);
    for($i = 0; $i < $len; $i++)
    {
        if($array[$i] == $search)
        {
            return $i;
        }
    }
    return -1;

}
$array = ["kin", "vu", 14, 22, 19, 33];
$result = linear_search($array, "vu");
echo $result;
```
* Kết quả: 2.

#### Binary search:
*   Tìm kiếm nhị phân phù hợp với mảng đã được sắp xếp Thụât toán tìm kiếm nhị phân thực hiện tìm kiếm một mảng đã sắp xếp bằng cách liên tục chia các khoảng tìm kiếm thành 1 nửa. Bắt đầu với một khoảng từ phần tử đầu mảng, tới cuối mảng. Nếu giá trị của phần tử cần tìm nhỏ hơn giá trị của phần từ nằm ở giữa khoảng thì thu hẹp phạm vi tìm kiếm từ đầu mảng tới giửa mảng và nguợc lại. Cứ thế tiếp tục chia phạm vi thành các nửa cho dến khi tìm thấy hoặc đã duyệt hết.
*   Cài đặt:
```php
function binary_search($array, $search)
{
    sort($array);
    $left = 0;
    $right = count($array) - 1;
    while($left < $right)
    {
        $mid = ceil(($right + $left)/2);
        if($array[$mid] == $search)
        {
            return $mid;
        }
        elseif($array[$mid] < $search)
        {
            $left = $mid + 1;
        }
        else{
            $right = $mid - 1;
        }

    }
    return -1;

}
function binary_search_2($array, $left, $right, $search)
{
    if($right >$left)
    {
        $mid = ceil(($left + $right)/2);
        if($array[$mid] == $search)
        {
            return $mid;
        }
        elseif($array[$mid] < $search)
        {
            return binary_search_2($array, $mid + 1, $right, $search);
        }
        else{
            return binary_search_2($array, $left, $mid - 1, $search);
        }
    }
    return -1;
}
```
### Sort.
#### Insert sort:
* Insertsort: Thuật toán duyệt qua từng phần tử mảng và chèn nó vào đúng vị trí trong mảng con(từ phần tử đầu tien đến
  phần tử trước đang duyệt  ) sao cho vẫn bảo đảm đúng tính chất.

* Tạo mảng con đã xắp xếp có 1 phần tử.
* Duyệt từ phần tử thứ 2 của mảng và sắp xếp vào mảng con đã săp xếp ( từ vị trí đâu tiên tới vị trí trước phần tử đang
  xét)
* Sau mỗi lần duyệt, số phần tử trong mảng con đã sắp xếp sẽ tăng lên.

* Cài đặt:
```php
function insert_sort( &$array )
{
    $len  =  count($array);
    for ($i = 1; $i < $len; $i++)
    {
        $key = $array[$i];
        $j = $i - 1;
        while($j >= 0 && $array[$j] > $key ) {
            $array[$j + 1] = $array[$j];
            $j--;
        }
        $array[$j + 1]= $key;

    }
}
```
#### Quick Sort:
*  Thuật toán sẽ chọn 1 phần tử trong mảng là làm pivot ( điểm đánh dấu). Mấu chốt chính của thuật toán là phân đoạn ( hàm partition ): Chọn pivot và sắp xếp vào đúng vị trí trong mảng, chuyển tất cả các phần tử nhỏ hơn pivot sang bên trái pivot và chuyển tất cả các phần tử lớn hơn pivot sang bên phải pivot. Khi đó ta có hai mảng con bên trái pivot và bên phải pivot. Tiếp tục phân đoạn cho hai mảng con đó.

* Cài đặt:
```php
function partition(&$array, $low, $high)
{
    $pivot = $array[$high];
    $left = $low;
    $right = $high - 1;
    while(true) {
        while ($left <= $right && $array[$left] < $pivot) $left++;
        while ($right >= $left && $array[$right] > $pivot) $right--;
        if ($left >= $right) break;
        swap($array[$left], $array[$right]);
        $left++;
        $right--;

    }
    swap($array[$left],$array[$high]);
    return $left;
}
function quick_sort(&$array, $low,$high)
{
    if($low < $high)
    {
        $pi = partition($array,$low,$high);
        quick_sort($array,$low,$pi - 1);
        quick_sort($array,$pi + 1, $high);
    }
}
```

#### Select Sort:
*   Ý tưởng thuật toán: Duyệt qua từng phần tử mảng và tìm kiếm phần tử lớn nhất ( nhỏ nhất ) trong mảng chưa sắp xếp và đổi chỗ cho phần tử ở đầu mảng chưa sắp xếp.

*   Thuật toán chia mảng thành hai mảng :
-   Mảng đã sắp xếp
-   Mảng chưa sắp xếp
*   Sau mỗi bước lặp, số phần tử cuả mảng đã sắp xếp tăng lên 1.

* Cài đặt:
```php
function selection_sort(&$array, $mode = 'ASC')
{
    $len = count($array);
    for ($i = 0; $i < $len - 1; $i++) {
        for ($j = $i + 1; $j < $len; $j++) {

            if ($mode == "DES") {
                if ($array[$i] < $array[$j]) {
                    swap($array[$i], $array[$j]);
                }
            } else {
                if ($array[$i] > $array[$j]) {
                    swap($array[$i], $array[$j]);
                }
            }
        }
    }
}
```
