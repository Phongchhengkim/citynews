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
                                <h4 class="card-title">Update Advertisement Page</h4>

                                <?php
                                    $sql_select = "SELECT * FROM tbl_ads WHERE id=$id_para";
                                    $result=$con->query($sql_select);
                                    while($row=mysqli_fetch_assoc($result)){
                                        echo'
                                            <form action="" method="post" enctype="multipart/form-data">
                                            <input value="'.$row['id'].'" type="hidden" id="old_id" name="updateid">
                                            <input value="'.$row['ads_banner'].'" type="hidden" id="old_ads_banner" name="old_ads_banner">
                                            <input value="'.$row['ads_small'].'" type="hidden" id="old_ads_small" name="old_ads_small">

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

                                                <button type="submit" name="btn_update_ads" class="btn btn-info waves-effect waves-linght">Update Advertisement</button>
                                            
                                            </form>
                                        ';
                                    }
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
<script>

    $(document).ready(function(){
        $(".image1").change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $(".showImage1").attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });

        $(".image2").change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $(".showImage2").attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });

        $('.btn_ads_update').click(function(){
            var old_ads_banner = $(this).parents("tr").find("td:eq(1)img").attr("alt");
            var old_ads_small = $(this).parents("tr").find("td:eq(2)img").attr("alt");

            $("#old_ads_banner").val(old_ads_banner);
            $("#old_ads_samll").val(old_ads_small);
        });
    });
    

    
</script>
