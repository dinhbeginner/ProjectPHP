<?php
class danhmuc
{

    function getDanhMuc()
    {
        $db = new connect();
        $select ="SELECT id_danhmuc,name_danhmuc FROM tbl_danhmuc ORDER by id_danhmuc ASC ";
        $result = $db->getList($select);
        return $result;
    }
   
        function getBannerWatch() {
            $db = new Connect();
            $select = "SELECT img FROM tbl_banner_menu WHERE id_menu = 1";
            $result = $db->getList($select);
            return $result;
        }
        function getBannerBag() {
            $db = new Connect();
            $select = "SELECT img FROM tbl_banner_menu WHERE id_menu = 6";
            $result = $db->getList($select);
            return $result;
        }
     
    
}