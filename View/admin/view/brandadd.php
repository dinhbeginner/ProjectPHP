<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Category</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
</head>

<body>
    <?php
    include "class/brand_class.php";
    $brand = new Brand;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $cartegory_id = $_POST['cartegory_id'];
        $brand_name = $_POST['brand_name'];
        $brand_image = $_FILES['brand_image'];

        $insert_brand = $brand->insert_brand($cartegory_id, $brand_name, $brand_image);

        if ($insert_brand) {
            echo '<script type="text/javascript">
                $(document).ready(function(){
                    $("#successModal").modal("show");
                    setTimeout(function(){
                        window.location.href = "http://localhost/webphp/webmang/view/admin/index.php?action=brandlist"; // Replace "index.php" with the actual URL of your index page
                    }, 2000); // Redirect after 2 seconds (adjust as needed)
                });
            </script>';
        }
    }
    ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Add Category</h1>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="cartegory_id">Select Category:</label>
                                <select class="form-control" name="cartegory_id" id="cartegory_id">
                                    <option value="#">-- Choose Category --</option>
                                    <?php
                                    $show_category = $brand->show_category();
                                    if ($show_category) {
                                        while ($result = $show_category->fetch()) {
                                            ?>
                                            <option value="<?php echo $result['id_danhmuc'] ?>"><?php echo $result['name_danhmuc'] ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="brand_name">Brand Name:</label>
                                <input required class="form-control" name="brand_name" type="text"
                                    placeholder="Enter brand name">
                            </div>
                            <div class="form-group">
                                <label for="brand_image">Brand Image:</label>
                                <input type="file" class="form-control-file" name="brand_image" accept="image/*">
                            </div>
                            <button type="submit" class="btn btn-primary">Add Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Success</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Category added successfully!
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
