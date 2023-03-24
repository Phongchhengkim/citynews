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
                                    $sql_select = "SELECT * FROM tbl_news WHERE id=$id_para";
                                    $result=$con->query($sql_select);
                                    while($row=mysqli_fetch_assoc($result)){
                                        echo'
                                            
                                        <form action="" method="post" enctype="multipart/form-data">
                                        <input value="'.$row['id'].'" type="hidden" id="old_id" name="updateid">
                                            <input value="'.$row['banner'].'" type="hidden" id="old_news_banner" name="old_news_banner">
                                            <input value="'.$row['news_img'].'" type="hidden" id="old_news_img" name="old_news_img">

                                            <input value="'.$row['news_type'].'" type="hidden" id="old_news_type" name="old_news_type">

                                        <div class="row mb-3">
                                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" id="title" name="title" value="'.$row['title'].'">
                                            </div>
                                        </div>
    
                                        <div class="row mb-3">
                                            <label for="image" class="col-sm-2 col-form-label">Banner</label>
                                            <div class="col-sm-10">
                                                <input class="form-control image1" type="file" id="image" name="banner">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="image" class="col-sm-2 col-form-label"></label>
                                            <img class="showImage1 card-img-top img-fluid" style="object-fit:cover; width: 200px !important;height:95px !important;" src="./assets/images/no_image.jpg" alt="ad_image">
                                        </div>
    
                                        <div class="row mb-3">
                                            <label for="description" class="col-sm-2 col-form-label">Decription</label>
                                            <div class="col-sm-10">
                                                <textarea  class="advanced" name="description" id="elm1" cols="180" rows="10">'.$row['description'].'</textarea>   
                                            </div>
                                        </div>
    
                                        
                                        <div class="row mb-3">
                                            <label for="image" class="col-sm-2 col-form-label">News Image</label>
                                            <div class="col-sm-10">
                                                <input class="form-control image3" type="file" id="image" name="news_img">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="image" class="col-sm-2 col-form-label"></label>
                                            <img class="showImage3 card-img-top img-fluid" style="object-fit:cover; width: 200px !important;height:95px !important;" src="./assets/images/no_image.jpg" alt="ad_image">
                                        </div>
    
                                        <div class="row mb-3">
                                            <label for="title" class="col-sm-2 col-form-label">News Type</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" name="news_type" aria-label="Default select example">
                                                    <option selected="">Open this select news type</option>
                                                    <option value="ព័ត៌មានថ្មីៗ">ព័ត៌មានថ្មីៗ</option>
                                                    <option value="សង្គម">សង្គម</option>
                                                    <option value="សន្តិសុខ">សន្តិសុខ</option>
                                                    <option value="នយោបាយ">នយោបាយ</option>
                                                    <option value="កីឡា">កីឡា</option>
                                                    <option value="បច្ចេកវិទ្យា">បច្ចេកវិទ្យា</option>
                                                </select>
                                            </div>
                                        </div>
    
                                        <div class="row mb-3">
                                            <label for="writer_name" class="col-sm-2 col-form-label">Writer Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" id="writer_name" name="writer_name" value="'.$row['writer_name'].'">
                                            </div>
                                        </div>
    
                                        <div class="row mb-3">
                                            <label for="image" class="col-sm-2 col-form-label">Writer Profile</label>
                                            <div class="col-sm-10">
                                                <input class="form-control image2" id="image" type="file" name="writer_profile">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="image" class="col-sm-2 col-form-label"></label>
                                            <img class="showImage2 card-img-top img-fluid" style="object-fit:cover; width: 200px !important;height:95px !important;" src="./assets/images/no_image.jpg" alt="ad_image">
                                        </div>
    
                                        <div class="row mb-3">
                                            <label for="date" class="col-sm-2 col-form-label">Date</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="datetime-local" id="date" name="date" value="'.$row['date'].'" placeholder="Please Choose a date and time">
                                            </div>
                                        </div>
    
                                        <button type="submit" name="btn_update_news" class="btn btn-info waves-effect waves-linght">Update News</button>
                                    
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

    $(document).ready(function(){
        $(".image3").change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $(".showImage3").attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });

        $('.btn_newsupdate').click(function(){
            var old_news_banner = $(this).parents("tr").find("td:eq(2)img").attr("alt");
            var old_news_img = $(this).parents("tr").find("td:eq(5)img").attr("alt");
            var old_writer_profile = $(this).parents("tr").find("td:eq(8)img").attr("alt");

            $("#old_news_banner").val(old_news_banner);
            $("#old_news_img").val(old_news_img);
            $("#old_writer_profile").val(old_writer_profile);
        });
    });

</script>
