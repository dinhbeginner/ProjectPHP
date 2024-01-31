<?php
class Comment
{
    function sendCmt($idsp, $cmt, $iduser, $rate)
    {
        $db = new connect();
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $createdate = date('Y-m-d H:i:s');
        
        // Check if the comment already exists for the user and product
        $existingComment = $this->getExistingComment($iduser, $idsp);

        if ($existingComment) {
            // If the comment exists, update the existing comment instead of inserting a new one
            $query = "UPDATE comment SET discriber = '$cmt', star = $rate, date = '$createdate' 
                      WHERE id_comment = $existingComment";
        } else {
            // If the comment does not exist, insert a new comment
            $query = "INSERT INTO comment(id_comment, id_khachhang, id_product, discriber, star, date) 
                      VALUES (Null, '$iduser', '$idsp', '$cmt', $rate, '$createdate')";
        }

        $result = $db->exec($query);
        return $result;
    }

    // Function to check if a comment already exists for the user and product
    private function getExistingComment($iduser, $idsp)
    {
        $db = new connect();
        $query = "SELECT id_comment FROM comment WHERE id_khachhang = '$iduser' AND id_product = '$idsp'";
        $result = $db->getList($query);
        $existingComment = $result->fetchColumn(); // Fetch the existing comment ID

        return $existingComment;
    }

    function getComment()
    {
        $db = new connect();
        $query = "SELECT * FROM comment ORDER BY id_comment DESC";
        $result = $db->getList($query);
        return $result;
    }
    function getCustomerNames(){
        $db = new connect();
        $query = "SELECT *
                  FROM comment c
                  JOIN tbl_khachhang cu ON c.id_khachhang = cu.id_customer
                  ORDER BY c.id_comment DESC";
        $result = $db->getList($query);
        return $result;
    }
    
}
?>
