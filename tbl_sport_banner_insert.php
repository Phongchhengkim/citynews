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
                                <h4 class="card-title">Sport Banner Insert Page</h4><br><br>

                                <form action="" method="post" enctype="multipart/form-data">

                                    <div class="row mb-3">
                                        <label for="image" class="col-sm-2 col-form-label">Sport Banner</label>
                                        <div class="col-sm-10">
                                            <input class="form-control image1" type="file" id="image" name="sp_banner">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="image" class="col-sm-2 col-form-label"></label>
                                        <img class="showImage1 card-img-top img-fluid" style="object-fit:cover; width: 800px !important;height:200px !important;" src="./assets/images/no_image.jpg" alt="ad_image">
                                    </div>

                                    <button type="submit" name="btn_insert_sp_banner" class="btn btn-info waves-effect waves-linght">Insert New Banner</button>
                                
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