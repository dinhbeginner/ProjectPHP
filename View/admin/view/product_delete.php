<?php
include "../class/product_class.php";

$product = new product;

// Kiểm tra xem id_product đã được truyền và không null
if (!isset($_GET['id_product']) || $_GET['id_product'] == NULL) {
    echo '<script>window.location.href="productlist.php"</script>';
} else {
    // Lấy id_product từ query string
    $product_id = intval($_GET['id_product']); // Chắc chắn rằng id_product là một số nguyên
}

// Gọi hàm xóa sản phẩm và kiểm tra kết quả
$delete_product = $product->delete_product($product_id);

// Kiểm tra kết quả và xử lý
if ($delete_product) {
    // Nếu xóa thành công, chuyển hướng người dùng đến trang danh sách sản phẩm
    echo '<script>window.location.href="productlist.php"</script>';
} else {
    // Nếu không thành công, hiển thị thông báo lỗi cho người dùng
    echo '<script>alert("Đã xảy ra lỗi khi xóa sản phẩm. Vui lòng thử lại sau.")</script>';
    echo '<script>window.location.href="productlist.php"</script>';
}
?>
