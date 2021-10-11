
<?php
    class HomeController
    {
        function __construct()
        {
            $action = getIndex('action','index');//hàm mặc định là index nếu không có hàm action
            if(method_exists($this, $action))
            {//Nếu hàm action tồn tại
                $this->$action();
            }
            else
            {//Hàm action không tồn tại
                echo "Chưa xây dựng";
            }
          
        }
        function index()
        {
        
          $m= new SachModel();
          $dataloai=$m->getloai();
          $data_sach=$m->getsach();
          // var_dump($data_sach);
          //   foreach ($dataloai as $key => $value) {
          //       # code...
          //       echo $value['tenloai']."<br>";
          //   }
         include "View/homeindex.php";
        }





        function F1()
        {
            $m = new SachModel();
            $dataAll = $m->getsach();
            var_dump($dataAll);
            // $dataN = $m->getnRandom(5);
            // $dataLoai = $m->getLoai();
            // include "View/productF1.php";
        }
        function F2()
        {
            $m = new SachModel();
            $dataAll = $m->getLoai();
            var_dump($dataAll);
            // $dataN = $m->getnRandom(5);
            // $dataLoai = $m->getLoai();
            // include "View/productF1.php";
        }
        function F3()
        {
            $m = new SachModel();
    
           $dataN = $m->getnRandom(5);
           var_dump($dataN);
            // $dataLoai = $m->getLoai();
            // include "View/productF1.php";
        }


    }

?>