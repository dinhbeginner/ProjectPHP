<?php
class product
{

    function getproductDiscount()
    {
        $db = new connect();
        $select = "SELECT id_menu,product_id,product_name,product_price,product_price_new,product_img,product_img2 FROM tbl_product  LIMIT 5 ";
        $result = $db->getList($select);
        return $result;
    }
    function getProductSale($start, $limit)
    {
        $db = new connect();
        $select = "SELECT id_menu,product_id,product_name,product_price,product_price_new,product_img,product_img2 FROM tbl_product WHERE product_price!='' LIMIT " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }
    function getproductNew()
    {
        $db = new connect();
        $select = "SELECT id_menu,product_id,product_name,product_price,product_price_new,product_img,product_img2 FROM tbl_product  LIMIT 6 OFFSET 5  "; // LIMIT 6 OFFSET 5 bắt đầu dòng thứ 5 và lấy 6 sản phẩm
        $result = $db->getList($select);
        return $result;
    }


    function getLimitproduct()
    {


        $db = new connect();
        $select = "SELECT id_menu,product_id, product_name, product_price, product_price_new, product_img, product_img2 FROM tbl_product  LIMIT 12 ";
        $result = $db->getList($select);
        return $result;
    }
    function getAllproducttrang1($start, $limit)
    {
        $db = new connect();
        $select = "SELECT id_menu,product_id, product_name, product_price, product_price_new, product_img, product_img2 FROM tbl_product  LIMIT " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }
    function getAllproduct()
    {
        $db = new connect();
        $select = "SELECT * FROM tbl_product ";
        $result = $db->getList($select);
        return $result;
    }

    function getProductDetail($product_id)
    {
        $db = new connect();
        $select = "SELECT * FROM tbl_product WHERE product_id='$product_id'";
        $result = $db->getList($select);
        return $result;
    }
    function getProductMenu($id_menu, $start, $limit)
    {
        $db = new connect();
        $select = "SELECT * FROM tbl_product WHERE id_menu='$id_menu' LIMIT " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }

    function timKiemmTenSP($tenhh)
    {
        // b1: Connect to the database
        $db = new connect();

        // b2: Construct the SQL query
        $select = "SELECT * FROM tbl_product
               WHERE product_name LIKE '%$tenhh%'";

        // Check if the form is submitted and handle sorting
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["orderby"])) {
            // Get the selected sorting option from the form
            $orderby = $_POST["orderby"];

            // Append the ORDER BY clause based on the selected option
            switch ($orderby) {
                case 'price':
                    $select .= " ORDER BY product_price_new ASC";
                    break;
                case 'price-desc':
                    $select .= " ORDER BY product_price_new DESC";
                    break;
                default:
                    // Default sorting or any other case
                    $select .= " ORDER BY product_id DESC";
                    break;
            }
        } else {
            // Default sorting
            $select .= " ORDER BY product_id DESC";
        }

        // Execute the query using getList
        $result = $db->getList($select);

        return $result;
    }
    function orderby($tk)
    {
        // b1: Connect to the database
        $db = new connect();

        // b2: Construct the SQL query
        $select = "SELECT * FROM tbl_product 
               ORDER BY ";

        // Determine the sorting criteria
        switch ($tk) {
            case 'ASC':
                $select .= "CAST(product_price_new AS DECIMAL(10, 0)) ASC ";
                break;
            case 'DESC':
                $select .= "CAST(product_price_new AS DECIMAL(10, 0)) DESC";
                break;
            case 'ID_DESC':
                $select .= "product_id  DESC";
                break;
        }

        // b3: Execute the query using getList
        $result = $db->getList($select);

        return $result;
    }
}
