<?php
  $mau_sac='nâu';
  $so_chan=4;
  $mau_sac_2='trắng';
  $so_chan=3;

  function intro($mau_sac,$so_chan){
      echo 'bàn có màu {$mau_sac} và có {$so_chan} chân';
  }
  class Table{

    public $mau_sac;
    public $so_chan;
    public function __construct($mau_sac,$so_chan){
        $this->mau_sac=$mau_sac;
        $this->so_chan=$so_chan;

    }
    public function intro(){
        echo "bàn có màu {$this->mau_sac} và có {$this->so_chan} chân";
    }
   
  }
  $table=new Table('trăng',4);
  echo "<pre>";
  var_dump($table);
  echo "</pre>";
$table->intro();
  class Table2{

    private $mau_sac;
    protected $so_chan;
    public function __construct($mau_sac,$so_chan){
        $this->mau_sac=$mau_sac;
        $this->so_chan=$so_chan;

    }
    function intro(){
        echo "bàn có màu {$this->mau_sac} và có {$this->so_chan} chân";
    }
    public function get_so_chan(){
        return $this->so_chan;
    }
    public function get_mau_sac(){
        return $this->mau_sac;
    }
    

    public function set_mau_sac($mau_sac){
         $this->mau_sac=$mau_sac;
    }
    public function set_so_chan($so_chan){
        $this->so_chan=$so_chan;
    }
   
   public function tang_so_chan(){

    $this->so_chan++;
   }
  }
  //vieets lai hsm dung overide
//   $table_2=new Table2('trăng',4);
//   echo $table_2->get_mau_sac();
// $table_2->tang_so_chan();
// echo $table_2->get_so_chan();
  class Table3 extends Table2{


    protected $chat_lieu;
    public function __construct($mau_sac,$so_chan,$chat_lieu){
        $this->mau_sac=$mau_sac;
        $this->so_chan=$so_chan;
        $this->chat_lieu=$chat_lieu;

    }
    function intro(){
        echo "bàn có màu {$this->mau_sac} và có {$this->so_chan} chân,{$this->chat_lieu}";
        //gọi hàm của lớp cha mà bị trình tên dung pảent chỉ dung trong nội bộ classs
        parent::intro();
    }
    public function get_chat_lieu(){
        return $this->chat_lieu;
    }
    

    public function set_chat_lieu($chat_lieu){
         $this->chat_lieu=$chat_lieu;
    }
   
   
  }
  $table_3=new Table3('trăng',4,'go');
  echo $table_3->intro();
//static:k cần khởi tạo vẫn sd đk

class Static_Table{
    public static $vi_tri="ngoài trơi";
    public static function intro(){
        echo "Ngoài trời";
    }
}
Static_Table::intro();
//abstruct:là lớp trìu tượng chỉ khai báo
//interface:danh sách hàn được sd,không có nội dung 
//abstract-interface:khao báo lk;
abstract class Abs_Table{
    public $so_chan;
    public $mau_sac;
    public function intro(){
        echo "Ngoài trời";
    }
}
class Table4 extends Abs_Table{
    public function intro()
    {
        echo "Hello ban";
    }
}
$table_4=new Table4();
$table_4->intro();

//chr khai báo
interface In_Table{
    public function intro();
    public function destroy();
}
//kế thừa nhiều interface,một class

class Table5 implements In_Table {
    public function intro()
    {
        echo "Hello ban";
    }
    public function destroy()
    {
        echo "Hủy ban";
}
}

  //trìu tượng
  //đóng gói
  //kế thừa
  //đa hình
//   echo $table->mau_sac;
?>