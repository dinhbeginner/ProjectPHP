<?php
  class menu
  {

      function getImgMenu()
      {
          $db = new connect();
          $select = "SELECT id_menu,ten_menu,imag_danhmuc_ FROM tbl_menu   ";
          $result = $db->getList($select);
          return $result;
      }
      function getMenu($id_danhmuc)
      {
          $db = new connect();
          $query ="SELECT id_menu,id_danhmuc,ten_menu FROM tbl_menu WHERE id_danhmuc='$id_danhmuc'";
          $result = $db->getList($query);
          return $result;
      }
  }