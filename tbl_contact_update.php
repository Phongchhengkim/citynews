<?php
    include("function.php");
    $id_para = $_GET['id'];
    include("header.php");
?>

            <!-- ========== Left Sidebar Start ========== -->
            <?php
                include("left_side_bar.php");
            ?>
            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body">
                                <h4 class="card-title">News Update Page</h4><br><br>
                                <?php
                                    $sql_select = "SELECT * FROM tbl_contact WHERE id=$id_para";
                                    $result = $con->query($sql_select);
                                    $row=mysqli_fetch_assoc($result);
                                    echo'
                                        <form action="" method="post" enctype="multipart/form-data">
                                        <input value="'.$row['id'].'" type="hidden" name="update_contact_id">

                                        <div class="row mb-3">
                                            <label for="title" class="col-sm-2 col-form-label">Phone Number</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" id="" name="phone_number" value="'.$row['phone_number'].'">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="writer_name" class="col-sm-2 col-form-label">Address</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" id="" name="address" value="'.$row['address'].'">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="image" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" id="" type="text" name="email" value="'.$row['email'].'">
                                            </div>
                                        </div>

                                        <button type="submit" name="btn_contact_update" class="btn btn-info waves-effect waves-linght">Update Contact Data</button>
                                        </form>
                                    ';
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- End Page-content -->
                <?php
                    include("footer.php");
                ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
        <!-- Right Sidebar -->
        <?php
            include("right_side_bar.php");
        ?>
        <!-- /Right-bar -->
    </body>

</html>