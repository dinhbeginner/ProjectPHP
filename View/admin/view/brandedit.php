<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <section class="page-content">

            <h1 class="text-center">Danh Sách Danh Mục</h1><br>
            <section class="grid">
                <article>
                    <?php
                    include "class/brand_class.php";
                    $brand = new Brand;

                    $brand_id = isset($_GET['brand_id']) ? $_GET['brand_id'] : '';
                    $get_brand = $brand->get_brand($brand_id);

                    if ($get_brand) {
                        $result = $get_brand->fetch();
                    }

                    $selected_danhmuc = 2; // Change this to the desired id_danhmuc

                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        // Update brand only if brand_id is valid
                        if (!empty($_FILES['brand_image']['tmp_name'])) {

                            // var_dump($_FILES);


                            $uploadDir = 'assets/upload/menu/';
                            $uploadedFile = $uploadDir . basename($_FILES['brand_image']['name']);
                            $fileImage = basename($_FILES['brand_image']['name']);
                            // Check if the uploaded file is an image
                            $imageInfo = getimagesize($_FILES['brand_image']['tmp_name']);
                            if ($imageInfo !== false) {

                                if (move_uploaded_file($_FILES['brand_image']['tmp_name'], $uploadedFile)) {
                                    // Update the image path in your database
                                    $category_id = $_POST['category_id'];
                                    $brand_name = $_POST['brand_name'];


                                    $update_brand = $brand->update_brand($category_id, $brand_name, $brand_id, $fileImage);

                                    if ($update_brand) {
                                        // Display success modal
                                        echo '<script type="text/javascript">
                                            $(document).ready(function(){
                                                $("#successModal").modal("show");
                                                setTimeout(function(){
                                                    window.location.href = "http://localhost/webphp/webmang/view/admin/index.php?action=brandlist"; // Replace "index.php" with the actual URL of your index page
                                                }, 2000); // Redirect after 2 seconds (adjust as needed)
                                            });
                                          </script>';
                                    }
                                } else {
                                    echo "Image upload failed!";
                                }
                            } else {
                                echo "Invalid image format!";
                            }
                        } else {
                            echo "No file uploaded!";
                        }
                    } else {
                        echo "Bạn chưa chọn danh mục"; // Handle the case where brand_id is not set in the URL

                        // Display only the brands with the selected id_danhmuc
                        $show_category = $brand->show_category();
                        if ($show_category) {
                            while ($category_result = $show_category->fetch()) {
                                if ($category_result['id_danhmuc'] == $selected_danhmuc) {
                    ?>
                                    <option <?php if ($result['id_danhmuc'] == $category_result['id_danhmuc']) {
                                                echo "SELECTED";
                                            } ?> value="<?php echo $category_result['id_danhmuc'] ?>"><?php echo htmlspecialchars($category_result['name_danhmuc']) ?></option>
                    <?php
                                }
                            }
                        }
                    }
                    ?>

                    <div class="admin-content-right">

                        <div class="admin-content-right-category-edit">
                            <h1>Edit Category</h1>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <select name="category_id" id="">
                                    <option value="#">--Chọn Danh Mục</option>
                                    <?php
                                    $show_category = $brand->show_category();
                                    if ($show_category) {
                                        while ($category_result = $show_category->fetch()) {
                                    ?>
                                            <option <?php if ($result['id_danhmuc'] == $category_result['id_danhmuc']) {
                                                        echo "SELECTED";
                                                    } ?> value="<?php echo $category_result['id_danhmuc'] ?>"><?php echo htmlspecialchars($category_result['name_danhmuc']) ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                                <div class="row">
                                    <div class="form-group">
                                        <input required name="brand_name" type="text" class="form-control" style="margin-left:100px;width:500px;height:60px" id="category_name" placeholder="Enter brand name" value="<?php echo htmlspecialchars($result['ten_menu']) ?>">
                                    </div>
                                    <input type="file" name="brand_image" accept="image/*">
                                    <button type="submit" class="btn btn-primary w-10 " style="height:60px">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Success Modal -->
                    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="successModalLabel">Success</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Brand updated successfully!
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
        </section>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>