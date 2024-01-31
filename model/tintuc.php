<?php
class tintuc
{

    function gettintuc($id_new)
    {
        $db = new connect();
        $select ="SELECT * FROM tbl_news WHERE id_new='$id_new' ORDER by id_new ASC ";
        $result = $db->getList($select);
        return $result;
    }
    function getAlltintuc()
    {
        $db = new connect();
        $select ="SELECT * FROM tbl_news  ORDER by id_new ASC ";
        $result = $db->getList($select);
        return $result;
    }

    function gettintucindex()
    {
        $db = new connect();
        $select ="SELECT * FROM tbl_news  ORDER by id_new DESC ";
        $result = $db->getList($select);
        return $result;
    }
    
}