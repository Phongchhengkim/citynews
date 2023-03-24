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
                            <div class="d-flex align-items-center justify-content-between my-2">
                                    <h4 class="card-title">Advertisement Page</h4>
                                    <a href="tbl_ads_insert.php"> <button class="btn btn-success waves-effect waves-linght">Add New advertisement</button></a>
                                    </div>

                                <form action="" method="post" enctype="multipart/form-data">


                                    <div class="row mb-3">
                                        <label for="image" class="col-sm-2 col-form-label">Advertisement Banner</label>
                                        <div class="col-sm-10">
                                            <input class="form-control image1" type="file" id="image" name="ads_banner">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="image" class="col-sm-2 col-form-label"></label>
                                        <img class="showImage1 card-img-top img-fluid" style="object-fit:cover; width: 800px !important;height:160px !important;" src="./assets/images/no_image.jpg" alt="ad_image">
                                    </div>

                                    <div class="row mb-3">
                                        <label for="image" class="col-sm-2 col-form-label">Advertisement small</label>
                                        <div class="col-sm-10">
                                            <input class="form-control image2" type="file" id="image" name="ads_small">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="image" class="col-sm-2 col-form-label"></label>
                                        <img class="showImage2 card-img-top img-fluid" style="object-fit:cover; width: 200px !important;height:150px !important;" src="./assets/images/no_image.jpg" alt="ad_image">
                                    </div>

                                    <button type="submit" name="btn_insert_ads" class="btn btn-info waves-effect waves-linght">Insert New Advertisement</button>
                                
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

    $(document).ready(function(){
        $(".image2").change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $(".showImage2").attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>
