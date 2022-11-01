<?php
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

    $kin_vu = new Queue();

    $kin_vu->EnQueue(12);
    $kin_vu->EnQueue(11);
    $kin_vu->EnQueue(10);
    $kin_vu->EnQueue("kin");
    $kin_vu->EnQueue(13);
    $kin_vu->EnQueue(22);
    print_r($kin_vu->size());
    echo('<br>');
    $kin_vu->Dequeue();
    $kin_vu->Dequeue();
    echo('<br>');
    print_r($kin_vu->size());
    echo('<br>');
    print_r($kin_vu->getBackQueue());
    echo('<br>');
    print_r($kin_vu->getFrontQueue());

