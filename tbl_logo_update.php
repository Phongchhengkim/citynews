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
                                <h4 class="card-title">Logo Update Page</h4><br><br>

                                <?php
                                    $sql_select = "SELECT * FROM tbl_logo WHERE id=$id_para";
                                    $result = $con->query($sql_select);
                                    $row=mysqli_fetch_assoc($result);
                                    echo'
                                        <form action="" method="post" enctype="multipart/form-data">

                                            <input value="'.$row['id'].'" type="hidden" id="old_id" name="updateid">
                                            <input value="'.$row['logo'].'" type="hidden" id="old_logo" name="old_logo">
                                            <div class="row mb-3">
                                                <label for="image" class="col-sm-2 col-form-label">Logo</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control image1" type="file" id="image" name="logo">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="image" class="col-sm-2 col-form-label"></label>
                                                <img class="showImage1 card-img-top img-fluid" style="object-fit:cover; width: 200px !important;height:95px !important;" src="./assets/images/no_image.jpg" alt="ad_image">
                                            </div>

                                            <button type="submit" name="btn_update_logo" class="btn btn-info waves-effect waves-linght">Update Logo</button>
                                        
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

        $(".btn_update_logo").click(function(){
            var old_logo = $(this).parents("tr").find("td:eq(1)img").attr("alt");
            $("#old_logo").val(old_logo);
        })
    });


</script>