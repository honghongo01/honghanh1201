<?php
     //trait:đa thừa kế gọi phương thức ra dùng luôn


     trait Trait_1{
         function say_helli(){
             echo "Hello";
         }
     }
     trait Trait_2{
         function say_googbuy(){
             echo "goof buy";
         }
     }
     trait Trait_3{
        function say_1(){
            echo "goof buy1";
        }
        function say_2(){
            echo "goof buy2";
        }
    }
    trait Trait_4{
        function say_1(){
            echo "goof buy4";
        }
        function say_2(){
            echo "goof buy2 4";
        }
    }
    trait Trait_5{
         function say_5(){
             echo "Hello";
         }

    }
     class Trait_Ex{
         use Trait_1;
         use Trait_2;
         use Trait_3,Trait_4{
             //dùng hàm nất 3 và hàm 2 của trait_4
             //insteadOf:thay  vì
             Trait_3::say_1 insteadOf Trait_4;
             Trait_4::say_2 insteadOf Trait_3;

         }
         //đổi tên hàm
         use Trait_5{
             say_5 as public t_say; 
         }

     }
     $t=new Trait_Ex();
     $t->say_googbuy();
     $t->say_helli();
     $t->say_1();
     $t->say_2();
      $t->t_say();
      //anonymous class:class không định danh
     echo '<pre>';
    //  var_dump($t);

    var_dump(new class('do',4){
           public $mau_sac;
           public $so_chan;
           function __construct($mau_sac,$so_Chan){
               $this->mau_sac=$mau_sac;
               $this->so_chan=$so_Chan;
           }
           function intro(){
               echo $mau_sac.'   '.$so_chan;
           }
    });
      echo '</pre>';

      //self:ngay lớp này
      //this:chính đôú tượng này
      class Ban{
          public $mau_sac;
          public $so_Chan;
         public function __construct($mau_sac,$so_Chan){
            $this->mau_sac=$mau_sac;
            $this->so_chan=$so_Chan;
        }
        public function intro(){
            echo "đâya self là chiếc bàn {$this->mau_sac}{$this->so_chan}";
        }
        public function re_intro(){
            //sử dụng this và self trong hàm này k có j khác biết
          //$this->intro();
           self::intro();

        }


      }
    //   $ban=new Ban('fo',5);
    //   $ban->re_intro();

  //sử dụng this và self trong hàm này  có sự khác biết
      class Ban2 extends Ban{
        public $chat_lieu;
     
       public function __construct($mau_sac,$so_Chan,$chat_lieu){
          $this->mau_sac=$mau_sac;
          $this->so_chan=$so_Chan;
          $this->chat_lieu=$chat_lieu;
      }
      public function intro(){
          echo "đây this là chiếc bàn {$this->mau_sac}{$this->so_chan}{$this->chat_lieu}";
      }

      public function re_intro(){
      //$this->intro();
      //self là bàn 2 và intro của 2
       self::intro();

    }

    }
    $ban1=new Ban2('fo',5,'go');
    //khi gọi hàm reintro với this trả về:trả về đối tượng hiện tại là bàn 2 
    //voi self trả về sefl:dung lớp hiện tại sẽ là lớp cha so chưa viets lai nếu viết lại sẽ trả về lớp con
    $ban1->re_intro();
    //thuộc tính tĩnh.phương thức tĩnh khôn cần khởi tạo đối tượng ảnh hưởng đến self

     class Ban_3{
        public static $mes='đây llaf';
        public static function mes(){
            // echo $this->mes;
            echo self::$mes;
        }
    }

    //dùng this phải khởi tạo đối tượng dùng this looic nên xhir dùng self thôi
    $ban3=new Ban_3();
    
    Ban_3::mes();
 
//static và final
class Ban_4{
    public final function mes_2(){
        echo 'đây là final';
    }
    public static function mes_1(){
        echo 'đây là static';
    }
}
// Ban_4::mes_1();
// Ban_4::mes();
//không thể ghi đè được final
class Ban_5 extends Ban_4{
    // public final function mes_2(){
    //     echo 'đây là final';
    // }
    public static function mes_1(){
        echo 'đây là static';
    }
}
Ban_5::mes_1();

//self-static
class Ban_6{
    public static $mes='loi nhan';
    // public final function mes_2(){
    //     echo 'đây là final';
    // }
    public function mes_1(){
        // echo self::$mes;
         echo static::$mes;
    }
}
// $b=new Ban_6();
//ne dung static:vãn chạy
// $b->mes_1();
class Ban_7 extends Ban_6{
    public static $mes='loi nhan lop con';
}
//khai báo biến tĩnh không sử dụng được this
//gọi đến và ghi đè sử dụng static
//dung self vẫn trả về lớp cha
//static vua goi thuoc tinh tinhx vua ke thua và ghi de dk
$b2=new Ban_7();
$b2->mes_1();
?>