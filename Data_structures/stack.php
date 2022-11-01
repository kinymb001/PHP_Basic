<?php
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

$kin_vu = new ReadingList();

$kin_vu->push(10);
$kin_vu->push(22);
$kin_vu->push("kin_vu");
$kin_vu->push(21);
$kin_vu->push("tl");
$kin_vu->push("61th5");
$kin_vu->push(19);

print_r($kin_vu);
echo('<br>');

echo $kin_vu->pop();
echo('<br>');
echo $kin_vu->pop();
echo('<br>');
echo $kin_vu->pop();
echo('<br>');
print_r($kin_vu);