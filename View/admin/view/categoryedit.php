<div class="be-wrapper be-fixed-sidebar">
    <div class="container">
        <section class="page-content">

            <h1 class="text-center">Danh Sách Danh Mục</h1><br>
            <section class="grid">
                <article>
                    <?php
                    $result = [];
                    // Check if category_id is set in the URL parameters
                    if (isset($_GET['category_id'])) {
                        $category_id = $_GET['category_id'];

                        include "class/cartegory_class.php";

                        $category = new Category;

                        // Fetch category details only if category_id is valid
                        $get_category = $category->getCategory($category_id);
                        if ($get_category) {
                            $result = $get_category->fetch();
                        }

                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            $category_name = $_POST['category_name'];

                            // Update category only if category_id is valid
                            if (isset($category_id)) {
                                $update_category = $category->updateCategory($category_name, $category_id);
                                if ($update_category) {
                                    echo '<script type="text/javascript">
                                        $(document).ready(function(){
                                            $("#successModal").modal("show");
                                            setTimeout(function(){
                                                window.location.href = "http://localhost/webphp/webmang/view/admin/index.php?action=ListDanhmuc"; // Replace "index.php" with the actual URL of your index page
                                            }, 2000); // Redirect after 2 seconds (adjust as needed)
                                        });
                                    </script>';
                                }
                            }
                        }
                    } else {
                        // Handle the case where category_id is not set in the URL
                        echo " Bạn chưa chọn danh mục";
                    }
                    ?>


                    <div class="admin-content-right">
                        <div class="admin-content-right-category-edit">
                            <h1>Edit Category</h1>
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="form-group">

                                        <input required name="category_name" type="text" class="form-control" style="margin-left:100px;width:500px;height:60px" id="category_name" placeholder="Enter category name" value="<?php echo $result['name_danhmuc'] ?>">
                                    </div>
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
                                    Category updated successfully!
                                </div>
                            </div>
                        </div>
                    </div>



            </section>

    </div>



</div>