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
                                <h4 class="card-title">About us Update Page</h4><br><br>

                                <?php
                                    $sql_select = "SELECT * FROM tbl_social_link WHERE id=$id_para";
                                    $result = $con->query($sql_select);
                                    $row=mysqli_fetch_assoc($result);
                                    
                                    echo'
                                        <form action="" method="post" enctype="multipart/form-data">
                                        <input value="'.$row['id'].'" type="hidden" id="old_icon" name="updateid">
                                            <div class="row mb-3">
                                                <label for="image" class="col-sm-2 col-form-label">Icon</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control image1" type="file" id="" name="icon">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="image" class="col-sm-2 col-form-label"></label>
                                                <img class="showImage1 card-img-top img-fluid" style="object-fit:cover; width: 200px !important;height:95px !important;" src="./assets/images/no_image.jpg" alt="ad_image">
                                                <input value="'.$row['icon'].'" type="hidden" id="old_icon" name="old_icon">
                                            </div>

                                            <div class="row mb-3">
                                                <label for="link" class="col-sm-2 col-form-label">Link</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" id="link" value="'.$row['link'].'" name="link">
                                                </div>
                                            </div>

                                        <button type="submit" name="btn_icon_update" class="btn btn-info waves-effect waves-linght">Update Icon</button>
                                    
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
<script>

    $(document).ready(function(){
        $(".image1").change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $(".showImage1").attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });

        $(".btn_update_about_us").click(function(){
            var old_icon = $(this).parents("tr").find("td:eq(1)img").attr("alt");
            var link = $(this).parents("tr").find("td:eq(2)").text();

            $("#old_icon").val();
            $("#update_link").val();
        })
    });

</script>