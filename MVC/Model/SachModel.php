<?php
    class SachModel extends Database
    {
        function getSach()
        {
            return $this->selectQuery("select * from sach ");
        }
        function getLoai()
        {            
            return $this->selectQuery("select * from loai ");
        }
        function searchSach($name)
        {
            $sql="select * from sach where tensach like ? ";
            $name_arr = ["%$name%"];
            return $this->selectQuery($sql, $name_arr);
        }
        function getnRandom($n)
        {//lấy n cuốn sách ngẫu nhiên return array
            return $this->selectQuery("select * from sach order by rand() limit 0,$n");
        }
    }


?>