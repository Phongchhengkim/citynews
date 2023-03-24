<?php
    include("function.php");
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
                                <h4 class="card-title">User Insert Page</h4><br><br>

                                <form action="" method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                        <label for="name" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="name" name="name" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="email" name="email" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="password" id="password" name="password" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="link" class="col-sm-2 col-form-label">Comfirm Password</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="password" id="password" name="c_password" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="image" class="col-sm-2 col-form-label">Profile</label>
                                        <div class="col-sm-10">
                                            <input class="form-control image1" type="file" id="image" name="profile" >
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="image" class="col-sm-2 col-form-label"></label>
                                        <img class="showImage1 card-img-top img-fluid" style="object-fit:cover; width: 200px !important;height:150px !important;" src="./assets/images/no_image.jpg" alt="ad_image">
                                    </div>

                                    <div class="row mb-3">
                                        <label for="option" class="col-sm-2 col-form-label">Please Choose Role</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="option" id="option">
                                                <option selected value="">PLEASE CHOOSE USER ROLE</option>
                                                <option value="employee">EMPLOYEE</option>
                                                <option value="admin">ADMIN</option>
                                            </select>
                                        </div>
                                    </div>



                                    <button type="submit" name="btn_register" class="btn btn-info waves-effect waves-linght">Register User</button>
                                
                                </form>

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
<script>

    $(document).ready(function(){
        $(".image1").change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $(".showImage1").attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>