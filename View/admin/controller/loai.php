<?php
$act = "loai";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'loai':
        include_once "view/brandadd.php";
        break;
    case 'loai_action':
        if (isset($_POST['submit_file'])) {
            $file = $_FILES['file']['tmp_name'];
            file_put_contents($file, str_replace("\xEF\xBB\xBF", "", file_get_contents($file)));
            $file_open = fopen($file, "r");
            while ($csv = fgetcsv($file_open, 1000, ",")) {
                if (count($csv) == 4) {
                    $idmenu = $csv[0];
                    $iddanhmuc = $csv[1];
                    $tenmenu = $csv[2];
                    $imgmenu = $csv[3];

                    // Validate id_danhmuc
                    if (!empty($iddanhmuc)) {
                        $addfile = new addfile();
                        $add = $addfile->add($idmenu, $iddanhmuc, $tenmenu, $imgmenu);
                        if ($add) {
                            echo '<script>alert("Import successful");</script>';
                            echo '<meta http-equiv="refresh" content="0;url=http://localhost/webphp/webmang/view/admin/index.php?action=brandlist"/>';
                        }
                    } else {
                        echo '<script>alert("Invalid id_danhmuc value: ' . $iddanhmuc . '");</script>';
                    }
                } else {
                    echo '<script>alert("Invalid CSV format");</script>';
                }
            }
        }
        break;
}
