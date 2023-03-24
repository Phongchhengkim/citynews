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
                                    $sql_select = "SELECT * FROM tbl_admin WHERE id=$id_para";
                                    $result=$con->query($sql_select);
                                    while($row=mysqli_fetch_assoc($result)){
                                        echo'
                                            
                                            <form action="" method="post" enctype="multipart/form-data">
                                            <input value="'.$row['id'].'" type="text" id="old_id" name="updateid">
                                            <input value="'.$row['profile'].'" type="text" id="old_profile" name="old_profile">
                                            <input value="'.$row['role'].'" type="text" id="old_role" name="old_role">
                                            <div class="row mb-3">
                                                    <label for="name" class="col-sm-2 col-form-label">Username</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" id="name" name="name" value="'.$row['name'].'" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" id="email" name="email" value="'.$row['email'].'" autocomplete="off">
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
                                                            <option value="">PLEASE CHOOSE USER ROLE</option>
                                                            <option value="employee">EMPLOYEE</option>
                                                            <option value="admin">ADMIN</option>
                                                        </select>
                                                    </div>
                                                </div>
            
            
            
                                                <button type="submit" name="btn_update_user" class="btn btn-info waves-effect waves-linght">Update User</button>
                                            
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

        $('.btn_user_update').click(function(){
            var old_profile = $(this).parents("tr").find("td:eq(4)img").attr("alt");

            $("#old_profile").val(old_profile);
        });
    });
    

    
</script>
