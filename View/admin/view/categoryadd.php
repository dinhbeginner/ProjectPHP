<div class="be-wrapper be-fixed-sidebar">
<div class="container">
    <section class="page-content ml-5">

        <h1 class="text-center">Danh Sách Danh Mục</h1><br>
        <section class="grid">
            <article>
                <?php



                include "class/cartegory_class.php";

                $category = new Category;
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $category_name = $_POST['category_name'];
                    $insert_category = $category->insertCategory($category_name);
                    if ($insert_category) {
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




                ?>
                <div class="admin-content-right">
                    <div class="admin-content-right-category-edit">
                        <h1>ADD Category</h1>
                        <form action="" method="POST">
                            <div class="row">
                                <div class="form-group">

                                    <input required name="category_name" type="text" class="form-control" style="margin-left:100px;width:500px;height:60px" id="category_name" placeholder="Enter category name">
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

    </section>


</div>